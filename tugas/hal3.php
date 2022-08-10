<?php
session_start();

echo "Ini adalah halaman 3<br>";
echo "Nama user Anda adalah: " . $_SESSION['namauser'], "<br>";
echo "<a href=logout.php>Logout</a>";
