<!DOCTYPE html>
<html>
<body>
<?php
$link = mysqli_connect("localhost","root","","join")or die (mysql_error());
mysqli_select_db($link,"join")or die (mysql_error());
print($_POST['email']);
echo "h";
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];
$qualification = $_POST['qualification'];
$age = $_POST['age'];
$insert="insert into reg values('$firstName','$lastName','$gender','$email','$address','$qualification','$age')";
$add_memeber=mysqli_query($link,$insert)or die("query failed");
print($add_memeber);
mysqli_close($link);
?>
<form action="SOCIAL SPOTLIGHT.html" method="POST">
<h1>Joined</h1>
<input type="submit" value="Click to go back"/>
</form>
</body>
</html>