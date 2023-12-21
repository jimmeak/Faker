<?php

namespace Jimmeak\FakerBundle\Configuration;

class CompanyConfig extends AbstractConfig
{
    public static function new(string $propertyName): CompanyConfig
    {
        return self::create($propertyName, 'company');
    }
}
