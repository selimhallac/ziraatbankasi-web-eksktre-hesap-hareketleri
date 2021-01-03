<?php
/*
Class ZiraatBank
@author Selim Hallaç
@blog selimhallac.com
*/
class ZiraatBank {
  public $kurumKodu = "";
  public $parola = "";
  public $url = "https://hesap.ziraatbank.com.tr/HEK_NKYWS/HesapHareketleri.asmx/HesapEkstre";

  public function __construct($kurumkodu, $parola){

    $this->KurumKodu = $kurumkodu;
    $this->parola = $parola;

  }
  /*
  @ilk_tarih 'Y-m-d' ekstrede çekeceğiniz ilk tarih
  @son_tarih 'Y-m-d' ekstrede çekeceğiniz son tarih
  @hesapno Ekstresini almak istediğiniz hesap numarası
  !! Ziraat Bankası en fazla 21 gün geriye gitmeye izin veriyor.
  */
  public function hesap_hareketleri($hesapno,$ilk_tarih,$son_tarih){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$this->url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch , CURLOPT_NOBODY, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "KurumKod=".$this->KurumKodu."&Sifre=".$this->parola."&HesapNo=".$hesapno."&BaslangicTarihi=".$ilk_tarih."&BitisTarihi=".$son_tarih."");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $output=curl_exec($ch);
    curl_close($ch);
    $arr = simplexml_load_string($output);
    return $arr;

  }

}
?>
