<?php 

/**
 * Menampilkan todo di List
 */


function showTodoList(): void
{
    global $todoList;

    echo "TODOLIST" . PHP_EOL;

    foreach ($todoList as $number => $value)
    {
        echo "$number. $value" . PHP_EOL;
    }
}

