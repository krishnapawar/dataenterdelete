<?php
include'header.php';
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
header('location:/admin-show.php');
}
}
?>