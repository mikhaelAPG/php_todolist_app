<?php 

/**
 * Menambah todo ke list
 */
function addTodoList(string $todo)
{
    global $todolist;

    $number = sizeof($todolist) + 1;

    $todoList[$number] = $todo;
}