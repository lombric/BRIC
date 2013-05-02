<?php

// Get old items
$oldMembers = $this->oldDb->createCommand()
    ->select('id, prenom, nom, email, ville, adresse, npa, natel, telephone, remarque, login, motDePasse')
    ->from('membres')
    ->queryAll();

// Match IDs
$id = 0;
$membersId = array();
foreach($oldMembers as $item){
    $id++;
    if($item['id']>0)
        $membersId[$item['id']] = $id;
    else
        $membersId[$item['id']] = NULL;
}

// Insert items
$id = 0;
$command = $this->db->createCommand();
foreach($oldMembers as $item){
    $id++;
    $command->insert('members', array(
        'id' => $id,
        'firstname' => $item['prenom'],
        'lastname' => $item['nom'],
        'email' => $item['email'],
        'city' => $item['ville'],
        'address' => $item['adresse'],
        'zip' => $item['npa'],
        'mobile_phone' => $item['natel'],
        'phone' => $item['telephone'],
        'description' => $item['remarque'],
        'username' => $item['login'],
        'password' => $item['motDePasse']
    ));
}