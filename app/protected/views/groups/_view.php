<?php
/* @var $this GroupsController */
/* @var $data Groups */
?>

<?php
if (!$data->hide) {
?>

<div class="view">
	
	<!-- <b><?php /*echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id));*/ ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel(Yii::t('strings', 'Name'))); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel(Yii::t('strings', 'Specification'))); ?>:</b>
	<?php echo CHtml::encode($data->specifications); ?>
	<br />
	
	<?php 
	if (isset($data->parent_id) && is_numeric($data->parent_id)) {
	?>
		<b><?php echo CHtml::encode($data->getAttributeLabel('ancestor')); ?>:</b>
		<?php echo  CHtml::link(CHtml::encode($data->ancestor->name), array('view', 'id'=>$data->ancestor->id)); ?>
		<br />
	<?php
	}
	?>

</div>

<?php
}
?>
