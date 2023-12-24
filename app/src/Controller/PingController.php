<?php

namespace Controller;

class PingController extends AbstractController
{
    public function indexAction(): void
    {
        echo 'ping'; exit();
    }

    public function checkDbAction(): void
    {
        echo json_encode($this->queryBuilder->runSql('SHOW TABLES')); exit();
    }
}
