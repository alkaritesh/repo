<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ClassSubject */
?>
<div class="class-subject-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'class_id',
            'subject_id',
            'session_id',
            'section_id',
        ],
    ]) ?>

</div>
