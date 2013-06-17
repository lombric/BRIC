<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel(Yii::t('strings', 'Firstname'))); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel(Yii::t('strings', 'Lastname'))); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel(Yii::t('strings', 'City'))); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel(Yii::t('strings', 'Address'))); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel(Yii::t('strings', 'Zip'))); ?>:</b>
	<?php echo CHtml::encode($data->zip); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel(Yii::t('strings', 'Groups'))); ?>:</b>
	<?php foreach($data->membersgroups as $a){ 
		echo $a->groups->name;
	} ?>
	<br />

</div>