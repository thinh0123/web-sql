<p>Liên hệ</p>
<?php
	$sql_lh = "SELECT * FROM lien_he WHERE id=1";
	$query_lh = mysqli_query($mysqli,$sql_lh);
?>

	<?php
	 	while($dong = mysqli_fetch_array($query_lh)) {
	 	?>
 			<p><?php echo $dong['thongtinlienhe'] ?></p>
	  	
	  <?php 
		}
	  ?>


