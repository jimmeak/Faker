<?php

namespace Jimmeak\FakerBundle\Configuration;

class IntConfig extends AbstractConfig
{
    use GeneratorPropertyTrait;

    public static function new(string $propertyName, int $from = null, int $to = null): IntConfig
    {
        $config = self::create($propertyName, 'int');

        if (null !== $from) {
            $config->addProp('from', $from);
        }

        if (null !== $to) {
            $config->addProp('to', $to);
        }

        return $config;
    }

    public function setFrom(int $from): static
    {
        $this->addProp('from', $from);

        return $this;
    }

    public function setTo(int $to): static
    {
        $this->addProp('to', $to);

        return $this;
    }
}
