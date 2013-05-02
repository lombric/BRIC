<?php
/* @var $this GroupsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('strings', "Groupes"),
);

$this->menu=array(
	array('label'=>'Create Groups', 'url'=>array('create')),
	array('label'=>'Manage Groups', 'url'=>array('admin')),
);
?>

<h1>Groups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
