<?php

use App\Models\Announcement;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


//---------PUBLIC ROUTES-------------//
Route::get ('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcement.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/announcements/{announcement:slug}', [AnnouncementController::class, 'show'])->name('announcement.show');          //single announcement page





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// USER DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'employee'])->name('dashboard');

// ADMIN DASHBOARD
Route::get('/admin_dashboard', function () {
    $announcements = Announcement::all();
    return view('admin_dashboard', compact('announcements'));
})->middleware(['auth', 'admin'])->name('admin_dashboard');

require __DIR__.'/auth.php';




//------ADMIN ROUTES-----//
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/create', [AdminController::class, 'AdminCreateAnnouncement'])->name('admin.create');
    Route::get('/{announcement:slug}/edit', [AdminController::class, 'AdminEditAnnouncement'])->name('admin.edit');                      //admin edit announcement page
    Route::get('/announcements/{announcement}/delete', [AdminController::class, 'AdminDeleteAnnouncement'])->name('admin.delete-announcement');        //admin delete announcement
    Route::put('/announcements/{announcement}/update', [AdminController::class, 'AdminUpdateAnnouncement'])->name('admin.update-announcement');        //admin update announcement on database

    Route::post('/admin-store', [AdminController::class, 'AdminStoreAnnouncement'])->name('admin.store');
    Route::get('/create-employee', [AdminController::class, 'AdminCreateEmployee'])->name('admin.create-employee');                                    //admin create employee page
    Route::get('/users', [AdminController::class, 'AdminListUsers'])->name('admin.list-user');
    Route::post('/store-user', [AdminController::class, 'AdminStoreUser'])->name('admin.store-user');                                                  //admin store employee credentials
    Route::get('/users/{user}/delete', [AdminController::class, 'AdminDeleteUser'])->name('admin.delete-user');                                                      //admin delete employee account




});