<?PHP
include_once'header.php';

?>

<b style="float: right;" id="logout"><i><a href="admin-show.php">Subscriber Detail</a></i></b>


<div class="container">
	<div class="row">
		<div class="col-md-4">
		        <div class="card-body">
			<form class="form-group"  method="post">
				Enter your name/नाम <input type="text" id="na" class="form-control" name="name" placeholder="enter your name/नाम  " required><br>
				Enter your contact/मोबाइल नंबर <input type="text" class="form-control" name="contact" id="co" pattern="^\d{10}$" required placeholder="enter only 		    <div class="card">
number" ><br>
				Enter your District/जिला<input type="text" class="form-control" name="password" placeholder="enter your District " required><br>
				<input type="submit" class="form-control btn btn-primary" id="sub" name="submit"><br>
				<span id="t1" ></span>
			</form>
		</div>
		       </div>
		   </div>
		
	</div>
	
</div>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
	
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$password=$_POST['password'];

	$q="select*from `admin` where `contact`='$contact'";
	$r=mysqli_query($con,$q);
	$row=mysqli_num_rows($r);

	if ($row==true) {
?>
		<script> 
	        document.getElementById('t1').innerHTML="Your are already Subscribed";
	        document.getElementById('t1').style.color="red";
    </script>
<?php
		# code...
	}
	else
	{
	$query="INSERT INTO `admin`(name, contact, password) VALUES('$name','$contact','$password') ";
	$run=mysqli_query($con,$query);
	if ($run=true) {
?>
		<script> 
	        document.getElementById('t1').innerHTML="Subscribed successfully";
	        document.getElementById('t1').style.color="green";
    </script>
<?php
	}
	else
	{
	?>
		<script> 
	        document.getElementById('t1').innerHTML="some think Error";
	        document.getElementById('t1').style.color="red";
    </script>
<?php	
	}
}
}
?>