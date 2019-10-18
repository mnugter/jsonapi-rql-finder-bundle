<?php

namespace Mnugter\JsonApiRqlFinderBundle\Finder;

use AndreasGlaser\DoctrineRql\Factory\ORMVisitorFactory;
use Doctrine\ORM\QueryBuilder;
use Paknahad\JsonApiBundle\Helper\FieldManager;
use Paknahad\JsonApiBundle\Helper\Filter\FinderInterface;
use Symfony\Component\HttpFoundation\Request;

class Rql implements FinderInterface
{
    /**
     * @var \Symfony\Component\HttpFoundation\Request
     */
    protected $request;

    /**
     * @var \Doctrine\ORM\QueryBuilder $query
     */
    protected $query;

    /**
     * {@inheritdoc}
     */
    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }

    /**
     * {@inheritdoc}
     */
    public function setQuery(QueryBuilder $query): void
    {
        $this->query = $query;
    }

    /**
     * {@inheritdoc}
     */
    public function setFieldManager(FieldManager $fieldManager): void
    {

    }

    /**
     * {@inheritdoc}
     */
    public function filterQuery(): void {
        $rql = $this->request->get('rql');

        if ($rql) {
            ORMVisitorFactory::appendFiltersOnly($this->query, $rql);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function sortQuery(): void
    {
    }

    /**
     * {@inheritDoc}
     */
    public function sortQuery(): void
    {
    }
}
