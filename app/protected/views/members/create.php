<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	Yii::t('strings', "Members")=>array('index'),
	Yii::t('strings', "Create"),
);

$this->menu=array(
	array('label'=>Yii::t('strings', "List Members"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Manage Members"), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings', "Create Member"); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>