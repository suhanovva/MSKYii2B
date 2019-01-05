<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_add')->textInput() ?>

    <?= $form->field($model, 'date_add_')->textInput() ?>

    <?= $form->field($model, 'manager_add')->textInput() ?>

    <?= $form->field($model, 'manager_send')->textInput() ?>

    <?= $form->field($model, 'manager_close')->textInput() ?>

    <?= $form->field($model, 'advert_id')->textInput() ?>

    <?= $form->field($model, 'indate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indate_')->textInput() ?>

    <?= $form->field($model, 'intime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zone')->textInput() ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'house')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'corps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'problem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'node')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'engineer')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'summ')->textInput() ?>

    <?= $form->field($model, 'clean_summ')->textInput() ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'zabral')->textInput() ?>

    <?= $form->field($model, 'otvez')->textInput() ?>

    <?= $form->field($model, 'id_tip_zakaza')->textInput() ?>

    <?= $form->field($model, 'id_produkt_usluga')->textInput() ?>

    <?= $form->field($model, 'id_ocenka')->textInput() ?>

    <?= $form->field($model, 'time_zakr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dotime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_paishik')->textInput() ?>

    <?= $form->field($model, 'zakaz_paika')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kategory_zakaza')->textInput() ?>

    <?= $form->field($model, 'zametki_paishik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_operator')->textInput() ?>

    <?= $form->field($model, 'id_akb')->textInput() ?>

    <?= $form->field($model, 'id_bp')->textInput() ?>

    <?= $form->field($model, 'id_kabel_zar')->textInput() ?>

    <?= $form->field($model, 'id_sumka')->textInput() ?>

    <?= $form->field($model, 'id_chehol')->textInput() ?>

    <?= $form->field($model, 'id_flesh_pam')->textInput() ?>

    <?= $form->field($model, 'aksesuar_dop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_srochno')->textInput() ?>

    <?= $form->field($model, 'id_etap_rabot')->textInput() ?>

    <?= $form->field($model, 'data_etap_rabot')->textInput() ?>

    <?= $form->field($model, 'id_status_remonta')->textInput() ?>

    <?= $form->field($model, 'id_status_prikatki')->textInput() ?>

    <?= $form->field($model, 'id_bil_sc')->textInput() ?>

    <?= $form->field($model, 'Sn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Vnesh_vid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cena_tehniki')->textInput() ?>

    <?= $form->field($model, 'summ_prihod')->textInput() ?>

    <?= $form->field($model, 'summ_rashod')->textInput() ?>

    <?= $form->field($model, 'id_problema')->textInput() ?>

    <?= $form->field($model, 'id_ploshadka')->textInput() ?>

    <?= $form->field($model, 'cena_obiavlena_operom')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
