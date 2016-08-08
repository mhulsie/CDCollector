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
$html = '';

foreach($albums as $album){
    $html .= "<tr>";
    $html .= "<td>" . $album[0] . "</td>";
    $html .= "<td>" . $album[1] . "</td>";
    $html .= "<td>" . $album[2] . "</td>";
    $html .= "<td>" . $album[3] . "</td>";
    $html .= "</tr>";
};

$conn->close();
echo $html;