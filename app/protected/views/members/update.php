<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	Yii::t('strings', "Membres")=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('strings', "Liste des membres"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Créer un membre"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "Voir le membre"), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('strings', "Gérer les membres"), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings', "Mettre à jour le membre"); ?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>