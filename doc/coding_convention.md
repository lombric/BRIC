**Function: establish the convention rules for the coding
Date: 22.01.2012
Version: 1.0**

#*Coding convention*#

#SQL#
##Field names##

The name of the fields need to be in english and on the singular form.

name of the database and the tables: name  
example: user

Primary key: **idn**ame  
example: **id**user

Foreign key: **fk__n**ame 
example: **fk__u**ser

Name of the compound fields: name\_name  
example: user\_address 

#PHP#

## Variables ##
Each variable name begins with a lowercase letter indicating the type of the variable followed by the variable name with the first letter capitalized.

**Examples:**

* `$sString`
* `$iInteger`
* `$aArray`
* `$bBoolean`

## Instructions ##

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

##Single and double quotes##

Text in PHP does never take double quotes.  
The only time you can write double quotes is for HTML attributes.  
Always use concatenation to display variable. The concatenation points are surrounded by spaces.

**Examples:**

`$sSting = 'Hello World';`  
`echo 'Hello World';`  
`echo '<div class="header"></div>';`  
`echo 'Hello ' . $sString . ' !';`