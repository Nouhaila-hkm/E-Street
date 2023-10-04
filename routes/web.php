<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\Bo\MagasinController;
use App\Http\Controllers\Bo\CatalogueController;

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

/*
Route::get('/', function () {
    return view('layout');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/authentication', function () {
    return view('inscription');
});
*/
Route::get('/', [HomeController::class, 'home'])->name('homePage');
Route::get('/inscrition', [RegisterController::class, 'inscription'])->name('inscriptionPage');
Route::get('/login', [RegisterController::class, 'login'])->name('loginPage');
Route::get('/promo', [BackofficeController::class, 'promo'])->name('promoPage');
Route::get('/magasin', [BackofficeController::class, 'magasin'])->name('magasinPage');
Route::get('/dashboard', [BackofficeController::class, 'dashboard'])->name('dashboardPage');
Route::get('/profile', [BackofficeController::class, 'profile'])->name('profilePage');
Route::get('/produit', [BackofficeController::class, 'produit'])->name('produitPage');
Route::get('/abonnement', [BackofficeController::class, 'abonnement'])->name('abonnPage');
Route::get('/catalogue', [BackofficeController::class, 'catalogue'])->name('cataloguePage');

Route::post('/inscription/createAccount', [RegisterController::class, 'createAccount'])->name('register.createaccount');
Route::get('/inscription/success', [RegisterController::class, 'inscriptionSuccess'])->name('register.inscriptionsuccess');

// Back-Office Magasin

Route::get('/magasin/creation/{manager}', [MagasinController::class, 'created'])->name('magasin.creation');
Route::post('/magasin/addmagasin/{manager}', [MagasinController::class, 'addMagasin'])->name('magasin.add');
Route::get('/magasin/deletemagasin/{magasin}', [MagasinController::class, 'deleteMagasin'])->name('magasin.deleted');
Route::get('/magasin/updateformmagasin/{magasin}', [MagasinController::class, 'updateFormMagasin'])->name('magasin.updateform');
Route::post('/magasin/updatemagasin/{magasin}', [MagasinController::class, 'updateMagasin'])->name('magasin.updated');

// Back-Office Catalogue

Route::get('/catalogue/creation/{magasin}', [CatalogueController::class, 'created'])->name('catalogue.creation');
Route::post('/catalogue/addcatalogue/{magasin}', [CatalogueController::class, 'addCatalogue'])->name('catalogue.add');
Route::get('/catalogue/deletecatalogue/{catalogue}', [CatalogueController::class, 'deleteCatalogue'])->name('catalogue.deleted');
Route::get('/catalogue/updateformcatalogue/{catalogue}', [CatalogueController::class, 'updateFormCatalogue'])->name('catalogue.updateform');
Route::post('/catalogue/updatecatalogue/{catalogue}', [CatalogueController::class, 'updateCatalogue'])->name('catalogue.updated');


// Back-Office Produit

Route::get('/produit/creation/{catalogue}', [ProduitController::class, 'created'])->name('produit.creation');
Route::post('/produit/addproduit/{catalogue}', [ProduitController::class, 'addProduit'])->name('produit.add');
Route::get('/produit/deleteproduit/{produit}', [ProduitController::class, 'deleteProduit'])->name('produit.deleted');
Route::get('/produit/updateformproduit/{produit}', [ProduitController::class, 'updateFormProduit'])->name('produit.updateform');
Route::post('/produit/updateproduit/{produit}', [ProduitController::class, 'updateProduit'])->name('produit.updated');

// Login

Route::post('/loginaccess', [RegisterController::class, 'loginAccess'])->name('access.login');

