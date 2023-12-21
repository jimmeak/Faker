<?php

namespace Jimmeak\FakerBundle\Configuration;

trait GeneratorPropertyTrait
{
    /**
     * @var array<string, mixed>
     */
    protected array $generatorProps = [];

    /**
     * @return array<string, mixed>
     */
    public function getProps(): array
    {
        return $this->generatorProps;
    }

    protected function addProp(string $name, mixed $value): static
    {
        $this->generatorProps[$name] = $value;

        return $this;
    }
}
