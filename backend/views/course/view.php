<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Course */
?>
<div class="course-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'description:ntext',
            'code',
            'course_type',
            'for_class',
            'cce_status',
            'status',
            'name',
        ],
    ]) ?>

</div>
