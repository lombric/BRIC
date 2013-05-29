<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	Yii::t('strings', "Register"),
);

?>

<h1><?php echo Yii::t('strings', "New Member"); ?></h1>

<?php echo $this->renderPartial('_register', array('model'=>$model)); ?>