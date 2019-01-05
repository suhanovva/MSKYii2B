<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "problema".
 *
 * @property int $id
 * @property string $name
 * @property int $id_kategoria_zakaza
 *
 * @property Orders[] $orders
 */
class Problema extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'problema';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategoria_zakaza'], 'required'],
            [['id_kategoria_zakaza'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'id_kategoria_zakaza' => 'Id Kategoria Zakaza',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['id_problema' => 'id']);
    }
}
