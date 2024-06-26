<?php

use App\Http\Controllers\Frontend\JobListingController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\JobCategoryController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\PrivacyController;
use App\Http\Controllers\Frontend\SignupController;
use App\Http\Controllers\Frontend\SubscriberController;
use App\Http\Controllers\Frontend\TermsController;
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


Route::get('/check-env', function () {
    return response()->json([
        'DB_CONNECTION' => env('DB_CONNECTION'),
        'DB_HOST' => env('DB_HOST'),
        'DB_PORT' => env('DB_PORT'),
        'DB_DATABASE' => env('DB_DATABASE'),
        'DB_USERNAME' => env('DB_USERNAME'),
        'DB_PASSWORD' => env('DB_PASSWORD'),
    ]);
});

//visitors frontend routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('terms-of-use', [TermsController::class, 'index'])->name('terms');
Route::get('job-categories', [JobCategoryController::class, 'categories'])->name('job_categories');
Route::get('blog', [PostController::class, 'index'])->name('blog');
Route::get('post/{slug}', [PostController::class, 'detail'])->name('post');
Route::get('faq', [FaqController::class, 'index'])->name('faq');
Route::get('privacy-policy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/submit', [ContactController::class, 'submit'])->name('contact_submit');
Route::get('pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('create-account', [SignupController::class, 'index'])->name('signup');

Route::get('job-listing', [JobListingController::class, 'index'])->name('job_listing');
Route::get('job-detail/{id}', [JobListingController::class, 'detail'])->name('job');
Route::post('job-enquiry/email', [JobListingController::class, 'send_email'])->name('job_enquiry_send_email');

Route::post('subscriber/send-email', [SubscriberController::class, 'send_email'])->name('subscriber_send_email');
Route::get('subscriber/verify/{email}/{token}', [SubscriberController::class, 'verify'])->name('subscriber_email_verify');
