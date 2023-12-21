<?php

namespace Jimmeak\FakerBundle\Configuration;

class PhoneConfig extends AbstractConfig
{
    public static function new(string $propertyName): PhoneConfig
    {
        return self::create($propertyName, 'phone');
    }
}
