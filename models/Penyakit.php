<?php

namespace app\models;

class Penyakit extends \app\models\base\Penyakit implements \yii\web\IdentityInterface
{

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return Penyakit::find()->where(["id"=>$id])->one();
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    /**
     * Finds user by username
     *
     * @param  string      $nama
     * @return static|null
     */
    public static function findByPenyakitname($nama)
    {
        return Penyakit::find()->where(["nama"=>$nama])->one();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return null;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return FALSE;
    }

}
