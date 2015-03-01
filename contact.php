<?php 
include 'index.html';
$conn=mysql_connect("localhost","root","") or die("can't connect to database");
mysql_select_db("project_data",$conn) or die("database not found");
$name=$_POST['name'];
$mail=$_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['comments'];
$sql="INSERT INTO contact VALUES('$name','$mail','$sub','$msg');";
mysql_query($sql,$conn);
$subject="message";
$message="thank you sending your response";
mail('ravi11305@gmail.com', $subject, $message) or die("can't send");

mysql_close();
?>
