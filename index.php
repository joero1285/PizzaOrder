<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pizza Planet</title>
<link rel="stylesheet" type="text/css" href="pizza.css" />
<style type="text/css">
 body{background-color:#06C;
 }
 table{text-align:center;}
 
 label span{float:left;
 width:5em;}
 

body{background-image:url('pizza.jpg');
background-attachment:fixed;
width:inherit;
height:auto;
background-repeat:no-repeat

}

 
</style>

<script type="text/javascript">

function validateForm()
{ 
var x=document.forms["pizzaForm"]["firstName"].value
	if (x==null || x=="")
{
	
	alert("You must fill out your name information");
	return false;
}
var x=document.forms["pizzaForm"]["lastName"].value
if (x==null || x=="")
{
	alert("You must fill out your last name.");
	return false;
}
var x=document.forms["pizzaForm"]["address"].value
if (x==null || x=="")
{
	alert("You must fill out your address.");
	return false;
}
var x=document.forms["pizzaForm"]["city"].value
if (x==null || x=="")
{
	alert("You must enter a city");
	return false;
}
var x=document.forms["pizzaForm"]["zip"].value
if (x==null || x=="")
{
	alert("You must enter a zip code");
	return false;

}


  var x=document.forms["pizzaForm"]["email"].value
  var atpos=x.indexOf("@");
  var dotpos=x.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
    {
    alert("Not a valid e-mail address");
    return false;
    }
  }

</script>


 
</head>

<body class="twoColFixLtHdr">
<div id="header"  ><img src="pizzaPlanetLogo.jpg" width="653" height="364" /></div>
<div id="mainContent">

<div id="container">
<br  />
<br  />
<form action="pizzaResults.php" name="pizzaForm" method="post" onsubmit="return validateForm()">
  
  
  <label for="firstName"><span>First Name</span></label>
  <input name="firstName" type="text" maxlength="12" /><br  />
  
  
  <label for="lastName"><span>Last name:</span></label>
  <input type="text" name="lastName" maxlength="15" /><br  />
  <label for="address"><span> Address:</span></label>
  <input type="text" name="address" maxlength="30" /><br  />
  
  <label for="city"><span>City:</span></label>
  <input type="text" name="city"  maxlength="15"/><br  />
  
  <label for="State"><span>State:</span></label>
  <select name="State" size="1">
    <option value="Alabama">Alabama</option>
    <option value="Alaska">Alaska</option>
    <option value="Arizona">Arizona</option>
    <option value="Arkansas">Arkansas</option>
    <option value="California">California</option>
    <option value="Colorado">Colorado</option>
    <option value="Connecticut">Connecticut</option>
    <option value="Delaware">Delaware</option>
    <option value="Florida">Florida</option>
    <option value="Georgia">Georgia</option>
    <option value="Hawaii">Hawaii</option>
    <option value="Idaho">Idaho</option>
    <option value="Illinois">Illinois</option>
    <option value="Indiana">Indiana</option>
    <option value="Iowa">Iowa</option>
    <option value="Kansas">Kansas</option>
    <option value="Kentucky">Kentucky</option>
    <option value="Louisiana">Louisiana</option>
    <option value="Maine">Maine</option>
    <option value="Maryland">Maryland</option>
    <option value="Massachusetts">Massachusetts</option>
    <option value="Michigan">Michigan</option>
    <option value="Minnesota">Minnesota</option>
    <option value="Mississippi">Mississippi</option>
    <option value="Missouri">Missouri</option>
    <option value="Montana">Montana</option>
    <option value="Nebraska">Nebraska</option>
    <option value="Nevada">Nevada</option>
    <option value="New Hampshire">New Hampshire</option>
    <option value="New Jersey">New Jersey</option>
    <option value="New Mexico">New Mexico</option>
    <option value="New York">New York</option>
    <option value="North Carolina">North Carolina</option>
    <option value="North Dakota">North Dakota</option>
    <option value="Ohio">Ohio</option>
    <option value="Oklahoma">Oklahoma</option>
    <option value="Oregon">Oregon</option>
    <option value="Pennsylvania">Pennsylvania</option>
    <option value="Rhode Island">Rhode Island</option>
    <option value="South Carolina">South Carolina</option>
    <option value="South Dakota">South Dakota</option>
    <option value="Tennessee">Tennessee</option>
    <option value="Texas">Texas</option>
    <option value="Utah">Utah</option>
    <option value="Vermont">Vermont</option>
    <option value="Virginia">Virginia</option>
    <option value="Washington">Washington</option>
    <option value="West Virginia">West Virginia</option>
    <option value="Wisconsin">Wisconsin</option>
    <option value="Wyoming">Wyoming</option>
  </select><br  />
  <label for="zip"><span>Zip Code:</span></label>
  <input type="text" name="zip"/><br />
  <label for="email"><span>E-Mail:</span></label>
  <input type="text" name="email"/><br />
  
  
  
  <div>
  <h2>Method of Payment</h2>
  <label for="cash">
