<?php

namespace app\models;

use Yii;
use \app\models\base\Role as BaseRole;
use yii\helpers\Html;

/**
 * This is the model class for table "role".
 */
class Role extends BaseRole
{
    const SUPER_ADMINISTRATOR = 1;
    const ADMINISTRATOR = 2;
    const REGULAR_USER = 3;

    public function getRoleMenuColumn(){
        return Html::a("Set Menu", ["role/detail", "id"=>$this->id], ["class"=>"btn btn-primary"]);
    }
}
