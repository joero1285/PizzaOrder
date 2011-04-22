<?php
$firstName=$_REQUEST['firstName'];
$lastName=$_REQUEST['lastName'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$state=$_REQUEST['State'];
$zip=$_REQUEST['zip'];

 // validate firstName entry
    if (empty($firstName) ) {
        $error_message = 'First name is a required field.'; 
    } else if ( is_numeric($firstName) )  {
        $error_message = 'First name should not be a number.'; 
    }
//Validate Last Name
      else if (empty($lastName) ) {
        $error_message = 'Last name is a required field.'; 
    } else if ( is_numeric($lastName) )  {
        $error_message = 'Last name should not be a number.'; 
    }
    // validate zip code entry
    else if (empty($zip) ) {
        $error_message = 'Zip Code is a required field.'; 
    } else if ( !is_numeric($zip) )  {
        $error_message = 'Zip code must be a valid number.'; 
    } 
    
     // validate an email address
    else if (empty($email)){
      $error_message='Email is a required field.';
    }     
	else if( !preg_match("/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/i", $email) ) {
	echo 'You have entered and invalid email address';

    } else {
        $error_message = '';
    }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }
?>