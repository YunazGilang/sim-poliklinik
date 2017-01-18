<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "rumah_sakit".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 */
class RumahSakit extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rumah_sakit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat'], 'required'],
            [['nama'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 200]
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
            'alamat' => 'Alamat',
        ];
    }




}
