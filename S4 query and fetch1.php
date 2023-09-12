<?php
include_once "PDO-Exception.php";

$rows = $pdo->query("SELECT * FROM `posts`");

while($row = $rows->fetch()){ // fetch() return a data once a time
    echo $row['id']."<h3>".$row['body'] ."</h3> ";
}

// section 4 v7
// foreach( $rows as $zoy){
//     echo "<p>" .$zoy["title"]. "</p>";
// }

