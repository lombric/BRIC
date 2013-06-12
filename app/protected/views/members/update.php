<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	Yii::t('strings', "Members")=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('strings', "Update"),
);

$this->menu=array(
	array('label'=>Yii::t('strings', "List Members"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Create Member"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "View Member"), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('strings', "Manage Members"), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings', "Update Member"); ?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>