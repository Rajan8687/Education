<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include '_dbconnect.php'; 
    $nameuser=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['text'];
  
    $sql="INSERT INTO `users`(`name`,`phone`,`email`,`message`) values ('$nameuser','$phone','$email','$message')";
    $result=mysqli_query($conn,$sql);
    if($result){
      header("location: index.html");
    }
    else{
       echo 'Error .'.mysqli_error($conn);
    }
}


?>