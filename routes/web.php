<?php

use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\backend\BackendController;
use App\Http\controllers\frontend\ContactController;
use App\Http\Controllers\backend\TestimonialController;
use App\Http\Controllers\backend\GetAQuoteController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\PortfolioController;
use App\Http\Controllers\backend\MainPortfolioController;
use App\Http\Controllers\backend\ThemeController;
use App\Http\Controllers\HomeController;
use App\Models\MainPortfolio;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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




Auth::routes();

Route::controller(FrontendController::class)->group(function (){

   Route::get('/' , 'index')->name('frontend.home');
   Route::get('/service' , 'service')->name('frontend.service');
   Route::get('/portfolio' , 'portfolio')->name('frontend.portfolio');
   Route::get('/portfolioDetail/{id}' , 'portfolioDetail')->name('frontend.portfolioDetail');
});



//backend
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('backend');


//slider Controller
Route::controller(SliderController::class)->group(function (){

   Route::get('backend/slider/index' , 'index')->name('backend.slider.index');
   Route::get('backend/slider/create' , 'create')->name('backend.slider.create');
   Route::post('backend/slider/store' , 'store')->name('backend.slider.store');
   Route::get('backend/slider/edit/{id}' , 'edit')->name('backend.slider.edit');
   Route::post('backend/slider/update/{id}' , 'update')->name('backend.slider.update');
   Route::get('backend/slider/delete/{id}' , 'destroy')->name('backend.slider.delete');

});

//services Controller
Route::controller(ServiceController::class)->group(function (){

   Route::get('backend/services/index' , 'index')->name('backend.services.index');
   Route::get('backend/services/create' , 'create')->name('backend.services.create');
   Route::post('backend/services/store' , 'store')->name('backend.services.store');
   Route::get('backend/services/edit/{id}' , 'edit')->name('backend.services.edit');
   Route::post('backend/services/update/{id}' , 'update')->name('backend.services.update');
   Route::get('backend/services/delete/{id}' , 'destroy')->name('backend.services.delete');
});

//testimnial Controller
Route::controller(TestimonialController::class)->group(function (){

   Route::get('backend/testimonial/index' , 'index')->name('backend.testimonial.index');
   Route::get('backend/testimonial/create' , 'create')->name('backend.testimonial.create');
   Route::post('backend/testimonial/store' , 'store')->name('backend.testimonial.store');
   Route::get('backend/testimonial/edit/{id}' , 'edit')->name('backend.testimonial.edit');
   Route::post('backend/testimonial/update/{id}' , 'update')->name('backend.testimonial.update');
   Route::get('backend/testimonial/delete/{id}' , 'destroy')->name('backend.testimonial.delete');
});

//Get_A_Quote Controller
Route::controller(GetAQuoteController::class)->group(function (){

   Route::get('backend/getAquote/create' , 'create')->name('backend.getAquote.create');
   Route::post('backend/getAquote/store' , 'store')->name('backend.getAquote.store');
});
//Main portfolio
Route::controller(MainPortfolioController::class)->group(function (){

   Route::get('backend/mainPortfolio/index', 'index')->name('backend.mainPortfolio.index');
   Route::get('backend/mainPortfolio/create', 'create')->name('backend.mainPortfolio.create');
   Route::post('backend/mainPortfolio/store', 'store')->name('backend.mainPortfolio.store');
   Route::get('backend/mainPortfolio/edit/{id}', 'edit')->name('backend.mainPortfolio.edit');
   Route::post('backend/mainPortfolio/update/{id}', 'update')->name('backend.mainPortfolio.update');
   Route::get('backend/mainPortfolio/delete/{id}', 'destroy')->name('backend.mainPortfolio.delete');
});
//Portfolio detail images Controller
Route::controller(PortfolioController::class)->group(function (){


   Route::get('backend/portfolio/index', 'index')->name('backend.portfolio.index');
   Route::get('backend/portfolio/create', 'create')->name('backend.portfolio.create');
   Route::post('backend/portfolio/store', 'store')->name('backend.portfolio.store');
   Route::get('backend/portfolio/edit/{id}', 'edit')->name('backend.portfolio.edit');
   Route::post('backend/portfolio/update/{id}', 'update')->name('backend.portfolio.update');
   Route::get('backend/portfolio/delete/{id}', 'destroy')->name('backend.portfolio.delete');
});

//contact Controller
Route::controller(ContactController::class)->group(function (){


   Route::get('backend/contact/index', 'index')->name('backend.contact.index');
   Route::post('frontend/contact/store' , 'store')->name('frontend.contact.store');
});

//theme Controller
Route::controller(ThemeController::class)->group(function (){


   Route::get('backend/theme/index', 'index')->name('backend.theme.index');
   Route::get('backend/theme/create', 'create')->name('backend.theme.create');
   Route::post('backend/theme/store', 'store')->name('backend.theme.store');
   Route::get('backend/theme/edit/{id}', 'edit')->name('backend.theme.edit');
   Route::post('backend/theme/update/{id}', 'update')->name('backend.theme.update');
   Route::get('backend/theme/delete/{id}', 'destroy')->name('backend.theme.delete');
});