<?php
$connect =new PDO("mysql:host=localhost;dbname=artallison",'root', "");

    if(!file_exists('uploads')){
            
        mkdir('uploads');
    } 
    // Check file size
    if ($_FILES["file"]["size"] > 5000000) {
        die("Uploaded file is too large.");
    }
    $filename= $_FILES['file']['name'];
    $data=array(
        ':title'=>$_POST["title"],
        ':description'=>$_POST["description"],
        ':file'=>$_FILES['file']['name'],
    );
         echo '<div class="success"
            style="background:#41f1b6;padding:1rem;border-radius:10px"
        >Data saved successfully</div>';

        if (move_uploaded_file($_FILES["file"]["tmp_name"], 'uploads/'.$filename)) {
             $query="
            INSERT INTO blog
            (title,description,image) VALUES(:title,:description,:file)
            ";
            $statement =$connect->prepare($query);
            $statement ->execute($data);
            echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
        } else {
             echo "<div class='success'
            style='background:var(--danger);padding:1rem;border-radius:10px'>
            There is an error while uploading file.
            </div>";
        }