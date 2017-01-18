<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "agama_detail".
 *
 * @property integer $id
 * @property integer $agama_id
 * @property string $nama
 *
 * @property \app\models\Agama $agama
 */
class AgamaDetail extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agama_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agama_id', 'nama'], 'required'],
            [['agama_id'], 'integer'],
            [['nama'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'agama_id' => 'Agama ID',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgama()
    {
        return $this->hasOne(\app\models\Agama::className(), ['id' => 'agama_id']);
    }




}
