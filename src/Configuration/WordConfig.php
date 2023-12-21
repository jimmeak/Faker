<?php

namespace Jimmeak\FakerBundle\Configuration;

class WordConfig extends AbstractConfig
{
    use GeneratorPropertyTrait;

    public static function new(string $propertyName, int $amount = 1): WordConfig
    {
        $config = self::create($propertyName, 'words');
        $config->addProp('amount', $amount);

        return $config;
    }

    public function setAmount(int $amount): static
    {
        $this->addProp('amount', $amount);

        return $this;
    }
}
