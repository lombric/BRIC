<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$count = 0;
$s = '';
echo "<h2>Bonjour, ".Yii::app()->user->user->lastname."</h2>";
foreach(Yii::app()->user->user->membersgroups as $a){
	$s .= CHtml::link(CHtml::encode($a->groups->name), array('groups/view', 'id'=>$a->groups->id))." ";
	$count++;
}
if($count>1)
	$r = "Tu es membre des groupes suivants: " . $s;
else if($count == 0)
	$r = "Tu n'es membres d'aucun groupe.";
else
	$r = "Tu es membre du groupe suivant: " . $s;
	
echo substr($r, 0, -2)."."; ?>  