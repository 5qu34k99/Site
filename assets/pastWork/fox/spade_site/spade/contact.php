<?php
if( isset($_POST)){

	//form validation vars
	$formValid = true;
	$errors = array();
	
	//sumbission data
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = date('m/d/Y');
	$time = date('H:i:s');
	
	//form data 
	$email = $_POST['email'];
	$name1 = $_POST['name1'];
	$name2 = $_POST['name2'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$phonea = $_POST['phonea'];
	$phoneb = $_POST['phoneb'];
	$phonec = $_POST['phonec'];
	$cell1a = $_POST['cell1a'];
	$cell1b = $_POST['cell1b'];
	$cell1c = $_POST['cell1c'];
	$cell2a = $_POST['cell2a'];
	$cell2b = $_POST['cell2b'];
	$cell2c = $_POST['cell2c'];
	$whenContact = $_POST['whenContact'];
	$interestedIn = $_POST['interestedIn'];
	$otherInterestedIn = $_POST['otherInterestedIn'];
	$whenInterested = $_POST['whenInterested'];
	$nextProject = $_POST['nextProject'];
	$estimate = $_POST['estimate'];
	$financing = $_POST['financing'];
	$referral = $_POST['referral'];
	$otherReferral = $_POST['otherReferral'];
	$comments = $_POST['comments'];

	

//validate form data
	//validate email address is not empty
	if(empty($email)){
		$formValid = false;
		$errors[] = "You have not entered an email address";
	//validate email address is valid
	}
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$formValid = false;
			$errors[] = "You have not entered a valid email address";
		}
	
	//validate name is not empty
	if(empty($name1)){
		$formValid = false;
		$errors[] = "You have not entered Name 1";
	}
	
	//validate name is not empty
	if(empty($name2)){
		$formValid = false;
		$errors[] = "You have not entered Name 2";
	}
	
	//validate address is not empty
	if(empty($address)){
		$formValid = false;
		$errors[] = "You have not entered an address";
	}
	
	//validate home phone is not empty
	if(empty($phonea) || empty($phoneb) || empty($phonec)){
		$formValid = false;
		$errors[] = "You have not entered a home phone number or it is incomplete";
	}
	
	
	//send email if all is ok
	if($formValid==true){
	$headers = "From: inquiry@SPADE_Concrete.com" . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
	$emailbody = "	<table style=\"text-align:left;\">
						<tr>
							<th colspan=\"3\">SPADE Concrete Inquiry
							</th>
						</tr>
						<tr>
							<th>Email:
							</th>
							<td>$email
							</td>
						</tr>
						<tr>
							<th>Name 1:
							</th>
							<td>$name1
							</td>
						</tr>
						<tr>
							<th>Name 2:
							</th>
							<td>$name2
							</td>
						</tr>
						<tr>
							<th>Address:
							</th>
							<td>$address
							</td>
						</tr>
						<tr>
							<th>City:
							</th>
							<td>$city
							</td>
						</tr>
						<tr>
							<th>State:
							</th>
							<td>$state
							</td>
						</tr>
						<tr>
							<th>Zip:
							</th>
							<td>$zip
							</td>
						</tr>
					  	<tr>
							<th>Home Phone:
							</th>
							<td>($phonea) $phoneb - $phonec
							</td>
						</tr>
						<tr>
							<th>Cell Phone 1:
							</th>
							<td>($cell1a) $cell1b - $cell1c
							</td>
						</tr>
						<tr>
							<th>Cell Phone 2:
							</th>
							<td>($cell2a) $cell2b - $cell2c
							</td>
						</tr>
						<tr>
							<th>Best time to call:
							</th>
							<td>$whenContact
							</td>
						</tr>
						<tr>
							<th>Interested in:
							</th>
							<td>$interestedIn
							</td>
							<td colspan=\"2\">$otherInterestedIn
							</td>
						</tr>
						<tr>
							<th>Want to have concrete work done in:
							</th>
							<td>$whenInterested
							</td>
						</tr>
						<tr>
							<th>Our next home improvement project is:
							</th>
							<td colspan=\"3\">$nextProject
							</td>
						</tr>
						<tr>
							<th>Would like estimate:
							</th>
							<td>$estimate
							</td>
						</tr>
						<tr>
							<th>Would like financing:
							</th>
							<td>$financing
							</td>
						</tr>
						<tr>
							<th>Referred by:
							</th>
							<td>$referral
							</td>
							<td colspan=\"2\">$otherReferral
							</td>
						</tr>
							<th>Additional comments:
							</th>
							<td colspan=\"3\">$comments
							</td>
					  	<tr>
					  		<td colspan=\"3\">This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}.
					  		</td>
					  	</tr>
					</table>";
		
	mail("quoterequest@wedometalroofs.net","SPADE Concrete Inquiry", $emailbody, $headers);
	}
	
	/*if (something good happened and the email was sent){
	then load thankyou.html;
	}
	else{
	load error.html;
	}*/
	
	//what we need to return back to our form
	$returndata = array(
		'posted_form_data' => array(
			'email' => $email,
	 		'name1' => $name1,
	 		'name2' => $name2,
	 		'address' => $address,
	 		'city' => $city,
	 		'state' => $state,
	 		'zip' => $zip,
	 		'phonea' => $phonea,
	 		'phoneb' => $phoneb,
	 		'phonec' => $phonec,
	 		'cell1a' => $cell1a,
	 		'cell1b' => $cell1b,
	 		'cell1c' => $cell1c,
	 		'cell2a' => $cell2a,
	 		'cell2b' => $cell2b,
	 		'cell2c' => $cell2c,
	 		'whenContact' => $whenContact,
	 		'interestedIn' => $interestedIn,
	 		'otherInterestedIn' => $otherInterestedIn,
	 		'nextProject' => $nextProject,
	 		'estimate' => $estimate,
	 		'financing' => $financing,
	 		'referral' => $referral,
	 		'otherReferral' => $otherReferral,
	 		'comments' => $comments

		),
		'formValid' => $formValid,
		'errors' => $errors
	);

	

	//if this is not an ajax request
	if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
		//set session variables
		session_start();
		$_SESSION['cf_returndata'] = $returndata;
		
		//redirect back to form
		header('location:contact.html' . $_SERVER['HTTP_REFERER']); 
	}
}

?>