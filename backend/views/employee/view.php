<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Employee */
?>
<div class="employee-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'dob',
            'gender',
            'marital_status',
            'age',
            'residence_address:ntext',
            'permanent_address:ntext',
        ],
    ]) ?>

</div>
