<?php
$con=mysqli_connect('localhost','root','','ajax');
$username=$_POST['name'];
$email=$_POST['email'];
$state=$_POST['s1'];
$city=$_POST['s2'];
$q="insert into insertdataajax(username,email,state,city)values('$username','$email','$state','$city')";
mysqli_query($con,$q);
?>