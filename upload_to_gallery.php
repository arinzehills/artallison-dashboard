<?php 

    // if(!is_dir('uploads')){
        
    //     mkdir('./uploads')
    // }   else{
    //     echo ' directo exits'
    // }
    /* define project root directory */
// define('PROJECT_ROOT', dirname(__FILE__));
// /* define file upload directory */
// define('UPLOAD_DIRECTORY', 'uploads/');

// Check file size
if ($_FILES["file"]["size"] > 500000) {
    die("Uploaded file is too large.");
}
$feedBack=array();

if (move_uploaded_file($_FILES["file"]["tmp_name"], 'uploads'.$filename)) {
    // $feedBack[0]=$_FILES['file']['name'];
    // $feedBack[1]="The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";

    echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
} else {
    echo "<div class='success'
    style='background:var(--danger);padding:1rem;border-radius:10px'>
    There is an error while uploading file.
    </div>";
}
// move_uploaded_file($_FILES['file']['temp_name'],'uploads'.$filename);
  
// echo $_FILES['file']['name']
// $uploaded_file = UPLOAD_DIRECTORY . basename($_FILES["file"]["name"]);
//     move_uploaded_file($_FILES['file']['name'],'uploads'.$filename);

    // $filename= $_FILES['file']['name'];

    
    // echo '<div class="success"
    //     style="background:#41f1b6;padding:1rem;border-radius:10px"
    // >File Uploaded successfully</div>';

?>