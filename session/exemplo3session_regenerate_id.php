<?php 
	require_once("configuracao.php/session.php");
	session_regenerate_id();
	echo session_id()
	

 ?>