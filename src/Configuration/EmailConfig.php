<?php

namespace Jimmeak\FakerBundle\Configuration;

class EmailConfig extends AbstractConfig
{
    public static function new(string $propertyName): EmailConfig
    {
        return self::create($propertyName, 'email');
    }
}
