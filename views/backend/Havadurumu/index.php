<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\BootstrapWidgetTrait;
use yii\bootstrap\ButtonDropdown;
use yii\helpers\ArrayHelper;
use kouosl\havadurumu\models\Img;
//use yii\bootstrap\ActiveForm;





/* @var $this yii\web\View */
/* @var $searchModel backend\models\HavadurumuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Havadurumus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="havadurumu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

  
    <p>
        <?= Html::a('Create Havadurumu', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Create Havadurumu11', ['create11'], ['class' => 'btn btn-success']) ?>
		

  


<?php
     
    $orta="&basla=1&bitir=5&rC=111&rZ=fff";
    $sehir="ANKARA";
    $ilk="http://www.mgm.gov.tr/sunum/tahmin-show-2.aspx?m=";
    $son = $ilk."".$sehir."".$orta; 
    //echo $son;

    ?>
<img src="<?php echo $son; ?>" style="width:400px; height:100px;"  />

  
    </p>
	
   


	
    <?= GridView::widget([

        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
		
		
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'illerid',
            'servisid',
            'imgid',
            'favid',
            'olcekc',
            'roleid',
            //'olcekf',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
