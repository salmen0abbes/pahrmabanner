<?php
$con = mysqli_connect('localhost','root','','contact');
if(!$con){
    echo ' Network problem';
}
?>
<?php

if(isset($_POST['sub'])){

   
    $from = mysqli_real_escape_string ($con,$_POST["Mail"]);
    $name = mysqli_real_escape_string ($con,$_POST["namee"]);
    $subjecte = mysqli_real_escape_string ($con,$_POST["subject"]);
    $message = mysqli_real_escape_string ($con,$_POST["message"]);
    $sql = "INSERT INTO received (Mail,name,subject,message) VALUES ('$from','$name','$subjecte','$message')";
    $result = mysqli_query($con,$sql);
 if($result){
    header ('location: message-sent.html');}
    else{
        echo 'fail';
    }
    }
    

    
?>