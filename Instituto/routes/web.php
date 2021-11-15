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

// Ruta de bienvenida 
Route::get('/', function () {
    return view('welcome');
});

// Ruta para la autenticación del usuario
Auth::routes();

// Ruta de una vez que se logeo el usuario
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// -------------------------------------------------------------------------------------------

// Ruta al perfil del usuario
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/formProfile', [App\Http\Controllers\ProfileController::class, 'create'])->name('formProfile');
Route::post('/formProfile', [App\Http\Controllers\ProfileController::class, 'store'])->name('storeProfile');
// --------------------------------------------------------------------------------------------------------

// Estas rutas son para la tabla carreras
Route::get('/viewRace', [App\Http\Controllers\CarrerasController::class, 'index'])->name('ViewRace');
Route::get('/formRace', [App\Http\Controllers\CarrerasController::class, 'create'])->name('FormRace');
Route::post('/formRace', [App\Http\Controllers\CarrerasController::class, 'store'])->name('CreateRace');
Route::get('/editRace/{id}', [App\Http\Controllers\CarrerasController::class, 'edit'])->name('EditRace');
Route::post('/editRace/{id}', [App\Http\Controllers\CarrerasController::class, 'update'])->name('UpdateRace');
Route::delete('/deleteRace/{id}', [App\Http\Controllers\CarrerasController::class, 'destroy'])->name('DeleteRace');
// ----------------------------------------------------------------------------------------

// Estas rutas son para la tabla sedes 
Route::get('/viewSede', [App\Http\Controllers\SedesController::class, 'index'])->name('ViewSede');
Route::get('/formSede', [App\Http\Controllers\SedesController::class, 'create'])->name('FormSede');
Route::post('/formSede', [App\Http\Controllers\SedesController::class, 'store'])->name('CreateSede');
Route::get('/editSede/{id}', [App\Http\Controllers\SedesController::class, 'edit'])->name('EditSede');
Route::post('/editSede/{id}', [App\Http\Controllers\SedesController::class, 'update'])->name('UpdateSede');
Route::delete('/deleteSede/{id}', [App\Http\Controllers\SedesController::class, 'destroy'])->name('DeleteSede');
// ----------------------------------------------------------------------------------

// Ruta para los objetivos
Route::get('viewObjectives', [App\Http\Controllers\HomeController::class, 'indexObjective'])->name('Objectives');
// Ruta para la historia
Route::get('/viewHistory', [App\Http\Controllers\HomeController::class, 'indexHistory'])->name('History');
// ----------------------------------------------------------------------------------------------

// Estas rutas son para la tabla de materias
Route::get('/viewSubject', [App\Http\Controllers\MateriasController::class, 'index'])->name('ViewSubjetc');
Route::get('/formSubject', [App\Http\Controllers\MateriasController::class, 'create'])->name('FormSubject');
Route::post('/formSubject', [App\Http\Controllers\MateriasController::class, 'store'])->name('CreateSubject');
Route::get('/editSubject/{id}', [App\Http\Controllers\MateriasController::class, 'edit'])->name('EditSubject');
Route::post('/editSubject/{id}', [App\Http\Controllers\MateriasController::class, 'update'])->name('UpdateSubject');
Route::delete('/deleteSubject/{id}', [App\Http\Controllers\MateriasController::class, 'destroy'])->name('DeleteSubject');
// --------------------------------------------------------------------------------------------------

// Estas rutas son para la tabla de profesores
Route::get('/viewProfesor', [App\Http\Controllers\ProfesoresController::class, 'index'])->name('ViewProfesor');
Route::get('/formProfesor', [App\Http\Controllers\ProfesoresController::class, 'create'])->name('FormProfesor');
Route::post('/formProfesor', [App\Http\Controllers\ProfesoresController::class, 'store'])->name('CreateProfesor');
Route::get('/editProfesor/{id}', [App\Http\Controllers\ProfesoresController::class, 'edit'])->name('EditProfesor');
Route::post('/editProfesor/{id}', [App\Http\Controllers\ProfesoresController::class, 'update'])->name('UpdateProfesor');
Route::delete('/deleteProfesor/{id}', [App\Http\Controllers\ProfesoresController::class, 'destroy'])->name('DeleteProfesor');
// --------------------------------------------------------------------------------------------

// Estas rutas son para tabla de finales 
Route::get('/viewEnds', [App\Http\Controllers\FinalesController::class, 'index'])->name('ViewEnd');
Route::get('/formEnds', [App\Http\Controllers\FinalesController::class, 'create'])->name('FormEnd');
Route::post('/formEnds', [App\Http\Controllers\FinalesController::class, 'store'])->name('CreateEnd');
Route::get('/editEnds/{id}', [App\Http\Controllers\FinalesController::class, 'edit'])->name('EditEnd');
Route::post('/editEnds/{id}', [App\Http\Controllers\FinalesController::class, 'update'])->name('UpdateEnd');
Route::delete('/deleteEnds/{id}', [App\Http\Controllers\FinalesController::class, 'destroy'])->name('DeleteEnd');
// -------------------------------------------------------------------------------
