<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class GenderType extends Enum
{
    const m = 'm';
    const f = 'f';
    const k = 'k';
    const a = 'a';

    /**
     * @param string $key
     * @return string
     */
    public static function getLabel($key):string {
        switch ($key){
            case self::m:
                return "male";
            case self::f:
                return "female";
            case self::k:
                return "unknown";
            case self::a:
                return "unapplicable";
            default: return "";
        }
    }

    /**
     * @param $label
     * @return int
     */
    public static function getValueFromLabel($label):int {
        switch ($label){
            case "male":
                return self::m;
            case "female":
                return self::f;
            case "unknown":
                return self::k;
            case "unapplicable":
                return self::a;
            default: return "";
        }
    }
}
