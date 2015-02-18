Structure du Framework
======

~~~
.htaccess
composer.json
index.php
App\
Core\
vendor
~~~

htaccess
----
le fichier `.htaccess` permet d'activer la réécriture d'url. De plus il redirige tout ce qui n'est pas fichier vers l'index.php
~~~
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
#RewriteCond %{REQUEST_URI} !\.(jpg|png|css|js)$
RewriteRule (.*) index.php/$1 [L]
~~~

composer.json
-----
Ce fichier permet de définir les dépenses nécessaire au fonctionnement du projet. Les dépendances principales sont : Doctrine et Slim.
Il permet également de chager les classes dynamiquement grace à l'autoloader intégrer dans composer. 
Le dossier vendor appartiens à COmposer, c'est ici que installé les dépendances ainis que l'autoloader (fichier àutoload.php`se trouvant à la racine)
~~~
...
"autoload":{
        "psr-4":{
            "App\\" : "App",
            "Config\\" : "Config",
            "Core\\" : "Core"
        }
    }
...
~~~
Ici, j'utilise le PSR-4  car il permet d'avoir une structure de fichier plus simple.

index.php
------
Le fichier `index.php` est le point d'entrée de l'application. Il initialise le Bootstrap et l'Application.


Dossier Core
============
Ce dossier est le coeur du framework, il contient l'ensemble des classes neccessaire au bon fontionnement des applications utilisant le noyaux.

Fonctionnement
--------------
Le fichier `index.php` instancie un objet Application. C'est l'objet central du noyaux, il a  pour but d'initialiser le gestionnaire de routes (Slim) et de décomposer la requeste. 
1. La première chose qui est faite est la construction de l'objet `Request`qui fait tout simplement qu'analyser en stockant dans l'attribut `data` les variables contenu en POST.
2. Il créée un objet de la classe `Slim`. LA référence de cette objet est très importante car elle sera utiliser pour par exemple appeler une vue, faire un lien d'une vue à une autre etc. 
3. Le routeur est ensuite créé à partir de la référence de l'objet Slim. Le routeur est un élément important de Proton, il va analyser les urls et en fonction des routes définie appeler la bonne fonction à utiliser.
4. Initialiser des routes. Celle se trouvant dans la configuration de l'application (varibale `$routes`) ainsi que celles se trouvant dans les différents modules. Plus de détail dans la partie consacrée au fichier de configuration.