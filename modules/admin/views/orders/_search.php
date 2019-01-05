<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrdersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

	<?= $form->field($model, 'city_id') ?> 
	
    <?= $form->field($model, 'id') ?>

    <?//= $form->field($model, 'date_add') ?>

    <?= $form->field($model, 'date_add_') ?>

    <?//= $form->field($model, 'manager_add') ?>

    <?//= $form->field($model, 'manager_send') ?>

    <?php // echo $form->field($model, 'manager_close') ?>

    <?php // echo $form->field($model, 'advert_id') ?>

    <?php // echo $form->field($model, 'indate') ?>

    <?php // echo $form->field($model, 'indate_') ?>

    <?php // echo $form->field($model, 'intime') ?>

    <?php // echo $form->field($model, 'client_name') ?>

    <?php // echo $form->field($model, 'zone') ?>

    <?php // echo $form->field($model, 'street') ?>

    <?php // echo $form->field($model, 'house') ?>

    <?php // echo $form->field($model, 'corps') ?>

    <?php // echo $form->field($model, 'flat') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'problem') ?>

    <?php // echo $form->field($model, 'node') ?>

    <?php // echo $form->field($model, 'engineer') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'summ') ?>

    <?php // echo $form->field($model, 'clean_summ') ?>

    

    <?php // echo $form->field($model, 'zabral') ?>

    <?php // echo $form->field($model, 'otvez') ?>

    <?php // echo $form->field($model, 'id_tip_zakaza') ?>

    <?php // echo $form->field($model, 'id_produkt_usluga') ?>

    <?php // echo $form->field($model, 'id_ocenka') ?>

    <?php // echo $form->field($model, 'time_zakr') ?>

    <?php // echo $form->field($model, 'dotime') ?>

    <?php // echo $form->field($model, 'id_paishik') ?>

    <?php // echo $form->field($model, 'zakaz_paika') ?>

    <?php // echo $form->field($model, 'id_kategory_zakaza') ?>

    <?php // echo $form->field($model, 'zametki_paishik') ?>

    <?php // echo $form->field($model, 'id_operator') ?>

    <?php // echo $form->field($model, 'id_akb') ?>

    <?php // echo $form->field($model, 'id_bp') ?>

    <?php // echo $form->field($model, 'id_kabel_zar') ?>

    <?php // echo $form->field($model, 'id_sumka') ?>

    <?php // echo $form->field($model, 'id_chehol') ?>

    <?php // echo $form->field($model, 'id_flesh_pam') ?>

    <?php // echo $form->field($model, 'aksesuar_dop') ?>

    <?php // echo $form->field($model, 'phone2') ?>

    <?php // echo $form->field($model, 'id_srochno') ?>

    <?php // echo $form->field($model, 'id_etap_rabot') ?>

    <?php // echo $form->field($model, 'data_etap_rabot') ?>

    <?php // echo $form->field($model, 'id_status_remonta') ?>

    <?php // echo $form->field($model, 'id_status_prikatki') ?>

    <?php // echo $form->field($model, 'id_bil_sc') ?>

    <?php // echo $form->field($model, 'Sn') ?>

    <?php // echo $form->field($model, 'Model') ?>

    <?php // echo $form->field($model, 'Vnesh_vid') ?>

    <?php // echo $form->field($model, 'cena_tehniki') ?>

    <?php // echo $form->field($model, 'summ_prihod') ?>

    <?php // echo $form->field($model, 'summ_rashod') ?>

    <?php // echo $form->field($model, 'id_problema') ?>

    <?php // echo $form->field($model, 'id_ploshadka') ?>

    <?php // echo $form->field($model, 'cena_obiavlena_operom') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
