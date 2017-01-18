<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "penyakit".
 *
 * @property integer $id
 * @property string $kode
 * @property string $nama
 * @property string $nama_indonesia
 * @property string $kode2
 * @property integer $jenis_id
 * @property string $kategori_id
 * @property integer $status
 * @property integer $lb1_status
 */
class Penyakit extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penyakit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'nama_indonesia', 'kode2', 'kategori_id'], 'required'],
            [['nama', 'nama_indonesia'], 'string'],
            [['jenis_id', 'status', 'lb1_status'], 'integer'],
            [['kode', 'kode2', 'kategori_id'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'nama_indonesia' => 'Nama Indonesia',
            'kode2' => 'Kode2',
            'jenis_id' => 'Jenis ID',
            'kategori_id' => 'Kategori ID',
            'status' => 'Status',
            'lb1_status' => 'Lb1 Status',
        ];
    }




}
