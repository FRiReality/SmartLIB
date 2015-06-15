# **SmartLIB** #
___
## Présentation de la librairie ##
SmartLIB est une librairie PHP très simple à installer. Grâce à cette librairie vous pourrez réaliser un projet tel qu'un blog ou encore un portfolio en toute simplicité.

![https://htmlpreview.github.io/?https://github.com/brandon-xprodeur/SmartLIB/index.html](http://i.imgur.com/HFzaMPu.png)

#**Documentation**#
___


##**Installation** ##
<br/>

>Je comprend pas, comment voulez-vous que j'utilise **SmartLIB** alors qu'il y à même pas de dossier **assets** pour mettre le style de notre site.
<br/>
C'est le but d'une librairie, vous importez simplement le dossier **SmartLIB** à la racine de votre projet et vous faite dans votre **index.php**
 
    <?php require_once'SmartLIB/index.php'; ?>


tout simplement, maintenant vous avez installer la librairie, plus qu'a la configurer.

<br/>

##**Le fonctionnement** ##
<br/>
Nous allons voir comment la librairie fait pour appeler les divers class et comment config la librairie.

La librairie est vraiment simple à comprendre, tout d’abord dans mon dossier  ***SmartLIB***

- *SmartLIB*/
   - *Toute mes class*
   - *Configuration.php*
- *index.php*

Une ***index.php*** ou il y a toute les class qui sont appeler et un dossier ou il y a toute les class réalisé, ce qui nous interesse là c'est configurer notre librairie; donc nous allons ouvrir le fichier ***Configuration.php*** dans le dossier ***SmartLIB***.
<br/>
Comme vous pouvez le voir il y quelques define(Ne vous en faite rien à toucher, c'est juste pour récupérer l'url de votre site et une class **Config** et une variable **$config** avec deux tableaux, le premier, **Library** qui nous permet de configurer notre librairie et **Connections** qui nous permet de ce connait à notre base de donnée.


> D'accord mais comment je fait si j'ai déjà une configuration sur mon projet?

Vous pouvez simplement mettre un nouveau tableau dans la variable **$config** nommé **site**  ou encore **nom_de_mon_projet** et ajouté votre configuration.


##**Ajout d'une class** ##
<br/>
Comme vous pouvez le s'avoir il y aura pas toute les fonctionnalités/class d'un coup dans la librairie, vous pouvez donc en faire facilement et en les ajoutant très simplement mais aussi les proposer pour les ajoutés sur **SmartLIB**.

1. Créer un fichier avec le nom de votre class
2. Ajouter le namespace *Core* en haut de votre fichier
3. Insérer votre class en dessous de votre namespace
4. Faite une $variable de votre class | ex : $ma_variable = new maClass;
5. Plus qu'a appeler vos fonctions et le tour et joué.

##**Documentation des class** ##
<br/>

> J'ai un petit souci avec votre class je n'arrive pas à x ou y.

Si vous avez un souci avec une classe ou une fonction, hésitez pas à regarder/fouiller dans le code mais aussi dans ***index.php*** il y a des commentaires sur la droite en vous expliquant comment elle fonctionne mais aussi quelle sont les paramètres à passer dans la fonction.

##**Me contacter** ##
<br/>
* Adresse mail : brandon-xprodeur@live.fr
* Skype : brandon-xprodeur
* Twitter : @brandonxprodeur
