<?php

namespace Mnugter\JsonApiRqlFinderBundle;

use Mnugter\JsonApiRqlFinderBundle\DependencyInjection\JsonApiRqlFinderExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MnugterJsonApiRqlFilterBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new JsonApiRqlFinderExtension();
    }
}
