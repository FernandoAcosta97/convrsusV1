<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Adsets */

$this->title = 'Create Adsets';
$this->params['breadcrumbs'][] = ['label' => 'Adsets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adsets-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
