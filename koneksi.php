<?php
$conn = new mysqli("localhost", "root", "", "perpustakaanaris");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
