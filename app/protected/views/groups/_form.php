<?php
/* @var $this GroupsController */
/* @var $model Groups */
/* @var $form CActiveForm */
/** @var BootActiveForm $form */


$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'groups-form',
    'type'=>'verticalForm',
)); ?>

<<<<<<< HEAD
<div class="form">
<?php 



 
// <?php echo $form->textFieldRow($model, 'textField', array('class'=>'input-medium', 'prepend'=>'<i class="icon-search"></i>')); ?>
<?php //$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Go')); ?>




	<?php echo Yii::t('strings', '<p class="note">Les champs avec une <span class="required">*</span> sont obligatoires.</p>'); ?>
=======
	<p class="note"><?php echo Yii::t('strings', 'Fields with '); ?><span class="required">*</span><?php echo Yii::t('strings', ' are required.'); ?></p>
>>>>>>> 96f806e8f005976312d85e04fc6cd26cc72d9d9f

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
<<<<<<< HEAD
		<?php echo $form->labelEx($model,Yii::t('hide', 'caché')); ?>
=======
		<?php echo $form->labelEx($model,Yii::t('strings', 'Hide')); ?>
>>>>>>> 96f806e8f005976312d85e04fc6cd26cc72d9d9f
		<?php echo $form->checkBox($model,'hide'); ?>
		<?php echo $form->error($model,'hide'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('strings', 'System')); ?>
		<?php echo $form->checkBox($model,'system'); ?>
		<?php echo $form->error($model,'system'); ?>
	</div>
<<<<<<< HEAD
	<br/><div class="row buttons">
	
	<?php 
	
	if($model->isNewRecord) $label = Yii::t('strings', 'Créer');
	else $label = Yii::t('strings', 'Sauver');
		$this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
			'label'=>$label,
        )); 
	?>
		
=======

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('strings', 'Create') : Yii::t('strings', 'Save')); ?>
>>>>>>> 96f806e8f005976312d85e04fc6cd26cc72d9d9f
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->