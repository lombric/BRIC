Unit tests
=====================

###Pear installation

#####Preparation
- You must download pear on : pear.php.net/go-pear.phar.
- Create a pear directory on ...wamp/bin/php/php5.3.10
- Copy the file go-pear.phar on the folder you created previously

#####Installation
- Open cmd
- Be placed in .../php5.3.10
- Write *php PEAR/go-pear.phar* 
- Close and re-open
- Test it : write *pear*  
*If this command is not found, execute PEAR_ENV in php/php5.3.10. This file must add the command on windows' path. Close and re-open cmd.*
- Update pear : *pear upgrade-all*
- Add depositories which contains phpUnit : *pear channel-discover components.ez.no*
- Secondly : *pear channel-discover pear.phpunit.de*
- Thirdly : *pear channel-discover pear.symfony-project.com*

###PHPUnit installation

- Write : *pear install –alldeps phpunit/PHPUnit*
- Add PHPUnit's libraries :
    - You must open php.ini in wamp/bin/php/php5.3.10 and search the line "include_path". Copy it.
	- Open the Apache's php.ini in wamp/bin/apache/apache2.2.21/bin. Search the same line and paste the copied line here.
- Restart wamp

###Selenium installation

Official documentation : http://docs.seleniumhq.org/docs/05`_`selenium`_`rc.jsp

Selenium is a suite of tools to automate the testing of web applications on multiple platforms. We will use Remote Control which will launch the tests written in any programming language. It is necessary for the implementation of tests in Yii.

#####Preparation
		
- Download Selenium RC on http://docs.seleniumhq.org/download/  
*It's an Java application, so Java must be updated. If necessary, add Java on the path.*

- Write  *java –jar c:\chemin\selenium-server….jar* on cmd-> It will start Selenium Server. You must start it when you execute functionnal tests.

#####Installation of PHPUnit_Selenium package
- Launch cmd.exe and write : *pear install phpunit/PHPUnit_Selenium*  
*If you receive the error ‘phpunit/PHPUnit_Selenium requires PHP extension “curl” then do the following:
  - You must force the installation by : pear install --force phpunit/PHPUnit_Selenium*

###Launch the tests
- cd testdrive/protected/tests
- phpunit functional/PostTest.php     //executes an individual test
- phpunit --verbose functional       //execute all tests under 'functional'  
=> All the commands: http://phpunit.de/manual/3.8/en/textui.html

##Folders concerned on Yii
Our location : BRIC\BRIC\app\protected\tests  
![location](folders.png)























