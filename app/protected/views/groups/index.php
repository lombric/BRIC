<?php
/* @var $this GroupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('strings', "Groups"),
);

$this->menu=array(
	array('label'=>Yii::t('strings', "Create Group"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "Manage Groups"), 'url'=>array('admin')),
);

?>

<h1><?php echo Yii::t('strings', "Groups"); ?></h1>

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
		'columns'=>array(
			array('name'=>'Nom', 'type'=>'raw', 'value'=>'CHtml::link($data->name, array("/", "groups"=>$data->id))'),
			'description',
			'specifications',
			array ('name'=>'Parent', 'type'=>'raw', 'value'=>'CHtml::link($data->ancestor["name"], array("/", "groups"=>$data->ancestor["id"]))'),
		),
));?>
