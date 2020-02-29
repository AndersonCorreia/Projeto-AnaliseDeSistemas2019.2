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

    Route::get("/cadastro", "CadastroController@telaCadastrar")->name("cadastro.show");
    Route::post("/cadastro", "CadastroController@criar")->name("cadastro.post");

    //Route::get("/cadastro/editar", "CadastroController@telaEditar")->name("editarCadastro.show");
    Route::post("/cadastro/editar", "CadastroController@editar")->name("editarCadastro.post");

    Route::get("/cadastro/excluir/{ID}", "CadastroController@excluir")->name("excluirCadastro.post");

});

Route::get("/editar", "CadastroController@telaEditar")->name("editarCadastro.show"); //rota temporária

Route::get('/entrar', "UserController@telaEntrar")->name('entrar');
Route::post('/entrar','UserController@login')->name('login');
Route::get('/entrar/erro', 'UserController@telaEntrarError')->name('loginError.show');
Route::get("/logout", 'UserController@logout')->name('logout');

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

require_once __DIR__."/../resources/views/util/layoutUtil.php";

Route::get('/layout', function () {
    return view('layouts.templateGeral', ['itensMenu' => getMenuLinks()]);
});