<?php

namespace Jimmeak\FakerBundle\Configuration;

class GenderConfig extends AbstractConfig
{
    public static function new(string $propertyName): GenderConfig
    {
        return self::create($propertyName, 'gender');
    }
}
