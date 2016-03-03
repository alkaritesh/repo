<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ClassTeacherAllocation */
?>
<div class="class-teacher-allocation-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'class_id',
            'section_id',
            'session_id',
            'teacher_id',
        ],
    ]) ?>

</div>
