Mise en place des tests
=======================
Nous allons mettre une place une série de tests unitaires qui vont nous permettre de tester les fonctionnalités de façon automatisée et à chaque avancée de parties.  Les tests doivent être à fine maille, c’est-à-dire en ne testant qu’un seul aspect d’un seul objet.

__Installation de PHPUnit__

Il faut installer le paquet Pear :

- http://pear.php.net/manual/en/installation.getting.php

__Convention et étapes de base pour l'écriture des tests__

- Les tests pour une classe *classe* vont dans *ClasseTest*

- *ClasseTest* hérite de PHPUnit\_Framework\_TestCase

- Les tests sont des méthodes publiques appelées *test**

- On utilise des méthodes d'assertion pour affirmer qu'une valeur constatée correspond à une valeur attendue.

Bibliothèque des méthodes d'assertion : http://www.phpunit.de/manual/3.7/fr/index.html





