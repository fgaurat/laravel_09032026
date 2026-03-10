<?php

namespace App;

class HelloDep
{
    /**
     * Create a new class instance.
     */
    public function __construct( private string $name)
    {
    }

    public function sayHello(){
        return "Hello from HelloDep::class ".$this->name;
    }
}
