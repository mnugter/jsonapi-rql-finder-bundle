<?php

namespace Mnugter\JsonApiRqlFinderBundle\Finder;

use AndreasGlaser\DoctrineRql\Factory\ORMVisitorFactory;
use Paknahad\JsonApiBundle\Helper\Filter\FinderInterface;

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
     * Set request object.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function setRequest(Request $request) {
        $this->request = $request;
    }

    /**
     * Set service entity repository and configure the finder based on the passed repository.
     *
     * @param \Doctrine\ORM\QueryBuilder $query
     */
    public function setQuery(QueryBuilder $query) {
        $this->query = $query;
    }

    /**
     * @throws EntityNotFoundException
     */
    public function filterQuery() {
        $rql = $this->request->get('rql');

        ORMVisitorFactory::appendFiltersOnly($this->query, $rql);
    }
}