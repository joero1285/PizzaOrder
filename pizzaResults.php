
<?php require_once('validation.php');?>
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
background-repeat:no-repeat;

}
</style>
</head>

<?php
/*
 * Joe Rozek
 * 3/29/11
 *
 *
 * Get the user input from the form
 */

$toppings=$_REQUEST['toppings'];
$name=$_REQUEST['firstName']." ".$_REQUEST['lastName'];

$pizzaSize=$_REQUEST['pizzaSize'];
$sides=$_REQUEST['sides'];
$pizzaPrice=0;
$toppingCost=0;


?>
<body class="twoColFixLtHdr">
<div id="header">
<img src="pizzaPlanetLogo.jpg" width="653" height="364" />
</div>

<div id="mainContent">
<div id="container">

<!--echo out the user input back to the user  -->

Congratulations <?php echo ($name) ?>! <br />
We will deliver your order to:<br  />
<?php echo ($address) ?><br  />
<?php echo ($city)?><br />
<?php echo ($state)?><br  />
<?php echo ($zip)?><br />
You placed an order for a: <?php echo $pizzaSize?> pizza.<br />
Your method of payment is <?php echo $_REQUEST['Payment'];?>.<br  />


<?php
/*
 * determine the cost of the user's pizza
 */
 if ($size=="small"){
echo("Your pizza costs: $".$pizzaPrice=8.00."<br />");
}
elseif ($size=="medium"){
echo("Your pizza costs: $".$pizzaPrice=10.00."<br />");
}elseif ($size=="large"){
echo("Your pizza costs: $".$pizzaPrice=12.00."<br />");
}else{ echo("Your pizza costs: $".$pizzaPrice=15.00."<br />");
}
/*
 * Determine how many toppings the user has and how much their cost is
 */
  $toppings = $_REQUEST['Toppings'];
  if(empty($toppings)) 
  {
    echo("You didn't select any toppings.");
  } 
  else 
  {
    $N = count($toppings);

    echo("You selected $N topping(s): <br />");
    for($i=0; $i < $N; $i++)
    {
      echo($toppings[$i] . " "."<br />");
    }
  }
  /*
   * Declare the toppingCost and find out how much the total is
   */
  $toppingCost=($N*.25);
  
 /*
  * echo it out to the user
  */
  echo("Your cost for toppings is: $".$toppingCost);
  
  
	  
?>
<br  />
<?php
/*
 * find out what and how many sides are ordered
 */
  $sides = $_REQUEST['sides'];
  if(empty($sides)) 
  {
    echo("You didn't select any sides.");
  } 
  else 
  {
    $C = count($sides);

    echo("You selected $C sides(s):<br /> ");
    for($i=0; $i < $C; $i++)
    {
      echo($sides[$i] . "<br /> ");
    }
  }
 
  
  $sidesCost=($C*2.00);
 
  $pizzaCost=$toppingCost+$sidesCost+$pizzaPrice;
  
  echo("Your cost for sides is $".$sidesCost."<br />");
  echo("Your total cost is : $".$pizzaCost);

//implement swift mailer
  require_once 'swift_required.php';

$smtp = Swift_SmtpTransport::newInstance('smtp.host.tld', 25)
  ->setUsername('joero1285@gmail.com ')
  ->setPassword('makemoney1');

$mailer = Swift_Mailer::newInstance($smtp);

$message = Swift_Message::newInstance('Your Pizza Order');
$message
  ->setTo($email)
  ->setFrom(array('joero1285@gmail.com' => 'Joe Rozek'))
 
  ->setBody('Congratulations on your purchase your order should be their within the next 45 minutes.<br />
			You ordered a $size pizza with $toppings and a $sides.'
  );
  
if ($mailer->send($message))
{
  echo "Message sent!";
}
else
{
  echo "Message could not be sent.";
}

?>

  </div>
  </div>
</body>
</html>

