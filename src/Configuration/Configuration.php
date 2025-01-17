<?php

namespace Lfafa\Bundle\MigrationsMutlipleDatabase\Configuration;

use Doctrine\Migrations\DependencyFactory;

class Configuration
{
    /** @var DependencyFactory[] */
    private $dependencyFactories = [];

    public function addDependencyFactory(string $name, DependencyFactory $entityManager): self
    {
        $this->dependencyFactories[$name] = $entityManager;

        return $this;
    }

    /**
     * @return DependencyFactory[]
     */
    public function getDependencyFactories(): array
    {
        return $this->dependencyFactories;
    }

    /**
     * @return string[]
     */
    public function getEntityManagerNames(): array
    {
        return array_keys($this->dependencyFactories);
    }

    public function getConfigurationByEntityManagerName(string $name): ?DependencyFactory
    {
        if (array_key_exists($name, $this->dependencyFactories)) {
            return $this->dependencyFactories[$name];
        }

        return null;
    }
}
