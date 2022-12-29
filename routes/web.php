<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        [
            "id"=> 1,
            "title" => "What to buy",
            "color"=> "#be503d",
            "description" => [
                "Eggs",
                "Milk",
                "Cereal"
            ],
            "createdAt"=>"2022-12-28T14:55:00"
        ],
        [
            "id"=> 2,
            "title" => "Weekend activities",
            "color"=> "#7c8f3f  ",
            "description" => [
                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci deleniti eaque accusamus architecto, quae numquam quasi dolorem. Perferendis corrupti, placeat labore eaque minus reiciendis quod!"
            ],
            "createdAt"=>"2022-12-28T14:55:00"
        ]
    ];

    return view('hello', ["data"=>$data, "profile"=> [
        "name"=>"bodybody"
    ]]);
});

Route::get('/create', function () {
    return view('create', ["profile"=> [
        "name"=>"bodybody"
    ]]);
});

Route::get('/note/{id}', function ($id) {
    return $id;
});