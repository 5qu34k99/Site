<!-- Author: Amira Chtourou
  Date:		 7/18/2011
  File:		 chtourouOrder.php
  Purpose: FINAL PROJECT
-->
<html>
<head>
	<title>Mira's Books Order Form</title>
	<link rel="stylesheet" type="text/css" href="css/books.css" title="stylesheet" />
</head>

<body>
<div id="container">
<div id="banner">
<h1>Mira's Books</h1>
</div>

<div id="content">
<?php
	//get order info
	  $qty1 = $_REQUEST['qty1'];
	  $price1 = $_REQUEST['price1'];
	  $title1 = $_REQUEST['title1'];
	  
	  $qty2 = $_REQUEST['qty2'];
	  $price2 = $_REQUEST['price2'];
	  $title2 = $_REQUEST['title2'];
	  
	  $qty3 = $_REQUEST['qty3'];
	  $price3 = $_REQUEST['price3'];
	  $title3 = $_REQUEST['title3'];
	
	//get customer info
	  $firstName = $_REQUEST['firstname'];
	  $lastName = $_REQUEST['lastname'];
	  $email = $_REQUEST['email'];
	
	//calculate total per title
	  $total1 = $qty1 * $price1;
	  $total2 = $qty2 * $price2;
	  $total3 = $qty3 * $price3;
	
	//calculate order total and grand total with PA sales tax
	  $orderTotal = $total1 + $total2 + $total3;
	  $tax = $orderTotal *.06;
	  $grandTotal = $orderTotal + $tax;
	
	  $dataValid = true;
	  $allOrders = $qty1 + $qty2 + qty3;
	  
	  if ( empty($firstName) || empty($lastName) || empty($email) )
	     $dataValid = false;
	  
	  if ($allOrders == 0)
	  	 $dataValid = false;
	  	 
	  if ($dataValid == false)
	    print("<p>Sorry, there is an <strong>error</strong> with your order submission.</p>");
	  if ( empty($firstName) )
	    print("<p>Please go back and provide your first name.</p>");
	  if ( empty($lastName) )
	    print("<p>Please go back and provide your last name.</p>");
	  if ( empty($lastName) )
	  	print("<p>Please go back and provide your email.</p>");
	  if ($allOrders == 0)
	  	print("<p>You haven't ordered anything. Please go back if you wish to place an order.</p>");
	  
	  if ($dataValid == true)
	  	 {$salesFile = fopen("sales.txt", "a");
	  	 fputs($salesFile, "$firstName,$lastName,$email,$title1,$qty1,$price1,$title2,$qty2,$price2,$title3,$qty3,$price3,$orderTotal,$tax,$grandTotal\n");
		 fclose($salesFile);
	   	 print("<h2>$firstName, thank you for shopping at <i>Mira's Books</i> today!</h2><h3>Here is a summary of your order</h3>
	  		    <table><tr><th>Book</th><th>Quantity</th><th>Price</th></tr><tr><td>$title1</td><td><i>$qty1</i></td><td>$$total1</td></tr><tr><td>$title2</td><td><i>$qty2</i></td><td>$$total2</td></tr><tr><td>$title3</td><td><i>$qty3</i></td><td>$$total3</td></tr>
	  		 <tr><th colspan=\"2\">Subtotal</th><td>$".number_format($orderTotal, 2)."</td><tr><th colspan=\"2\">Sales Tax</th><td>$".number_format($tax, 2)."</td> <tr><th colspan=\"2\">Grand Total</th><td><strong>$".number_format($grandTotal, 2)."</strong></td></table>");	
	  	 }	
	?>
	
</div>

<div id="footer">
<h5>This page last modified: 7/18/11</h5>
<h5>Customer Support: <a href="mailto:ajc10@pct.edu">ajc10@pct.edu</a></h5>
<h5>© Amira Chtourou BWM160-90</h5>
</div>
</div>
</body>
</html>


 