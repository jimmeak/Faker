<?php

namespace Jimmeak\FakerBundle\Configuration;

class TitleConfig extends AbstractConfig
{
    public static function new(string $propertyName): TitleConfig
    {
        return self::create($propertyName, 'title');
    }
}
