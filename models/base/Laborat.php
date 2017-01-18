<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "laborat".
 *
 * @property integer $id
 * @property string $kode
 * @property string $nama
 * @property integer $kategori_id
 * @property string $normal
 * @property integer $harga_satuan
 * @property integer $jenis_bayar
 * @property integer $status
 * @property integer $puskesmas_id
 * @property string $data_otomatis
 */
class Laborat extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'laborat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'kategori_id', 'normal'], 'required'],
            [['kategori_id', 'harga_satuan', 'jenis_bayar', 'status', 'puskesmas_id'], 'integer'],
            [['data_otomatis'], 'string'],
            [['kode'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 50],
            [['normal'], 'string', 'max' => 30]
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
            'kategori_id' => 'Kategori ID',
            'normal' => 'Normal',
            'harga_satuan' => 'Harga Satuan',
            'jenis_bayar' => 'Jenis Bayar',
            'status' => 'Status',
            'puskesmas_id' => 'Puskesmas ID',
            'data_otomatis' => 'Data Otomatis',
        ];
    }




}
