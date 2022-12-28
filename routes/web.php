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
    return view('welcome');
});

Route::get('/hello', function () {
    $data = [
        [
            "title" => "What to buy",
            "description" => [
                "Eggs",
                "Milk",
                "Cereal"
            ],
        ],
        [
            "title" => "Weekend activities",
            "description" => [
                "Do nothing and sleep tight"
            ]
        ]
    ];

    return view('hello', ["data"=>$data, "profile"=> [
        "name"=>"bodybody"
    ]]);
});
