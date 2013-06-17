<?php
/* @var $this GroupsController */
/* @var $model Groups */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'name', array('title' => Yii::t('strings', 'name'))); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,Yii::t('strings', 'Specifications')); ?>
		<?php echo $form->textArea($model,'specifications',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'parent_id', array('title' => Yii::t('strings', 'Parent ID'))); ?>
		<?php echo $form->textField($model,'parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,Yii::t('strings', 'Hide')); ?>
		<?php echo $form->textField($model,'hide'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,Yii::t('strings', 'System')); ?>
		<?php echo $form->textField($model,'system'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('strings', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->