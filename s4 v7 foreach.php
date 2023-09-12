<?php
include_once "PDO-Exception.php";

$rows = $pdo->query("SELECT * FROM `posts`");

foreach( $rows as $zoy){
    echo "<p>" .$zoy["title"]. "</p>";
}

