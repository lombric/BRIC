<?php

// Get old items
$oldGroups = $this->oldDb->createCommand()
    ->select('id, nom, description, cahier, idGroupeParent, cache')
    ->from('groupe')
    ->order('idGroupeParent ASC')
    ->queryAll();

// Match IDs
$id = 0;
$groupsId = array();
foreach($oldGroups as $item){
    $id++;
    if($item['id']>0)
        $groupsId[$item['id']] = $id;
    else
        $groupsId[$item['id']] = NULL;
}

// Insert items
$id = 0;
$command = $this->db->createCommand();
foreach($oldGroups as $item){
    $id++;
    $command->insert('groups', array(
        'id' => $id,
        'name' => $item['nom'],
        'description' => $item['description'],
        'specifications' => $item['cahier'],
        'parent_id' => $groupsId[$item['idGroupeParent']],
        'hide' => $item['cache']
    ));
}