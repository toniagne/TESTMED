<?php

use App\Provas;
use App\Http\Controllers\EstadosController;
Route::get('/', function () {
    return view('website.home');
})->name('website');

Route::get('novo', function () {
    return view('website.homebkp');
})->name('websitenovo');

require(base_path() .'/routes/rotasProvas.php');
require(base_path() .'/routes/rotasQuestao.php');
require(base_path() .'/routes/rotasUsuarios.php');

Route::get('/logar', 'loginController@doLogin');

Route::post('/registrar', 'UserController@doRegister');

Route::get('/dashboard', function () {
    return view('application.home');
})->name('dashboard')->middleware('auth');

Route::get('/site', function () {
    return view('website.home');
})->middleware('auth');



Auth::routes();

Route::get('/home', function () {
    return view('application.provas');
})->middleware('auth');

Route::get('/sair', 'LogoutController@logout')->name('sair');

Route::resource('questoes', 'QuestoesController')->middleware('auth');
Route::resource('plano', 'PlanoController')->middleware('auth');
Route::resource('provas', 'ProvasController')->middleware('auth');
Route::get('provas/{id}', 'ProvasController@show')->middleware('auth');
Route::resource('estados', 'EstadosController')->middleware('auth');
Route::resource('respostas', 'RespostasController')->middleware('auth');
Route::resource('especialidades', 'EspecialidadesController')->middleware('auth');
Route::resource('banca', 'BancaController')->middleware('auth');
Route::get('respostas/create/{id}','RespostasController@create');


Route::post( '/get/estados', 'FiltrosController@estados' )->name( 'loadEstados' );
Route::post( '/get/anos', 'FiltrosController@anos' )->name( 'loadAnos' );
Route::post( '/get/bancas', 'FiltrosController@bancas' )->name( 'loadBancas' );
Route::post( '/get/disciplinas', 'FiltrosController@disciplinas' )->name( 'loadDisciplinas' );
Route::post( 'get/questoes', 'FiltrosController@questoes' )->name( 'loadQuestoes' );
Route::post( 'get/selects', 'FiltrosController@selects' )->name( 'loadSelects' );

Route::resource('pagamento', 'PagamentoController')->middleware('auth');

// route for processing payment
Route::post('entrega', 'QuestoesController@entrega');
Route::get('questoes/correta/{id}','QuestoesController@correta');
// route for processing payment
Route::post('adesao', 'PlanoController@selecionar');
// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');
// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');

/*Route::get('/pagamento', function () {
    return view('application.prova.paypal');
});*/

