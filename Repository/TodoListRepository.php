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
        if ($number > sizeof($this->todolist)) {
        return false;
        }
    
        for ($i = $number; $i < sizeof($this->todolist); $i++) {
            $this->todolist[$i] = $this->todolist[$i + 1];
        }
    
        unset($this->todolist[sizeof($this->todolist)]);

        return true;
    }

    public function findAll(): array
    {
        return $this->todolist;
    }
}

?>