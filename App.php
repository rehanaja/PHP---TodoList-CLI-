<?php 

require_once __DIR__ . "/Entity/TodoList.php";
require_once __DIR__ . "/Repository/TodoListRepository.php";
require_once __DIR__ . "/Service/TodoListService.php";
require_once __DIR__ . "/View/TodoListView.php";
require_once __DIR__ . "/Helper/InputHelper.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

echo "Aplikasi TO-DO LIST:" . PHP_EOL;

$todolistRepository = new TodoListRepositoryImpl();
$todolistService = new TodoListServiceImpl($todolistRepository);
$todolistView = new TodoListView($todolistService);

$todolistView->showTodoList();


