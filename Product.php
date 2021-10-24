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
      <img src="photo1.jpg" alt="">
      <p>Raymond Ray</p>
      <p>Toronto, Canada</p>
			<h1>Copywriting</h1>
			<p>$15/hour</p>
			<?php
				addtocart();
			?>
			
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="photo2.jpg" alt="">
      <p>Jane Grey</p>
      <p>Maldives</p>
			<h1>Rooftop Repair</h1>
			<p>$67/hour</p>
			<?php
				addtocart();
			?>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="photo3.jpg" alt="">
      <p>Rudolp Stein</p>
      <p>Batu Kawan, Penang</p>
			<h1>Plumbing Works</h1>
			<p>$77/hour</p>
			<?php
				addtocart();
			?>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="photo4.jpg" alt="">
      <p>Benjamina Button</p>
      <p>Kuala Lumpur</p>
			<h1>English Tutor</h1>
			<p>$100/hour</p>
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
