<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отчеты';
$this->params['breadcrumbs'][] = $this->title;
//debug($this->params['breadcrumbs']);
?>
 <div class="admin-reports-index">
	<div >
		<h2><?= Html::encode($this->title) ?></h2>
	</div >
	
</div>
