<?php

namespace App\Controllers;

class TodoController
{
    public function list()
    {
        $tasks = [
            'First Task',
            'Second Task',
            'Third Task',
            'Test Task',
            'another Task',
        ];
        $data = [
            "tasks" => $tasks,
        ];

        views('todo.list', $data);
    }
}
