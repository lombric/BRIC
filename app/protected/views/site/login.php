<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
/* Yii::app()->language='en'; pour changer la langue */
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	Yii::t('strings', "Login"),
);
?>

<h1><?php echo Yii::t('strings', "Login"); ?></h1>

<p><?php echo Yii::t('strings', "Please fill out the following form with your login credentials:"); ?></p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'username', array('title' => Yii::t('strings', 'username'))); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'password', array('title' => Yii::t('strings', 'password'))); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->labelEx($model, 'rememberMe', array('title' => Yii::t('strings', 'Remember me next time'))); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('strings', "Login")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
