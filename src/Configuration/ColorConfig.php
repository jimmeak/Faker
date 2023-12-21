<?php

namespace Jimmeak\FakerBundle\Configuration;

class ColorConfig extends AbstractConfig
{
    public static function new(string $propertyName): ColorConfig
    {
        return self::create($propertyName, 'color');
    }
}
