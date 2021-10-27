<?php 
	include_once 'header.php'
?>
<style>
		#box1{
			float:left; 
	    width:33.33%;
      height:280px;
		}
		#box2{
			float:left; 
      width:33.3%;
      height:280px;
		}
		#box3{
			float:right;
      width:33.33%;
      height:280px;
		}

		body{
			scrollbar-width: none;	
			overflow-y:scroll;		
		}

		body::-webkit-scrollbar{
			display: none;
		}
</style>



<h1 style="text-align: center;font-size: 80px;">Hire the best.</h1>
<br>
<div class="topnav">
	<div class="topnavlogo">
		<img src="handshake.jpg" width="100%">
	</div>
	<div style="text-align:center;padding-top: 10%;color: whitesmoke;font-size: 50px;">
		<h2>Contracting service</h2>
	</div>
</div>
<br>
<br>
<div id="boxes" style="text-align: center;">
	<div id="box1">
		<h1>Skilled labor</h1>
		<p>Do u need skill labor for your project? We have a network of individuals who can help.</p>
	</div>
	<div id="box2">
		<h1>Consultation</h1>
		<p>Let us offer you a consultation on your next project to ensure it will be done right.</p>
	</div>
	<div id="box3">
		<h1>Get your rates</h1>
		<p>Find the rates that suits your budget from professional contractors on our platform.</p>
	</div>
	<?php 
		include_once("footer.php")
	?>
</div>
</body>
</html>	