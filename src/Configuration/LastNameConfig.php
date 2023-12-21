<?php

namespace Jimmeak\FakerBundle\Configuration;

use Jimmeak\FakerBundle\Enum\Sex;

class LastNameConfig extends AbstractConfig
{
    use GeneratorPropertyTrait;

    public static function new(string $propertyName, Sex $sex = null): LastNameConfig
    {
        $config = self::create($propertyName, 'lastName');
        $config->addProp('sex', $sex);

        return $config;
    }

    public function setSex(Sex $sex): static
    {
        $this->addProp('sex', $sex);

        return $this;
    }
}
