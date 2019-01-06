<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\havadurumu\models\Fav */

$this->title = 'Hava durumu ';
$this->params['breadcrumbs'][] = ['label' => 'Favs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fav-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
