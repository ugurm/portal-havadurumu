# portal-havadurumu
Portal-havadurumu Yii framework üzerinde çalışması planlanmış bir modüldür. Modül aracılığı ile kullanıcılar modül yöneticisi tarafından veri tabanına eklenen iller arasından hava tahminlerine ulaşabilmektedir.
# Kurulum
Öncelikle https://github.com/kouosl/portal adresindeki kurulum adımları takip edilmelidir.
Portal kurulumu tamamlandıktan sonra /portal dizini içerisinde bulunan "composer.json" adlı dosya içerisindeki "repositories" bölümüne şu satırlar eklenmelidir.
```		
{
  "type": "vcs",
  "url": "https://github.com/ugurm/portal-havadurumu"
},
```
Yine aynı dosya içerisinde "require" bölümüne şu satırlar eklenmelidir.
```
"kouosl/portal-havadurumu": "dev-develop"
```
portal/backend/config/ ve portal/frontend/config/ dizinlerinde bulunan "main.php" adlı dosyanın "modules" kısmına aşağıdaki satırlar eklenmelidir.
```
'havadurumu' => [
            'class' => 'kouosl\havadurumu\Module',
        ],
```
Composer üzerinden modülü yüklemek için öncelikle -vagrant ssh komutu ile bağlantı sağlanır daha sonra portalın bulunduğu dizine gelip aşağıdaki komut çalıştırılır.
```
composer update
```


Daha sonra "migration" dosyası ile gerekli veri tabanı kurulumu sağlanır ve modul kullanıma uygun hale gelir.Bunun için şu kod yine aynı dizinde çalıştırılmalıdır.
```
php yii migrate --migrationPath=@vendor/kouosl/portal-havadurumu/migrations
```
Veri tabanına işaretli tablolar eklenmektedir.
![1](https://user-images.githubusercontent.com/14303053/50740870-b3f82a80-1206-11e9-9b1a-c7e4a8b83fcc.png)

Bu adımların ardından portal.kouosl/havadurumu sayfasından modülün kullanıcı arayüzüne portal.kouosl/admin/havadurumu sayfasından ise yönetici ekranına ulaşım sağlanabilmektedir.
# Backend
![2](https://user-images.githubusercontent.com/14303053/50740902-2ec14580-1207-11e9-9054-eced74d275f9.png)
Backend sayfası yukarıdaki gibidir. Sayfa üzerindeki buton yarımı ile veri tabanına il eklenmekte ve kullanıcılar bu sayede hava durumu bilgisine ulaşabilmekte.
![3](https://user-images.githubusercontent.com/14303053/50740938-97102700-1207-11e9-9204-7c23ec8d788e.png)
# Frontend
Kullanıcılar http://portal.kouosl/havadurumu/fav adresinden hava durumu tahminlerine ulaşabilmektedirler. Bu sayfanın ekran görüntüsü aşağıda bulunmaktadır.
![4](https://user-images.githubusercontent.com/14303053/50740971-100f7e80-1208-11e9-905a-4d371a977223.png)

Sayfa üzerinde illeri seçmek için "dropDownList" kullanılmıştır. Bu öğe üzerinde yazan iller veri tabanından çekilmektedir.
![5](https://user-images.githubusercontent.com/14303053/50741031-02a6c400-1209-11e9-9e7a-29bfb86c41eb.png)
# Çeviri
![cev](https://user-images.githubusercontent.com/14303053/50741112-c3c53e00-1209-11e9-8cbb-9e3c3cff80d1.png)
Yukarıda ekran görüntüsü bulunan dosya "portal-havadurumu\messages\tr-TR" dizini içerisinde oluşturulmuştur. Örnek kullanım aşağıdaki kodda gösterilmiştir.
```
Module::t('havadurumu','Hava durumu Modülü Backend Sayfası') 
````
