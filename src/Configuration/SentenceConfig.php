<?php

namespace Jimmeak\FakerBundle\Configuration;

class SentenceConfig extends AbstractConfig
{
    use GeneratorPropertyTrait;

    public static function new(string $propertyName, int $amount = 1, int $composed = 1): SentenceConfig
    {
        $config = self::create($propertyName, 'sentence');
        $config->addProp('amount', $amount);
        $config->addProp('composed', $composed);

        return $config;
    }

    public function setAmount(int $amount): static
    {
        $this->addProp('amount', $amount);

        return $this;
    }
}
