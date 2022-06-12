<?php
include 'partials/dbconnect.php';
$shnum =  $_POST['shnum'];

$sql = "SELECT * FROM `share`";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    if ($shnum == $row["shareHolderNumber"]) {
        echo $row["name"];
    }
}
