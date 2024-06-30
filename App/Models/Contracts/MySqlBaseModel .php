<?php

namespace App\Models\Contracts;

use PDOException;

class MySqlBaseModel  extends BaseModel
{
    public function __construct()
    {
        try {
            $this->connection = new \PDO("mysql:dbname={$_ENV['DB_NAME']};host={$_ENV['DB_HOST']}", $_ENV['DB_USER'], $_ENV['BD_PASS']);
            $this->connection->exec("set names utf8;");
            echo "ok";
        } catch (PDOException $e) {
            echo " connection Failed: " . $e->getMessage();
        }
    }

    #create(insert)
    public function create(array $data): int
    {
        return 1;
    }


    #read(select) single|multiple
    public function find($id): object
    {
        return (object)[];
    }

    public function get(array $colums, array $where): array
    {
        return [];
    }

    #update records
    public function update(array $data, array $where): int
    {
        return 1;
    }

    #delete
    public function delete(array $where): int
    {
        return 1;
    }
}
