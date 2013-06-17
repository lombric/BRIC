<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	Yii::t('strings', "Members")=>array('index'),
	Yii::t('strings', 'Manage')
);

$this->menu=array(
	array('label'=>Yii::t('strings', "List Members"), 'url'=>array('index')),
	array('label'=>Yii::t('strings', "Create Member"), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('members-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('strings', "Manage Members"); ?></h1>

<p><?php echo Yii::t('strings', "You may optionally enter a comparison operator "); ?>(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>or <b>=</b>)<?php echo Yii::t('strings', " at the beginning of each of your search values to specify how the comparison should be done.");?></p>

<?php echo CHtml::link(Yii::t('strings', "Advanced Search"),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
	'type' => 'condensed striped',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'template' => "{summary}{items}{pager}",
	'summaryText' => 'Displaying {start}-{end} of {count} results.',
	'columns' => array (	
		'id',
		'firstname',
		'lastname',
		'email',
		'username',
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
));
?>
