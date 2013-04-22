**Function: explain how to use the tools of the project Date: 22.04.2013 Version: 1.0**

Basics
==========================

###Database###

#####Structure and datas#####

For the database, work only in the **/database** directory.

The file **structure.sql** is an SQL script who is install the sctructure (only the structure) of the database.

The datas is comming from the old lombric database and there is few PHP script for the migration. This files are prefixed by **datas.**. The code use the Yii Framework classes.

If you want to add a new script, create a new file like **datas.*table_name*.php**. When you've finished, add the *require_once('file');* line to the **datas.php** file (the ordre of the require instructions is important).


#####ResetDB Command#####

There is a command to reset the database. All the datas and the structure will be erased and reimported from the scripts.

For that, use the Windows command prompt and go to the **app/protected/** directory.
Use the yiic command with the parameter **resetdb** and that's all. Now, the structure is reimported but not the datas.

If you specify another parameter, it will be used to specify that you want importe the datas after the structure. This parameter is the name of the old database.

*Ex : reset the structure : **yiic resetdb***

*Ex : reset the structure and importe the datas from the old database : **yiic resetdb lombric_old***

The script use the **console-main.php** configuration file for the database connection.


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

