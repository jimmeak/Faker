<?php

namespace Jimmeak\FakerBundle\Configuration;

class PhoneNumberConfig extends AbstractConfig
{
    public static function new(string $propertyName): PhoneNumberConfig
    {
        return self::create($propertyName, 'phoneNumber');
    }
}
