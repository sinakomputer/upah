<?php
  include("server.php")

?>

<?php
				while($rows=mysqli_fetch_assoc($result1))
				{
			?>
				<img src="<?php echo base64_encode($rows['photo']);?>" alt="">
				<p><?php echo $rows['Name']; ?></p>
				<?php echo $rows['location']; ?></p>
				<h1><?php echo $rows['field']; ?></p></h1>
				$<?php echo $rows['rate']; ?>/hour</p>
			<?php
				}
			?>