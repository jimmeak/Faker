<?php

namespace Jimmeak\FakerBundle\Configuration;

use Jimmeak\FakerBundle\Enum\Sex;

class FullNameConfig extends AbstractConfig
{
    use GeneratorPropertyTrait;

    public static function new(string $propertyName, Sex $sex = null): FullNameConfig
    {
        $config = self::create($propertyName, 'fullName');
        $config->addProp('sex', $sex);

        return $config;
    }

    public function setSex(Sex $sex): static
    {
        $this->addProp('sex', $sex);

        return $this;
    }
}
