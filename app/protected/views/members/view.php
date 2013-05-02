<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	Yii::t('strings', "Membres")=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('strings', "Liste des membres"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Créer un membre"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "Mettre à jour le membre"), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('strings', "Supprimer le membre"), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('strings', "Gérer le membre"), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings', "Voir le membre"); ?> #<?php echo $model->id; ?></h1>

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
