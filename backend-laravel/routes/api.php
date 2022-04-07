<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MenuController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CountryController;
use App\Http\Controllers\API\CityController;
use App\Http\Controllers\API\ProvinceController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\AuthSocialLoginController;
use App\Http\Controllers\API\BrandController;
use App\Http\Controllers\API\CartController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\WishListController;
use App\Http\Controllers\API\TransactionController;
use App\Http\Controllers\API\ShippingController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\WebsiteFeedbackController;
use App\Http\Controllers\API\SettingController;
use App\Http\Controllers\API\HomepageContentController;
use App\Http\Controllers\API\SliderController;
use App\Http\Controllers\API\PaymentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//auth controller
Route::get('/user', [AuthController::class, 'user'])->middleware('auth:sanctum');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout',  [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/forgot_password', [AuthController::class, 'forgotPasswordRequest']);
Route::post('/reset_password', [AuthController::class, 'resetPassword']);
Route::post('/change_password', [AuthController::class, 'changePassword']);
Route::post('/change_password_reset', [AuthController::class, 'changePasswordReset']);
Route::post('/verify_email', [AuthController::class, 'verifyEmail']);
Route::post('/email_verification_request', [AuthController::class, 'emailVerificationRequest']);
Route::post('/edit_profile', [AuthController::class, 'editProfile']);
Route::post('/check_forget_password_token', [AuthController::class, 'checkForgetPasswordToken']);

Route::apiResource('/menus', MenuController::class)->only(["index", "show"]);
Route::apiResource('/products', ProductController::class)->only(["index", "show"]);
Route::apiResource('/cities', CityController::class)->only(["index"]);
Route::apiResource('/provinces', ProvinceController::class)->only(["index"]);
Route::apiResource('/countries', CountryController::class)->only(["index"]);
Route::apiResource('/carts', CartController::class)->middleware('auth:sanctum');
Route::apiResource('/wishlists', WishListController::class)->middleware('auth:sanctum');
Route::apiResource('/transactions', TransactionController::class)->middleware('auth:sanctum');
Route::apiResource('/reviews', ReviewController::class)->middleware('auth:sanctum');
Route::apiResource('/feedbacks', WebsiteFeedbackController::class);
Route::apiResource('/categories', CategoryController::class);
Route::apiResource('/homepage_contents', HomepageContentController::class);
Route::apiResource('/sliders', SliderController::class);
Route::apiResource('/settings', SettingController::class);
Route::apiResource('/brands', BrandController::class)->only(["index"]);


Route::post('/carts/multiple', [CartController::class, 'storeMultiple'])->middleware('auth:sanctum');
Route::post('/carts/buy_again', [CartController::class, 'buyAgain'])->middleware('auth:sanctum');
Route::post('/checkout/get_jne_cost', [ShippingController::class, 'getJneCost'])->middleware('auth:sanctum');

Route::get('/select2/products', [ProductController::class, 'getSelect2Format']);
Route::post('/select2/products/initial', [ProductController::class, 'getInitialData']);


//payment, midtrans yg call link ini
Route::post('/transactions/midtrans/notification/handler', [PaymentController::class, 'midtransNotification']);
Route::get('/transactions/check_status/{uuid}', [PaymentController::class, "checkTransactionStatus"])->middleware('auth:sanctum');
Route::post('/transactions/get_jne_way_bill', [ShippingController::class, 'getJneWayBill'])->middleware('auth:sanctum');


//login social
Route::get('/auth/{service}', [AuthSocialLoginController::class, 'redirect']);
Route::get('/auth/{service}/callback', [AuthSocialLoginController::class, 'callback']);


//fallback if 404
Route::fallback(function () {
    return response()->json([
        'success' => false,
        'data'   => 'Unauthorized Action',
        'status' => 503,
    ]);
});
