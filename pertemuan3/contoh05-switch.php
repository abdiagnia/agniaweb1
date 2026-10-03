<?php
declare(strict_types=1);

$pilihan = 2;

switch ($pilihan) {
    case 1:
        echo "Lihat saldo\n";
        break;
    case 2:
        echo "Transfer\n";
        break;
    case 3:
        echo "Bayar Tagihan\n";
        break;
    case 4:
        echo "Pilihan tidak valid\n";
        break;
} 

$jawab = 'y';
switch ($jawab) {
    case 'y':
    case 'Y':
        echo "Anda menjawab YA\n";
        break;
    case 'n':
    case 'N':
        echo "Anda menjawab TIDAK\n";
        break;
    default:
        echo "Jawaban tidak dikenali\n";
} 

$k = 1;
echo "Tanpa break";
switch ($k) {
    case 1: echo "Satu";
    case 2: echo "Dua";
    case 3: echo "Tiga";
}
echo "\n";

?>