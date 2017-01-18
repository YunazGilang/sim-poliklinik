<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "jenis_pembayaran".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $panjang_digit
 * @property integer $kategori_id
 * @property integer $status
 */
class JenisPembayaran extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenis_pembayaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'kategori_id'], 'required'],
            [['panjang_digit', 'kategori_id', 'status'], 'integer'],
            [['nama'], 'string', 'max' => 30]
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
            'panjang_digit' => 'Panjang Digit',
            'kategori_id' => 'Kategori ID',
            'status' => 'Status',
        ];
    }




}
