<?php

// Get old items
$oldMembersGroups = $this->oldDb->createCommand()
    ->select('idMembre, idGroupe')
    ->from('estmembregroupe')
    ->queryAll();

// Insert items
$command = $this->db->createCommand();
foreach($oldMembersGroups as $item){
    if(isset($membersId[$item['idMembre']]) && isset($groupsId[$item['idGroupe']])){
        $command->insert('members_groups', array(
            'group_id' => $groupsId[$item['idGroupe']],
            'member_id' => $membersId[$item['idMembre']]
        ));
    }
}