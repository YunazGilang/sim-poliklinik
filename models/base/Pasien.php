<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "pasien".
 *
 * @property integer $id
 * @property string $kode
 * @property string $kode_lama
 * @property string $kode_folder_kk
 * @property string $no_indeks_kk
 * @property integer $puskesmas_id
 * @property string $nama
 * @property integer $dalam_wilayah
 * @property string $tanggal_daftar
 * @property string $nama_kepala_keluarga
 * @property string $tanggal_lahir
 * @property integer $umur
 * @property integer $umur_bulan
 * @property integer $umur_hari
 * @property string $status_kawin
 * @property string $alamat
 * @property string $kota
 * @property string $no_ktp
 * @property string $no_telpon1
 * @property string $no_telpon2
 * @property integer $kabupaten
 * @property integer $kecamatan
 * @property integer $desa
 * @property string $jenis_kelamin
 * @property string $pendidikan_id
 * @property string $profesi_id
 * @property string $agama_id
 * @property string $suku_id
 * @property integer $perokok
 * @property string $golongan_darah
 * @property string $nomor_kelahiran
 * @property string $tanggal_lahir_ayah
 * @property string $profesi_ayah
 * @property string $pendidikan_ayah
 * @property string $agama_ayah
 * @property string $nama_ibu
 * @property string $tanggal_lahir_ibu
 * @property string $pendidikan_ibu
 * @property string $profesi_ibu
 * @property string $agama_ibu
 * @property integer $jenis_pembayaran_id
 * @property string $no_asuransi
 * @property integer $status
 * @property integer $antrian_poli_id
 * @property string $keterangan_alergi_obat
 */
class Pasien extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'puskesmas_id'], 'required'],
            [['puskesmas_id', 'dalam_wilayah', 'umur', 'umur_bulan', 'umur_hari', 'kabupaten', 'kecamatan', 'desa', 'perokok', 'jenis_pembayaran_id', 'status', 'antrian_poli_id'], 'integer'],
            [['tanggal_daftar', 'tanggal_lahir', 'tanggal_lahir_ayah', 'tanggal_lahir_ibu'], 'safe'],
            [['keterangan_alergi_obat'], 'string'],
            [['kode', 'no_asuransi'], 'string', 'max' => 20],
            [['kode_lama'], 'string', 'max' => 40],
            [['kode_folder_kk', 'nomor_kelahiran'], 'string', 'max' => 6],
            [['no_indeks_kk', 'pendidikan_id', 'agama_id', 'profesi_ayah', 'pendidikan_ayah', 'agama_ayah', 'pendidikan_ibu', 'profesi_ibu', 'agama_ibu'], 'string', 'max' => 2],
            [['nama', 'nama_kepala_keluarga'], 'string', 'max' => 70],
            [['status_kawin', 'jenis_kelamin'], 'string', 'max' => 1],
            [['alamat'], 'string', 'max' => 100],
            [['kota', 'no_ktp'], 'string', 'max' => 30],
            [['no_telpon1', 'no_telpon2'], 'string', 'max' => 15],
            [['profesi_id', 'suku_id'], 'string', 'max' => 3],
            [['golongan_darah'], 'string', 'max' => 5],
            [['nama_ibu'], 'string', 'max' => 23]
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
            'kode_lama' => 'Kode Lama',
            'kode_folder_kk' => 'Kode Folder Kk',
            'no_indeks_kk' => 'No Indeks Kk',
            'puskesmas_id' => 'Puskesmas ID',
            'nama' => 'Nama',
            'dalam_wilayah' => 'Dalam Wilayah',
            'tanggal_daftar' => 'Tanggal Daftar',
            'nama_kepala_keluarga' => 'Nama Kepala Keluarga',
            'tanggal_lahir' => 'Tanggal Lahir',
            'umur' => 'Umur',
            'umur_bulan' => 'Umur Bulan',
            'umur_hari' => 'Umur Hari',
            'status_kawin' => 'Status Kawin',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'no_ktp' => 'No Ktp',
            'no_telpon1' => 'No Telpon1',
            'no_telpon2' => 'No Telpon2',
            'kabupaten' => 'Kabupaten',
            'kecamatan' => 'Kecamatan',
            'desa' => 'Desa',
            'jenis_kelamin' => 'Jenis Kelamin',
            'pendidikan_id' => 'Pendidikan ID',
            'profesi_id' => 'Profesi ID',
            'agama_id' => 'Agama ID',
            'suku_id' => 'Suku ID',
            'perokok' => 'Perokok',
            'golongan_darah' => 'Golongan Darah',
            'nomor_kelahiran' => 'Nomor Kelahiran',
            'tanggal_lahir_ayah' => 'Tanggal Lahir Ayah',
            'profesi_ayah' => 'Profesi Ayah',
            'pendidikan_ayah' => 'Pendidikan Ayah',
            'agama_ayah' => 'Agama Ayah',
            'nama_ibu' => 'Nama Ibu',
            'tanggal_lahir_ibu' => 'Tanggal Lahir Ibu',
            'pendidikan_ibu' => 'Pendidikan Ibu',
            'profesi_ibu' => 'Profesi Ibu',
            'agama_ibu' => 'Agama Ibu',
            'jenis_pembayaran_id' => 'Jenis Pembayaran ID',
            'no_asuransi' => 'No Asuransi',
            'status' => 'Status',
            'antrian_poli_id' => 'Antrian Poli ID',
            'keterangan_alergi_obat' => 'Keterangan Alergi Obat',
        ];
    }




}
