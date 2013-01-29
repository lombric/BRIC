	<?php
/* @var $this GroupController */
/* @var $model Group */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'group-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'specifications'); ?>
		<?php echo $form->textArea($model,'specifications',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'specifications'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_begin'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                'name'=>'date_begin',
                                'attribute'=>'date_begin',
                                'model'=>$model,
                                'model'=>$model,
                                'options' => array(
                    						'showAnim' => 'fold',
                    						'dateFormat' => 'yy-mm-dd', // save to db format
                    					),
                ));?>           
		<?php echo $form->error($model,'date_begin'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'date_end'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                'name'=>'date_end',
                                'attribute'=>'date_end',
                                'model'=>$model,
                                'options' => array(
                    						'showAnim' => 'fold',
                    						'dateFormat' => 'yy-mm-dd', // save to db format
                    					),
                                
                ));?>           
		<?php echo $form->error($model,'date_end'); ?>
	</div>



	
	<div class="row">
		<?php echo $form->labelEx($model,'Sub Group'); ?>
		
		<?php echo $form->dropDownList($model, 'idgroup',
                CHtml::listData(Group::model()->findAll(), 'idgroup', 'name'), array('empty'=>'Selectionnez')
            );
        ?>
                
            
		<?php echo $form->error($model,'fk_idgroup'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->