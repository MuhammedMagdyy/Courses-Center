<?php
$connect = mysqli_connect("localhost", "root", "", "center");
if (!$connect) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
