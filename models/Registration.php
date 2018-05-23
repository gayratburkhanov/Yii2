<?php
/**
 * Created by PhpStorm.
 * User: atrox
 * Date: 21.05.2018
 * Time: 12:06
 */

namespace app\models;


use yii\db\ActiveRecord;

/**
 * @property array|mixed firstname
 * @property array|mixed lastname
 * @property array|mixed username
 * @property array|mixed password
 */
class Registration extends ActiveRecord
{
    public static function tableName()
    {
        return "user";
    }

}