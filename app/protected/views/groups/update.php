<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	Yii::t('strings', "Groups")=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('strings', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('strings', "List Groups"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Create Group"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "View Group"), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('strings', "Manage Groups"), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings', "Update Group"); ?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>