<?php
include "model.php";

// Cek apakah ada parameter id di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $users = getUserById($id); // ambil user berdasarkan id
} else {
    $users = getUsers(); // ambil semua user
}
?>