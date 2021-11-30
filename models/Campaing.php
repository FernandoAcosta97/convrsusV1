<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campaing".
 *
 * @property int $id
 * @property string $nombre
 * @property string $fecha_inicio
 * @property string $fecha_termino
 *
 * @property Adsets[] $adsets
 */
class Campaing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'campaing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'fecha_inicio', 'fecha_termino'], 'required'],
            [['fecha_inicio', 'fecha_termino'], 'safe'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id'=>'USER_ID',
            'nombre' => 'Nombre',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_termino' => 'Fecha Termino',
        ];
    }

    /**
     * Gets query for [[Adsets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdsets()
    {
        return $this->hasMany(Adsets::className(), ['id_campaing' => 'id']);
    }

    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id_campaing' => 'user_id']);
    }
}
