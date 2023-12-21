<?php

namespace Jimmeak\FakerBundle\Configuration;

class ParagraphConfig extends AbstractConfig
{
    use GeneratorPropertyTrait;

    public static function new(string $propertyName, int $amount = 2): ParagraphConfig
    {
        $config = self::create($propertyName, 'paragraph');
        $config->addProp('sentences', $amount);

        return $config;
    }

    public function setAmount(int $amount): static
    {
        $this->addProp('sentences', $amount);

        return $this;
    }
}
