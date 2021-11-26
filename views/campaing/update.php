<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Campaing */

$this->title = 'Update Campaing: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Campaings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="campaing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
