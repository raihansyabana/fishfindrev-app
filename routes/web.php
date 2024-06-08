<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Admin

route::get('/',[AdminController::class,'home']);

route::get('/home',[AdminController::class,'index'])->name('home');

route::get('/create_mancing',[AdminController::class,'create_mancing'])->middleware([
    'auth','admin']);;

route::post('/add_mancing',[AdminController::class,'add_mancing'])->middleware([
    'auth','admin']);;

route::get('/view_mancing',[AdminController::class,'view_mancing'])->middleware([
    'auth','admin']);;

route::get('/mancing_delete/{id}',[AdminController::class,'mancing_delete'])->middleware([
    'auth','admin']);;

route::get('/mancing_update/{id}',[AdminController::class,'mancing_update'])->middleware([
    'auth','admin']);;

route::post('/edit_mancing/{id}',[AdminController::class,'edit_mancing'])->middleware([
    'auth','admin']);;

route::get('/bookings',[AdminController::class,'bookings'])->middleware([
    'auth','admin']);

route::get('/delete_booking/{id}',[AdminController::class,'delete_booking'])->middleware([
    'auth','admin']);;

route::get('/view_gallery',[AdminController::class,'view_gallery'])->middleware([
    'auth','admin']);;

route::post('/upload_gallery',[AdminController::class,'upload_gallery'])->middleware([
    'auth','admin']);;

route::get('/delete_gallery/{id}',[AdminController::class,'delete_gallery'])->middleware([
    'auth','admin']);;

route::get('/user_message',[AdminController::class,'user_message'])->middleware([
    'auth','admin']);;

route::get('/send_mail/{id}',[AdminController::class,'send_mail'])->middleware([
    'auth','admin']);;

route::post('/mail/{id}',[AdminController::class,'mail'])->middleware([
    'auth','admin']);;


// Dashboard

route::post('/contact',[DashboardController::class,'contact']);

route::get('/maps',[DashboardController::class,'maps']);

route::get('/mancing_menu',[DashboardController::class,'mancing_menu']);

route::get('/contact_us',[DashboardController::class,'contact_us']);

route::get('/gallery_mancing',[DashboardController::class,'gallery_mancing']);

route::get('/mancing_details/{id}',[DashboardController::class,'mancing_details']);

route::post('/add_booking/{id}',[DashboardController::class,'add_booking']);
