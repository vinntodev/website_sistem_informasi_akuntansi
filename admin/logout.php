<?php
// Aktifkan session
session_start();

// Hapus session
session_destroy();

// Arahkan ke login page
header("location:../index.php?pesan=logout");

?>