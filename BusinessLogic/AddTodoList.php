<?php 

/**
 * Menambah todo ke List
 */

function addTodoList(string $todo): void
{
    global $todoList;

    $number = sizeof($todoList) + 1;
 
    $todoList[$number] = $todo;
}


?>