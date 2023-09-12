<?php

//host, dbname , user, password

$host = "localhost";
$dbname = "zoyaaa"; //your database name here
$user ="root" ; 	//username of your mysql server
$password=""; 	  	  //password for the username above

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname","$user","$password");

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $th) {
    // echo $th->getMessage();
    die("<div style=text-align:center;font-size:24px>There is an error!! <br>"."<p style=color:red>". $th->getMessage()."</p></div>");
}

//echo "here's the rest of the page"; //if used die() then after rest of code doesn't work