<input type="radio" name="Payment" value="Cash"  />
Cash</label><br  />
  
  <label for="Check">
<input type="radio" name="Payment" value="Check"  />
Check</label><br  />
  
  <label for="creditCard">
<input type="radio" name="Payment" value="CreditCard"  />
Credit Card</label><br  />
  
  <div>
    <h2>Toppings</h2>
    <p>
      <label for="pepperoni">
     <input type="checkbox" name="Toppings[]" value="pepperoni"  />
     Pepperoni</label>
      <br />
      <label for="sausage">
     <input type="checkbox" name="Toppings[]" value="sausage"  />
     Sausage</label>
      <br />
      <label for="bacon">
     <input type="checkbox" name="Toppings[]" value="bacon"  />
     Bacon</label>
      <br />
      <label for="geenOnions">
     <input type="checkbox" name="Toppings[]" value="green onions"  />
     Green Onions</label>
      <br />
      <label for="olives">
     <input type="checkbox" name="Toppings[]" value="olives"  />
     Olives</label>
      <br />
      <label for="onions">
     <input type="checkbox" name="Toppings[]" value="onions" />
     Onions</label>
      <br />
      <label for="tomato">
     <input type="checkbox" name="Toppings[]" value="tomato"  />
     Tomato</label>
      <br />
      <label for="mushroom">
     <input type="checkbox" name="Toppings[]" value="mushroom" />
     Mushroom</label>
      <br />
      <label for="pineapple">
     <input type="checkbox" name="Toppings[]" value="pineapple" />
     Pineapple</label>
      <br />
      </p>
    </div>
  
  <div>
  <h2> Size</h2>
  <p>
    <label for="small">
     <input type="radio" name="pizzaSize" value="small" id="pizzaSize_0" />
     Small</label>
    <br />
    <label for="medium">
     <input type="radio" name="pizzaSize" value="medium" id="pizzaSize_1" />
     Medium</label>
    <br />
    <label for="large">
     <input type="radio" name="pizzaSize" value="large" id="pizzaSize_2" />
     Large</label>
    <br />
    <label for="jumbo">
     <input type="radio" name="pizzaSize" value="jumbo" id="pizzaSize_3" />
     Jumbo</label>
    <br />
    </p>
  <div>
  <h2>Sides</h2>
<p>
   <label for="dessertPizza">
     <input type="checkbox" name="sides[]" value="Dessert Pizza"  />
     Dessert Pizza</label>
   <br />
   <label for="nachos">
     <input type="checkbox" name="sides[]" value="Nachos"  />
     Nachos</label>
   <br />
   <label for="twoLiter">
     <input type="checkbox" name="sides[]" value="Pepsi 2 Liter"  />
     Pepsi 2 Liter</label>
   <br />
   <label for="cokeLiter">
     <input type="checkbox" name="sides[]" value="Coke 2 Liter onions"  />
     Coke 2 Liter</label>
   <br />
   <label for="Alfredo">
     <input type="checkbox" name="sides[]" value="Fettucini Alfredo"  />
     Fettucini Alfredo</label>
   <br />
  </p>
  </div>

<?php

ob_start();


if(!$_POST['submit']){
    echo "<form method=\"post\" action=\"captcha.php\">\n";
    echo "<table border=\"0\" cellspacing=\"3\" cellpadding=\"3\">\n";
    echo "<tr><td>Please type the character you see below into the box</td></tr>\n";
    echo "<tr><td align=\"center\"><img src=\"image.php\"></td></tr>\n";
    echo "<tr><td align=\"right\"><input type=\"text\" name=\"image\"></td></tr>\n";
    echo "<tr><td align=\"right\"><input type=\"submit\" name=\"submit\" value=\"Check CAPTCHA\"></td></tr>\n";
    echo "</table></form>\n";
}else {
    echo $image = $_POST['image'];
    
    if($image == $_SESSION['string']){
        echo "<b>Successful</b>\n";
    }else {
        echo "<em>Failed</em>\n";
    }
}

ob_end_flush();
?>
 <input name="Place Order" type="submit" />
  <img src="/pizzaCaptcha.php" />  
</form>
</div>
</div>

</body>
</html>