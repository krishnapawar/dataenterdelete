<?php
$con=mysqli_connect('localhost','root','','pol');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function phone()
		{
			var cont=document.getElementById('co').Value;
			if (cont=="")
			 {
			 	document.getElementById('t1').innerHTML="please enter  number";
			 	document.getElementById('t1').style.color="red";
			 	return false;
			 }
			 else
			 {
			 	document.getElementById('t1').innerHTML="done";
			 	return true;
			 }
			 if (cont.length != 10) 
			 {
			    document.getElementById('t1').innerHTML="number is only 10 disite";
			    document.getElementById('t1').style.color="red";
			   return false;
			 }
			 else
			 {
			 	document.getElementById('t1').innerHTML="done";
			 	return true;
			 }


		}
	</script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body >