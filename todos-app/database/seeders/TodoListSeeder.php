<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Todo;
use App\Models\TodoList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TodoList::factory(5)->create();
        Tag::factory(5)->create();


        $todoList = TodoList::all();
        $tags = Tag::all();


        $todoList->each(function($tl) use($tags){

                Todo::factory(5)->create(['todo_list_id'=>$tl->id])->each(function($todo) use($tags){
                    $todo->tags()->attach($tags->random(rand(1,5)));
                    $todo->save();
                });


        });

    }
}
