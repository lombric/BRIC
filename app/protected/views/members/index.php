<?php
/* @var $this MembersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('strings', "Members"),
);

$this->menu=array(
	array('label'=>Yii::t('strings', "Create Member"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "Manage Members"), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('strings', "Members"); ?></h1>



<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'type' => 'condensed striped',
    'dataProvider' => $dataProvider,
    'template' => "{summary}{items}{pager}",
    'summaryText' => 'Displaying {start}-{end} of {count} results.',
    'columns' => array('id', 'firstname', 'lastname', 'zip', 'city', 'address', 'email', 'phone', 'username', 'status')
));
?>
