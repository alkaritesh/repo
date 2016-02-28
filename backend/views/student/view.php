<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Student */
?>
<div class="student-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'father_name',
            'mother_name',
            'address:ntext',
            'admission_no',
            'joining_date',
            'created_on',
            'created_on_time',
            'guardian_name',
        ],
    ]) ?>

</div>
