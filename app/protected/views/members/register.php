<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	Yii::t('strings', "Inscription"),
);

?>

<?php echo Yii::t('strings', "<h1>Nouveau membre</h1>"); ?>

<?php echo $this->renderPartial('_register', array('model'=>$model)); ?>