<?php

namespace mnugter\JsonApiRqlFinderBundle;

use mnugter\JsonApiRqlFinderBundle\DependencyInjection\JsonApiRqlFinderExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class JsonApiRqlFilterBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new JsonApiRqlFinderExtension();
    }
}
