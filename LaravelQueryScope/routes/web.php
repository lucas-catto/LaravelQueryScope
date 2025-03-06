<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {

    $users = User::query()
        ->select(['id', 'name'])
        ->get()
        ->toArray();
    // dd($users);
    
    $users = User::all()
        ->select(['id', 'name'])
        ->toArray();
    dd($users);
});
*/

Route::get('/', function () {
    return view('welcome');
});
