<?php
$connect =new PDO("mysql:host=localhost;dbname=artallison",'root', "");


    $data=array(
        ':title'=>'$_POST["title"]',
        ':description'=>'$_POST["description"]',
        ':file'=>'dsadsa',
    );
$query="
      INSERT INTO blog
        (title,description,image) VALUES(:title,:description,:file)
        ";
        $statement =$connect->prepare($query);
        $statement ->execute($data);


        echo '<div class="success"
            style="background:#41f1b6;padding:1rem;border-radius:10px"
        >Data saved successfully</div>';