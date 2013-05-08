<?php
/* @var $this GroupsController */
/* @var $data Groups */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel(Yii::t('strings', 'Nom du groupe'))); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel(Yii::t('strings', 'Spécification'))); ?>:</b>
	<?php echo CHtml::encode($data->specifications); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel(Yii::t('strings', 'ID du parent'))); ?>:</b>
	<?php echo CHtml::encode($data->parent_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel(Yii::t('strings', 'Caché'))); ?>:</b>
	<?php echo CHtml::encode($data->hide); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel(Yii::t('strings', 'Système'))); ?>:</b>
	<?php echo CHtml::encode($data->system); ?>
	<br />


</div>