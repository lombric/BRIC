<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form TbActiveForm */

$this->pageTitle=Yii::app()->name . ' - '.Yii::t('strings', 'Contact Us');
$this->breadcrumbs=array(
	Yii::t('strings', "Contact"),
);
?>

<h1><?php echo Yii::t('strings', 'Contact Us'); ?></h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('contact'),
    )); ?>

<?php else: ?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"><?php echo Yii::t('strings', 'Fields with '); ?><span class="required">*</span><?php echo Yii::t('strings', ' are required.'); ?></p>

	<?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldRow($model,'name'); ?>

    <?php echo $form->textFieldRow($model,'email'); ?>

    <?php echo $form->textFieldRow($model,'subject',array('size'=>60,'maxlength'=>128)); ?>

    <?php echo $form->textAreaRow($model,'body',array('rows'=>6, 'class'=>'span8')); ?>

	<?php if(CCaptcha::checkRequirements()): ?>
		<?php echo $form->captchaRow($model,'verifyCode',array(
            'hint'=>Yii::t('strings', "Please enter the letters as they are shown in the image above.").'<br />'.Yii::t('strings', "Letters are not case-sensitive."),
        )); ?>
	<?php endif; ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton',array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>Yii::t('strings', 'Submit'),
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>