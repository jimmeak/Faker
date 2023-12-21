<?php

namespace Jimmeak\FakerBundle\Configuration;

class SexConfig extends AbstractConfig
{
    use GeneratorPropertyTrait;

    public static function new(string $propertyName, bool $asString = false): SexConfig
    {
        $config = self::create($propertyName, 'sex');
        $config->addProp('asString', $asString);

        return $config;
    }

    public function setAsString(bool $asString = true): static
    {
        $this->addProp('asString', $asString);

        return $this;
    }
}
