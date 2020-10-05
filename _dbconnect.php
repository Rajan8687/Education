<?php
$servername='localhost';
$username='root';
$password='';
$database='usercontact';

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo 'Unable to connect databser '.mysqli_error($conn);
}

?>