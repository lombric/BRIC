<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	Yii::t('strings', "Membres")=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('strings', "Liste des membres"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Créer des membres"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "Mettre à jour des membres"), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('strings', "Supprimer des membres"), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('strings', "Gérer les membres"), 'url'=>array('admin')),
);
?>

<h1>View Members #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'firstname',
		'lastname',
		'email',
		'city',
		'address',
		'zip',
		'mobile_phone',
		'phone',
		'description',
		'status',
		'username',
		'password',
	),
)); ?>
