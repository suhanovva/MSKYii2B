<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Orders;

/**
 * OrdersSearch represents the model behind the search form of `app\models\Orders`.
 */
class OrdersSearch extends Orders
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'date_add', 'manager_add', 'manager_send', 'manager_close', 'advert_id', 'zone', 'engineer', 'status', 'summ', 'clean_summ', 'city_id', 'zabral', 'otvez', 'id_tip_zakaza', 'id_produkt_usluga', 'id_ocenka', 'id_paishik', 'id_kategory_zakaza', 'id_operator', 'id_akb', 'id_bp', 'id_kabel_zar', 'id_sumka', 'id_chehol', 'id_flesh_pam', 'id_srochno', 'id_etap_rabot', 'id_status_remonta', 'id_status_prikatki', 'id_bil_sc', 'cena_tehniki', 'summ_prihod', 'summ_rashod', 'id_problema', 'id_ploshadka', 'cena_obiavlena_operom'], 'integer'],
            [['date_add_', 'indate', 'indate_', 'intime', 'client_name', 'street', 'house', 'corps', 'flat', 'phone', 'problem', 'node', 'time_zakr', 'dotime', 'zakaz_paika', 'zametki_paishik', 'aksesuar_dop', 'phone2', 'data_etap_rabot', 'Sn', 'Model', 'Vnesh_vid'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Orders::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date_add' => $this->date_add,
            'date_add_' => $this->date_add_,
            'manager_add' => $this->manager_add,
            'manager_send' => $this->manager_send,
            'manager_close' => $this->manager_close,
            'advert_id' => $this->advert_id,
            'indate_' => $this->indate_,
            'zone' => $this->zone,
            'engineer' => $this->engineer,
            'status' => $this->status,
            'summ' => $this->summ,
            'clean_summ' => $this->clean_summ,
            'city_id' => $this->city_id,
            'zabral' => $this->zabral,
            'otvez' => $this->otvez,
            'id_tip_zakaza' => $this->id_tip_zakaza,
            'id_produkt_usluga' => $this->id_produkt_usluga,
            'id_ocenka' => $this->id_ocenka,
            'id_paishik' => $this->id_paishik,
            'id_kategory_zakaza' => $this->id_kategory_zakaza,
            'id_operator' => $this->id_operator,
            'id_akb' => $this->id_akb,
            'id_bp' => $this->id_bp,
            'id_kabel_zar' => $this->id_kabel_zar,
            'id_sumka' => $this->id_sumka,
            'id_chehol' => $this->id_chehol,
            'id_flesh_pam' => $this->id_flesh_pam,
            'id_srochno' => $this->id_srochno,
            'id_etap_rabot' => $this->id_etap_rabot,
            'data_etap_rabot' => $this->data_etap_rabot,
            'id_status_remonta' => $this->id_status_remonta,
            'id_status_prikatki' => $this->id_status_prikatki,
            'id_bil_sc' => $this->id_bil_sc,
            'cena_tehniki' => $this->cena_tehniki,
            'summ_prihod' => $this->summ_prihod,
            'summ_rashod' => $this->summ_rashod,
            'id_problema' => $this->id_problema,
            'id_ploshadka' => $this->id_ploshadka,
            'cena_obiavlena_operom' => $this->cena_obiavlena_operom,
        ]);

        $query->andFilterWhere(['like', 'indate', $this->indate])
            ->andFilterWhere(['like', 'intime', $this->intime])
            ->andFilterWhere(['like', 'client_name', $this->client_name])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'house', $this->house])
            ->andFilterWhere(['like', 'corps', $this->corps])
            ->andFilterWhere(['like', 'flat', $this->flat])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'problem', $this->problem])
            ->andFilterWhere(['like', 'node', $this->node])
            ->andFilterWhere(['like', 'time_zakr', $this->time_zakr])
            ->andFilterWhere(['like', 'dotime', $this->dotime])
            ->andFilterWhere(['like', 'zakaz_paika', $this->zakaz_paika])
            ->andFilterWhere(['like', 'zametki_paishik', $this->zametki_paishik])
            ->andFilterWhere(['like', 'aksesuar_dop', $this->aksesuar_dop])
            ->andFilterWhere(['like', 'phone2', $this->phone2])
            ->andFilterWhere(['like', 'Sn', $this->Sn])
            ->andFilterWhere(['like', 'Model', $this->Model])
            ->andFilterWhere(['like', 'Vnesh_vid', $this->Vnesh_vid]);

        return $dataProvider;
    }
}
