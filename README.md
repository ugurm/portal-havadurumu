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



