<?php

namespace Controller;

use Db\QueryBuilder;

abstract class AbstractController
{
    protected QueryBuilder $queryBuilder;

    public function __construct()
    {
        $this->queryBuilder = new QueryBuilder('docker-test', 'root', '123123');
    }
}
