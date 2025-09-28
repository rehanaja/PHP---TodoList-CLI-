<?php


require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";


addTodoList("Muhamad");
addTodoList("Raihan");
addTodoList("Fullstack");
addTodoList("Developer");

showTodoList();

viewRemoveTodoList();

showTodoList();
