<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kouosl\havadurumu\models\City;
use yii\data\ActiveDataProvider;
use kouosl\duyuru\models\Fav;



/* @var $this yii\web\View */
/* @var $model vendor\kouosl\havadurumu\models\Fav */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fav-form">

    <?php $form = ActiveForm::begin(); ?>

    
	
	<?php ?>
	
	<?= $form->field($model, 'il_id')->dropDownList([ArrayHelper::map(City::find()->all(), 'ad' , 'gorunen_ad' )]
	
	) ?>

	
	
 

    <?php ActiveForm::end(); ?>
	<img id="weather_result"></img>
<p id="demo"></p>
	<button onclick="myFunction()">Göster</button>
	<script>
		function myFunction() {
		  document.getElementById("demo").innerHTML = document.getElementById("fav-il_id").value+ " ilinin 5 günlük hava tahmini";
		  document.getElementById("weather_result").src="https://www.mgm.gov.tr/sunum/tahmin-show-2.aspx?m="+document.getElementById("fav-il_id").value+"&basla=1&bitir=5&rC=111&rZ=fff";
		}
	</script>
	
 
</div>
