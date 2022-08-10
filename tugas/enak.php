<?php
$menu = 2;

echo 'menu warung "ahmad iqbal"';
echo '1. Pecel 1000';
echo '2. Rawon 7000';
echo '3. GUle 8000';

echo 'pesanan yang diorder : {$menu} <br>';

if ($menu == 0) {
    echo '1. Pecel 1000';
} elseif ($menu == 1) {
    echo '2. Rawon 7000';
    # code...
} elseif ($menu == 2) {
    echo '3. GUle 8000';
    # code...
}
