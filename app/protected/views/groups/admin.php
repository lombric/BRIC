<?php
/* @var $this GroupsController */
/* @var $model Groups */

$this->breadcrumbs=array(
	Yii::t('strings', "Groupes")=>array('index'),
	Yii::t('strings', 'Gérer')
);

$this->menu=array(
	array('label'=>Yii::t('strings', "Liste des groupes"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Créer un groupe"), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('groups-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo Yii::t('strings', "<h1>Gérer les groupes</h1>"); ?>

<?php echo Yii::t('strings', "<p>Vous pouvez également entrer des opérateurs de comparaison (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b> ou <b>=</b>) au début de chacunes de vos valeurs de recherche pour spécifier comment la comparaison doit être effectuée.</p>"); ?>

<?php echo CHtml::link(Yii::t('strings', "Recherche avancée"),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'groups-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'description',
		'specifications',
		'parent_id',
		'hide',
		/*
		'system',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
