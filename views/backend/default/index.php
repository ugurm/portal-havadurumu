<?= $this->title = 'Modül çalışıyor.'; ?>
<?php use kouosl\havadurumu\Module;?>
<div class="site-index">

    <div class="jumbotron">
        
		<h1><?php echo Module::t('havadurumu','İnternet programlama dersi')?></h1>
		<?php //echo Module::t('havadurumu', 'dersi')?>
        <p class="lead"><?php echo Module::t('havadurumu','Hava durumu Modülü Backend Sayfası')?></p>

        <p><a class="btn btn-lg btn-success" href="havadurumu/city"><?php echo Module::t('havadurumu','İl Eklemek İçin Tıklayınız')?></a></p>
		
    </div>

</div>
