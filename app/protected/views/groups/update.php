<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	Yii::t('strings', "Groupes")=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('strings', "Liste des groupes"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Créer un groupe"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "Voir le groupe"), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('strings', "Gérer les groupes"), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings', "Mettre à jour le groupe"); ?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>