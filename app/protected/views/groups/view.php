<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	'Groups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Groups', 'url'=>array('index')),
	array('label'=>'Create Groups', 'url'=>array('create')),
	array('label'=>'Update Groups', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Groups', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Groups', 'url'=>array('admin')),
);
?>

<h1>Groupe "<?php echo $model->name; ?>"</h1>

<?php 

// Has parent or children ?
if (isset($model->ancestor->id) && is_numeric($model->ancestor->id)) {
	$aParams = array(
		'data'=>$model,
		'attributes'=>array(
			'name',
			'description',
			'specifications',
			array(
				'label'=>'Parent',
				'type'=>'raw',
				'value'=>CHtml::link(CHtml::encode($model->ancestor->name), array('view', 'id'=>$model->ancestor->id))
			)
		)
	);
}
elseif (isset($model->children[0]->id) && is_numeric($model->children[0]->id)) {
	$aParams = array(
		'data'=>$model,
		'attributes'=>array(
			'name',
			'description',
			'specifications'
		)
	);
	
	$sLabel = 'Sous-groupes';
	for ($i = 0; $i < count($model->children); $i++) {
		array_push($aParams['attributes'], 
		array(
			'label'=>$sLabel,
			'type'=>'raw',
			'value'=>CHtml::link(CHtml::encode($model->children[$i]->name), array('view', 'id'=>$model->children[$i]->id))
		));
		
		$sLabel = '';
	}
	
}
else {
	$aParams = array(
		'data'=>$model,
		'attributes'=>array(
			'name',
			'description',
			'specifications'
		)
	);
}

$this->widget('zii.widgets.CDetailView', $aParams); ?>
