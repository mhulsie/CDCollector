<?php
/**
 * Created by PhpStorm.
 * User: Maarten
 * Date: 6-8-2016
 * Time: 21:16
 */
include "database.php";

//Query database for data
$sql = "SELECT * from album";
$result = $conn->query($sql);
$albums = mysqli_fetch_all($result);

foreach($albums as $album){
    echo "<tr>";
    echo "<td>" . $album[0] . "</td>";
    echo "<td>" . $album[1] . "</td>";
    echo "<td>" . $album[2] . "</td>";
    echo "<td>" . $album[3] . "</td>";
    echo "</tr>";
};

$conn->close();
exit();