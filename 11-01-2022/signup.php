<?php

	if (empty($_POST['username'])) ||
		empty($_POST['pass'])) ||
		empty($_POST['email'])) ||
		empty($_POST['cpass']))
	 {
	die("Please fill all required fields!");
     }
 	if ($_POST['pass'] !== $_POST['cpass']) 
     {
	die ('Password and confirm password should match');
     }
?>