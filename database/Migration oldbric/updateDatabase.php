<?php
	$pdo = new PDO('mysql:host=localhost;dbname=oldlombric','root','root');

	$sql="select * from groupe order by idGroupeParent ";
	$nb= $pdo ->query($sql);


	$items = $nb->fetchAll();

	$i=0;
	$oldid = array(); 
	foreach($items as $item){
		
		$i++;
		$oldid[$item['id']] = $i;

	}

	/*$i=0;
	foreach($items as $item){
		
		echo $item['idGroupeParent'] . ' => ';

		$i++;
		$item['parent_id'] = $oldid[$item['idGroupeParent']];
		
		echo $item['parent_id'] . ' <br /> ';

	}*/

		foreach($items as $item){
		

		$id=$item['id'];
		$name=$item['nom'];
		$description=$item['description'];
		$cahier=$item['cahier'];
		$parent_id=$oldid[$item['idGroupeParent']];
		$hide=$item['cache'];
	

try{
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$pdoupdate = new PDO('mysql:host=localhost;dbname=lombric', 'root', 'root', $pdo_options);
		}catch (Exception $e){
			$pdoupdate = null;
		}
/*
	$sql="select * from groups";
	$nb= $pdo ->query($sql);

	while($row=$nb->fetch()){
		echo $row['id_groups'];
		print_r($row);
	}

*/

//insert dans la new base de donnes

	$groups="insert into groups (name,description,specifications,parent_id,hide) values 
	($name,$description,$cahier,$parent_id,$hide)";

	$data = $pdoupdate->prepare("insert into groups(name,description,specifications,parent_id,hide) values (:name,:description,:cahier,:parent_id,:hide)");
	try{
	$data->execute(
		array(
			"name"=>$name,
			"description"=>$description,
			"cahier"=>$cahier,
			"parent_id"=>$parent_id ,
			"hide"=>$hide
			)
		);
		echo 'champ reussi '.$name .'</br>';
	}
	
	catch(Exception $e) {

		echo $e->getMessage();
		echo 'erreur script'.$name .'</br>';
	}

}



  
?>

