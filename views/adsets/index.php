<?php

use yii\base\Model;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adsets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adsets-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Adsets', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    Before
    <!--Aqui se configura todo lo referente a los contenidos que se quieran visualizar antes de traer los datos de la base de datos -->

    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
      ['class' => 'yii\grid\SerialColumn'],

      'id',
      [
        'attribute' => 'id_campaing',
        'label' => 'campaña',
        'value' => function ($model) {
          return $model->campaing->nombre;
        }
      ],
      'nombre',
      'presupuesto',

      ['class' => 'yii\grid\ActionColumn'],
    ],
  ]); ?>

    <?php Pjax::end(); ?>

</div>