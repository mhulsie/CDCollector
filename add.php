<?php
/**
 * Created by PhpStorm.
 * User: Maarten
 * Date: 6-8-2016
 * Time: 20:09
 */
include "database.php";

$artist = mysqli_real_escape_string($conn, $_POST["artist"]);
$title = mysqli_real_escape_string($conn, $_POST["title"]);
$year = mysqli_real_escape_string($conn, $_POST["year"]);

$sql = "INSERT INTO album (artist, title, year)
        VALUES ('$artist', '$title', '$year')";
$result = $conn->query($sql);
$conn->close();

echo 'completed';






