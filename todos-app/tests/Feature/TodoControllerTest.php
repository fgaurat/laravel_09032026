<?php




describe('TodoController', function () {

    describe('GET /todo (index)', function () {

        it('get status 200',function(){
            // $this->get("/todo")->assertStatus(200);
            $this->get(route('todo.index'))->assertStatus(200);

            // expect(route('todo.index'))->toBe('');

        });

    });

    describe('GET /todo/create (create)', function () {});
});
