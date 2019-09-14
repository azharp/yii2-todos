<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TodoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Todos';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile(
    "@web/js/todo.js",
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
?>

<?php $this->registerJs(
    "$('#ajax-form form').submit(function (ev) { formSubmitAjax(ev, this); });",
    View::POS_END
); ?>

<div class="todo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Todo (Non-Ajax)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="todo-create" id="ajax-form">

        <h3>Create Todos</h3>

        <?= $this->render('_form-ajax', [
            'model' => $model,
        ]) ?>

    </div>

    <?php Pjax::begin(); ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
