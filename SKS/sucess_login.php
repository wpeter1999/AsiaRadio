<?php
session_save_path("session_data");
session_start();
	if ($_SESSION['check']<>"ok")
	{
		header("location: login.php?a=1");
	}        
?>