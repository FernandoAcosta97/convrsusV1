<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adsets".
 *
 * @property int $id
 * @property int $id_campaing
 * @property string $nombre
 * @property float $presupuesto
 *
 * @property Campaing $campaing
 */
class Adsets extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adsets';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_campaing', 'nombre', 'presupuesto'], 'required'],
            [['id_campaing'], 'integer'],
            [['presupuesto'], 'number'],
            [['nombre'], 'string', 'max' => 50],
            [['id_campaing'], 'exist', 'skipOnError' => true, 'targetClass' => Campaing::className(), 'targetAttribute' => ['id_campaing' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_campaing' => 'Id Campaing',
            'nombre' => 'Nombre',
            'presupuesto' => 'Presupuesto',
        ];
    }

    /**
     * Gets query for [[Campaing]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCampaing()
    {
        return $this->hasOne(Campaing::className(), ['id' => 'id_campaing']);
    }
}
