<?php
$con=mysqli_connect("localhost","root","","bd123");
$email=$_POST["email"];
$psw=$_POST["psw"];
$req="insert into table(email,psw)values('$email','$psw');";
$res=mysqli_query($con,$req);
echo("merci");
?>