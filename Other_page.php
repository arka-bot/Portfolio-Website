<?php
if(isset($_POST['submit']))
{	
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Message=$_POST['message'];
	
	$host='localhost';
	$user='u760018442_arkabiswas';
	$pass='Arka89@#';
	$dbname='u760018442_arkabiswas';
	
	$conn=mysqli_connect($host,$user,$pass,$dbname);
	$sql="INSERT INTO enquary(Name,Email,Message) value('$Name','$Email','$Message')";
	$result=mysqli_query($conn,$sql);
	if($result){
		//echo "Data inserted successfully";
		header('location:index.php');
	}
	else{
		die(mysqli_error($conn));
	}
}
?>
