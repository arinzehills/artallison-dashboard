<?php

$connect =new PDO("mysql:host=localhost;dbname=artallison",'root', "");
// $errors=array('name'=>'');

    // $data=array(
    //     ':name'=>$_POST["name"],
    //     ':email'=>$_POST["email"],
    //     ':tel'=>$_POST["tel"],
    //     ':address'=>$_POST["addressfd"], 
    //     // ':description'=>$_POST["description"],
    // );
    $data=array(
        'oldpassword'=>$_POST["oldpassword"],
        'password'=>$_POST["newpassword"],
        'cpassword'=>$_POST["cpassword"],
        // ':description'=>$_POST["description"],
    );

    // if(empty($_POST["name"])){
    //     $errors['name']='Please enter at least the email input field';
    // }   
    // if(array_filter($errors)){
    //     $comma_separated =$errors['name'] ;
    //     echo "<div class='success'
    //             style='background:var(--danger);padding:1rem;border-radius:10px'>
    //             $comma_separated 
    //             </div>";
    // }else{  

        $query="
        SELECT * FROM user ";
        
        $statement =$connect->prepare($query);
            $statement->execute();
         $result = $statement->fetchAll();
        // $result =$this->db->get('about_data');;
        // print_r($result[0]);
        if($result[0]> 1){
            //data exists   
            $query="
                UPDATE user
                
                SET password=newpassword
                ";
            $statement =$connect->prepare($query);
            $statement ->execute($data);
            
            echo '<div class="success"
                style="background:#41f1b6;padding:1rem;border-radius:10px"
            >Data Updated successfully</div>';

        }else{
            $query="
                INSERT INTO user
                (password) VALUES(newpassword)
                ";
            $statement =$connect->prepare($query);
            $statement ->execute($data);

        echo '<div class="success"
            style="background:#41f1b6;padding:1rem;border-radius:10px"
        >Data saved successfully</div>';
        }
    // }
  
    

?>