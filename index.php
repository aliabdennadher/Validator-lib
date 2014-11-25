<?php
/**
 * Created by PhpStorm.
 * User: Abdennadher
 * Date: 22/11/14
 * Time: 16:50
 */

require __DIR__.'/vendor/autoload.php';
$test = 'bwjawajnwilknl';

$validation = \AB\Validator\StringValidator::noWhiteSpace($test);
var_dump($validation);