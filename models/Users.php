<?php

namespace app\models;
use yii;
use yii\db\ActiveRecord;

class Users extends ActiveRecord{
    

    
    
    public static function getDb() //accedemos a la base de datos
    {
        return Yii::$app->db;
    }
    
    public static function tableName() //accedemos a la tabla
    {
        return 'users';

    

    }

    public function attributeLabels()
    {
        return [
            'user_id' => 'ID',

        ];
    }

    //Prueba para amarre de campañas
    public function getCampaing()
    {
        return $this->hasOne(Campaing::className(), ['user_id' => 'id_campaing']);
    }



    
}