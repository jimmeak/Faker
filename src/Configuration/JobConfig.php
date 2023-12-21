<?php

namespace Jimmeak\FakerBundle\Configuration;

use Jimmeak\FakerBundle\Enum\Sex;

class JobConfig extends AbstractConfig
{
    use GeneratorPropertyTrait;

    public static function new(string $propertyName, Sex $sex = null): JobConfig
    {
        $config = self::create($propertyName, 'job');
        $config->addProp('sex', $sex);

        return $config;
    }

    public function setSex(Sex $sex): static
    {
        $this->addProp('sex', $sex);

        return $this;
    }
}
