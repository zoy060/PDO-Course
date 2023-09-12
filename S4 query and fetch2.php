<?php
include_once "PDO-Exception.php";

$rows = $pdo->query("SELECT title FROM `posts`");

// while($row = $rows->fetch()){ // fetch() return a data once a time
//     echo $row['title']."<br>";//."<h3>".$row['body'] ."</h3> ";
// }

// section 4 v7

foreach( $rows as $zoy){
    echo "<p>" .$zoy["title"]. "</p>";

    echo "<br>";
}
echo "<br>";

echo "<br>";
$rows = $pdo->query("SELECT title FROM `posts`");

var_dump($rows->fetchAll(PDO::FETCH_NUM));
echo "<br>";
echo "<br>";
$rows = $pdo->query("SELECT title FROM `posts`");

var_dump($rows->fetchAll(PDO::FETCH_ASSOC));
echo "<br>";
echo "<br>";
$rows = $pdo->query("SELECT title FROM `posts`");

var_dump($rows->fetchAll(PDO::FETCH_BOTH));
echo "<br>";
echo "<br>";
$rows = $pdo->query("SELECT title FROM `posts`");

var_dump($rows->fetchAll(PDO::FETCH_OBJ));
echo "<br>";
echo "<br>";
$rows = $pdo->query("SELECT title FROM `posts`");

var_dump($rows->fetch(PDO::FETCH_LAZY));