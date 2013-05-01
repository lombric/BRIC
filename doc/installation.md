**Function: explain how to setup the project on your local environment Date: 22.04.2013 Version: 1.1**

Installation documentation
==========================

####Requirements####

* PHP 5.3


####Define where's the PHP command####

You need to inform the envrionment variable PATH.

1. **System** -> **Advanced settings** -> **Envrionment variables**
2. Select **PATH** and add the directory of PHP
2. Then open a Windows command prompt and go the directory of Yii
3. Install the new project with the following command : **yiic webapp *path to the directory to install it***


####Local environment installation####

Get the source code with:

    git clone git@github.com:lombric/BRIC.git
    cd BRIC
    git submodule update --init --recursive
 

####Set your local configuration files####

1. Go to the directory **app/protected/config/**
2. Duplicate the files **main-local.php.default** and **console-local.php.default** and remove the **.default** suffix.
3. Personnalize the informations with your local configuration.

Your local files will not be push to the Git Repository.

Note: if you have troubles with GIIX update the **submodules** with the following command:

    git submodule update --init --recursive








