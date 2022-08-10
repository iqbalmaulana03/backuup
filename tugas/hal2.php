<?php
session_start();

echo "Ini adalah halaman 2<br>";
echo "Nama user Anda adalah: " . $_SESSION['namauser'], "<br>";
echo "<a href=hal3.php>Hal 3 </a>";
