<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	Yii::t('strings', "Groups")=>array('index'),
	Yii::t('strings', "Create"),
);

$this->menu=array(
	array('label'=>Yii::t('strings', "List Groups"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Manage Groups"), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings', "Create Group"); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>