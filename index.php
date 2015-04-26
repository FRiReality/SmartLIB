<?php
require 'vendor/autoload.php';

/******************************************************************/
/******************************************************************/

/* Bootstrap */
$app = new Core\Bootstrap();
$app->run();

/* Debug */
$debug = new Core\Debug();

/* DefaultSite */
$site = new Core\DefaultSite();
$site->linkCSS(URL, 'style/css/style.css'); // URL = URL complete du site

/* Database */
$db = new Core\Database();

/* Debug */
$ma_variable = 'Mon debug fonctionne';
$debug::dd($ma_variable, FALSE);

/* Form */
$form = new Core\Form();
$form->method('POST'); // méthode du formulaire
$form->target('index.php');// cible du formulaire
$form->input('text', 'salut','salut', ''); // 1 = Type | 2 = Name | 3 = Label
$form->draw(); // Génere un formulaire