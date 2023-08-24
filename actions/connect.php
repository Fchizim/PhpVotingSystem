<?php

$con=mysqli_connect("localhost","root","","votinsystem");

if(!$con){
    die(mysqli_error($con));
}

    



// function cleanInput($data){
//     $data = $_POST[$data];
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     $data = trim($data);
//     return $data;
// }