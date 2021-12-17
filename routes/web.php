<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\autorcontroller;
use App\Http\Controllers\principal;
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

//AUTORES
Route::get('laravel/autores',[autorcontroller::class,'create'])->name("autores");

//AUTOR
Route::get('laravel/autor/{id}',[autorcontroller::class,'getAutor'])->name("autor");

//FORMULARIO
Route::get('laravel/registrar',[autorcontroller::class,'formulario'])->name("formulario");

//POST
Route::post('laravel/insert',[autorcontroller::class,'post'])->name("post");

//UPDATE
Route::post('laravel/autor/{id}/update',[autorcontroller::class,'update'])->name('update');

//DELETE
Route::get('laravel/autor/{id}/delete',[autorcontroller::class,'delete'])->name('delete');