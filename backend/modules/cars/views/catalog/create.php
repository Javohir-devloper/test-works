<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Catalog */

$this->title = Yii::t('app', 'Создать каталог');
$this->params['breadcrumbs'][] = ['label' => 'Catalogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
