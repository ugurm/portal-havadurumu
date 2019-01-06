<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kouosl\havadurumu\models\Img;

/* @var $this yii\web\View */
/* @var $model backend\models\Havadurumu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="havadurumu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'servisid')->textInput() ?>

    <?= $form->field($model, 'imgid')->dropDownList(ArrayHelper::map(Img::find()->all(), 'id' , 'link' ), ['prompt'=>'resim seçiniz']) ?>

    

    <?= $form->field($model, 'favid')->textInput() ?>

    <?= $form->field($model, 'olcekc')->textInput() ?>

    <?= $form->field($model, 'roleid')->textInput() ?>

    <?= $form->field($model, 'olcekf')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('göster', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
