<?php

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

Route::view('auth-sign-in', [AdminController::class, 'index']);
Route::view('add-active-vendors', 'add-active-vendors');
Route::view('add-setup', 'add-setup');
Route::view('index', 'index');
Route::view('index', 'index');
Route::view('vendors', 'vendors');
Route::view('view-content', 'view-content');
Route::view('view-on-map', 'view-on-map');

//Route::view('view-user', 'view-user');
Route::view('pricing','pricing');
Route::view('product','product');
Route::view('order','order');
Route::view('auth-login','auth-login');
Route::view('auth-sign-in','auth-sign-in');
Route::view('order-new','order-new');
Route::view('view-customer','view-customer');
Route::view('auth-recover-pwd','auth-recover-pwd');
Route::view('invoice','invoice');
Route::view('view-customer','view-customer');
Route::view('invoice-view','invoice-view');
Route::view('single-reported-feeds','single-reported-feeds');
Route::view('auth-recoverpw','auth-recoverpw');
Route::view('auth-login','auth-login');
Route::view('customer-add','customer-add');
Route::view('add-product','add-product');
Route::view('privacy-policy','privacy-policy');
Route::view('terms-of-service','terms-of-service');
Route::view('auth-sign-up','auth-sign-up');
Route::view('auth-remove-pwd','auth-remove-pwd');
Route::view('customer','customer');
Route::view('timeline','timeline');
Route::view('add-blocked-vendors','add-blocked-vendors');
Route::view('view-on-map', 'view-on-map');
Route::view('edit-blocked-vendors', 'edit-blocked-vendors');
Route::view('user-profile', 'user-profile');
Route::view('edit-user', 'edit-user');
Route::view('view-customer', 'view-customer');
Route::view('add-pending-verifications', 'add-pending-verifications');
Route::view('edit-pending-verifications', 'edit-pending-verifications');
Route::view('feeds', 'feeds');
Route::view('cities', 'cities');
Route::view('leads', 'leads');
Route::view('request', 'request');
Route::view('create-user', 'create-user');
Route::view('user-table', 'user-table');
Route::view('add-active-vendors','add-active-vendors');