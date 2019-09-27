<?php
	include ('config.php');

	//$id=$_GET['id'];
	$id=$_GET['id'];
	$query="DELETE FROM category WHERE id='$id' ";
	$run=mysqli_query($con,$query);
	if ($run > 0) {
		?>
			<script>
				alert('Data Delete Successfully ...!')
				window.open('index.php','_self')
			</script>
		<?php
	}
	else{
		?>
			<script>
				alert('Error ...!')
				window.open('index.php','_self')
			</script>
		<?php
	}
?>