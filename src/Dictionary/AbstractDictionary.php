<?php

namespace Jimmeak\FakerBundle\Dictionary;

abstract class AbstractDictionary
{
    /**
     * @param array<int|string|bool, int|string|bool> $array
     */
    protected static function getRandomElement(array $array): string|int|bool
    {
        return $array[array_rand($array)];
    }

    /**
     * @param array<int|string|bool, int|string|bool> $array
     */
    protected static function getRandomString(array $array): string
    {
        return sprintf('%s', self::getRandomElement($array));
    }

    protected static function toString(string|int|bool $item): string
    {
        return sprintf('%s', $item);
    }
}
