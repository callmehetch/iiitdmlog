
<?php

$servername = "q7cxv1zwcdlw7699.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "ec141pn0zgreg2x0";
$password = "p4zvi489j8l03br0";

$dbname = "zx5az6t75nvmh66x";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
