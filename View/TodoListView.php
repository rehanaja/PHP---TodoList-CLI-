<?php 

namespace View;

use Service\TodoListService;
use Helper\InputHelper;


class TodoListView {

    private TodoListService $todoListService;

    public function __construct($todoListService) {
        $this->todoListService = $todoListService;
    }
    
    public function showTodoList(): void
    {
        while(true) {
        $this->todoListService->showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = InputHelper::input("pilih");

        if ($pilihan == "1") {
            $this->addTodoList();
        } else if ($pilihan == "2") {
            $this->removeTodoList();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
        }

        echo "Sampai Jumpa Lagi" . PHP_EOL;
    }

    public function addTodoList(): void
    {
        echo "Menambah TODO List" . PHP_EOL;

        $todo = InputHelper::input("Todo (x untuk batal)");

        if ($todo == "x") {
            // batal
            echo "Batal menambah ";
            // viewShowTodoList();
        } else {
        $this->todoListService->addTodoList($todo);
        }
    }

    public function removeTodoList(): void
    {
        echo "MENGHAPUS TO-DO LIST" . PHP_EOL;

        $pilihan =  InputHelper::input("Nomor : (x untuk membatalkan)");

        if ($pilihan == "x") {
            echo "Batal menghapus " . PHP_EOL;
        } else {
            $this->todoListService->removeTodoList($pilihan);
        }
     }
}

?>