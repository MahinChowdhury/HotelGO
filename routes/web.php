<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\facilitiesController;
use App\Http\Controllers\newController;
use App\Http\Controllers\roomController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userQueryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[newController::class,'index']);

//Rooms Section
Route::get('/rooms',[newController::class,'rooms']);
Route::get("/rooms/{room}",[roomController::class,'showSingleRoom']);

Route::get('/contact',[newController::class,'contact']);

Route::get('/facilities',[newController::class,'facilities']);

Route::get('/about',[newController::class,'about']);

//Store userquries into database
Route::post('/userqueries', [UserQueryController::class, 'storeQuery']);


//Login user
Route::post("/users/login",[userController::class,'authenticate']);
//Registration of user
Route::post('/users/create',[userController::class,'create'])->middleware('guest');
//Logout user
Route::post("/users/logout",[userController::class,'logout'])->middleware('auth');

//Admin Section
Route::get('/admin/login', [adminController::class,'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [adminController::class,'login'])->name('admin.login.submit');

Route::get("/admin/dashboard",[adminController::class,'showDashboard']);
Route::post("admin/admin/logout",[adminController::class,'showDashboard']);

//Admin User Queries Section
Route::get("admin/user_queries",[userQueryController::class,'showAllQueries']);

//Admin Facilities & Features

//Features Section
Route::get("admin/facilities",[facilitiesController::class,'showFacilities']);
Route::post("admin/facilities/featureSubmit",[facilitiesController::class,'insertFeatures']);
Route::delete('/features/{feature}', [facilitiesController::class,'destroyFeature'])->name('features.destroy');

//Facilities Section
Route::post('admin/facilities/facilitySubmit', [facilitiesController::class,'storeFacility'])->name('facilities.submit');
Route::delete('/facilities/{facility}', [facilitiesController::class,'destroyFacility'])->name('facilities.destroy');

//Admin Rooms Create section
Route::get("admin/rooms",[roomController::class,'showAdminRoomCreate']);
Route::post("admin/rooms/roomSubmit",[roomController::class,'storeRooms']);
Route::delete('/rooms/{room}',[roomController::class,'destroyRoom'])->name('rooms.destroy');

Route::get("/confirm_booking/{room}",[roomController::class,'confirmBooking']);
//Route::post("/confirm_booking/{room}",[roomController::class,'checkBooking']);

//Admin Users management Section
Route::get("admin/users",[adminController::class,'showUser']);
Route::delete('/users/{user}',[adminController::class,'destroyUser'])->name('users.destroy');

//Password Resetting

Route::get('/forgot-password', function () {
    return view('auth.forget-password');
})->middleware('guest');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with("success","Email Sent! Check your email.")
        : back()->with("error","email sending failed.");
})->middleware('guest')->name('password.email');

Route::post('/reset-password', [userController::class,'updatePassword'])->name('password.update');


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
//Route::get('/example2', [SslCommerzPaymentController::class,'exampleHostedCheckout']);
Route::post("/confirm_booking/{room}",[SslCommerzPaymentController::class,'exampleHostedCheckout'])->middleware('auth');

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
