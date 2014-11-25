<?php
/**
 * Created by PhpStorm.
 * User: Abdennadher
 * Date: 22/11/14
 * Time: 17:55
 */

namespace AB\ValidatorLib;


/**
 * Class BooleanValidator
 * @package JB\Validator
 */
/**
 * Class BooleanValidator
 * @package JB\Validator
 */
class BooleanValidator
{
    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isTrue($boolean)
    {
        if (!is_bool($boolean)) {
            throw new \Exception('$boolean must be ');
        }else {
            if( filter_var($boolean, FILTER_VALIDATE_BOOLEAN) ) {
                return true;
            }else{
                return false;
            }
        }
    }

    /**
     * @param bool $boolean
     *
     * @return bool
     *
     * @throws \Exception
     */
    public static function isFalse($boolean)
    {
        if (!is_bool($boolean)) {
            throw new \Exception('$boolean must be ');
        }else {
            if (!filter_var($boolean, FILTER_VALIDATE_BOOLEAN, ['flags' => FILTER_NULL_ON_FAILURE])) {
                return true;
            } else {
                return false;
            }
        }
    }
}