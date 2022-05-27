

<?php 
    include "db.php";
    session_start();

    
  function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
  $visitors_ip=getRealIpAddr();
//   echo 'visitors_ip'.$visitors_ip;
  $query ="
  SELECT * From visitors"
  ;
        $statement =$connect->prepare($query);
            $statement->execute();
         $visitors = $statement->fetchAll();
          // print_r(count($result));
        //   echo 'dsadsa'.count($result);
   
    // if(isset($_SESSION['views']))
    //     $_SESSION['views'] = $_SESSION['views']+1;
    // else
    //     $_SESSION['views']=1;
          
    // echo"views = ".$_SESSION['views'];
    // //   $query ='SELECT * From visitors;

      
    ?>