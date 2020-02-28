<?php

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
Route::middleware(['auth'])->group(function () {

    Route::get("/cadastro", "cadastroController@telaCadastrar")->name("cadastro.show");

    Route::get("/cadastro/editar", "cadastroController@telaEditar")->name("editarCadastro.show");

    Route::post("/cadastro", "cadastroController@criar")->name("cadastro.post");
    Route::post("/cadastro/editar", "cadastroController@editar")->name("editarCadastro.post");
    Route::post("/cadastro/excluir", "cadastroController@excluir")->name("excluirCadastro.post");

});

Route::get('/entrar', "UserController@telaEntrar")->name('entrar');
Route::post('/entrar','UserController@login')->name('login');
Route::get("/logout", 'UserController@logout')->name('logout');

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

require_once __DIR__."/../resources/views/util/layoutUtil.php";

Route::get('/layout', function () {
    return view('layouts.templateGeral', ['itensMenu' => getMenuLinks()]);
});