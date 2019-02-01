<?php

	function db_connect()
	{
   		$result = new mysqli('localhost', 'root', '', 'automatizacion'); 
   		if (!$result)
     		throw new Exception('<p>Could not connect to database server</p>');
   		else
     		return $result;
	}

?>
