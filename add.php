<?php
/**
 * Created by PhpStorm.
 * User: Maarten
 * Date: 6-8-2016
 * Time: 20:09
 */
include "database.php";

$artist = $_POST["artist"];
$title = $_POST["title"];
$year = $_POST["year"];

$sql = "INSERT INTO album (artist, title, year)
        VALUES ('$artist', '$title', '$year')";
$result = $conn->query($sql);
$conn->close();
exit();






