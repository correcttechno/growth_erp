<?php
$tarih = new DateTime('2025-02-10'); // Belirtilen tarih
$bugun = new DateTime(); // Bugünün tarihi

$kalanGun = $bugun->diff($tarih)->days; // İki tarih arasındaki gün farkını al

if ($kalanGun == 5) {
    echo "Belirtilen tarihe 5 gün kaldı!";
} else {
    echo "Belirtilen tarihe $kalanGun gün kaldı.";
}
?>
