<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Section */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="section-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'class_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        \backend\models\ClassMaster::find()->all(),'id','name'),['prompt'=>'Select Class Name']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'session_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        \backend\models\Session::find()->all(),'id','start_date'
    )) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
