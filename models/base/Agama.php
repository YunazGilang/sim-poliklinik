<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "agama".
 *
 * @property integer $id
 * @property string $nama
 *
 * @property \app\models\AgamaDetail[] $agamaDetails
 */
class Agama extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agama';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgamaDetails()
    {
        return $this->hasMany(\app\models\AgamaDetail::className(), ['agama_id' => 'id']);
    }




}
