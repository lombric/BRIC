<?php
/* @var $this MembersController */
/* @var $model Members */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'members-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('strings', 'Fields with '); ?><span class="required">*</span><?php echo Yii::t('strings', ' are required.'); ?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'firstname', array('title' => Yii::t('strings', 'firstname'))); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'lastname', array('title' => Yii::t('strings', 'lastname'))); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'city', array('title' => Yii::t('strings', 'city'))); ?>
		<?php echo $form->textField($model,'city',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'address', array('title' => Yii::t('strings', 'address'))); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'zip', array('title' => Yii::t('strings', 'zip'))); ?>
		<?php echo $form->textField($model,'zip',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'Mobile phone', array('title' => Yii::t('strings', 'Mobile phone'))); ?>
		<?php echo $form->textField($model,'mobile_phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'mobile_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'phone', array('title' => Yii::t('strings', 'phone'))); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Status'); ?>
		<?php echo $form->dropDownList($model, 'status', array('new' => 'Nouveau','actif'=>'Actif', 'old' => 'Ancien')
			
            ); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'username', array('title' => Yii::t('strings', 'username'))); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'password', array('title' => Yii::t('strings', 'password'))); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('strings', 'Create') : Yii::t('strings', 'Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->