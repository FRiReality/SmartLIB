<link rel="stylesheet" href="SmartLIB/Assets/style.css"/>
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
    // $debug::dd($ma_variable, FALSE);
    //$debug::pp($_SESSION, FALSE);
    //$debug::session($ma_variable, FALSE);


/* Utils */
$site = new Core\Utils();
    $site->tva('130.34');
    $site->key();
    $site->linkCSS(URL, '');
    $site->linkJS(URL, '');


/* Database */
$db = new Core\Database('localhost', 'root', '', 'boutique');
    $db->query('SELECT * FROM products');
    //$db->query();
    //$db->delete();


/* Session */
$session = new \Core\Session();
    //$session->setFlash($ma_variable, 'success');
    $session->write('SmartLIB', $ma_variable);
    $session->read($ma_variable);


/* Cache */
$cache = new \Core\Cache('Cache', '30');
    $cache->inc('composer.json', 'composer');
    $cache->write('mon_test', $ma_variable);
    $cache->delete('mon_test');
    $cache->clear('mon_test');


/* Form */
$form = new Core\Form();
    $form->method('POST');
    $form->target('index.php');
    $form->input('text', 'salut','salut', ''); // 1 = Type | 2 = Name | 3 = Label
    $form->build();