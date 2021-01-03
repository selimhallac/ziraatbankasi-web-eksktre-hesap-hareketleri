# Ziraat Bankası Web Ekstre Hesap Hareketleri
Selamlar, ilk olarak bankayla entegrasyona hazır olmak için başvuru yapmanız gerekiyor. Başvuru formunu reponun içine koydum. <br>
İzin verilen hesaplara direkt olarak erişim sağlayabilir. Hareketlerini çekebilirsiniz. <br>
İlk olarak kurum kodlarını tanımlıyoruz.
```php
$kurum_kodu = ''; // Bankanın size verdiği kurum kodu
$parola = ''; // Bankanın size verdiği parola
```
Daha sonra hesap bilgilerini ve çekeceğiniz ekstre tarih aralığını giriyoruz.
```php
$hesap_numarasi = ''; // Sorgulamak istediğiniz hesap numarası
$baslangic_tarihi = ''; // Ekstre Başlangıç Tarihi Format - YY-mm-dd
$bitis_tarihi = ''; // Ekstre Son Tarihi Format - YY-mm-dd
```
Sorgu cevabı aşağıdaki gibi olacaktır.
```
SimpleXMLElement Object
(
    [BankaKodu] => 010
    [BankaAdi] => Ziraat  Bankası
    [BankaVergiDairesi] => xxxx
    [BankaVergiNumarasi] => xxx
    [hataKodu] => 00
    [hataAciklamasi] => Hata Yok
    [Bakiye] => SimpleXMLElement Object
        (
            [subeKodu] => 2257
            [SubeAdi] => xxx
            [HesapNo] => xxxx
            [DovizTipi] => TRY
            [AcilisBakiye] => 464209.99
            [CariBakiye] => 20977.75
            [Detay] => SimpleXMLElement Object
                (
                    [HareketlerDetay] => Array
                        (
                            [0] => SimpleXMLElement Object
                                (
                                    [IslemTarihi] => 201221
                                    [Valor] => 201222
                                    [Referans] => 00000000
                                    [Aciklama] => Gönd: xxxx
                                    [Tutar] => 8208.00
                                    [BorcAlacak] => A
                                    [IslemTipi] => 211M
                                    [TimeStamp] => 202012211572FNCC636
                                    [musteriVergiNumarasi] => 0000000000
                                    [Bakiye] =>                472417.99
                                )

                            [1] => SimpleXMLElement Object
                                (
                                    [IslemTarihi] => 201224
                                    [Valor] => 201225
                                    [Referans] => 00000000
                                    [Aciklama] => Gönd: xxxxx
                                    [Tutar] => 15730.00
                                    [BorcAlacak] => A
                                    [IslemTipi] => 211M
                                    [TimeStamp] => 202012241572FADM426
                                    [musteriVergiNumarasi] => 0000000000
                                    [Bakiye] =>                488147.99
                                )

                            [2] => SimpleXMLElement Object
                                (
                                    [IslemTarihi] => 201224
                                    [Valor] => 201224
                                    [Referans] => 00000000
                                    [Aciklama] => xxxx
                                    [Tutar] => 470000.00
                                    [BorcAlacak] => B
                                    [IslemTipi] => 212X
                                    [TimeStamp] => 202012242257F001852
                                    [musteriVergiNumarasi] => 0000000000
                                    [Bakiye] =>                 18147.99
                                )

                        )

                )

        ) ```
