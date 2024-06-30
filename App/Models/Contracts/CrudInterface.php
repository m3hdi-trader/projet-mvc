<?php

namespace App\Models\Contracts;

interface CrudInterface
{
    #create(insert)
    public function create(array $data): int;

    #read(select) single|multiple
    public function find($id): object;
    public function get(array $colums, array $where): array;

    #update records
    public function update(array $data, array $where): int;

    #delete
    public function delete(array $where): int;
}
