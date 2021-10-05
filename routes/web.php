<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/quiz', function () {
    return view('quiz');
});



Auth::routes();


Route::get('/locale/{locale}', function ($locale){
    \Session::put('locale', $locale);
    return redirect()->back();
})->name('traduction');

Route::middleware(['auth', 'throttle:60,3'])->group(function () {


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

    Route::get('list-role', [App\Http\Controllers\RoleController::class, 'index'])->name('role-list');

    Route::get('button-button', [App\Http\Controllers\PageController::class, 'index'])->name('button-list');

    Route::get('liste-des-articles', [App\Http\Controllers\BlogController::class, 'index'])->name('blog-list');
    Route::post('articles-store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
    Route::get('details-articles/{article}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
    Route::post('article-update/{article}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');

    Route::get('liste-des-categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories-list');
    Route::post('categories-store', [App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.store');
    Route::get('details-categorie/{category}', [App\Http\Controllers\CategoriesController::class, 'show'])->name('categories.show');
    Route::post('categories-update/{category}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('categories.update');

    Route::get('liste-des-coupons', [App\Http\Controllers\CouponsController::class, 'index'])->name('coupons-list');
    Route::post('coupons-store', [App\Http\Controllers\CouponsController::class, 'store'])->name('coupon.store');
  // Route::get('editer-coupons/{coupon}', [App\Http\Controllers\CouponsController::class, 'edit'])->name('coupon.edit');
    //Route::post('coupon-update/{coupon}', [App\Http\Controllers\CouponsController::class, 'update'])->name('coupon.update');

    Route::get('liste-des-abonnements', [App\Http\Controllers\AbonnementController::class, 'index'])->name('abonnement-list');
    Route::get('liste-des-abonnements-utilisateurs', [App\Http\Controllers\UserAbonnentController::class, 'index'])->name('abonnement-list-user');
    Route::get('editer-abonnements/{abonnement}', [App\Http\Controllers\AbonnementController::class, 'edit'])->name('abonnement.edit');
    Route::post('abonnements-update/{abonnement}', [App\Http\Controllers\AbonnementController::class, 'update'])->name('abonnement.update');
    Route::get('abonnements-create', [App\Http\Controllers\UserAbonnentController::class, 'create'])->name('abonnement.create');
    Route::post('abonnements-store', [App\Http\Controllers\UserAbonnentController::class, 'store'])->name('abonnement.add');

    Route::get('show-user/{user}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('users.show');
    Route::get('list-user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user-list');
    Route::get('edit-user/{user}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('users.edit');
    Route::get('show-user/{user}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('users.show');
    Route::post('update-user/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('users.update');
    Route::post('update-user-statut/{user}', [App\Http\Controllers\Admin\UserController::class, 'updateStatut'])->name('users.statut');
    Route::post('update-user-name/{user}', [App\Http\Controllers\Admin\UserController::class, 'updateName'])->name('users.name');
    Route::post('update-user-email/{user}', [App\Http\Controllers\Admin\UserController::class, 'updateEmail'])->name('users.email');
    Route::post('update-user-password/{user}', [App\Http\Controllers\Admin\UserController::class, 'updatePassword'])->name('users.password');
    Route::get('add-user', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('users.create');
    Route::post('store-user', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('users.store');

    Route::get('list-zones', [App\Http\Controllers\ZonesController::class, 'index'])->name('zones-list');
    Route::get('views-zones/{zones}', [App\Http\Controllers\ZonesController::class, 'show'])->name('zones.views');
    Route::get('add-zones-de-livraison', [App\Http\Controllers\ZonesController::class, 'create'])->name('zones.create');
    Route::post('zones-de-livraison-store', [App\Http\Controllers\ZonesController::class, 'store'])->name('zones.add');
    Route::get('zones-de-livraison-edit/{zones}', [App\Http\Controllers\ZonesController::class, 'edit'])->name('zonesedit');
    Route::post('zones-de-livraison-update/{zones}', [App\Http\Controllers\ZonesController::class, 'update'])->name('zones.edit');

    Route::get('list-interet', [App\Http\Controllers\InteretsController::class, 'index'])->name('interet-list');
    Route::get('add-centre-interet', [App\Http\Controllers\InteretsController::class, 'create'])->name('interet.create');
    Route::get('edit-interet/{interet}', [App\Http\Controllers\InteretsController::class, 'edit'])->name('interet.edit');
    Route::get('show-interet/{interets}', [App\Http\Controllers\InteretsController::class, 'show'])->name('interet.show');
    Route::post('interet-update/{interet}', [App\Http\Controllers\InteretsController::class, 'update'])->name('interet.update');
    Route::get('add-centre-interet', [App\Http\Controllers\InteretsController::class, 'create'])->name('interet.create');
    Route::post('centre-interetr-store', [App\Http\Controllers\InteretsController::class, 'store'])->name('interet.store');

    Route::get('list-piliers', [App\Http\Controllers\PiliersController::class, 'index'])->name('piliers-list');
    Route::get('add-pilier', [App\Http\Controllers\PiliersController::class, 'create'])->name('pilier.create');
    Route::get('piliers-view/{pilier}', [App\Http\Controllers\PiliersController::class, 'show'])->name('piliersview');
    Route::get('piliers-edit/{piliers}', [App\Http\Controllers\PiliersController::class, 'edit'])->name('piliersedit');
    Route::post('pilier-store', [App\Http\Controllers\PiliersController::class, 'store'])->name('pilier.store');
    Route::post('piliers-update/{piliers}', [App\Http\Controllers\PiliersController::class, 'update'])->name('pilier.update');

    Route::get('list-cours', [App\Http\Controllers\CoursController::class, 'index'])->name('cours-list');
    Route::get('add-cour', [App\Http\Controllers\CoursController::class, 'create'])->name('cour.create');
    Route::post('cour-store', [App\Http\Controllers\CoursController::class, 'store'])->name('cour.store');
    Route::get('cours-view/{cour}', [App\Http\Controllers\CoursController::class, 'show'])->name('coursview');
    Route::get('cours-edit/{cours}', [App\Http\Controllers\CoursController::class, 'edit'])->name('coursedit');
    Route::post('coursupdate/{cours}', [App\Http\Controllers\CoursController::class, 'update'])->name('cour.update');

    Route::get('list-image', [App\Http\Controllers\FichiersController::class, 'indexImage'])->name('image-list');
    Route::get('create-image', [App\Http\Controllers\FichiersController::class, 'createImage'])->name('image-create');
    Route::post('image.store', [App\Http\Controllers\FichiersController::class, 'storeImage'])->name('image.store');
    Route::get('/images/{image}', [App\Http\Controllers\FichiersController::class, 'showImage']);
    Route::get('/images/edit/{image}', [App\Http\Controllers\FichiersController::class, 'editImage']);
    Route::post('/images/{image}', [App\Http\Controllers\FichiersController::class, 'updateImage'])->name('image-update');

    Route::get('/livres', [App\Http\Controllers\FichiersController::class, 'indexLivre'])->name('livre-list');
    Route::get('/livres/create', [App\Http\Controllers\FichiersController::class, 'createLivre'])->name('livre-create');
    Route::post('livres.store', [App\Http\Controllers\FichiersController::class, 'storeLivre'])->name('livre.store');
    Route::get('/livres/{livre}', [App\Http\Controllers\FichiersController::class, 'showLivre']);
    Route::get('/livres/edit/{livre}', [App\Http\Controllers\FichiersController::class, 'editLivre']);
    Route::post('/livres/{livre}', [App\Http\Controllers\FichiersController::class, 'updateLivre'])->name('livre-update');

    Route::get('/videos', [App\Http\Controllers\FichiersController::class, 'indexVideo'])->name('video-list');
    Route::get('/videos/create', [App\Http\Controllers\FichiersController::class, 'createVideo'])->name('video-create');
    Route::post('videos.store', [App\Http\Controllers\FichiersController::class, 'storeVideo'])->name('video.store');
    Route::get('/videos/{video}', [App\Http\Controllers\FichiersController::class, 'showVideo']);
    Route::get('/videos/edit/{video}', [App\Http\Controllers\FichiersController::class, 'editVideo']);
    Route::post('/videos/{video}', [App\Http\Controllers\FichiersController::class, 'updateVideo'])->name('video-update');

    Route::get('403', function () {
        return view('authentication\general\403')->name('403');
    });
});
//Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('admin/users', 'App\Http\Controllers\Admin\UserController');
//Route::resource('roles', 'App\Http\Controllers\RoleController');
Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('roles-list');
