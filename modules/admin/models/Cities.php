<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cities".
 *
 * @property int $city_id
 * @property string $name
 * @property string $hd1
 * @property string $telorg
 * @property string $adr1
 * @property string $adr2
 * @property string $grafik
 * @property string $ispoln
 *
 * @property Orders[] $orders
 */
class Cities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'hd1', 'telorg', 'adr1', 'adr2', 'grafik', 'ispoln'], 'required'],
            [['name', 'hd1', 'telorg', 'adr1', 'adr2', 'grafik', 'ispoln'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'city_id' => 'City ID',
            'name' => 'Name',
            'hd1' => 'Hd1',
            'telorg' => 'Telorg',
            'adr1' => 'Adr1',
            'adr2' => 'Adr2',
            'grafik' => 'Grafik',
            'ispoln' => 'Ispoln',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['city_id' => 'city_id']);
    }
}
