<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	'Groups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('strings', "Liste des groupes"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Créer un groupe"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "Mettre à jour le groupe"), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('strings', "Supprimer le groupe"), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('strings', "Êtes-vous sûr de vouloir supprimer ce groupe ?"))),
	array('label'=>Yii::t('strings', "Gérer les groupes"), 'url'=>array('admin')),
);?>

<h1>View Groups #<?php echo $model->id;?> </h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
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






