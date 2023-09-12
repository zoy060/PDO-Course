<?php

require "PDO-Exception.php";

$sql = "SELECT * FROM posts";

$data = $pdo->query($sql);

while( $zoy = $data->fetchColumn(0)){
    echo $zoy."<br>";
}
