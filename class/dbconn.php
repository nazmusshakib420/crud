<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "class";
$conn = mysqli_connect($server,$user,$password,$db);
if($conn){

}else{
    echo 'Not Connected';
}

