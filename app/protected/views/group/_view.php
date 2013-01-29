<?php
/* @var $this GroupController */
/* @var $data Group */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idgroup')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idgroup), array('view', 'id'=>$data->idgroup)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('specifications')); ?>:</b>
	<?php echo CHtml::encode($data->specifications); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_begin')); ?>:</b>
	<?php echo CHtml::encode($data->date_begin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_end')); ?>:</b>
	<?php echo CHtml::encode($data->date_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_idgroup')); ?>:</b>
	<?php echo CHtml::encode($data->fk_idgroup); ?>
	<br />


</div>