<?php
session_start();

$username = $_POST['username'];

$_SESSION['namauser'] = $username;

echo "Nama user Anda Adalah: $username <br><br>";

echo "<a href=hal1.php>Hal-1";
