<?php
/* @var $this GroupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('strings', "Groupes"),
);

$this->menu=array(
	array('label'=>Yii::t('strings', "Créer un groupe"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "Gérer les groupes"), 'url'=>array('admin')),
);
?>

<?php echo Yii::t('strings', "<h1>Groupes</h1>"); ?>

<?php 
//$this->widget('zii.widgets.CListView', array(
	// 'dataProvider'=>$dataProvider,
	// 'itemView'=>'_view',
// )); ?>

 <?php
$this->widget ( 'bootstrap.widgets.TbGridView', array (
		'type' => 'condensed striped',
		'dataProvider' =>$dataProvider,
		'template' => "{summary}{items}{pager}",
		'summaryText' => 'Displaying {start}-{end} of {count} results.',
));?>
