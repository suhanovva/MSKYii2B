<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="orders-index">
	<div >
		<h2><?= Html::encode($this->title) ?></h2>
		<?php  
			echo $this->render('_search', ['model' => $searchModel]); 
			//debug($searchModel);
		?>
	
		<!--<p>
			<?=
			Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) 
			?>
		</p>-->
	</div >
	<div >
		<?= 
			//\yii\widgets\LinkPager::widget([
           //'pagination' => $pages,
           //'maxButtonCount' => 3, // получим 3 ссылки в пагинации
			//]);
			
			GridView::widget([
			
			'dataProvider' => $dataProvider,
			'filterModel' => $searchModel,
			'columns' => [
				//['class' => 'yii\grid\SerialColumn'],// это порядковый номер
	
				'id',
				//'date_add',
				'date_add_',
				'indate_',
				'manager_add',
				'manager_send',
				//'manager_close',
				//'advert_id',
				//'indate',
				
				//'intime',
				//'client_name',
				//'zone',
				//'street',
				//'house',
				//'corps',
				//'flat',
				//'phone',
				//'problem',
				//'node',
				//'engineer',
				//'status',
				//'summ',
				//'clean_summ',
				//'city_id',
				//'zabral',
				//'otvez',
				//'id_tip_zakaza',
				//'id_produkt_usluga',
				//'id_ocenka',
				//'time_zakr',
				//'dotime',
				//'id_paishik',
				//'zakaz_paika',
				//'id_kategory_zakaza',
				//'zametki_paishik',
				//'id_operator',
				//'id_akb',
				//'id_bp',
				//'id_kabel_zar',
				//'id_sumka',
				//'id_chehol',
				//'id_flesh_pam',
				//'aksesuar_dop',
				//'phone2',
				//'id_srochno',
				//'id_etap_rabot',
				//'data_etap_rabot',
				//'id_status_remonta',
				//'id_status_prikatki',
				//'id_bil_sc',
				//'Sn',
				//'Model',
				//'Vnesh_vid',
				//'cena_tehniki',
				//'summ_prihod',
				//'summ_rashod',
				//'id_problema',
				//'id_ploshadka',
				//'cena_obiavlena_operom',
				
				['class' => 'yii\grid\ActionColumn',
				'template'=>'{view}'],	// 'template'=>'{view}' если убрать то включатся кнопки редактирования и удаления 
										// 'template'=>'{update}' - редактировать
										// 'template'=>'{delete}' - удалить
			],
		]); ?>
	</div >
	<?php
        //echo \yii\widgets\LinkPager::widget([
        //    'pagination' => $pages,
        //]);
    ?>
</div>
