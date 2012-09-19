<?php
/*******************************************************************************
 * Copyright (c) 2012 CrisisTracker Contributors (see /doc/authors.txt).
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://opensource.org/licenses/eclipse-1.0.php
 *******************************************************************************/

session_start();
	// SESSION CONTROL	
	// Destroy last session
	
	if (isset($_SESSION['username'])){
		session_destroy();
	}
	
	session_start(); // set up a session variable ->  PHP session	 
	
	$username = $_POST['username'];	// get the username and password from the textboxes	

	//$username = htmlspecialchars($uname);	// remove unwanted HTML (scripting attacks):
	
	$_SESSION['username']= $username;
	$_SESSION['login'] = "1";
	
	
	if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		header ("Location: index.php?WARNING=USER_NOT_FOUND");
	}
	else {
		print $_SESSION['username'];
	}
		//print 'Session id is: '.$PHPSESSID;
		//print_r ($_SESSION);
?>