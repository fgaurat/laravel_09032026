<?php

namespace App\Console\Commands;

use App\Models\Todo;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

use function Illuminate\Support\now;

class ScrapeTodos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:scrape-todos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $this->info('Hello info');
        // $this->error('Hello error');
        $url = "https://jsonplaceholder.typicode.com/todos";
        $response = Http::get($url);
        $todos =$response->json();
        // $this->info(print_r($todos,true));

        // $todos_collection = collect($todos)->map(function($todo){
        //     $t = new Todo();
        //     $t->title = $todo['title'];
        //     $t->completed = $todo['completed'];
        //     $t->updated_at = now();
        //     $t->created_at = now();
        //     return $t;
        // })->toArray();


        $todos_collection = collect($todos)->map(function($todo){
            unset($todo['id']);
            unset($todo['userId']);
            $todo['updated_at'] = now();
            $todo['created_at'] = now();

            $t = new Todo($todo);
            return $t;
        })->toArray();




        Todo::insert($todos_collection);

    }
}
