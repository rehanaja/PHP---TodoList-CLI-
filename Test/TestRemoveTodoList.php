<?php 

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Han");
addTodoList("Nisa");
addTodoList("Amel");
addTodoList("Gisel");
addTodoList("Tasya");
addTodoList("Mala");

showTodoList();

removeTodoList(2);

showTodoList();

removeTodoList(1);

showTodoList();

$succes = removeTodoList(6);
var_dump($succes);

showTodoList();




?>