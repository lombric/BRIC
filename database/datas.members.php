<?php

// Get old items
$oldMembers = $this->oldDb->createCommand()
    ->select('id, prenom, nom, email, ville, adresse, npa, natel, telephone, remarque, login')
    ->from('membres')
    ->queryAll();

// Match IDs
$id = 0;
$membersId = array();
foreach($oldMembers as $item){
    $id++;
    $membersId[$item['id']] = $id;
}

// Insert items
$id = 0;
$command = $this->db->createCommand();
foreach($oldMembers as $item){
    $id++;
    $command->insert('members', array(
        'id' => $id,
        'firstname' => utf8_encode($item['prenom']),
        'lastname' => utf8_encode($item['nom']),
        'email' => utf8_encode($item['email']),
        'city' => utf8_encode($item['ville']),
        'address' => utf8_encode($item['adresse']),
        'zip' => utf8_encode($item['npa']),
        'mobile_phone' => utf8_encode($item['natel']),
        'phone' => utf8_encode($item['telephone']),
        'description' => utf8_encode($item['remarque']),
        'username' => utf8_encode($item['login']),
        'password' => utf8_encode('')
    ));
}