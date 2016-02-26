<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\InstutionDetails */
?>
<div class="instution-details-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'address:ntext',
            'email:email',
            'phone',
            'mobile',
            'contact_person',
        ],
    ]) ?>

</div>
