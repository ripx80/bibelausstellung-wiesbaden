<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['name','email','people','visitdate','time','language','message'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('name')->maxLength(100);
$validator->field('message')->maxLength(6000);
$validator->field('people')->maxLength(100);
$validator->field('language')->maxLength(100);
$validator->field('visitdate')->maxLength(100);
$validator->field('time')->maxLength(100);

$pp->requireCaptcha();
$pp->sendEmailTo('info@bibelausstellung-wiesbaden.de'); 

echo $pp->process($_POST);
