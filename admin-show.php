<?PHP
include'header.php';
?>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card text-center" >
					<div class="card-body">
						<table class="table ">
							<tr class="table-primary">
								<th>Name</th>
								<th>Contact</th>
								<th>District</th>
								<th>Option</th>
							</tr>
							<form method="get">
							<?php show(); ?>
						</form>
						</table>
					</div>
					<div class="card-body">
						<table class="table table-striped">
							
						</table>
					</div>
				</div>
			</div>
		</div>
	
	</div>

		<!--  form show    -->
	

		<div class="container" style="float: right;">
		<div class="row">
			<div class="col-md-4">
		    <div class="card">
		        <div class="card-body">
			<form class="form-group" method="post">
				Enter your name/नाम <input type="text" class="form-control" name="name" placeholder="enter your name/नाम  " required><br>
				Enter your contact/मोबाइल नंबर <input type="number" class="form-control" name="contact" pattern="[6789][0-9]{9}" placeholder="enter only number" required><br>
				Enter your District/जिला<input type="text" class="form-control" name="password" placeholder="enter your District " required><br>
				<input type="submit" class="form-control btn btn-primary" name="submit"><br>
				<span id="t1" ></span>
			</form>
		</div>
	</div>
</div>
</div>
</div>
		   
		
	
	
<!-- form show is end-->
</html>
<?php

function show(){
    global $con;
	$query="select * from `admin`;";
	$run=mysqli_query($con,$query);
	if ($run==true) {
		# code...
		while ($d=mysqli_fetch_assoc($run)) 
		{
			$id=$d['id'];
			$name=$d['name'];
			$contact=$d['contact'];
			$District=$d['password'];
			?>
			<tr><?php
			echo "<td>$name</td>
			<td>$contact</td>
			<td>$District</td>";
			?>
			<td><button class="btn btn-primary" onclick="<?php de(); ?>" > <a href="admin-show.php?sid=<?php echo $id; ?>" style="color: black; text-decoration: none;" > Delete</a ></button></td>
			</tr><?php
		}
	}
	
}


function de()
{
$d=$_REQUEST['sid'];

global $con;
$query="DELETE FROM `admin` WHERE `id` = $d;";
$run=mysqli_query($con,$query);
if ($run==true) 
{
	session_start()
	?>
		<script> 
	        alert("DELETE successefull");
    </script>
<?php
}
}


if (isset($_POST['submit'])) {
	
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$password=$_POST['password'];
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
?>
