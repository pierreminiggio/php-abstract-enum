<?php

namespace PierreMiniggio\Enum;

use ReflectionClass;

abstract class Enum
{

    private static ReflectionClass $spl;

    public static function getMap(): array
    {
        if (! isset(static::$spl)) {
            static::$spl = new ReflectionClass(get_called_class());
        }
        
        return static::$spl->getConstants();
    }

    public static function getValues(): array
    {
        return array_values(static::getMap());
    }
}
