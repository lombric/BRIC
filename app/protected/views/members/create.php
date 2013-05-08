<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	Yii::t('strings', "Membres")=>array('index'),
	Yii::t('strings', "Créer"),
);

$this->menu=array(
	array('label'=>Yii::t('strings', "Liste des membres"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Gérer les membres"), 'url'=>array('admin')),
);
?>

<?php echo Yii::t('strings', "<h1>Créer un membre</h1>"); ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>