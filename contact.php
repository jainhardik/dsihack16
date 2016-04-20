<?php

$servername = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($servername,$username,$password);
if (!$con)
  {
  echo "Server not Responding";
  }

if(!mysqli_select_db($con,'myDB'))
{
  echo "Server not Responding";
}

 $tname=$_POST['cd-tname'];
 $coll=$_POST['cd-college'];
 $name1=$_POST['cd-name1']  ;
 $name2=$_POST['cd-name2'];
 $name3=$_POST['cd-name3'];
 $name4=$_POST['cd-name4'];
 $email=$_POST['cd-email'];
 $idea=$_POST['cd-textarea'];

 $sql = "INSERT INTO registrations (Tname,College,Hacker1,Hacker2,Hacker3,Hacker4,Email,Idea)
 VALUES ('$tname','$coll','$name1','$name2','$name3','$name4','$email','$idea')";

 if(!mysqli_query($con,$sql))
 {
   echo "sorry registration failed try again";
 }
 else {
   echo "registration successfull";
 }

 header("refresh:2, url=index.html");
?>
