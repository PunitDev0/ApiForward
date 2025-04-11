<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApiForwarding\Beneficiary21Controller;
use App\Http\Controllers\ApiForwarding\BusTicket1Controller;
use App\Http\Controllers\ApiForwarding\DMTBank1Controller;
use App\Http\Controllers\ApiForwarding\FastagRechargeController;
use App\Http\Controllers\ApiForwarding\InsurancePremiumPaymentController;
use App\Http\Controllers\ApiForwarding\LPGController;
use App\Http\Controllers\ApiForwarding\MunicipalityController;
use App\Http\Controllers\ApiForwarding\RechargeController;
use App\Http\Controllers\ApiForwarding\Refund2Controller;
use App\Http\Controllers\ApiForwarding\Remitter2Controller;
use App\Http\Controllers\ApiForwarding\Transaction2Controller;
use App\Http\Controllers\ApiForwarding\UtilitybillPaymentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::get('/recharge/status-enquiry', [RechargeController::class, 'storeStatusEnquiry']);

// Api Route for Beneficiary2Controller start
Route::prefix('dmt2')->group(function () {
    Route::post('/beneficiaries/register', [Beneficiary21Controller::class, 'registerBeneficiary']);
    Route::post('/beneficiaries/fetch', [Beneficiary21Controller::class, 'fetchBeneficiary']);
    Route::post('/beneficiaries/destroy', [Beneficiary21Controller::class, 'destroyBeneficiary']);
    Route::post('/beneficiaries/fetchBeneficiaryData', [Beneficiary21Controller::class, 'fetchBeneficiaryData']);

    Route::post('/Remitter2/queryRemitter', [Remitter2Controller::class, 'queryRemitter']);
    Route::post('/Remitter2/verifyAadhaar', [Remitter2Controller::class, 'verifyAadhaar']);
    Route::post('/Remitter2/verifyAadhaarWithAPI', [Remitter2Controller::class, 'registerAdhaarRemitter']); //Here this call the verifyAadharWithApi
    Route::post('/Remitter2/registerRemitter', [Remitter2Controller::class, 'registerRemitter']);

    Route::post('/Transaction2/pennyDrop', [Transaction2Controller::class, 'pennyDrop']);
    Route::post('/Transaction2/transactionSentOtp', [Transaction2Controller::class, 'transactionSentOtp']);
    Route::post('/Transaction2/transaction', [Transaction2Controller::class, 'transact']);
    Route::post('/Transaction2/transactionStatus', [Transaction2Controller::class, 'transactionStatus']);

    Route::post('/Refund2/refundOtp', [Refund2Controller::class, 'refundOtp']);
    Route::post('/Refund2/processRefund', [Refund2Controller::class, 'processRefund']);
});

Route::prefix('bus')->group(function () {
    Route::get('/busTicket/sourceCities', [BusTicket1Controller::class, 'fetchSourceCities']);
    Route::post('/busTicket/fetchAndStoreAvailableTrips', [BusTicket1Controller::class, 'fetchAndStoreAvailableTrips']);
    Route::post('/busTicket/fetchTripDetails', [BusTicket1Controller::class, 'fetchTripDetails']);
    Route::post('/busTicket/bookandstorebookticket', [BusTicket1Controller::class, 'bookandstorebookticket']);
    Route::post('/busTicket/fetchandstoreboardingpointdetails', [BusTicket1Controller::class, 'fetchandstoreboardingpointdetails']);
});


Route::prefix('utility')->group(function () {

    Route::post('/billPayment/operatorList', [UtilitybillPaymentController::class, 'operatorList']);
    Route::post('/billPayment/fetchBillDetails', [UtilitybillPaymentController::class, 'fetchBillDetails']);
    Route::post('/billPayment/processBillPayment', [UtilitybillPaymentController::class, 'processBillPayment']);
    Route::post('/billPayment/fetchUtilityStatus', [UtilitybillPaymentController::class, 'fetchUtilityStatus']);

    Route::get('/FastagRecharge/OperatorList', [FastagRechargeController::class, 'fastagRechargeOperatorList']);
    Route::get('/FastagRecharge/getConsumerDetails', [FastagRechargeController::class, 'getConsumerDetails']);


//Api Route for FastagRechargeController end;
Route::post('/LPG/fetchLPGOperator', [LPGController::class, 'fetchLPGOperator']);
Route::post('/LPG/FetchLPGDetails', [LPGController::class, 'FetchLPGDetails']);
Route::post('/LPG/payLpgBill', [LPGController::class, 'payLpgBill']);
Route::post('/LPG/getLPGStatus', [LPGController::class, 'getLPGStatus']);

//Api Route for InsurancePremiumPaymentController start
Route::post('/Municipality/fetchMunicipalityOperator', [MunicipalityController::class, 'fetchMunicipalityOperator']);
Route::post('/Municipality/fetchBillDetails', [MunicipalityController::class, 'fetchBillDetails']);
Route::post('/Municipality/PayMunicipalityBill', [MunicipalityController::class, 'PayMunicipalityBill']);
Route::post('/Municipality/MunicipalityEnquiryStatus', [MunicipalityController::class, 'MunicipalityEnquiryStatus']);

Route::post('/InsurancePremiumPayment/fetchLICBill', [InsurancePremiumPaymentController::class, 'fetchLICBill']);
Route::post('/InsurancePremiumPayment/payInsuranceBill', [InsurancePremiumPaymentController::class, 'payInsuranceBill']);
Route::post('/InsurancePremiumPayment/fetchInsuranceStatus', [InsurancePremiumPaymentController::class, 'fetchInsuranceStatus']);


});

