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

Route::middleware("guest")->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
});

Route::get('/dashboard/create_user', [\App\Http\Controllers\HomeController::class, 'create_user']);
Route::get('/dashboard/create_info_user', [\App\Http\Controllers\HomeController::class, 'create_informations_user']);

Route::get('/dashboard/create_service', [\App\Http\Controllers\ServiceController::class, 'create_services']);
Route::get('/dashboard/create_poste', [\App\Http\Controllers\PosteController::class, 'create_postes']);

Auth::routes();

Route::middleware("auth")->group(function () {

        Route::name('dashboard.')->group(function () {
            Route::get('/dashboard/accueil', [\App\Http\Controllers\HomeController::class, 'index'])->name('dashboard-accueil');
        });

        Route::name('user.')->group(function () {
            Route::get('/dashboard/user', [\App\Http\Controllers\UserController::class, 'index'])->name('dashboard-user');

            Route::get('/dashboard/user/create', [\App\Http\Controllers\UserController::class, 'create'])->name('dashboard-user-create');
            Route::post('/dashboard/user/create', [\App\Http\Controllers\UserController::class, 'create_post'])->name('dashboard-user-create-post');

            Route::get('/dashboard/user/edit/{id}', [\App\Http\Controllers\UserController::class, 'edit'])->name('dashboard-user-edit');
            Route::post('/dashboard/user/edit/{id}', [\App\Http\Controllers\UserController::class, 'edit_post'])->name('dashboard-user-edit-post');

            Route::get('/dashboard/user/delete/{id}', [\App\Http\Controllers\UserController::class, 'delete'])->name('dashboard-user-delete');
        });

        Route::name('service.')->group(function () {
            Route::get('/dashboard/service', [\App\Http\Controllers\ServiceController::class, 'index'])->name('dashboard-service');

            Route::get('/dashboard/service/create', [\App\Http\Controllers\ServiceController::class, 'create'])->name('dashboard-service-create');
            Route::post('/dashboard/service/create', [\App\Http\Controllers\ServiceController::class, 'create_post'])->name('dashboard-service-create-post');

            Route::get('/dashboard/service/edit/{id}', [\App\Http\Controllers\ServiceController::class, 'edit'])->name('dashboard-service-edit');
            Route::post('/dashboard/service/edit/{id}', [\App\Http\Controllers\ServiceController::class, 'edit_post'])->name('dashboard-service-edit-post');

            Route::get('/dashboard/service/delete/{id}', [\App\Http\Controllers\ServiceController::class, 'delete'])->name('dashboard-service-delete');
        });

        Route::name('poste.')->group(function () {
            Route::get('/dashboard/poste', [\App\Http\Controllers\PosteController::class, 'index'])->name('dashboard-poste');

            Route::get('/dashboard/poste/create', [\App\Http\Controllers\PosteController::class, 'create'])->name('dashboard-poste-create');
            Route::post('/dashboard/poste/create', [\App\Http\Controllers\PosteController::class, 'create_post'])->name('dashboard-poste-create-post');

            Route::get('/dashboard/poste/edit/{id}', [\App\Http\Controllers\PosteController::class, 'edit'])->name('dashboard-poste-edit');
            Route::post('/dashboard/poste/edit/{id}', [\App\Http\Controllers\PosteController::class, 'edit_post'])->name('dashboard-poste-edit-post');

            Route::get('/dashboard/poste/{id}', [\App\Http\Controllers\PosteController::class, 'delete'])->name('dashboard-poste-delete');
        });

        Route::name('settings.')->group(function () {
            Route::get('/dashboard/settings/profile', [\App\Http\Controllers\ProfileController::class, 'profile'])->name('dashboard-profile');
            Route::post('/dashboard/settings/profile', [\App\Http\Controllers\ProfileController::class, 'profile_edit'])->name('dashboard-profile-edit');

            Route::get('/dashboard/settings/password', [\App\Http\Controllers\ProfileController::class, 'profile_password'])->name('dashboard-profile-password');
            Route::post('/dashboard/settings/password', [\App\Http\Controllers\ProfileController::class, 'profile_password_edit'])->name('dashboard-profile-password-post');

            Route::get('/dashboard/settings/delete', [\App\Http\Controllers\ProfileController::class, 'profile_delete'])->name('dashboard-profile-delete');
            Route::post('/dashboard/settings/delete', [\App\Http\Controllers\ProfileController::class, 'profile_delete_post'])->name('dashboard-profile-delete-post');
        });

        Route::name('inbox.')->group(function () {
            Route::get('/dashboard/inbox', [\App\Http\Controllers\inboxController::class, 'index'])->name('dashboard-inbox');
            Route::get('/dashboard/inbox/show/{id}', [\App\Http\Controllers\inboxController::class, 'show'])->name('dashboard-inbox-show');
            Route::get('/dashboard/inbox/new', [\App\Http\Controllers\inboxController::class, 'new'])->name('dashboard-inbox-new');
        });

        Route::name('work.')->group(function () {
            Route::get('/dashboard/work/chat', [\App\Http\Controllers\workController::class, 'chat'])->name('dashboard-work-chat');
        });

        Route::name('api.')->group(function () {
            Route::get('/dashboard/api', [\App\Http\Controllers\apiController::class, 'index'])->name('dashboard-api');
            Route::post('/dashboard/api/create', [\App\Http\Controllers\apiController::class, 'create'])->name('dashboard-api-create');
            Route::get('/dashboard/api/show/{id}', [\App\Http\Controllers\apiController::class, 'show'])->name('dashboard-api-show');
            Route::post('/dashboard/api/show/{id}', [\App\Http\Controllers\apiController::class, 'edit'])->name('dashboard-api-edit');

            Route::get('/dashboard/api/delete/{id}', [\App\Http\Controllers\apiController::class, 'delete'])->name('dashboard-api-delete');
        });

        Route::name('analyse.')->group(function () {
            Route::get('/dashboard/analyse', [\App\Http\Controllers\annaliseWebController::class, 'index'])->name('dashboard-analyse');
            Route::post('/dashboard/analyse/create', [\App\Http\Controllers\annaliseWebController::class, 'create'])->name('dashboard-analyse-create');
            Route::get('/dashboard/analyse/show/{id}', [\App\Http\Controllers\annaliseWebController::class, 'show'])->name('dashboard-analyse-show');

            Route::post('/dashboard/analyse/edit/{id}', [\App\Http\Controllers\annaliseWebController::class, 'edit'])->name('dashboard-analyse-edit');
        });
});
