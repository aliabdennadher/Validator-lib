<?php
/**
 * Created by PhpStorm.
 * User: Abdennadher
 * Date: 23/11/14
 * Time: 10:12
 */

namespace Tests\AB\Validator;

use AB\Validator;

/**
 * Class BooleanValidatorTest
 * @package Tests\JB\Validator
 */
class BooleanValidatorTest extends \PHPUnit_Framework_TestCase{

    /**
     *
     */
    public function testIsTrue(){

        $boolean = true;
        $test = Validator\BooleanValidator::isTrue($boolean);

        $this->assertEquals($boolean, $test);
    }

    /**
     *
     */
    public function testIsFalse(){

        $boolean = false;
        $test = Validator\BooleanValidator::isFalse($boolean);

        $this->assertEquals(true, $test);
    }
} 