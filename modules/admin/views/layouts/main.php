<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Админка<?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
	//debug(Yii::$app->user->identity);
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
	
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
                
            ['label' => 'Заказы', 'url' => ['orders/index']],
			['label' => 'Отчеты', 'url' => ['/reports']],
            ['label' => 'О программе', 'url' => ['/about']],
            ['label' => 'Контакты', 'url' => ['/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Вход', 'url' => ['auth/login']]
            ) : (
                '<li >'
                . Html::beginForm(['auth/logout'], 'post')
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->fio . ')',
                    ['class' => 'btn btn-link  ','style'=>'height: 50px;']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
		
    ]);
	//debug(Yii::$app->user->identity);
    NavBar::end();
	//debug(Yii::$app->authManager);
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; БД МОСКВА <?= date('Y') ?></p>

        <p class="pull-right">  ТЕСТОВАЯ ВЕРСИЯ</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
