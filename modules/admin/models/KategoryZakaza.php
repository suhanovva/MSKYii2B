<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategory_zakaza".
 *
 * @property int $id
 * @property string $name
 * @property string $prim
 * @property int $work
 * @property double $koeff
 *
 * @property Orders[] $orders
 */
class KategoryZakaza extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategory_zakaza';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['work'], 'integer'],
            [['koeff'], 'number'],
            [['name', 'prim'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'prim' => 'Prim',
            'work' => 'Work',
            'koeff' => 'Koeff',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['id_kategory_zakaza' => 'id']);
    }
}
