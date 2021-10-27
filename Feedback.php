<?php 
	include_once "header.php"
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>
	Feedback

</title>

</head>
<style>

	table{

		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td,th{

		border:1px green;
		text-align: center;
		padding: 8px;
	}

  	p {text-align: center;}

  	.center{
  		margin: auto;
  		width: 60%;
  		<!-- border: 1px solid #73AD21; -->
  		padding: 10px;
  		text-align: center;
  	}

  	.checked {

  		color: orange;
	}


	* {box-sizing:border-box}

	.slideshow-container {
	  max-width: 1000px;
	  position: relative;
	  margin: auto;
	}

	.prev, .next {
	  cursor: pointer;
	  position: absolute;
	  top: 50%;
	  width: auto;
	  margin-top: -22px;
	  padding: 16px;
	  color: white;
	  font-weight: bold;
	  font-size: 18px;
	  transition: 0.6s ease;
	  border-radius: 0 3px 3px 0;
	  user-select: none;
	}

	.next{
		right: 0;
  		border-radius: 3px 0 0 3px;
	}

	.prev:hover, .next:hover {
  		background-color: rgba(0,0,0,0.8);
	}

</style>

<body>
	

  	<br>
  	<br>
  	<br>
  	<br>

  	<div class="slideshow-container">

  		<div class="center">
	  		<img src="photo1.jpg" width="25%" height="25%">
	  		<p>
	  			Raymond Ray
	    	</p>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<br>
			<br>
	  		<p>
	  			“Excellent, Raymond meets my expectation, will hire her again in the future”
	  			<br>
	  			<br>
				<b>Sameer Khan</b>
				<br>
				<br>
				<br>
				“Been working with her for the three past projects, he delivered them in time”
				<br>
				<br>
				<b>Jackie Chun</b>
	  		</p>
  		</div>

			<br>
			<br><br><br><br>

  		<div class="center">
	  		<img src="photo3.jpg" width="25%" height="25%">
	  		<p>
	  			Rudolp Stein
	    	</p>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<br>
			<br>
	  		<p>
	  			“Project delivered on time”
	  			<br>
	  			<br>
				<b>Armel Kawski</b>
				<br>
				<br>
				<br>
				“Very supportive and listen to customer needs”
				<br>
				<br>
				<b>Lloyd Bate</b>
	  		</p>
  		</div>

  		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
  	</div>	
		<br><br><br><br><br><br>
		<?php 
		include_once "footer.php"
		?>
</body>
</html>