<?php


    $hostname = 'localhost';
	$username = 'root';
	$password = '';
    $db_name = 'gmsa_uds_db';
    
    $conn = new mysqli($hostname,$username,$password,$db_name);
    if ($conn) {
    	
    }else{
    	echo "Please check your database connection and try again";
    }
   


;?>