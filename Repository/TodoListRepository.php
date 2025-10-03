<?php 

namespace Repository;

use Entity\TodoList;

interface TodoListRepository {

    public function save(TodoList $todoList): void;

    public function remove(int $number): bool;

    public function findAll(): array;
}

class TodoListRepositoryImpl implements TodoListRepository {

    public array $todolist = array();

    public function save(TodoList $todoList): void 
    {
        $number = sizeof($this->todolist) + 1;
        $this->todolist[$number] = $todoList;
    }

    public function remove(int $number): bool 
    {
        return $number;
    }

    public function findAll(): array
    {
        return $this->todolist;
    }
}

?>