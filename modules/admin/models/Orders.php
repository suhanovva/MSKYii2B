<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $date_add
 * @property string $date_add_
 * @property int $manager_add
 * @property int $manager_send
 * @property int $manager_close
 * @property int $advert_id
 * @property string $indate
 * @property string $indate_
 * @property string $intime
 * @property string $client_name
 * @property int $zone
 * @property string $street
 * @property string $house
 * @property string $corps
 * @property string $flat
 * @property string $phone
 * @property string $problem
 * @property string $node
 * @property int $engineer
 * @property int $status
 * @property int $summ
 * @property int $clean_summ
 * @property int $city_id
 * @property int $zabral
 * @property int $otvez
 * @property int $id_tip_zakaza
 * @property int $id_produkt_usluga
 * @property int $id_ocenka
 * @property string $time_zakr
 * @property string $dotime
 * @property int $id_paishik
 * @property string $zakaz_paika
 * @property int $id_kategory_zakaza
 * @property string $zametki_paishik
 * @property int $id_operator
 * @property int $id_akb
 * @property int $id_bp
 * @property int $id_kabel_zar
 * @property int $id_sumka
 * @property int $id_chehol
 * @property int $id_flesh_pam
 * @property string $aksesuar_dop
 * @property string $phone2
 * @property int $id_srochno
 * @property int $id_etap_rabot
 * @property string $data_etap_rabot
 * @property int $id_status_remonta
 * @property int $id_status_prikatki
 * @property int $id_bil_sc
 * @property string $Sn
 * @property string $Model
 * @property string $Vnesh_vid
 * @property int $cena_tehniki
 * @property int $summ_prihod
 * @property int $summ_rashod
 * @property int $id_problema
 * @property int $id_ploshadka
 * @property int $cena_obiavlena_operom
 *
 * @property DetaliZhurnal[] $detaliZhurnals
 * @property DiagnostikaZhurnal[] $diagnostikaZhurnals
 * @property EtapRabotZhurnal[] $etapRabotZhurnals
 * @property Advert $advert
 * @property Cities $city
 * @property KategoryZakaza $kategoryZakaza
 * @property Ploshadka $ploshadka
 * @property Problema $problema
 * @property Status $status0
 * @property UslugaProduct $produktUsluga
 * @property ShtrafZhurnal[] $shtrafZhurnals
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_add', 'date_add_', 'indate', 'indate_', 'intime', 'city_id', 'id_tip_zakaza', 'id_produkt_usluga', 'id_ocenka', 'time_zakr', 'dotime'], 'required'],
            [['date_add', 'manager_add', 'manager_send', 'manager_close', 'advert_id', 'zone', 'engineer', 'status', 'summ', 'clean_summ', 'city_id', 'zabral', 'otvez', 'id_tip_zakaza', 'id_produkt_usluga', 'id_ocenka', 'id_paishik', 'id_kategory_zakaza', 'id_operator', 'id_akb', 'id_bp', 'id_kabel_zar', 'id_sumka', 'id_chehol', 'id_flesh_pam', 'id_srochno', 'id_etap_rabot', 'id_status_remonta', 'id_status_prikatki', 'id_bil_sc', 'cena_tehniki', 'summ_prihod', 'summ_rashod', 'id_problema', 'id_ploshadka', 'cena_obiavlena_operom'], 'integer'],
            [['date_add_', 'indate_', 'data_etap_rabot'], 'safe'],
            [['indate', 'intime', 'client_name', 'street', 'house', 'corps', 'flat', 'phone', 'time_zakr', 'dotime', 'zakaz_paika', 'Vnesh_vid'], 'string', 'max' => 255],
            [['problem'], 'string', 'max' => 500],
            [['node', 'zametki_paishik', 'aksesuar_dop'], 'string', 'max' => 1000],
            [['phone2'], 'string', 'max' => 15],
            [['Sn', 'Model'], 'string', 'max' => 64],
            [['advert_id'], 'exist', 'skipOnError' => true, 'targetClass' => Advert::className(), 'targetAttribute' => ['advert_id' => 'id']],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cities::className(), 'targetAttribute' => ['city_id' => 'city_id']],
            [['id_kategory_zakaza'], 'exist', 'skipOnError' => true, 'targetClass' => KategoryZakaza::className(), 'targetAttribute' => ['id_kategory_zakaza' => 'id']],
            [['id_ploshadka'], 'exist', 'skipOnError' => true, 'targetClass' => Ploshadka::className(), 'targetAttribute' => ['id_ploshadka' => 'id']],
            [['id_problema'], 'exist', 'skipOnError' => true, 'targetClass' => Problema::className(), 'targetAttribute' => ['id_problema' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status' => 'id']],
            [['id_produkt_usluga'], 'exist', 'skipOnError' => true, 'targetClass' => UslugaProduct::className(), 'targetAttribute' => ['id_produkt_usluga' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ИД',
            'date_add' => 'Дата добавления',
            'date_add_' => 'Дата добавления',
            'manager_add' => 'Создал',
            'manager_send' => 'Передал',
            'manager_close' => 'Закрыл',
            'advert_id' => 'Реклама',
            'indate' => 'Раб. дата',
            'indate_' => 'Раб. дата',
            'intime' => 'время изм.',
            'client_name' => 'Имя клиента',
            'zone' => 'Зона',
            'street' => 'Улица',
            'house' => 'Дом',
            'corps' => 'Корпус',
            'flat' => 'Этаж',
            'phone' => 'Телефон',
            'problem' => 'Проблемма',
            'node' => 'Node',
            'engineer' => 'Engineer',
            'status' => 'Status',
            'summ' => 'Summ',
            'clean_summ' => 'Clean Summ',
            'city_id' => 'City ID',
            'zabral' => 'Zabral',
            'otvez' => 'Otvez',
            'id_tip_zakaza' => 'Id Tip Zakaza',
            'id_produkt_usluga' => 'Id Produkt Usluga',
            'id_ocenka' => 'Id Ocenka',
            'time_zakr' => 'Time Zakr',
            'dotime' => 'Dotime',
            'id_paishik' => 'Id Paishik',
            'zakaz_paika' => 'Zakaz Paika',
            'id_kategory_zakaza' => 'Id Kategory Zakaza',
            'zametki_paishik' => 'Zametki Paishik',
            'id_operator' => 'Id Operator',
            'id_akb' => 'Id Akb',
            'id_bp' => 'Id Bp',
            'id_kabel_zar' => 'Id Kabel Zar',
            'id_sumka' => 'Id Sumka',
            'id_chehol' => 'Id Chehol',
            'id_flesh_pam' => 'Id Flesh Pam',
            'aksesuar_dop' => 'Aksesuar Dop',
            'phone2' => 'Phone2',
            'id_srochno' => 'Id Srochno',
            'id_etap_rabot' => 'Id Etap Rabot',
            'data_etap_rabot' => 'Data Etap Rabot',
            'id_status_remonta' => 'Id Status Remonta',
            'id_status_prikatki' => 'Id Status Prikatki',
            'id_bil_sc' => 'Id Bil Sc',
            'Sn' => 'Sn',
            'Model' => 'Model',
            'Vnesh_vid' => 'Vnesh Vid',
            'cena_tehniki' => 'Cena Tehniki',
            'summ_prihod' => 'Summ Prihod',
            'summ_rashod' => 'Summ Rashod',
            'id_problema' => 'Id Problema',
            'id_ploshadka' => 'Id Ploshadka',
            'cena_obiavlena_operom' => 'Cena Obiavlena Operom',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetaliZhurnals()
    {
        return $this->hasMany(DetaliZhurnal::className(), ['id_zakaz' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiagnostikaZhurnals()
    {
        return $this->hasMany(DiagnostikaZhurnal::className(), ['id_zakaz' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEtapRabotZhurnals()
    {
        return $this->hasMany(EtapRabotZhurnal::className(), ['id_zakaz' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvert()
    {
        return $this->hasOne(Advert::className(), ['id' => 'advert_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(Cities::className(), ['city_id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategoryZakaza()
    {
        return $this->hasOne(KategoryZakaza::className(), ['id' => 'id_kategory_zakaza']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPloshadka()
    {
        return $this->hasOne(Ploshadka::className(), ['id' => 'id_ploshadka']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProblema()
    {
        return $this->hasOne(Problema::className(), ['id' => 'id_problema']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduktUsluga()
    {
        return $this->hasOne(UslugaProduct::className(), ['id' => 'id_produkt_usluga']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShtrafZhurnals()
    {
        return $this->hasMany(ShtrafZhurnal::className(), ['id_zakaz' => 'id']);
    }
}
