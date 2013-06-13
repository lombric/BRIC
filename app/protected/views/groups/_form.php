<?php
/* @var $this GroupsController */
/* @var $model Groups */
/* @var $form CActiveForm */
/** @var BootActiveForm $form */


$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'groups-form',
    'type'=>'verticalForm',
)); ?>

<div class="form">
	<p class="note"><?php echo Yii::t('strings', 'Fields with '); ?><span class="required">*</span><?php echo Yii::t('strings', ' are required.'); ?></p>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'name', array('title' => Yii::t('strings', 'name'))); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'Specifications', array('title' => Yii::t('strings', 'Specifications'))); ?>
		<?php echo $form->textArea($model,'specifications',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'specifications'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,Yii::t('strings', 'Sub groups')); ?>
		<?php echo $form->dropDownList($model, 'id',
				CHtml::listData(Groups::model()->findAll(), 'id', 'name'), array('empty'=>Yii::t('strings', 'Select'))
            );
          ?>
		<?php echo $form->error($model,'parent_id'); ?>
	 </div>


	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('strings', 'Hide')); ?>
		<?php echo $form->checkBox($model,'hide'); ?>
		<?php echo $form->error($model,'hide'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('strings', 'System')); ?>
		<?php echo $form->checkBox($model,'system'); ?>
		<?php echo $form->error($model,'system'); ?>
	</div>
	<br/><div class="row buttons">
	
	<?php 
	
	if($model->isNewRecord) $label = Yii::t('strings', 'Create');
	else $label = Yii::t('strings', 'Save');
		$this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
			'label'=>$label,
        )); 
	?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->