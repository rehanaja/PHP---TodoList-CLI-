<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../View/ViewShowTodoList.php";



function viewAddTodoList(): void
{
    echo "Menambah TODO List" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");


    if ($todo == "x") {
        // batal
        echo "Batal menambah todo";
//        viewShowTodoList();
    } else {
    addTodoList($todo);
    }
}


