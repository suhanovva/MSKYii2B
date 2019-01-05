<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "advert".
 *
 * @property int $id
 * @property string $adv_name
 * @property int $city_id
 * @property int $work
 * @property int $id_tip_zakaza
 *
 * @property Orders[] $orders
 */
class Advert extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'advert';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adv_name', 'city_id', 'id_tip_zakaza'], 'required'],
            [['city_id', 'work', 'id_tip_zakaza'], 'integer'],
            [['adv_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adv_name' => 'Adv Name',
            'city_id' => 'City ID',
            'work' => 'Work',
            'id_tip_zakaza' => 'Id Tip Zakaza',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['advert_id' => 'id']);
    }
}
