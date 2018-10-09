<?php

namespace Mnugter\JsonApiRqlFinderBundle;

use Mnugter\JsonApiRqlFinderBundle\DependencyInjection\JsonApiRqlFinderExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MnugterJsonApiRqlFilterBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new JsonApiRqlFinderExtension();
    }
}
