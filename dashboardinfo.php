

<?php 
    include "db.php";
   
  $gallery_query ="
  SELECT * From gallery_data"
  ;
  $user_query ="
  SELECT * From user"
  ;             

            //for gallery
            $statement =$connect->prepare($gallery_query);
            $statement->execute();
            $galleryrows = $statement->fetchAll();
            $arts_in_gallery=count($galleryrows);

            //for users
            $statement =$connect->prepare($user_query);
            $statement->execute();
            $userrows = $statement->fetchAll();
            $num_of_users=count($userrows);
            
            //for contact info
            $contact_info_query ="
            SELECT * From contact_info"
            ;  
            $statement =$connect->prepare($contact_info_query);
            $statement->execute();
            $contactinforows = $statement->fetchAll();
            $contactemail=$contactinforows[0]['email'];
            $contacttel=$contactinforows[0]['tel'];
            $contactaddress=$contactinforows[0]['address'];
        //   print_r($contactinforows[0]['email']);
        //   print_r($contactinforows[0]['tel']);
        //   print_r($contactinforows[0]['address']);


          //for contact info
          $contact_info_query ="
          SELECT * From contact_description"
          ;  
          $statement =$connect->prepare($contact_info_query);
          $statement->execute();
          $contactdesrows = $statement->fetchAll();
          $contactdes=$contactdesrows[0]['description'];
        // print_r($contactdesrows[0]['description']);
        //   echo 'dsadsa'.count($result);
   
    // if(isset($_SESSION['views']))
    //     $_SESSION['views'] = $_SESSION['views']+1;
    // else
    //     $_SESSION['views']=1;
          
    // echo"views = ".$_SESSION['views'];
    // //   $query ='SELECT * From visitors;

      
    ?>