<?php

use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
use Illuminate\Support\Facades\Route;

Route::get('ping', function () {
    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us21'
    ]);

    $response = $mailchimp->lists->addListMember('e63037030e', [
        'email_address' => 'alicia.dewet@gmail.com',
        'status' => 'subscribed'
    ]);

    ddd($response);
});

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionsController::class, 'login'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

//Route::get('categories/{category:slug}', function (Category $category) {
//    return view('posts', [
//        'posts' => $category->posts->load(['category', 'author']),
//        'categories' => Category::all(),
//        'currentCategory' => $category
//    ]);
//});

//Route::get('authors/{author:username}', function (User $author) {
//    return view('posts.index', [
//        'posts' => $author->posts->load(['category', 'author'])
//    ]);
//});
