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
<?php 



 
// <?php echo $form->textFieldRow($model, 'textField', array('class'=>'input-medium', 'prepend'=>'<i class="icon-search"></i>')); ?>
<?php //$this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Go')); ?>




	<?php echo Yii::t('strings', '<p class="note">Les champs avec une <span class="required">*</span> sont obligatoires.</p>'); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('strings', 'Nom du groupe')); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('strings', 'Spécifications')); ?>
		<?php echo $form->textArea($model,'specifications',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'specifications'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,Yii::t('strings', 'Sous-groupes')); ?>
		<?php echo $form->dropDownList($model, 'id',
				CHtml::listData(Groups::model()->findAll(), 'id', 'name'), array('empty'=>'Selectionnez')
            );
          ?>
		<?php echo $form->error($model,'parent_id'); ?>
	 </div>


	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('hide', 'caché')); ?>
		<?php echo $form->checkBox($model,'hide'); ?>
		<?php echo $form->error($model,'hide'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('strings', 'Système')); ?>
		<?php echo $form->checkBox($model,'system'); ?>
		<?php echo $form->error($model,'system'); ?>
	</div>
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
		
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->