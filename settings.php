<?php

$connect =new PDO("mysql:host=localhost;dbname=artallison",'root', "");
$errors=array('email'=>'',);

    // $data=array(
    //     ':name'=>$_POST["name"],
    //     ':email'=>$_POST["email"],
    //     ':tel'=>$_POST["tel"],
    //     ':address'=>$_POST["addressfd"], 
    //     // ':description'=>$_POST["description"],
    // );

    // if(empty($_POST["email"])){
    //     $errors['email']='Please enter at least the email input field';
    // }   
    // $comma_separated =$errors['email'] ;
    // if(array_filter($errors)){
    //     echo "<div class='success'
    //             style='background:var(--danger);padding:1rem;border-radius:10px'>
    //             $comma_separated
    //             </div>";
    // }else{  

    //     $query="
    //     SELECT * FROM user 
    //     ";
        
    //     $statement =$connect->prepare($query);
    //         $statement->execute();
    //      $result = $statement->fetchAll();
    //     // $result =$this->db->get('about_data');;
    //     // print_r($result[0]);
    //     if($result[0]> 1){
    //         //data exists   
    //         $query="
    //             UPDATE user
                
    //             SET name=:name,email=:email,tel=:tel,address=:address
    //             ";
    //         $statement =$connect->prepare($query);
    //         $statement ->execute($data);


    //     echo '<div class="success"
    //         style="background:#41f1b6;padding:1rem;border-radius:10px"
    //     >Data Updated successfully</div>';
    //     }else{
    //         $query="
    //             INSERT INTO user
    //             (name,email,tel,address) VALUES(:name,:email,:tel,:address)
    //             ";
    //         $statement =$connect->prepare($query);
    //         $statement ->execute($data);


    //     echo '<div class="success"
    //         style="background:#41f1b6;padding:1rem;border-radius:10px"
    //     >Data saved successfully</div>';
    //     }
    // }
  // if(isset($_POST['submit'])){
  //   echo htmlspecialchars($_POST['biography']);
  // }
//   if(isset($_GET['submit'])){
//     echo $_GET['biography'];
//     echo $_GET['statement'];
//   }  
echo 'THis must work';          

?>