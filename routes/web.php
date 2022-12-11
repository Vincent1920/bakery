<?php

use Illuminate\Support\Facades\Route;


use App\Models\user;
use App\Models\post;
use App\Models\posts;
use App\Http\Controllers\news;
use App\Http\Controllers\category;
use App\Http\Controllers\update;
use App\Http\Controllers\DashboardPost;
use App\Http\Controllers\Controller_navbar;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\dashboard as ControllersDashboard;

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

// Route::get('/', [App\Http\Controllers\Controller_navbar::class, 'index']);
//Route::get('/', [App\Http\Controllers\Controller_home::class,'index']);
Route::get('/', [Controller_navbar::class, 'bob',]);
Route::get('/roti', [Controller_navbar::class, 'menu',]);

   
Route::get('/news', [news::class, 'news',])->name('news');
Route::get('/bobnews', [news::class, 'bobnews']);


Route::get('/dashboard', [Controller_navbar::class, 'dashboard',]);


// Route::get('/keranjang', function () {
    // return view('bob');
// });
Route::get('/login', [logincontroller::class, 'login']);
Route::post('/login',[loginController::class,'authenticate' ]);
// Route::post('/login',[loginController::class,'Validator' ]);
Route::post('/logout',[LoginController::class, 'logout' ]);

// Route::get('/dashboard',function (){
//     return view('dashboard.index');
// })->middleware('auth');
Route::get('/dasboard',[App\Http\Controllers\dashboard::class,' dashboard']);


Route::get('/register',[ RegisterController::class,'index' ]);
Route::post('/register',[RegisterController::class,'store' ]);     

// Route::get('/update',[ RegisterController::class]);

// Route::resource('/dashboard/posts',DashboardPost::class)->middleware('auth');

// Route::get('/dashboard/post',[DashboardPostController::class,'checkSlug']);

// Route::resource('/dashboard/posts',[DashboardPost::class,]);
Route::group(['prefix' => 'posts' , 'as' => 'posts.'], function(){
    Route::get('/',[DashboardPost::class, 'index'])->name('index');
    
    Route::get('/create',[DashboardPost::class , 'create']);
    Route::post('/store',[DashboardPost::class , 'store']);
    // Route::group(['prefix' => 'dashboard' , 'as' => 'dashboard.'], function(){
    //     Route::get('/show/{posts}',[DashboardPost::class , 'show']);
    //     Route::get('/edit/{posts}',[DashboardPost::class , 'edit']);

    // });
    
    Route::get('/dashoard/show/{posts}',[DashboardPost::class , 'show'])->name('show');
    
    // Route::delete('/delete/{posts}',[ DashboardPost::class , 'delete']);
    Route::delete('/delete/{posts}',[ DashboardPost::class , 'destroy']);
    Route::get('/edit/{post}',[DashboardPost::class , 'edit']);
    Route::post('/update/{post}',[DashboardPost::class , 'update']);

    // output{
        // {{ route('home') }}
        // posts/create
        // posts/dashboard/show
        // posts/dashboard/edit
    // }

});

// posts/dashboard
// Route::resource('/dashboard/posts',DashboardPostController::class);
Route::get('/dashboard/posts/checkSlug',[DashboardPost::class,'checkSlug'])
->middleware('auth');

// Route::get('/posts/{post:slug}',[PostController::class,'show']);





Route::get('/reload-captcha', [App\Http\Controllers\Auth\RegisterController::class, 'reloadCaptcha']);





// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

