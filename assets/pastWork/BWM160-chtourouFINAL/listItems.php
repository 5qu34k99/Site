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
<h2>Amira Chtourou</h2>
</div>

<div id="content">
<?php
	$salesFile = fopen("sales.txt", "r");
	//i for index number 
	$i = 0;
	$totalSales = 0;
	
	while (!feof($salesFile))
	{
	//read a[nother] record
	//explode, break apart
	//get the total for that record
	$grandTotal [ ] = fgets("$grandTotal")
	//add to total
	$totalSales = $totalSales + $grandTotal
	$i = $i + 1
	//print out table row/data of orders
	print("<tr><td>$firstName</td><td>$lastName</td><td>$email</td><td>$title1</td><td>$qty1</td><td>$price1</td><td>$title2</td><td>$qty2</td><td>$price2</td><td>$title3</td><td>$qty3</td><td>$price3</td><td>$grandTotal</td></tr>")
	}
	//after loop ends print cum. total sales
	print("<tr><td>$totalSales</td></tr>");
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


 