<?php
  include_once "server.php"
?>

<link rel="stylesheet" href="Cart.css">
<h1 style="text-align: center;">Shopping Cart</h1>
<p>Item(s) in your cart</p>
  

  
<!-- <form action="Cart.php" method="post"> -->
  <table style="width: 80%;">
    <tr>
      <th>Provider</th>     
      <th>Rate</th>        
      <th>Duration(Hour)</th>
      <th>TOTAL</th>
    </tr>
    <tr>      
      <td><img src="photo1.jpg" alt=""></td>
      <?php 	while($rows=mysqli_fetch_assoc($result1)){
        echo "<td>$$rows[rate]/hour</td>";
        }
      ?>
      <td>10
      <!-- <input type="number" name="Duration" id="Duration" placeholder="hours required" style="text-align: center;" value="0"> -->
      </td>
      <td>$150
        <!-- <input class="w3-input w3-border" name="tot_amount" id="tot_amount" type="text" readonly> -->
      </td>
    </tr>
    <br>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <br>
        <br>
        <br>
        <button onclick="Checkout()">CHECKOUT</button></td>

    </tr>
  </table>
<!-- </form> -->
  <br>
  <br><br>
  
  <script>
    function Checkout(){
      location.replace("Payment.php")
    }

    /* function total(value){
      
      var tot_price = 15 * value;
      var divobj = document.getElementById('tot_amount');
      divobj.value = tot_price;

    } */
  </script>