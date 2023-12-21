<?php

namespace Jimmeak\FakerBundle\Configuration;

class FloatConfig extends AbstractConfig
{
    use GeneratorPropertyTrait;

    public static function new(string $propertyName, float $from = null, float $to = null, float $precision = null): FloatConfig
    {
        $config = self::create($propertyName, 'float');

        if (null !== $from) {
            $config->addProp('from', $from);
        }

        if (null !== $to) {
            $config->addProp('to', $to);
        }

        if (null !== $precision) {
            $config->addProp('precision', $precision);
        }

        return $config;
    }

    public function setFrom(float $from): static
    {
        $this->addProp('from', $from);

        return $this;
    }

    public function setTo(float $to): static
    {
        $this->addProp('to', $to);

        return $this;
    }

    public function setPrecision(float $precision): static
    {
        $this->addProp('precision', $precision);

        return $this;
    }
}
