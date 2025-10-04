<?php 

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../View/TodoListView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";


use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;



function testViewShowTodolist() {

    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP DATABASE");

    $todolistView->showTodoList();
}

function testViewAddTodolist() {

    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP DATABASE");
    $todolistService->showTodoList();

    $todolistView->addTodoList();

    $todolistService->showTodoList();

    $todolistView->addTodoList();

    $todolistService->showTodoList();
}

function testViewRemoveTodolist() {

    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP DATABASE");
    $todolistService->showTodoList();

    $todolistView->removeTodoList();

    $todolistService->showTodoList();

    $todolistView->removeTodoList();

    $todolistService->showTodoList();
}

testViewRemoveTodolist();
?>