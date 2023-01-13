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




Route::get('/contact',function (){
    return view("contact");
});


Route::post('/login','AuthController@login')->name('doLogin');
Route::get('/login','AuthController@showLogin')->name('login');

Route::get('/register','AuthController@showLogin')->name('showRegister');
Route::post('/register','AuthController@login')->name('doRegister');


Route::get('/transport/create', 'TransportController@create')->name('create');


Route::get('/testdata','TestController@returnTestData')->name('returnTestData');

Route::post('/api/upload', 'VerificationController@uploadImage')->name('uploadImage');

//Route::get('/changePassword','AuthController@changePassword')->name('changePassword');
//Route::get('/verify','AuthController@verify')->name('verify');

Route::get('/logout',"AuthController@doLogout")->name('logout');


Route::group(['middleware' => ['auth']], function () {

    Route::get('/','DashboardController@showDashboard')->name('index');


    Route::post('/profile/update','AuthController@updateProfile')->name('updateProfile');


    Route::post('/search', 'SearchController@search')->name("search");

    Route::get('/cac/show', 'CacController@showCac')->name("showCac");
    Route::post('/cac/store', 'CacController@doStoreCac')->name("doStoreCac");
    Route::post('/cac/director/store', 'CacController@doStoreDirector')->name("doStoreDirector");
    Route::get('/cac/activate/{orgid}', 'CacController@ActivateCac')->name("ActivateCac");


    Route::get('/dashboard', 'DashboardController@showDashboard');

    Route::post('/generate/pdf', 'PdfController@generatePdf');
    Route::post('/pdf/slip', 'PdfController@printSlip')->name("printSlip");


    Route::group(['middleware' => ['Creator']], function () {


        Route::group(['middleware' => ['CheckCac']], function () {






            Route::post('/organisation/access/update', 'OrganisationController@updateAccess')->name('updateAccess');
            Route::post('/organisation/access/level/update', 'OrganisationController@updateAccessLevel')->name('updateAccessLevel');

            Route::post('/organisation/nin/verify3', 'VerificationController@returnNinDataAjax')->name('returnNinDataAjax');

            Route::get('/organisation/nin/verify2', 'VerificationController@loadVerification2')->name('loadVerification2');

            Route::post('/organisation/nin/verify2', 'VerificationController@verifyVnin')->name('verifyVnin');

            Route::post('/organisation/nin/verify/data2', 'VerificationController@DoLoadVerificationData2')->name('DoLoadVerificationData2');




            Route::get('/organisation/api/documentation', 'OrganisationController@showDocumentation')->name('showDocumentation');
            Route::get('/organisation/create', 'OrganisationController@showCreateOrganisation')->name('showCreateOrganisation');
            Route::post('/organisation/create', 'OrganisationController@doCreateOrganisation')->name('doCreateOrganisation');
            Route::get('/organisation/profile/{orgid}', 'OrganisationController@showOrganisationProfile')->name('showOrganisationProfile');

            Route::get('/organisation/delete/{orgid}', 'OrganisationController@deleteOrganisation')->name('deleteOrganisation');

            Route::post('/organisation/wallet/credit', 'OrganisationController@doCreditWallet')->name('doCreditWallet');
            Route::post('/organisation/wallet/withdraw', 'OrganisationController@doWithdrawWallet')->name('doWithdrawWallet');

            Route::post('/organisation/profile/edit', 'OrganisationController@doEditOrganisation')->name('doEditOrganisation');
            Route::get('/organisation/all', 'OrganisationController@showAllOrganisations')->name('showAllOrganisations');
            Route::get('/organisation/active', 'OrganisationController@showActiveOrganisations')->name('showActiveOrganisations');
            Route::get('/organisation/inactive', 'OrganisationController@showInactiveOrganisations')->name('showInactiveOrganisations');
            Route::get('/organisation/activate/{orgid}', 'OrganisationController@ActivateOrganisation')->name('ActivateOrganisation');

            Route::get('/organisation/wallet/show', 'PaymentController@loadPaymentScreen')->name('loadPaymentScreen');
            Route::get('/organisation/wallet/success', 'PaymentController@verifyPaymentRef')->name('verifyPaymentRef');
            Route::post('/organisation/wallet/show', 'PaymentController@getLink')->name('getLink');


            Route::get('/organisation/logs/verification/{user}', 'LogController@showAccountVerfiyLog')->name('showAccountVerfiyLog');
            Route::get('/organisation/logs/topup/{user}', 'LogController@showTopUpLog')->name('showTopUpLog');


            Route::get('/validation/add/', 'ValidationController@showAddIpe')->name('showAddIpe');
            Route::post('/validation/confirm/', 'ValidationController@doReceiveIpes')->name('doReceiveIpes');
            Route::post('/validation/process/', 'ValidationController@doProcessIpes')->name('doProcessIpes');
            Route::get('/validation/all/', 'ValidationController@showIpes')->name('showIpes');


            Route::get('/admin/validation/all/', 'ADMIN\ValidationController@showaAdminIpes')->name('showaAdminIpes');
            Route::get('/admin/validation/export/all', 'ADMIN\ValidationController@exportToExcel')->name('exportToExcel');
            Route::get('/admin/validation/upload', 'ADMIN\ValidationController@showUploadResult')->name('showUploadResult');
            Route::post('/admin/validation/upload', 'ADMIN\ValidationController@doUploadResult')->name('doUploadResult');



        });

        Route::get('/account/reset', 'AuthController@changePassword')->name('changePassword');
        Route::post('/account/reset', 'AuthController@doChangePassword')->name('doChangePassword');








    });

    Route::group(['middleware' => ['Partners','CheckCac']], function () {

        Route::get('/organisation/nin/verify', 'VerificationController@loadVerification')->name('loadVerification');
        Route::post('/organisation/nin/verify', 'VerificationController@DoLoadVerification')->name('DoLoadVerification');
        Route::post('/organisation/nin/verify/data', 'VerificationController@DoLoadVerificationData')->name('DoLoadVerificationData');

        Route::post('/organisation/nin/verify/fingerprint', 'FingerPrintVerification@doFingerPrintVerification')->name('doFingerPrintVerification');
        Route::post('/organisation/nin/verify/fingerprint/nin', 'FingerPrintVerification@doFingerPrintAndNinVerification')->name('doFingerPrintAndNinVerification');
    });

    Route::post("/verify/demo",[\App\Http\Controllers\VerificationController::class,'DoLoadVerificationDemo']) -> name("DoLoadVerificationDemo");


    Route::get('/verification/logs', 'VerificationController@showLog')->name('showLog');




    Route::group(['prefix'=>'jupiter','middleware'=>('auth:api')],function (){

        Route::post('/auth/password/update', 'Auth2Controller@resetPassword');


        Route::post('/nin/verify', 'API\VerifyController@verifyNin2');
        Route::post('/nin/verify/data', 'API\VerifyController@verifyNinData2');


        Route::group(['prefix'=>'organisation','middleware'=>'SuperUser'],function () {

            //please cde starts here, please ignore this line because it is going to deleted in future

            Route::post('/create', 'Auth2Controller@register');

            Route::post('/profile', 'API\ADMIN\UserController@returnUser');
            Route::post('/profile/edit', 'API\ADMIN\OrganisationController@editOrganisationProfile');
            Route::get('/all', 'API\ADMIN\OrganisationController@returnAllOrganisation');
            Route::get('/active', 'API\ADMIN\OrganisationController@returnActiveOrganisation');
            Route::get('/inactive', 'API\ADMIN\OrganisationController@returnInactveOrganisation');

            Route::post('/access/update', 'API\ADMIN\OrganisationController@createAccess');
            Route::post('/access/all', 'API\ADMIN\OrganisationController@returnAccess');

            Route::post('/access/level/update', 'API\ADMIN\OrganisationController@updateAccessLevel');

            Route::post('/activate', 'API\ADMIN\OrganisationController@activateOrganisation');

            Route::get('/cac/return/admin/{unique_id}', 'API\ADMIN\CacController@return_cac_admin');
            Route::post('/cac/approve/', 'API\ADMIN\CacController@approveCac');



        });

        Route::post('/wallet/fund', 'API\ADMIN\WalletController@fundWallet')->middleware("SuperUser");
        Route::post('/wallet/withdraw', 'API\ADMIN\WalletController@withdrawWallet')->middleware("SuperUser");

        // Route::post('/nin/verify', 'API\VerifyController@verifyNin')->middleware("SuperUser");

    });


    Route::group(['prefix'=>'triangle'],function () {

        Route::post('/token/create', 'Auth2Controller@login');
    });


    Route::group(['prefix'=>'triangle','middleware'=>('auth:api')],function (){

        Route::post('/auth/password/update', 'Auth2Controller@resetPassword');
        Route::post('/credit/purchase/returnurl', 'API\ORGANISATION\PaymentController@returnUrl');
        Route::post('/credit/purchase/confirm', 'API\ORGANISATION\PaymentController@confirm_transaction');


        Route::post('/cac/image/store', 'API\ADMIN\CacController@storeCacDocument');
        Route::post('/cac/director/store', 'API\ADMIN\CacController@storeDirector');
        Route::get('/cac/return/', 'API\ADMIN\CacController@return_cac');





//
//    Route::post('/nin/verify', 'API\VerifyController@returnNinDataTest')->middleware("Partners");

        Route::group(['middleware'=>('Partners')],function (){


            Route::post('/nin/verify', 'API\VerifyController@verifyNin')->middleware("Verv1");
            Route::post('/nin/verify/data', 'API\VerifyController@verifyNinData')->middleware("Verv2");

            Route::post('/nin/verify/finger', 'API\VerifyController@verifyNinFingerPrint');
            Route::post('/nin/verify/fingerAndNin', 'API\VerifyController@verifyNinFingerPrintAndNin');
            Route::post('/nin/verify/fingerr', 'API\VerifyController@verifyNinFingerR');


            Route::post('/ai/nin/verify', 'API\ORGANISATION\AiVerificationController@verifyNin');
            Route::post('/ai/nin/verify/data', 'API\ORGANISATION\AiVerificationController@verifyNinData');



            Route::get('/organisation/access/all', 'API\ORGANISATION\OrganisationController@returnAccess');
            Route::get('/wallet/balance', 'API\ORGANISATION\WalletController@returnUserBalance');

            Route::get('/logs', 'API\ORGANISATION\LogController@accountLogs');

            Route::get('/wallet/balance', 'API\ORGANISATION\WalletController@returnUserBalance');



        });


        Route::group(['prefix'=>'organisation','middleware'=>'Client'],function () {


            Route::post('/create', 'Auth2Controller@register2');
            Route::post('/profile', 'API\ORGANISATION\UserController@returnUser');
            Route::post('/profile/edit', 'API\ORGANISATION\OrganisationController@editOrganisationProfile');
            Route::get('/all', 'API\ORGANISATION\OrganisationController@returnAllOrganisation');
            Route::get('/active', 'API\ORGANISATION\OrganisationController@returnActiveOrganisation');
            Route::get('/inactive', 'API\ORGANISATION\OrganisationController@returnInactveOrganisation');
            Route::post('/activate', 'API\ORGANISATION\OrganisationController@activateOrganisation');


            Route::get('/logs', 'API\ORGANISATION\LogController@accountLogs');


            Route::get('/wallet/balance', 'API\ORGANISATION\WalletController@returnUserBalance');


            Route::post('/nin/verify/finger', 'API\VerifyController@verifyNinFingerPrint');
            Route::post('/nin/verify/fingerAndNin', 'API\VerifyController@verifyNinFingerPrintAndNin');
            Route::post('/nin/verify/fingerr', 'API\VerifyController@verifyNinFingerR');



        });

        Route::post('/wallet/fund', 'API\ORGANISATION\WalletController@fundWallet');

    });


    Route::post('logout', 'Auth2Controller@logout');



});


