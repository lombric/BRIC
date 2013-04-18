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
    $groupsId[$item['id']] = $id;
}

// Insert items
$id = 0;
$command = $this->db->createCommand();
foreach($oldGroups as $item){
    $id++;
    $command->insert('groups', array(
        'id' => $id,
        'name' => utf8_encode($item['nom']),
        'description' => utf8_encode($item['description']),
        'specifications' => utf8_encode($item['cahier']),
        'parent_id' => $groupsId[$item['idGroupeParent']],
        'hide' => $item['cache']
    ));
}