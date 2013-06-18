<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	Yii::t('strings', 'Groups')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('strings', "List Groups"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Create Group"), 'url'=>array('create')),
	array('label'=>Yii::t('strings', "Update Group"), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('strings', "Delete Group"), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('strings', "Êtes-vous sûr de vouloir supprimer ce groupe ?"))),
	array('label'=>Yii::t('strings', "Manage Groups"), 'url'=>array('admin')),
);


?>

<h1><?php echo Yii::t('strings', "View Groups"); ?> <?php echo $model->name; ?></h1>

<?php 


$aParams = array(
	'type'=>'bordered striped',
	'data'=>$model,
	'attributes'=>array(
		'name',
		'description',
		'specifications',
		array( 
			'label'=>'Administrateur',
			'type'=>'raw',
			'value'=>$model->getAdminList()
		)
	)
);

// Has parent or children ?
if (isset($model->ancestor->id) && is_numeric($model->ancestor->id)) {
	array_push($aParams['attributes'], 
		array( 
			'label'=>'Parent',
			'type'=>'raw',
			'value'=>CHtml::link(CHtml::encode($model->ancestor->name), array('view', 'id'=>$model->ancestor->id))
		)
	);
}
if (isset($model->children[0]->id) && is_numeric($model->children[0]->id)) {
	$sLabel = 'Sous-groupes';
	for ($i = 0; $i < count($model->children); $i++) {
		array_push($aParams['attributes'], 
			array(
				'label'=>$sLabel,
				'type'=>'raw',
				'value'=>CHtml::link(CHtml::encode($model->children[$i]->name), array('view', 'id'=>$model->children[$i]->id))
			)
		);
		$sLabel = '';
	}
	
}
?>


<?php $this->widget('bootstrap.widgets.TbDetailView', $aParams); ?>





