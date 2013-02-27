**Function: establish the convention rules for the coding  
Date: 27.02.2013  
Version: 2.0**

#Coding convention

##DATABASE
###Tables name
The name of the tables need to be in english and on the plural form.  
examples: **users**, **groups**, etc.

Name of the compound names: name\_name  
example: **users\_groups** 

###Fields name

The name of the fields need to be in english and on the singular form.

Primary key: name\_id  
example: **user\_id**

Foreign key: name\_id   
example: **group\_id**

Name of the compound fields: name\_name  
example: **first_name**

###Encodage

The database, the tables and all the fields must be set with the same charset.  
Prefer **UTF8** for a better internationalization.

##PHP

###Variables
Each variable name begins with a lowercase letter indicating the type of the variable followed by the variable name with the first letter capitalized.

**Examples:**

* `$sString`
* `$iInteger`
* `$aArray`
* `$bBoolean`

###Instruction blocs

Braces are preceded by brackets and are not in line.  
Equal signs are separated from the rest of the condition by spaces.  
Brackets are separated in the same way that equal signs.

**Examples:**

`if ($iInt == 1) {`

`}`

`for ($iInt = 0; $iInt < 10; $iInt ++) {`

`}`

`function fFunction ($iInt, $sString = 'Hello World') {`

`}`

###Single and double quotes

Text in PHP does never take double quotes.  
The only time you can write double quotes is for HTML attributes.  
Always use concatenation to display variable. The concatenation points are surrounded by spaces.

**Examples:**

`$sSting = 'Hello World';`  
`echo 'Hello World';`  
`echo '<div class="header"></div>';`  
`echo 'Hello ' . $sString . ' !';`