<?php 

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Raihan");
addTodoList("Han");
addTodoList("Aih");

var_dump($todoList);

?>