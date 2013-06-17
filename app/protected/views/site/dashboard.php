<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$count = 0;
$s = '';
echo "<h2>" . Yii::t('strings', 'Hello ') . Yii::app()->user->user->firstname . " " . Yii::app()->user->user->lastname . "</h2>";

foreach(Yii::app()->user->user->membersgroups as $a){
	$s .= CHtml::link(CHtml::encode($a->groups->name), array('groups/view', 'id'=>$a->groups->id))." ";
	$count++;
}

if($count == 0)
	echo Yii::t('strings', 'You are not a member of any groups');
else{
	if($count<2)
		$r = Yii::t('strings', "You are a member of ") . $s;
	else
		$r = Yii::t('strings', "You are a member of the following groups: ") . $s;
	echo substr($r, 0, -2).".";
}?>  
