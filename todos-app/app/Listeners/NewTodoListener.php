<?php

namespace App\Listeners;

use App\Events\TodoCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class NewTodoListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TodoCreated $event): void
    {
        Log::info("Event Todo created !".$event->todo);
    }
}
