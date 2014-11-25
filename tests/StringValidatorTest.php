<?php
/**
 * Created by PhpStorm.
 * User: Abdennadher
 * Date: 25/11/14
 * Time: 13:09
 */

namespace Tests\AB\ValidatorLib;

use AB\ValidatorLib;

class StringValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testLengthIsEqualTo()
    {
        $string = 'ceci est mon texte de test';
        $expected = mb_strlen($string);

        $test = ValidatorLib\StringValidator::lengthIsEqualTo($string, $expected);
        $this->assertTrue($test);
    }
    public function testLengthIsSuperiorTo()
    {
        $string = 'test';
        $nb = 3;

        $test = ValidatorLib\StringValidator::lengthIsSuperiorTo($string, $nb);
        $this->assertTrue($test);
    }
    public function testLengthIsInferiorTo()
    {
        $string = 'test';
        $nb = 10;

        $test = ValidatorLib\StringValidator::lengthIsInferiorTo($string, $nb);
        $this->assertTrue($test);
    }
    public function testLengthBetween()
    {
        $string = 'test';
        $min = 1;
        $max = 10;

        $test = ValidatorLib\StringValidator::lengthBetween($string, $min, $max);
        $this->assertTrue($test);
    }
    public function testNoWhiteSpaceBeginAndEnd()
    {
        $string = 'No space';

        $test = ValidatorLib\StringValidator::noWhiteSpaceBeginAndEnd($string);

        $this->assertTrue($test);
    }
    public function testNoWhiteSpace()
    {
        $string = 'noSpaceHere';

        $test = ValidatorLib\StringValidator::noWhiteSpace($string);

        $this->assertTrue($test);
    }
} 