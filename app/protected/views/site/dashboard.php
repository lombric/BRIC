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
if($count == 0)
	echo "Tu n'es membre d'aucun groupe.";
else{
	if($count<2)
		$r = "Tu es membre du groupe suivant: " . $s;
	else
		$r = "Tu es membre des groupes suivants: " . $s;
	echo substr($r, 0, -2).".";
}?>  