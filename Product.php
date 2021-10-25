<?php
	include_once "server.php"
?>
<!DOCTYPE html>
<html>
<head>

<title>Product</title>
<link rel="stylesheet" href="Product.css">

</head>

<body>

<h2 style="text-align: center;">Find the right experts for your project, right now.</h2>

<div class="row">
  <div class="column">
    <div class="card">
			<?php
				while($rows=mysqli_fetch_assoc($result1))
				{
			?>
				<img src="photo1.jpg">
				<p><?php echo $rows['Name']; ?></p>
				<?php echo $rows['location']; ?></p>
				<h1><?php echo $rows['field']; ?></p></h1>
				$<?php echo $rows['rate']; ?>/hour</p>
			<?php
				}
			?>
			<?php
				addtocart();
			?>
			
    </div>
  </div>

  <div class="column">
    <div class="card">
		<?php
				while($rows=mysqli_fetch_assoc($result2))
				{
			?>
				<img src="photo2.jpg">
				<p><?php echo $rows['Name']; ?></p>
				<?php echo $rows['location']; ?></p>
				<h1><?php echo $rows['field']; ?></p></h1>
				$<?php echo $rows['rate']; ?>/hour</p>
			<?php
				}
			?>
      
			<?php
				addtocart();
			?>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
		<?php
				while($rows=mysqli_fetch_assoc($result3))
				{
			?>
				<img src="photo3.jpg">
				<p><?php echo $rows['Name']; ?></p>
				<?php echo $rows['location']; ?></p>
				<h1><?php echo $rows['field']; ?></p></h1>
				$<?php echo $rows['rate']; ?>/hour</p>
			<?php
				}
			?>
			<?php
				addtocart();
			?>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
		<?php
				while($rows=mysqli_fetch_assoc($result4))
				{
			?>
				<img src="photo4.jpg">
				<p><?php echo $rows['Name']; ?></p>
				<?php echo $rows['location']; ?></p>
				<h1><?php echo $rows['field']; ?></p></h1>
				$<?php echo $rows['rate']; ?>/hour</p>
			<?php
				}
			?>
			<?php
				addtocart();
			?>
    </div>
  </div>

	
</div>
<script>
	function CartFunction(){
		location.replace("Cart.html")
	}
</script>


</body>
</html>
