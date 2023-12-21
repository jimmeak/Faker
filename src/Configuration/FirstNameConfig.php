<?php

namespace Jimmeak\FakerBundle\Configuration;

use Jimmeak\FakerBundle\Enum\Sex;

class FirstNameConfig extends AbstractConfig
{
    use GeneratorPropertyTrait;

    public static function new(string $propertyName, Sex $sex = null): FirstNameConfig
    {
        $config = self::create($propertyName, 'firstName');
        $config->addProp('sex', $sex);

        return $config;
    }

    public function setSex(Sex $sex): static
    {
        $this->addProp('sex', $sex);

        return $this;
    }
}
