# *SmartLIB* #
---

## Class **Bootstrap** ##


<br/>
La class **Bootstrap** est la class "principal" de la **librairie**.

* **run** *Permet d'appeler la class Bootstrap et appeler le fichier **configuration.php***
* **getInstance** *Permet d'avoir qu'une instance de la class*


<br>
## Class **Debug** ##
Vous le s'avez tout comme moi, nous sommes obligé de debug notre site par moment pour s'avoir/voir le fonctionnement d'un tableau ou encore de function... J'ai donc réalisé **3 functions** pour facilité le debug d'une d'une variable ou encore un tableau.

* **session** *Permet de mettre votre debug en session*
* **pp** *Permet de faire un print_r*
* **dd** *Permet de faire un var_dump*


<br>
## Class **Utils** ##
Cette class c'est ou il y aura des functions utiles comme pour appeler des fichiers css/js.

* **linkCSS** *Permet d'appeler un fichier css*
* **linkJS** *Permet d'appeler un fichier js*
* **tva** *Permet de calculer un prix avec la tva*
* **random** *Permet de générer une clé unique(chiffre et lettre)*

<br>
## Class **Database** ##
Grâce à cette class vous aurez juste à mettre vos identifiants et vous pourrez dès à présent l'utiliser.

* **__construct** *Permet de vous connectez à votre base de donnée*
* **query** *Permet de récupérer et insérer des données*
* **delete** *Permet de supprimer des données*
* **read** *Permet de lire des données*
* **write** *Permet d'écrire des données*
* **isLogged** *Permet de s'avoir si il est enregistré*


<br>
## Class **Session** ##
Grâce à cette class, nous pourrons passer des phrases ou autre entre des pages.

* **setFlash** *Permet de créer un message et de le mettre en session*
* **write** *Permet de créer une session*
* **read** *Permet de récupérer une session*
* **isLogged** *Permet de vérifié si l'utilisateur est connecter ou non*

<br>
## Class **Cache**
La class **Cache** pour moi est vraiment indispensable pour les très gros site ou même les très grosse pages web.

* **__construct** *Permet de créer le dossier pour le cache*
* **write** *Permet de créer un fichier et d'ajouter du contenu*
* **read** *Permet de lire un fichier*
* **delete** *Permet de supprimer un fichier*  
* **clear** *Permet de nettoyer le fichier(le vider)*
* **inc** *Permet de capturer un fichier et de le mettre en cache puis affichier le cache*

<br>
## Class **Log**
La class **Log** est très utile quand vous n'activez pas les erreurs quand votre projet n'est en ligne.

* **write** *Permet de créer un fichier et d'ajouter du contenu*

<br>
## Class **Form** ##
Cette class et avant tout une class qui nous facilite la tâche quand nous réalisons un formulaire.

* **method** *Permet de choisir la méthode du formulaire*
* **target** *Permet de choisir l'action du formulaire*
* **target** *Permet de créer un input(type, name, label, style)*
* **build**  *Permet de construire le formulaire*
