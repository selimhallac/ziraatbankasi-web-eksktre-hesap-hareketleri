<?php

require 'ziraatbank.class.php';

$kurum_kodu = ''; // Bankanın size verdiği kurum kodu
$parola = ''; // Bankanın size verdiği parola
$hesap_numarasi = ''; // Sorgulamak istediğiniz hesap numarası
$baslangic_tarihi = ''; // Ekstre Başlangıç Tarihi Format - YY-mm-dd
$bitis_tarihi = ''; // Ekstre Son Tarihi Format - YY-mm-dd

$entegrasyon = new ZiraatBank($kurum_kodu, $parola);

$ekstre = $entegrasyon->hesap_hareketleri($hesap_numarasi,$baslangic_tarihi, $bitis_tarihi);

echo '<pre>';
print_r($ekstre);
echo '</pre>';


?>
