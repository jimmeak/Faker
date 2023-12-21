<?php

namespace Jimmeak\FakerBundle\Configuration;

class CompanyTypeConfig extends AbstractConfig
{
    public static function new(string $propertyName): CompanyTypeConfig
    {
        return self::create($propertyName, 'companyType');
    }
}
