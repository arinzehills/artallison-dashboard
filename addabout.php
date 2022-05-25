<?php

$connect =new PDO("mysql:host=localhost;dbname=artallison",'root', "");
$errors=array('biography'=>'','statement'=>'',);

    $data=array(
        ':biography'=>$_POST["biography"],
        ':statement'=>$_POST["statement"],
    );

    if(empty($_POST["biography"])){
        $errors['biography']='Need to input some details';
    }
    if(empty($_POST["statement"])){
        $errors['statement']='Need to input some details';
    }
    if(array_filter($errors)){
        echo '<div class="success"
                style="background:red;padding:1rem;border-radius:10px">
                Please input required details </div>';
    }else{

        $query="
        SELECT * FROM about_data 
        ";
        
        $statement =$connect->prepare($query);
            $statement->execute();
         $result = $statement->fetchAll();
        // $result =$this->db->get('about_data');;
        // print_r($result[0]);
        if($result[0]> 1){
            //data exists
            $query="
                UPDATE about_data
                
                SET biography=:biography, statement=:statement
                ";
            $statement =$connect->prepare($query);
            $statement ->execute($data);


        echo '<div class="success"
            style="background:#41f1b6;padding:1rem;border-radius:10px"
        >Data Updated successfully</div>';
        }else{
            $query="
                INSERT INTO about_data
                (biography,statement) VALUES(:biography,:statement)
                ";
            $statement =$connect->prepare($query);
            $statement ->execute($data);


        echo '<div class="success"
            style="background:#41f1b6;padding:1rem;border-radius:10px"
        >Data saved successfully</div>';
        }
    }
  // if(isset($_POST['submit'])){
  //   echo htmlspecialchars($_POST['biography']);
  // }
//   if(isset($_GET['submit'])){
//     echo $_GET['biography'];
//     echo $_GET['statement'];
//   }  
// echo 'THis must work';

?>