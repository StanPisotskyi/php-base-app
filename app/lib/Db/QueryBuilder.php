<?php

namespace Db;

use PDO;
use PDOStatement;
use Exception;

class QueryBuilder
{
    private PDO $connection;

    public function __construct(string $dbName, string $user, string $pass)
    {
        $this->connection = new PDO('mysql:host=db;dbname=' . $dbName, $user, $pass);
    }

    public function runSql(string $sql): array
    {
        $query = $this->connection->query($sql);

        if (!$query) {
            return [];
        }

        $res = [];

        while ($row = $query->fetch()) {
            $res[] = $row;
        }

        return $res;
    }
}
