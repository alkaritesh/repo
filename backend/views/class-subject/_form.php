<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ClassSubject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'class_id')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\ClassMaster::find()->all(),'id','name'),['prompt'=>'Select Class',
        'onchange'=>'$.post( "index.php?r=section/lists&id='.'"+$(this).val(), function( data )
         {
         $( "select#classsubject-section_id" ).html( data );
           });'
    ]) ?>
    <?= $form->field($model, 'section_id')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Section::find()->all(),'id','name'),['prompt'=>'Select Section']) ?>

    <?= $form->field($model, 'subject_id')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Subject::find()->all(),'id','code'),['prompt'=>'Select Subject']) ?>

    <?= $form->field($model, 'session_id')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Session::find()->all(),'id','start_date')) ?>



  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
