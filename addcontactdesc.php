<?php

$connect =new PDO("mysql:host=localhost;dbname=artallison",'root', "");
$errors=array('description'=>'',);

    $data=array(
        ':description'=>$_POST["description"],
    );
    print_r( $errors);
    if(empty($_POST["description"])){
        $errors['description']='Need to input some details';
    }
    if(array_filter($errors)){
        echo '<div class="success"
                style="background:red;padding:1rem;border-radius:10px">
                Please input required details </div>';
    }else{

        $query="
        SELECT * FROM contact_description
        ";
        
        $statement =$connect->prepare($query);
            $statement->execute();
         $result = $statement->fetchAll();
        // $result =$this->db->get('about_data');;
        // print_r($result[0]);
        if($result[0]> 1){
            //data exists
            $query="
                UPDATE contact_description
                
                SET description=:description
                ";
            $statement =$connect->prepare($query);
            $statement ->execute($data);


        echo '<div class="success"
            style="background:#41f1b6;padding:1rem;border-radius:10px"
        >Data Updated successfully</div>';
        }else{
            $query="
                INSERT INTO contact_description
                (description) VALUES(:description)
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