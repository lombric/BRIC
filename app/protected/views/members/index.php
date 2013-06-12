<?php
/* @var $this MembersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('strings', "Membres"),
);

$this->menu=array(
	array('label'=>Yii::t('strings', "Créer un membre"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "Gérer les membres"), 'url'=>array('admin')),
);
?>

<?php echo Yii::t('strings', "<h1>Membres</h1>"); ?>



 <?php
$this->widget ( 'bootstrap.widgets.TbGridView', array (
		'type' => 'condensed striped',
		'dataProvider' =>$dataProvider,
		'template' => "{summary}{items}{pager}",
		'summaryText' => 'Displaying {start}-{end} of {count} results.',
));?>
