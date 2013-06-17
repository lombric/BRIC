<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	Yii::t('strings', "Members")=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('strings', "List Members"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Create Member"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "Update Member"), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('strings', "Delete Member"), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('strings', "Êtes-vous sûr de vouloir supprimer ce membre ?"))),
	array('label'=>Yii::t('strings', "Manage Members"), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings', "View Member"); ?> <?php echo $model->firstname; ?></h1>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>$model
    )
); ?>
