<?php
session_start();

echo "Ini adalah halaman 1<br>";
echo "Nama user Anda adalah: " . $_SESSION['namauser'], "<br>";
echo "<a href=hal2.php>Hal 2 </a>";
