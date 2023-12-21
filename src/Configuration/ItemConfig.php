<?php

namespace Jimmeak\FakerBundle\Configuration;

class ItemConfig extends AbstractConfig
{
    public static function new(string $propertyName): ItemConfig
    {
        return self::create($propertyName, 'item');
    }
}
