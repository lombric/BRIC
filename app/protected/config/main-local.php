<?php

return array(
    'components'=>array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=lombric',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
    ),
    'modules'=> array(
        'gii'=>array(
            'password'=>'lombric',
        ),
    ),
);

?>