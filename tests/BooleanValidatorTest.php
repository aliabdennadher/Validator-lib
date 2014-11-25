<?php
/**
 * Created by PhpStorm.
 * User: Abdennadher
 * Date: 25/11/14
 * Time: 13:10
 */

namespace Tests\AB\ValidatorLib;

use AB\ValidatorLib;

/**
 * Class BooleanValidatorTest
 * @package Tests\JB\Validator
 */
class BooleanValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testIsTrue()
    {
        $boolean = true;
        $test = ValidatorLib\BooleanValidator::isTrue($boolean);

        $this->assertEquals($boolean, $test);
    }

    /**
     *
     */
    public function testIsFalse()
    {
        $boolean = false;
        $test = ValidatorLib\BooleanValidator::isFalse($boolean);

        $this->assertEquals(true, $test);
    }
} 