<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usluga_product".
 *
 * @property int $id
 * @property string $naim
 * @property int $tip_zakaza_id
 * @property double $koef
 * @property int $work
 * @property int $id_kategoria_zakaza
 *
 * @property Orders[] $orders
 */
class UslugaProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usluga_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naim', 'tip_zakaza_id'], 'required'],
            [['tip_zakaza_id', 'work', 'id_kategoria_zakaza'], 'integer'],
            [['koef'], 'number'],
            [['naim'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'naim' => 'Naim',
            'tip_zakaza_id' => 'Tip Zakaza ID',
            'koef' => 'Koef',
            'work' => 'Work',
            'id_kategoria_zakaza' => 'Id Kategoria Zakaza',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['id_produkt_usluga' => 'id']);
    }
}
