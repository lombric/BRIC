**Function: explain how to use the tools of the project Date: 22.04.2013 Version: 1.0**

Basics
==========================

###Database###

#####Structure, datas and defaults#####

For the database, work only in the **/database** directory.

The file **structure.sql** is an SQL script who is install the sctructure (only the structure) of the database.

The datas is comming from the old lombric database and there is few PHP script for the migration. This files are prefixed by **datas.** and the PHP code use the Yii Framework functions.

If you want to add a new script, create a new file like **datas.*table_name*.php**. When you've finished, add the *require_once('file');* line to the **datas.php** file (the ordre of the require instructions is important).

A last file named **defaults.sql** is executed in last step. This one contains only SQL commands and serves to insert some datas in the database which are used by the developers. An example is to insert an admin account.

If you want edit the command PHP script, this one is located in the file **/app/protected/commands/ResetDbCommand.php**.


#####ResetDB Command#####

There is a command to reset the database. All the datas and the structure will be erased and reimported from the scripts.

For that, use the Windows command prompt and go to the **app/protected/** directory.
Use the yiic command with the parameter **resetdb** and that's all. Now, the structure is reimported but not the datas.

If you specify the parameter **with-datas**, it will be used to specify that you want importe the datas after the structure.

*Ex : reset the structure : **yiic resetdb***

*Ex : reset the structure and importe the datas from the old database : **yiic resetdb with-datas***

The script use the **console-main.php** configuration file for the database connection.


#####Defaults#####

There is a default user in the database :

- Name : **admin**
- Password : **admin**


###GIIX###

An extension of GII is included.

To generate the models and the CRUD, go to the GII normal site Web : **website/gii**.

First, generate the models from the **GIIX PAGE**. Two files will be created : the main model in **models/_base** and an child model in **models**.

After that, you can regenerate the main models and keep your modifications in the second file (be carefull, don't overide it).

You can generate the CRUD the first time from GII, but after that, you can't do it again, because changes to controllers and views will be lost.

#####Naming conventions#####

The class must be in plural form and with the first letter capitalized.

Modeles : **Members**

CRUD : **Members**


###Translation###

Explanation of the translation on Yii

#####Activate translation#####

In app/protected/config/main.php, you have to add this following lines in the array of this page :

- 'sourceLanguage'=>'en',		//This will determine the language of the content of the site (as it is written in the code)
- 'language' => 'fr',			//This will do the translation in the language in (). Here, in french

#####Translation files#####

The translation files are content in app/protected/messages/LANG/ where LANG is equal to the language (For french, LANG is "fr").

#####Do a translation#####

For exemple, to translate Hello world, we have to add this : <?php echo Yii::t('strings', "Hello world"); ?>.

If the set language is 'fr', YII will search a translation in the folder of the langue, in the files content in the call of the translation (here, strings)

Exemple of file "strings" in app/protected/messages/fr/strings.php :

<?php
	return array(
		'Hello world' => 'Bonjour tout le monde',
    'Cake' => 'Gateau',
    'Apple' => 'Pomme'
	);
?>

Yii will run through the file until it find "Hello world", and replace the value by the value in the language you want.
