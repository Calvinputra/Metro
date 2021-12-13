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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => ''], function () {
    Voyager::routes();
});
Route::group(['prefix' => 'debug'], function () {
    Route::get('/check_user', function () {
        $user_data = \App\Models\User::all();
        //dd(password_hash('Sycar12345!@#$%',PASSWORD_DEFAULT));
        $verify = password_verify('Sycar12345!@#$%', '$2y$10$6qTN5MnXqQCidcAk9nn4qOIkM/mCE5nP0OOn2ZspNq/wzPhMHn6BC');
    });
});

Route::get('send_mail_register', function () {
    //https://www.itsolutionstuff.com/post/laravel-8-mail-laravel-8-send-email-tutorialexample.html
    $beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);

    //nama viewnya
    $beautymail->send('emails.register', [
        'name' => 'Jonathan',
        'url' => 'https://google.com',
    ], function ($message) {
        $message
            ->from('bar@example.com')
            ->to(env('TESTING_EMAIL'), 'John Smith')
            ->subject('Welcome!');
    });
});

Route::get('send_mail_reset_password', function () {
    //https://www.itsolutionstuff.com/post/laravel-8-mail-laravel-8-send-email-tutorialexample.html
    $beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);

    //nama viewnya
    $beautymail->send('emails.register', [
        'name' => 'Jonathan',
        'url' => 'https://google.com',
    ], function ($message) {
        $message
            ->from('bar@example.com')
            ->to(env('TESTING_EMAIL'), 'John Smith')
            ->subject('Welcome!');
    });
});
