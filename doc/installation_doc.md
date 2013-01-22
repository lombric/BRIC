**Function: explain how to install the Yii framework in your computer
Date: 22.01.2012
Version: 1.0**

## First you need to inform the system who's php: ##

You need to inform the envrionment variable PATH who's PHP.

# 
1. Go in system -> advanced settings -> envrionment variables -> select PATH -> add the path of php
2. Then open a shell window and go the directory of Yii
- ../yii/framework
3. Install the new webapp with the following command
- yiic webapp (and the path of the new foler of you site) #

First - Files would be modify :
==============================

***protected\config\main.php***
 
####DB informations####

	
	Uncomment:
	
		'db'=>array(...
	     ),
	Fill in the fields with necessaries informations :  
	
	* host=''  	
	* dbname=''  
	* username=''  
	* password=''  
	
####Gii Activation####
Gii is the frameworks's code generator, it will create automatically all models and the CRUD.


	Uncomment:    	

	    'gii'=>array(
	     ),	
	Fill in the field :
	
	* 'password'=>''
	
**protected\\.htaccess**

####Url-rewriting configuration####

Write these lines in .htaccess

    	Options +FollowSymLinks
	    IndexIgnore */*
	    RewriteEngine on
	    # if a directory or a file exists, use it directly
	    RewriteCond %{REQUEST_FILENAME} !-f
	    RewriteCond %{REQUEST_FILENAME} !-d
	    # otherwise forward it to index.php
	    RewriteRule . index.php

	
Second - Models creation
========= 

/!\ Models must be created first.

Gii's adress : *localhost/website/gii*

Model Generator :

   * Table Name : *example : article*
   * Model Class : fill in automatically  *example: Article*

	 [ Click ]=> Preview   
	 [ Click ]=> Generate


CRUD Generator :

  * Model Class : name of each model class (first letter capitalized) *example : Article*
  * Controller ID : name of each table *example : article*
	
	 [ Click ]=> Preview    
     [ Click ]=> Generate











