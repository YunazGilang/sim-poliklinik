Yii2 Project Template
============================

Yii2 Project Template extended version from Yii2 Basic Ready

LIBRARIES USED
--------------
	
- [dmstr/yii2-adminlte-asset](https://github.com/dmstr/yii2-adminlte-asset) (For Admin Template)
- [schmunk42/yii2-giiant](https://github.com/schmunk42/yii2-giiant) (For Model & CRUD generator)
- [kartik-v/yii2-widget-fileinput](https://github.com/kartik-v/yii2-widget-fileinput) (For File Upload)
- [yiisoft/yii2-jui](https://github.com/yiisoft/yii2-jui) (For Datepicker)
- [mdmsoft/yii2-format-converter](https://github.com/mdmsoft/yii2-format-converter) (For Indonesian Date)
- [kartik-v/yii2-widget-select2](https://github.com/kartik-v/yii2-widget-select2) (For Select2 Widget)
- [mjolnic/fontawesome-iconpicker](https://github.com/mjolnic/fontawesome-iconpicker) (For FontAwesome Picker)
	
FEATURES
--------
- Login with user from database.
- Register a Membership
- Logout
- User Menu
- Role Menu
- Dynamic Menu
- Dynamic RBAC


INSTALLATION
------------

Extract the archive file downloaded from [master.zip](https://github.com/indoarta/project-template/archive/master.zip) (approx 24MB) to a directory under the Web root.

Create a database named `project-template` and import an SQL file from directory `db/project-template.sql`

You can then access the application through the following URL:

~~~
http://localhost/project-template/web/
~~~

You can login using username `admin` with password `admin` (With Super Administrator privilege) or `user` with password `user` (With Regular User privilege). Or if you want to add more user, you can change it inside `user` table.

CONFIGURATION
----
You can change whether AdminLTE loads css and js from plugin theme or not inside `assets/AdminLtePluginAsset.php`

SNIPPET CODE
----
**Datepicker**

~~~
<?= $form->field($model, 'tanggal_transaksi')->widget('yii\jui\DatePicker', [
	'options' => ['class' => 'form-control', 'style' => 'width:120px'],
	'dateFormat' => 'php:d-m-Y',
]); ?>
~~~

**Date Behaviour** - place it on your model

~~~
public function behaviors()
    {
        return [
            [
                'class' => 'mdm\converter\DateConverter',
                'type' => 'date', // 'date', 'time', 'datetime'
                'logicalFormat' => 'php:d-m-Y', // default to locale format
                'physicalFormat' => 'php:Y-m-d', // database level format
                'attributes' => [
                    'tanggalTransaksi' => 'tanggal_transaksi',
                ]
            ],
        ];
    }
~~~

**Kartik Select2**

~~~
use kartik\select2\Select2;

// Normal select with ActiveForm & model
echo $form->field($model, 'state_1')->widget(Select2::classname(), [
    'data' => $data,
    'language' => 'de',
    'options' => ['placeholder' => 'Select a state ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);

// Multiple select without model
echo Select2::widget([
    'name' => 'state_2',
    'value' => '',
    'data' => $data,
    'options' => ['multiple' => true, 'placeholder' => 'Select states ...']
]);
~~~
