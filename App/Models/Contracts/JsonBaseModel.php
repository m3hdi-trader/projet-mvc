<?php

namespace App\Models\Contracts;

class JsonBaseModel extends BaseModel
{
    private $dbFolder;
    private $tableFilePath;

    public function __construct()
    {
        $this->dbFolder = BASEPATH . '/storage/jsondb/';
        $this->tableFilePath = $this->dbFolder . $this->table . '.json';
    }

    private function readTable(): array
    {
        $tableData = json_decode(file_get_contents($this->tableFilePath));
        return $tableData;
    }


    private function writeTable(array $data)
    {
        $dataJson = json_encode($data);

        file_put_contents($this->tableFilePath, $dataJson);
    }

    #create(insert)
    public function create(array $newData): int
    {
        $tableData = $this->readTable();
        $tableData[] = $newData;
        $this->writeTable($tableData);
        return $newData[$this->primarykey];
    }

    #read(select) single|multiple
    public function find($id): object
    {
        $tableData = $this->readTable();
        foreach ($tableData as $record) {
            if ($record->{$this->primarykey} == $id) {
                return $record;
            }
        }

        return null;
    }

    public function getAll(): array
    {
        return $this->readTable();
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
