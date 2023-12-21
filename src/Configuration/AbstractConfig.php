<?php

namespace Jimmeak\FakerBundle\Configuration;

use Jimmeak\FakerBundle\Enum\Sex;

abstract class AbstractConfig
{
    protected string $propertyName;
    protected string $generatorName;

    final public function __construct()
    {
    }

    public function getPropertyName(): string
    {
        return $this->propertyName;
    }

    public function getGeneratorName(): string
    {
        return $this->generatorName;
    }

    protected static function create(string $propertyName, string $generatorName): static
    {
        $config = new static();
        $config->propertyName = $propertyName;
        $config->generatorName = $generatorName;

        return $config;
    }

    /**
     * @return array<string, string|float|int|Sex|null>
     */
    public function getConfig(): array
    {
        return array_merge(
            ['generatorName' => $this->generatorName],
            $this->generatorProps ?? []
        );
    }
}
