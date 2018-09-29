<?php
/**
 * Created by PhpStorm.
 * User: wilder22
 * Date: 28/09/18
 * Time: 17:50
 */
require "../vendor/autoload.php";
use \App\Wcs\Hello;
use HelloWorld\SayHello;

$objet = new Hello();
echo $objet ->talk();

$objet = new SayHello();
echo $objet-> world();