<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\StudentCatagory */
?>
<div class="student-catagory-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
        ],
    ]) ?>

</div>
