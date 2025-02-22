<?php

use App\Http\Controllers\FormController;

use App\Http\Controllers\PartnerFormController;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;

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

// Route::get('/form',[FormController::class,'add']);
// Route::get('/form', function(){
//     return view('customer-form'); 
// });
Route::get('form', 'FormController@index')->name('customer-form');
Route::post('form', 'FormController@add')->name('customer-form.send');

Route::get('partner', 'PartnerFormController@index')->name('partner-form');
Route::post('partner', 'PartnerFormController@add')->name('partner-form.send');

Route::get('contact-us', 'ContactController@getContact');
Route::post('contact-us', 'ContactController@saveContact');

Route::get('admin/new', 'AdminController@initadmin');

Route::get('exportUsers', 'AdminController@exportUserCsv');
Route::get('exportParners', 'AdminController@exportPartnerCsv');
Route::get('exportContacts', 'AdminController@exportContactCsv');
Route::get('exportTrials', 'AdminController@exportTrialCsv');

// Route::view('admin/register', 'auth.register')->middleware('verified')->name('auth.register');
// Route::post('admin/register', 'Auth\RegisterController@register')->middleware('verified');

Route::get('/admin/home', 'AdminController@index')->middleware('verified')->name('admin-home');
Route::get('/admin/view-admin', 'AdminController@view_admin')->middleware('verified')->name('admin-user');
Route::get('/admin/partner', 'AdminController@partner_index')->middleware('verified')->name('admin-partner');
Route::get('/admin/contact', 'AdminController@contact_index')->middleware('verified')->name('admin-contact');


Route::post('/admin/home', 'AdminController@delete')->middleware(['auth'])->name('admin-home');
Route::post('/admin/view-admin', 'AdminController@admin_delete')->middleware(['auth'])->name('admin-user');
Route::post('/admin/contact', 'AdminController@contact_delete')->middleware(['auth'])->name('admin-contact');

Route::get('/admin/search', 'AdminController@search')->middleware('auth')->name('admin-search');
Route::get('/admin/partner/search', 'AdminController@partner_search')->middleware('auth')->name('admin-partner-search');
Route::get('/admin/contact/search', 'AdminController@contact_search')->middleware('auth')->name('admin-contact-search');
Route::get('/admin/view-admin/search', 'AdminController@admin_search')->middleware('auth')->name('admin-admin-search');
// Route::post('/admin/search', 'AdminController@search')->middleware(['auth'])->name('admin-home');


// Route::get("/admin/view/{id}", 'AdminController@delete')->middleware(['auth'])->name('admin-update');
Route::get("/admin/view1/{id}", 'AdminController@admin_delete')->middleware(['auth'])->name('admin-update');
// Route::get("/admin/view2/{id}", 'AdminController@contact_delete')->middleware(['auth'])->name('admin-contact-update');
// Route::post("/admin/view/{id}", 'AdminController@update')->middleware(['auth'])->name('admin-update');

Route::get('form', 'FormController@index')->name('customer-form');
Route::post('form', 'FormController@add')->name('customer-form.send');




Route::get('manageMailChimp', 'MailChimpController@manageMailChimp');
Route::post('subscribe',['as'=>'subscribe','uses'=>'MailChimpController@subscribe']);
Route::post('sendCompaign',['as'=>'sendCompaign','uses'=>'MailChimpController@sendCompaign']);

Route::view('faq', 'faq')->name('faq');
Route::view('contact_us', 'contact_us')->name('contact_us');
Route::post('contact', 'ContactController@sendMessage')->name('contact.send');

Route::view('portfolio', 'portfolio')->name('portfolio');
Route::view('post', 'post')->name('post');

Route::view('about', 'about')->name('about');
Route::view('welcome', 'welcome')->name('welcome');
Route::view('services', 'services')->name('services');
Route::view('consumer-discretionary-overview', 'consumer-discretionary-overview')->name('consumer-discretionary-overview');
Route::view('services', 'services')->name('services');
Route::view('sector-overview', 'sector-overview')->name('sector-overview');
Route::view('real-estate', 'real-estate')->name('real-estate');
Route::view('energy-overview', 'energy-overview')->name('energy-overview');
Route::view('materials-overview', 'materials-overview')->name('materials-overview');
Route::view('industrials-overview', 'industrials-overview')->name('industrials-overview');
Route::view('consumer-discretionary-overview', 'consumer-discretionary-overview')->name('consumer-discretionary-overview');
Route::view('consumer-staples-overview', 'consumer-staples-overview')->name('consumer-staples-overview');
Route::view('health-care-overview', 'health-care-overview')->name('health-care-overview');
Route::view('finacials', 'finacials')->name('finacials');
Route::view('information-technology', 'information-technology')->name('information-technology');
Route::get('newsletter','NewsletterController@create');
Route::post('newsletter','NewsletterController@store');
Route::view('request-demo', 'request-demo')->name('demo');
Route::post('request-demo', 'RequestDemoController@requestDemo')->name('request-demo');

Route::get('test', function(){
    
});

Route::view('license', 'license')->name('license');
Route::view('features', 'features')->name('features');
Route::get('paymen/{licenseTypeId?}', 'PaymentController@show')->name('payment.show');
Route::post('payment', 'PaymentController@makePayment')->name('payment');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

// Route::get('payment/interest-show/{transactionRef}', 'PaymentController@success')->name('payment.success');

Route::get('payment/success/{transactionRef}', 'PaymentController@success')->name('payment.success');
Route::get('payment/fail/{transactionRef', 'PaymentController@fail')->name('payment.fail');


Route::get('states/{countryId}', 'StateController@getStates');
Route::get('cities/{stateId}', 'StateController@getCities');

Route::get('search', 'SearchController@search')->name('search');

// Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('sap_data_table', 'PartnersController@partnersDataTable')->name('partner.datatable');
Route::get('sap', 'PartnersController@index')->name('partner.index');

Route::get('sap/add', 'PartnersController@add')->name('partner.add');
Route::get('sap/{partner}', 'PartnersController@show')->name('partner.show');

Route::post('sap', 'PartnersController@store')->name('partner.store');
Route::get('sap/edit/{partner}', 'PartnersController@edit')->name('partner.edit');
Route::put('sap/update/{partner}', 'PartnersController@update')->name('partner.update');
