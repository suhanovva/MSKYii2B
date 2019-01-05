<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О программе';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        Это страница особые замечания, по работе программы.
    </p>

    <code hidden><?= __FILE__ ?></code>
</div>
