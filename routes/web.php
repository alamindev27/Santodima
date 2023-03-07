<?php

use App\Http\Controllers\Admin\AdminDepositController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AmdinDepositController;
use App\Http\Controllers\Amdin\AdminTaskController;
use App\Http\Controllers\Amdin\AdminWithdrawController;
use App\Http\Controllers\User\UserAccountDetailsController;
use App\Http\Controllers\User\UserAnnouncementController;
use App\Http\Controllers\User\UserDepositController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\UserInviteFriendController;
use App\Http\Controllers\User\UserOnlineController;
use App\Http\Controllers\User\UserOrderController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserTeamReportController;
use App\Http\Controllers\User\UserWithdrawController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();
// cache clear
Route::get('/reboot', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('view:cache');
    // composer dump-autoload
    dd('Done');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'IsAdmin']], function(){
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('admin.index');
    Route::get('commission', [AdminHomeController::class, 'commission'])->name('admin.commission.index');
    Route::post('commission/update', [AdminHomeController::class, 'commissionUpdate'])->name('admin.commission.update');
    Route::get('profile', [AdminProfileController::class, 'index'])->name('admin.profile.index');
    Route::post('profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::get('setting', [AdminSettingController::class, 'index'])->name('admin.setting.index');
    Route::post('setting', [AdminSettingController::class, 'update'])->name('admin.setting.update');
    Route::get('security-setting', [AdminSettingController::class, 'security'])->name('admin.security.setting');
    Route::post('change-email', [AdminSettingController::class, 'emailUpdate'])->name('admin.security.email.update');
    Route::post('change-password', [AdminSettingController::class, 'passwordUpdate'])->name('admin.security.password.update');


    Route::get('deposits-TRC', [AdminDepositController::class, 'index'])->name('admin.deposit.index');
    Route::get('deposits-TRC20', [AdminDepositController::class, 'TRC20'])->name('admin.deposit.TRC20');
    Route::get('deposits-ERC20', [AdminDepositController::class, 'ERC20'])->name('admin.deposit.ERC20');
    Route::get('deposits/approved/{id}', [AdminDepositController::class, 'approved'])->name('admin.deposit.approved');
    Route::get('deposits/rejected/{id}', [AdminDepositController::class, 'rejected'])->name('admin.deposit.rejected');
    Route::get('deposits/move-to-trash/{id}', [AdminDepositController::class, 'moveToTrash'])->name('admin.deposit.trash');
    Route::get('deposits/trash', [AdminDepositController::class, 'trash'])->name('admin.deposit.trash.index');
    Route::get('deposits/{id}/restore', [AdminDepositController::class, 'restore'])->name('admin.deposit.restore');
    Route::get('deposits/{id}/delete', [AdminDepositController::class, 'delete'])->name('admin.deposit.delete');
    Route::get('add-deposits-address', [AdminDepositController::class, 'depositAddress'])->name('admin.deposit.address');
    Route::post('add-deposits-address', [AdminDepositController::class, 'depositAddressSubmit'])->name('admin.deposit.address.store');
    Route::get('deposits-address/{id}/edit', [AdminDepositController::class, 'depositAddressEdit'])->name('admin.depositAddress.edit');
    Route::post('deposits-address/{id}/update', [AdminDepositController::class, 'depositAddressUpdate'])->name('admin.depositAddress.update');
    Route::get('deposits-address/{id}/delete', [AdminDepositController::class, 'depositAddressDelete'])->name('admin.depositAddress.delete');
    Route::resource('slider', AdminSliderController::class);

    Route::get('withdraw', [AdminWithdrawController::class, 'index'])->name('admin.withdraw.index');

    Route::get('task', [AdminTaskController::class, 'index'])->name('admin.task.index');
    Route::post('task/store', [AdminTaskController::class, 'store'])->name('admin.task.store');
    Route::get('task/create', [AdminTaskController::class, 'create'])->name('admin.task.create');
    Route::get('task/{id}/delete', [AdminTaskController::class, 'delete'])->name('admin.task.delete');







});

Route::group(['middleware' => ['auth', 'IsUser']], function(){
    Route::get('/', [UserHomeController::class, 'index'])->name('user.index');
    Route::get('/yuEBao', [UserHomeController::class, 'yuEBao'])->name('user.yuEBao');
    Route::get('/promotion-reward', [UserHomeController::class, 'promotionReward'])->name('user.promotionReward');
    Route::get('/company-profile', [UserHomeController::class, 'companyProfile'])->name('user.companyProfile');
    Route::get('/vip-events', [UserHomeController::class, 'vipEvents'])->name('user.vipEvents');
    Route::get('/tutorial', [UserHomeController::class, 'tutorial'])->name('user.tutorial');
    Route::get('/googleAuth', [UserHomeController::class, 'googleAuth'])->name('user.googleAuth');
    Route::get('/profile', [UserProfileController::class, 'index'])->name('user.profile.index');
    Route::get('/personal-info', [UserProfileController::class, 'personalInfo'])->name('user.profile.personalInfo');
    Route::get('/head-portrait', [UserProfileController::class, 'headPortrait'])->name('user.profile.headPortrait');
    Route::post('/head-portrait', [UserProfileController::class, 'updateHeadPortrait'])->name('user.profile.headPortrait.update');
    Route::get('/bank-card', [UserProfileController::class, 'bankCard'])->name('user.profile.bankCard');
    Route::get('/add-bank-card', [UserProfileController::class, 'addBankCard'])->name('user.profile.addBankCard');
    Route::post('/add-bank-card', [UserProfileController::class, 'bankCardInsert'])->name('user.profile.BankCardInsert');
    Route::get('/login-password', [UserProfileController::class, 'loginPassword'])->name('user.profile.loginPassword');
    Route::post('/login-password', [UserProfileController::class, 'updatePassword'])->name('user.change.password');


    Route::get('/orders', [UserOrderController::class, 'index'])->name('user.order.index');
    Route::get('/online', [UserOnlineController::class, 'index'])->name('user.online.index');
    Route::get('/account-details', [UserAccountDetailsController::class, 'index'])->name('user.accountDetails.index');
    Route::get('/team-reports', [UserTeamReportController::class, 'index'])->name('user.teamReport.index');
    Route::get('/announcement', [UserAnnouncementController::class, 'index'])->name('user.announcement.index');
    Route::get('/invite-friends', [UserInviteFriendController::class, 'index'])->name('user.inviteFriends.index');
    Route::get('/deposit', [UserDepositController::class, 'index'])->name('user.deposit.index');
    Route::get('/usdt-pay', [UserDepositController::class, 'usdtPay'])->name('user.deposit.usdtPay');
    Route::post('/usdt-pay/submit', [UserDepositController::class, 'storeDeposit'])->name('user.deposit.usdtPay.store');


    Route::get('/withdraw', [UserWithdrawController::class, 'index'])->name('user.withdraw.index');

});


