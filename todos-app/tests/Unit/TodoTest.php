<?php

use App\Models\Todo;
use App\Models\TodoList;


describe("Todo",function(){


    it('créer une Todo avec les bons attributs',function(){
        // A: arrange
        // A: act
        // A: assert

        //arrange
        $todoList = TodoList::factory()->create();

        // act
        $todo = Todo::factory()->create([
            "title"=>"Faire du Laravel",
            "completed"=>false,
            "todo_list_id"=>$todoList->id
        ]);

        //assert
        expect($todo->title)->toBe('Faire du Laravel');

    });




});
