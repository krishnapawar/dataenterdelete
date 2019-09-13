<?PHP
include'header.php';
?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card text-center" >
					<div class="card-body">
						<table class="table ">
							<tr class="table-primary">
								<th>Name</th>
								<th>Contact</th>
								<th>District</th>
								<th>Option</th>
							</tr>
							<?php show(); ?>
						</table>
					</div>
					<div class="card-body">
						<table class="table table-striped">
							
						</table>
					</div>
				</div>
			</div>
		</div>
</html>
<?php

function show(){
    global $con;
	$query="select * from `admin` where GRUOP BY `contact`;";
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
			<td><button class="btn btn-primary" onclick="<?php de(); ?>"> <a href="delete.php?sid=<?php echo $id; ?>" style="color: black;">Delete</a></button></td>
			</tr><?php
		}
	}
	
}

?>
