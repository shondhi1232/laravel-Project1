<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\feedbackController;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Clinets;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


route::get('/feedback',[feedbackController::class, 'addfeedback']);


route::get('/Clients',[ClientsController::class, 'fetchClients']);


route::get('/add-post',[PostController::class, 'addPost']);
route::post('/create-post',[PostController::class, 'createPost'])->name('post-create');
route::get('/posts',[PostController::class, 'getPost']);
route::get('/delete-post/{id}',[PostController::class, 'deletePost']);
route::get('/edit-post/{id}',[PostController::class, 'editPost']);

/*Route::get('users/{user}/post/{post}', function(User $user,Post $post) {
    return $post;
});
*/
