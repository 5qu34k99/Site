<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Form Information</title>
	<style type="text/css">
	  body {
		     font-family: Verdana, sans-serif;
		     background-color:#E8E595;
		     color:#263939;
		   }
	  table {width:80%}
	  th {background-color:#40627C;}
	  td {border-style:solid; border-color:#40627C;}
	  td.left {width:35%;}
	</style>
</head>

<body>
	
	<h1>Information received by this script</h1>
	<table>
		<tr>
			<th colspan="2">Server environment variables</th>
		</tr>
		<tr>
			<td>Your IP address</td>
			<td><?php echo($_SERVER['REMOTE_ADDR'])?></td>
		</tr>
		<tr>
			<td>User agent</td>
			<td><?php echo($_SERVER['HTTP_USER_AGENT'])?>
		</tr>
		<tr>
			<td>URI requested</td>
			<td>http://<?php echo($_SERVER['HTTP_HOST']);echo($_SERVER['REQUEST_URI'])?></td>
		</tr>
		<tr>
			<td>Request method</td>
			<td><?php echo($_SERVER['REQUEST_METHOD'])?></td>
		</tr>
		<tr>
			<th colspan="2">Form variables</th>
		</tr>
		<?php
		  if($_SERVER['REQUEST_METHOD'] == 'GET') {
			$vars = $_GET;
		  } elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
			$vars = $_POST;
		  }
		  foreach($vars as $key => $value) {
		?>
		<tr>
			<td><?php echo($key)?></td>
			<td><?php echo($value)?></td>
		</tr>
		<?php } ?>
	</table>


</body>
</html>
