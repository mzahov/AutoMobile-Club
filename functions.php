<?php 
	session_start();
	
	function loggedIn() {
		if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
			return true;
		}
		else {
			return false;
		}
			 
	}
?>