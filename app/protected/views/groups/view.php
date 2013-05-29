<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	Yii::t('strings', 'Groups')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('strings', "List Groups"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Create Group"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "Update Group"), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('strings', "Delete Group"), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('strings', "Êtes-vous sûr de vouloir supprimer ce groupe ?"))),
	array('label'=>Yii::t('strings', "Manage Groups"), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings', "View Groups"); ?> #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'specifications',
		'parent_id',
		'hide',
		'system',
	),
)); ?>
