<?php
  include_once "server.php"
?>

<link rel="stylesheet" href="Payment.css">

<body>
  <br>
  <div class="paydiv">
    <br>
    <b style="color:rgb(15, 36, 129);font-size: 150%;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" >
      PAYMENT
    </b>
    <br>
    <table>
      <tr>
        <td><img src="mastercard.png" alt="" width="100" height="60"></td>
        <td><img class="logo" src="visa-us-vector-logo.png" alt=""></td>
        <td><img class="logo" src="american-express-logo.png" alt=""></td>
        <td><img class="logo" src="cirrus.png" alt=""></td>
      </tr>
    </table>
    <p class="p1">CARD NUMBER</p>
    <input type="text" size="58" placeholder="VALID CARD NUMBER" >
    <br>
    <br>
    <div class="expdatecv">
      <div class="expdate">EXPIRY DATE</div>
      <div class="cv">CV CODE</div><br>
      <input class="expdateinput" type="text" placeholder="MM/YY">
      <input class="cvcodeinput" type="text" placeholder="CV"> <br><br><br>
    </div> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="finalpayment">
      <br>
      <b style="color: cornsilk;font-size: 150%;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Final Payment</b>
      <div class="total">
         <b style="color: cornsilk;font-size: 150%;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">RM1400</b>
      </div>  
    </div>
    <br>
    <button type="submit">
      <h1>PAY</h1>
    </button>
    
  </div>
    
    
    
  
</body>
</html>