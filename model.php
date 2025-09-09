<?php 
require_once "connection.php";

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

function getUsers() {
    global $conn;
    $sql = "SELECT * FROM rumahSkt";
    return $conn->query($sql);
}

function getUserById($id) {
    global $conn;
    $id = (int) $id; 
    $sql = "SELECT * FROM rumahSkt WHERE id = $id";
    return $conn->query($sql);
}

?>