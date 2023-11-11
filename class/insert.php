<?php
include 'dbconn.php';


if(isset($_POST['submit'])){
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $phone = mysqli_real_escape_string($conn, $_POST['phones']);


    $insertquery =  "INSERT INTO users ( first_name , last_name , email , gender ,phones)
      VALUES ('$first_name','$last_name','$email','$gender','$phone')";

    $mysqliquery = mysqli_query($conn, $insertquery);
    if($insertquery){

        require 'index.php';
    }else{
        echo 'Not Inserted';
    }
    
}