<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Obat".
 *
 * @property integer $id
 * @property string $kode
 * @property string $nama
 * @property integer $kemasan_id
 * @property integer $jenis
 * @property integer $harga_satuan
 * @property integer $harga_gflk
 * @property integer $is_utama
 * @property integer $stok_saat_ini
 * @property integer $stok_gflk
 * @property integer $status
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Obat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'kemasan_id'], 'required'],
            [['kemasan_id', 'jenis', 'harga_satuan', 'harga_gflk', 'is_utama', 'stok_saat_ini', 'stok_gflk', 'status'], 'integer'],
            [['kode'], 'string', 'max' => 10],
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
            'kode' => 'Kode',
            'nama' => 'Nama',
            'kemasan_id' => 'Kemasan ID',
            'jenis' => 'Jenis',
            'harga_satuan' => 'Harga Satuan',
            'harga_gflk' => 'Harga Gflk',
            'is_utama' => 'Is Utama',
            'stok_saat_ini' => 'Stok Saat Ini',
            'stok_gflk' => 'Stok Gflk',
            'status' => 'Status',
        ];
    }
}
