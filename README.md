1. Adım

OdemeController.php - web.php - api.php dosyalarını örnekteki gibi oluşturuyoruz.

--------------------

2. Adım

Kullanının bilgilerini ve ödenecek miktar bilgisini alacağımız form sayfamızı getiriyoruz.

views/odeme/index.php 

--------------------

3. Adım

2.Adımda aldığımız bilgileri OdemeController.php de işledikten sonra sonuc.php ye oluşturulan tokeni göndererek ödeme formunu getiriyoruz.


views/odeme/sonuc.php 


--------------------


4. Adım

Bildirim url yi paytr paneline tanımlıyoruz. Bu örnekte bildirim urlnin route yapısı api.php de bulunuyor eğer web.php de yaparsanız pay tr nin gönderdiğini postta csrf token olmadığından 419 hatasına düşersiniz bu yüzden api.php de yapıyoruz.



(OPSİYONEL)

Eğer bildirim url çalışmıyorsa public/bildirim.php dosyası oluşuturup paytr panelindeki 2. adım kodlarıyla işlem gerçekleştirebilirsiniz. Böylelikle bildirim url https://site.com/bildirim.php olarak değişir.



