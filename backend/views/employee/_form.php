<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dob')->textInput() ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'marital_status')->dropDownList([ 'Single' => 'Single', 'Married' => 'Married', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'residence_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'permanent_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'designation')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
