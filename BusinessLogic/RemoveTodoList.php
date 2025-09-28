<?php 

/**
 * Menghapus todo di list
 */

function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }
    
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }
    
    unset($todoList[sizeof($todoList)]);
    

    // 1. Raihan
    // 2. han
    // 3. Gan

    // 1. Raihan
    // 2. $todolist[2 + 1]
    // 3. $todolist[3 + 1]

    return true;
}

?>