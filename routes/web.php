<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Incomplete;

// Route::get('/st15', function () {
//     return view('st15');
// });

// GET, POST, PUT, DELETE
// =======================================
// Route::get('/Home', function () {
//     return view('Home');
// });
Route::get('/', function () {
    return view('form-login');
});

// Route::get('/register', function () {
//     return view('register');
// });




// Route::post('/listdata', [\App\Http\Controllers\RegisterController::class, 'doRegister']);
// Route::get('/register-list', [\App\Http\Controllers\RegisterController::class, 'registerlist']);
// Route::get('/get-delete', [\App\Http\Controllers\RegisterController::class, 'getDelete']);
// Route::get('/deletecomple', [\App\Http\Controllers\RegisterController::class, 'deletecomple']);

include 'admin/dashboard.php';
include 'admin/user.php';
include 'admin/createuser.php';
include 'admin/company.php';
include 'admin/administrator.php';
include 'admin/location.php';
include 'admin/product.php';
include 'admin/unit.php';
include 'admin/vendor.php';
include 'admin/item.php';
include 'admin/chageitem.php';
include 'admin/chagecode.php';
include 'admin/customer.php';
include 'admin/payment.php';
include 'admin/newqoute.php';
include 'admin/saleinvoice.php';
include 'admin/creditmemo.php';
include 'admin/receivepayment.php';
include 'admin/rp-newqoute.php';
include 'admin/invoice-register.php';
include 'admin/customer-balance.php';
include 'admin/customer-list.php';
include 'admin/resive-item.php';
include 'admin/issue-item.php';
include 'admin/adjustment-item.php';
include 'admin/adjustment-cost.php';
include 'admin/item-list.php';
include 'admin/resive-report.php';
include 'admin/rp-issueitem.php';
include 'admin/vendor-list.php';
include 'admin/stock-movement.php';
include 'admin/companyinformetion.php';
include 'admin/locationinformetion.php';
include 'admin/paymentlist.php';
