<?php

namespace Jimmeak\FakerBundle\Configuration;

class UsernameConfig extends AbstractConfig
{
    public static function new(string $propertyName): UsernameConfig
    {
        return self::create($propertyName, 'username');
    }
}
