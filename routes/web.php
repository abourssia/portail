<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\AdminLoginRequest;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/result', [App\Http\Controllers\HomeController::class, 'advancedsearch'])->name('advancedsearch');
Route::get('/result', [App\Http\Controllers\HomeController::class, 'advancedsearch'])->name('advancedsearch');
Route::get('/result', [App\Http\Controllers\HomeController::class, 'advancedsearch'])->name('live_search.action');
Route::get('/1/labo/{id}', [App\Http\Controllers\HomeController::class, 'laboprofile'])->name('laboprofile');
Route::post('/results', [App\Http\Controllers\HomeController::class, 'advancedsearchENTR'])->name('advancedsearchENTR');
Route::get('/results', [App\Http\Controllers\HomeController::class, 'advancedsearchENTR'])->name('advancedsearchENTR');
/* ADMIN */



Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admindashboard');
    Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admindashboard');
    Route::get('/dashboard/users', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('admindashboardusers');
    Route::get('/dashboard/entreprises', [App\Http\Controllers\Admin\EntrepriseController::class, 'index'])->name('entreprisesadmin');
    Route::get('/dashboard/responsables', [App\Http\Controllers\Admin\ResponsableController::class, 'index'])->name('ResponsableController');
    Route::get('/dashboard/updateToggleSwitchStatus', [App\Http\Controllers\Admin\EntrepriseController::class,'updateToggleSwitchStatus']);
    Route::get('/dashboard/P/Entreprise/{id}', [App\Http\Controllers\Admin\EntrepriseController::class,'profile'])->name('profileentreprise');;
    Route::get('/dashboard/pnr2021', [App\Http\Controllers\Admin\PnrController::class, 'index'])->name('pnr2021');
    Route::get('/dashboard/pnr2021/add', [App\Http\Controllers\Admin\PnrController::class, 'add'])->name('addpnr2021');
    Route::get('/dashboard/pnr2021/delete/{id}', [App\Http\Controllers\Admin\PnrController::class, 'delete'])->name('deletepnr');
    Route::post('/dashboard/pnr2021/add',[App\Http\Controllers\Admin\PnrController::class,'storeImage'])->name('images.store');
    Route::get('/dashboard/pnr2021/edit/{id}', [App\Http\Controllers\Admin\PnrController::class, 'indexupdate'])->name('editpnr');
    Route::get('/dashboard/entreprises/add', [App\Http\Controllers\Admin\EntrepriseController::class, 'addentreprise'])->name('addaddentreprise');
    Route::post('/dashboard/entreprises/add', [App\Http\Controllers\Admin\EntrepriseController::class,'createaddentreprise']);
    Route::get('/dashboard/entreprise', [App\Http\Controllers\Admin\EntrepriseController::class, 'indexbyme'])->name('entreprisesbyadmin');
    Route::get('/dashboard/pnr2021/edit/', [App\Http\Controllers\Admin\PnrController::class, 'update'])->name('updatepnr');
    Route::get('/dashboard/pnr2021/edit/', [App\Http\Controllers\Admin\PnrController::class, 'update'])->name('updatepnr');
    Route::get('/dashboard/laboratoires', [App\Http\Controllers\Admin\LaboratoiresController::class, 'index'])->name('laboratoiresadmin');

});
Route::get('/changeUserValidated', [App\Http\Controllers\Admin\EntrepriseController::class,'updateToggleSwitchValidated']);
Route::prefix('partenaire')->middleware(['auth','isPartenaire'])->group(function () {
    Route::get('/', [App\Http\Controllers\Partenaire\HomeController::class, 'index'])->name('userdashboard');
    Route::get('/dashboard', [App\Http\Controllers\Partenaire\HomeController::class, 'index'])->name('userdashboard');
    Route::get('/dashboard/add', [App\Http\Controllers\Partenaire\AddenController::class, 'index'])->name('useradd');
    Route::get('/dashboard/responsable', [App\Http\Controllers\Partenaire\ResController::class, 'index'])->name('resadd');
    Route::post('/dashboard/responsable', [App\Http\Controllers\Partenaire\ResController::class, 'validator'])->name('resadd');
    Route::get('/dashboard/add', [App\Http\Controllers\Partenaire\AddenController::class,'create'])->name('entrepriseadd');
    Route::get('/dashboard/1/update', [App\Http\Controllers\Partenaire\AddenController::class,'updateindex'])->name('updateindex');
    Route::get('/dashboard/responsable', [App\Http\Controllers\Partenaire\ResController::class,'create'])->name('resadd');
    Route::post('/dashboard/add', [App\Http\Controllers\Partenaire\AddenController::class,'store']);
});
Route::prefix('chercheur')->middleware(['auth','isChercheur'])->group(function () {

    Route::get('/', [App\Http\Controllers\Chercheur\HomeController::class, 'index'])->name('chercheurdash');
    Route::get('/dashboard', [App\Http\Controllers\Chercheur\HomeController::class, 'index'])->name('chercheurdash');
});