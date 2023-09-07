<?php

//host, dbname , user, password

$host = "localhost";
$dbname = "zoya"; //your database name here
$user ="root" ; 	//username of your mysql server
$password=""; 	  	  //password for the username above

$dbh = new PDO("mysql:host=$host;dbname=$dbname","$user","$password");

if($dbh == true) {
    echo 'Connection Successful';
}else{
    echo'Error in connection'. $e->getMessage();
}

