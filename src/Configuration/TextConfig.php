<?php

namespace Jimmeak\FakerBundle\Configuration;

class TextConfig extends AbstractConfig
{
    use GeneratorPropertyTrait;

    public static function new(string $propertyName, int $words = 1): TextConfig
    {
        $config = self::create($propertyName, 'text');
        $config->addProp('words', $words);

        return $config;
    }

    public function setAmount(int $amount): static
    {
        $this->addProp('words', $amount);

        return $this;
    }
}
