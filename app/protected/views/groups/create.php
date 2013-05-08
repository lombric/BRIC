<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	Yii::t('strings', "Groupes")=>array('index'),
	Yii::t('strings', "Créer"),
);

$this->menu=array(
	array('label'=>Yii::t('strings', "Liste des groupes"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Gérer les groupes"), 'url'=>array('admin')),
);
?>

<?php echo Yii::t('strings', "<h1>Créer un groupe</h1>"); ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>