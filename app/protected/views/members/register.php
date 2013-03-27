<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	'Register',
);

?>

<h1>New Member</h1>

<?php echo $this->renderPartial('_register', array('model'=>$model)); ?>