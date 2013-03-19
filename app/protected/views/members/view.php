<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Members', 'url'=>array('index')),
	array('label'=>'Create Members', 'url'=>array('create')),
	array('label'=>'Update Members', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Members', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Members', 'url'=>array('admin')),
);
?>

<h1>View Members #<?php echo $model->id; ?></h1>

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
