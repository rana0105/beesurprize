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

// frontend routes

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', 'Frontend\FrontendController@index');

Route::get('live-contest', 'Frontend\FrontendController@liveContest')->name('live.contest');
Route::get('liveAllcontest', 'Frontend\FrontendController@liveAllcontest');

Route::get('live-contest-detail/{id}', 'Frontend\FrontendController@liveContestDetail')->name('live.contest.detail');

Route::get('livecontest', 'Frontend\FrontendController@liveContestDe');

Route::get('upcoming-contest', 'Frontend\FrontendController@upcomingContest')->name('upcoming.contest');
Route::get('upcoming-contest-detail', 'Frontend\FrontendController@upcomingContestDetail')->name('upcoming.contest.detail');
Route::get('contest-winner', 'Frontend\FrontendController@contestWinner')->name('contest.winner');
Route::get('about-us', 'Frontend\FrontendController@aboutUs')->name('about.us');
Route::get('how-work', 'Frontend\FrontendController@howWork')->name('how.work');
Route::get('profile', 'Frontend\FrontendController@profile')->name('profile');
Route::get('contact', 'Frontend\FrontendController@contact')->name('contact');
Route::get('faq', 'Frontend\FrontendController@faq')->name('faq');
Route::get('terms-service', 'Frontend\FrontendController@termsService')->name('terms.servce');
Route::get('privacy-policy', 'Frontend\FrontendController@privacyPolicy')->name('privacy.policy');

// purshase ticket
Route::get('contestbook', 'WebController\Backend\TicketController@contestbook');
Route::get('cart', 'Frontend\FrontendController@cart')->name('cart');
Route::get('ticket-edit/{id}', 'WebController\Backend\TicketController@ticketEdit');

// brands and prize load
Route::get('loadPrize', 'Frontend\FrontendController@loadPrize');
Route::get('loadBrand', 'Frontend\FrontendController@loadBrand');



// >>>>>>>>>>>>>>>> //

Route::get('errors', 'ErrorController@error403')->name('403');
Auth::routes();
   
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/vendor', 'HomeController@vendor')->name('vendor');

// stripe add for pay money
    Route::get('stripe-payment', 'WebController\Backend\StripeController@handleGet');
    Route::post('stripe-payment', 'WebController\Backend\StripeController@handlePost')->name('stripe.payment');

// backend routes
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['admincheck']], function () {
        //role and permissions
        Route::resource('roles', 'WebController\Backend\RoleController');
        Route::resource('permissions', 'WebController\Backend\PermissionController');

        // user part
        Route::resource('users', 'WebController\Backend\UserController');
        Route::get('members', 'WebController\Backend\UserController@members')->name('members');
        Route::get('suspend-user', 'WebController\Backend\UserController@suspend')->name('suspend-user');
        Route::get('ban-or-unban-user', 'WebController\Backend\UserController@banUnban')->name('banunban');
        Route::get('winner-list', 'WebController\Backend\UserController@winnerList')->name('winner-list');
        
        Route::resource('blogs', 'WebController\Backend\BlogController');

        Route::resource('brand', 'WebController\Backend\BrandController');
        Route::resource('prize', 'WebController\Backend\PrizeController');

        // cometition part
        Route::resource('live-competition', 'WebController\Backend\TicketController');

        Route::get('upcoming-competition', 'WebController\Backend\TicketController@upcomingCompetition')->name('upcoming-competition');
        Route::get('upcoming-competition-create', 'WebController\Backend\TicketController@upcomingCompetitionCreate')->name('upcoming-competition.create');

        Route::post('upcoming-competition', 'WebController\Backend\TicketController@upcomingCompetitionStore')->name('upcoming-competition.store');

        Route::get('to-live-competition/{id}', 'WebController\Backend\TicketController@toLive')->name('to-live-competition');

        Route::resource('questions', 'WebController\Backend\QuestionController');

        // site setting or application setting part
        Route::get('site-setting', 'WebController\Backend\SettingController@siteSetting')->name('sitesetting');
        Route::get('create-setting', 'WebController\Backend\SettingController@createSetting')->name('createSetting');

        Route::get('email-template', 'WebController\Backend\SettingController@emailTemplate')->name('email-template');
        Route::get('create-template', 'WebController\Backend\SettingController@createTemplate')->name('createTemplate');

        Route::get('mcqlist', 'WebController\Backend\SettingController@mcqList')->name('mcqlist');
        Route::get('create-mcqlist', 'WebController\Backend\SettingController@createMcqlist')->name('create-mcqlist');

        Route::get('success-member', 'WebController\Backend\SettingController@competitionlist')->name('competitionlist');
        Route::post('success-member', 'WebController\Backend\SettingController@questionAns')->name('questionAns');
        Route::get('suspend-competition', 'WebController\Backend\SettingController@suscompetitionlist')->name('suscompetitionlist');

        // customer or members part
        Route::get('customer-testmonial', 'WebController\Backend\SettingController@customerTestmonial')->name('customer-testmonial');
        Route::get('customer-testmonial-create', 'WebController\Backend\SettingController@createcustomerTestmonial')->name('customer-testmonial.create');
        
    });
    // customer access 
    Route::get('user-profile', 'WebController\Backend\UserController@userProfile')->name('userProfile');

    Route::get('/loadUser/{id}', 'WebController\Backend\UserController@loadUser');
    Route::post('personalIfo', 'WebController\Backend\UserController@personalIfo')->name('personalIfo');
    Route::post('settingIfo', 'WebController\Backend\UserController@settingIfo')->name('settingIfo');
    Route::post('contactInfo', 'WebController\Backend\UserController@contactInfo')->name('contactInfo');
    Route::post('passwordInfo', 'WebController\Backend\UserController@passwordInfo')->name('passwordInfo');

    Route::get('checkout', 'Frontend\FrontendController@checkout')->name('checkout');

    Route::post('allpostsave', 'WebController\Backend\TicketController@allpostsave');

    Route::post('success-member', 'WebController\Backend\SettingController@questionAns')->name('questionAns');
    
});
