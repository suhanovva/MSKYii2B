<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>
	
    <p>
        <?//= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?//= Html::a('Delete', ['delete', 'id' => $model->id], [
            //'class' => 'btn btn-danger',
           //'data' => [
             //   'confirm' => 'Are you sure you want to delete this item?',
             //   'method' => 'post',
            //],
       // ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date_add',
            'date_add_',
            'manager_add',
            'manager_send',
            'manager_close',
            'advert_id',
            'indate',
            'indate_',
            'intime',
            'client_name',
            'zone',
            'street',
            'house',
            'corps',
            'flat',
            'phone',
            'problem',
            'node',
            'engineer',
            'status',
            'summ',
            'clean_summ',
            'city_id',
            'zabral',
            'otvez',
            'id_tip_zakaza',
            'id_produkt_usluga',
            'id_ocenka',
            'time_zakr',
            'dotime',
            'id_paishik',
            'zakaz_paika',
            'id_kategory_zakaza',
            'zametki_paishik',
            'id_operator',
            'id_akb',
            'id_bp',
            'id_kabel_zar',
            'id_sumka',
            'id_chehol',
            'id_flesh_pam',
            'aksesuar_dop',
            'phone2',
            'id_srochno',
            'id_etap_rabot',
            'data_etap_rabot',
            'id_status_remonta',
            'id_status_prikatki',
            'id_bil_sc',
            'Sn',
            'Model',
            'Vnesh_vid',
            'cena_tehniki',
            'summ_prihod',
            'summ_rashod',
            'id_problema',
            'id_ploshadka',
            'cena_obiavlena_operom',
        ],
    ]) ?>

</div>
