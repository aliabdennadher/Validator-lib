<?php
/**
 * Created by PhpStorm.
 * User: Abdennadher
 * Date: 22/11/14
 * Time: 17:50
 */

require __DIR__.'/vendor/autoload.php';

$test = 'machainecestsa';

$validation = \JB\Validator\StringValidator::noWhiteSpace($test);
var_dump($validation);