<?php
require 'vendor/autoload.php';

$ma_variable = 'Ceci est une phrase de test :)';

/******************************************************************/
/******************************************************************/

/* Bootstrap */
$app = new Core\Bootstrap();
$app->run();

/* Debug */
$debug = new Core\Debug();

/* Utils */
$site = new Core\Utils();
/**
 * @params URL = URL complete du site
 * @params chemin du fichier CSS/JS
 */
$site->linkCSS(URL, 'assets/css/style.css');
$site->linkJS(URL, 'assets/js/jquery.js');
$site->tva('140', '20');

/* Database */
$db = new Core\Database('localhost', 'root', '', 'boutique');

/* Debug */
$debug::dd($ma_variable, FALSE);
$debug::dd($_SESSION, FALSE);

/* Session */
$session = new \Core\Session();
$session->setFlash($ma_variable);

  /* Form */
$form = new Core\Form();
$form->method('POST'); // méthode du formulaire
$form->target('index.php');// cible du formulaire
$form->input('text', 'salut','salut', ''); // 1 = Type | 2 = Name | 3 = Label
$form->draw(); // Génere un formulaire

