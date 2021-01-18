<?php
	session_start();
	$mysqli = new mysqli("localhost","id15949131_truongg","3aWkjB}(=I_cGi*g","id15949131_truong");
    if ($mysqli -> connect_error) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
?>