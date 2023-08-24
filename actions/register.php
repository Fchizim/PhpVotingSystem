<?php
require ('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];
$image=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$std=$_POST['std'];


if($password!==$confirm){
  echo '<script>
  alert("Password do not match");
  window.location="../partials/registration.php"
  </script>';
}
else{
  move_uploaded_file($tmp_name,"../uploads/$image");
  $sql="insert into `userdata` (username,dphone,dpassword,dimage,standard,status,votes) values ('$username','$mobile','$password','$image','$std',0,0)";

  $result=mysqli_query($con,$sql);
  if($result){
    echo '<script>
  alert("Registration successfull");
  window.location="../"
  </script>';
  }else{
    die(mysqli_error($con));
  }
}