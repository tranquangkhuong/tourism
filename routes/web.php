<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LoginWithSocialNetworkController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EAV\AttributeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourImageController;
use App\Http\Controllers\TourPlanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Models\Tour;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
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

/*
|-----------------------------------------------------------------------
| Email Verification.
|-----------------------------------------------------------------------
*/
// gui email xac thuc lan 1
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// gui lai email xac minh
Route::post('/email/verification-notification', [VerifyEmailController::class, 'resendEmail'])
    ->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// tien hanh xac thuc va chuyen huong ve /home
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verification'])
    ->middleware(['auth', 'signed'])->name('verification.verify');

/*
|-----------------------------------------------------------------------
| Forgot Password and Reset Password.
|-----------------------------------------------------------------------
*/
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', [ResetPasswordController::class, 'requestPasswordReset'])
    ->middleware('guest')->name('password.email');

// dat lai mat khau
Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'updatePassword'])
    ->middleware('guest')->name('password.update');

/*
|-----------------------------------------------------------------------
| Login, Register normally and Log out.
|-----------------------------------------------------------------------
*/

Route::get('login', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.register');
});
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|-----------------------------------------------------------------------
| Login with Socials Network (Facebook, Google).
|-----------------------------------------------------------------------
*/
Route::get('/auth/{provider}/redirect', [LoginWithSocialNetworkController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [LoginWithSocialNetworkController::class, 'callback']);


/*
|-----------------------------------------------------------------------
| Routes for Customers.
|-----------------------------------------------------------------------
*/
// Set language
// Route::group(['middleware' => 'locale'], function () {
//     Route::get('change-language/{language}', [Controller::class, 'changeLanguage'])->name('change_language');
// });
// ->middleware('verified');


// Route::get('/', [BaseController::class, 'home']);
Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('/destination', [BaseController::class, 'destination']);
Route::get('/standard-list', function () {
    return view('standard_list');
});

Route::get('/detail-tour', function () {
    return view('detail_tour');
});


// Route::get('/blog', [BaseController::class, 'blog']);
Route::get('/blog', function () {
    return view('blog_masonry');
});

// Route::get('about', [BaseController::class, 'about']);
Route::get('/about-us', function () {
    return view('about_us');
});
Route::get('/booking', function () {
    return view('booking_page');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/mail', function () {
    return view('mail.booking');
});
Route::get('/myaccount', function () {
    return view('my_account');
});

// Route::get('/contact', [BaseController::class, 'contact']);
Route::get('/contact-us', function () {
    return view('contact_us');
});

// Các route liên quan đến Tours
Route::group(['prefix' => '/tour'], function () {
    Route::get('/domestic', [BaseController::class, 'domestic']);
    Route::get('/foreign', [BaseController::class, 'foreign']);
    Route::get('/{tour_id}/detail', [BaseController::class, 'detailTour']);
    Route::get('/{tour_id}/booking', [BookingController::class, 'userCreate']);
    Route::post('/booking/store', [BookingController::class, 'userStore']);
});

//  Các route lien quan đến users , 'middleware' => 'user'
Route::group(['prefix' => '/user', 'as' => 'user.'], function () {
    Route::get('/profile', [UserController::class, 'profile']);
    Route::post('/profile/update', [UserController::class, 'userUpdate']);
    Route::get('/change-password', [UserController::class, 'changePassword']);
    Route::post('/update-password', [UserController::class, 'updatePassword']);
    Route::get('/booking', [UserController::class, 'booking']);
    Route::get('/booking/detail/{code}', [BookingController::class, 'bookingDetail']);
});

Route::get('/notification', [UserController::class, 'getNotification']);
Route::get('/notification/mark-as-read-all', [UserController::class, 'markAsReadAll']);
Route::get('/notification/delete-all', [UserController::class, 'deleteAllNotification']);
Route::get('/notification/mark-as-read/{notification_id}', [UserController::class, 'markAsRead']);
Route::get('/notification/delete/{notification_id}', [UserController::class, 'deleteNotification']);


/*
|-----------------------------------------------------------------------
| Routes for Administrators.
|-----------------------------------------------------------------------
*/
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/generate-code/{length}', [Controller::class, 'generateCode'])->name('generate_code');
Route::get('/images/{model}/{size}/{image_path}', [Controller::class, 'flyResize'])->where('image_path', '(.*)');

Route::group(['prefix' => '/admin', 'as' => 'admin.'], function () {

    Route::get('/dashboard', [BackendController::class, 'dashboard']);

    Route::group(['prefix' => '/tag', 'as' => 'tag.'], function () {
        Route::get('/', [TagController::class, 'index'])->name('index');
        Route::get('/index-data', [TagController::class, 'indexData'])->name('index_data');
        // Route::get('/add', [TagController::class, 'create'])->name('add');
        Route::post('/store', [TagController::class, 'store'])->name('store');
        Route::get('/edit/{tag_id}', [TagController::class, 'edit'])->name('edit');
        Route::post('/update/{tag_id}', [TagController::class, 'update'])->name('update');
        Route::get('/delete/{tag_id}', [TagController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/vehicle', 'as' => 'vehicle.'], function () {
        Route::get('/', [VehicleController::class, 'index'])->name('index');
        Route::get('/index-data', [VehicleController::class, 'indexData'])->name('index_data');
        // Route::get('/add', [VehicleController::class, 'create'])->name('add');
        Route::post('/store', [VehicleController::class, 'store'])->name('store');
        Route::get('/edit/{vehicle_id}', [VehicleController::class, 'edit'])->name('edit');
        Route::post('/update/{vehicle_id}', [VehicleController::class, 'update'])->name('update');
        Route::get('/delete/{vehicle_id}', [VehicleController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/area', 'as' => 'area.'], function () {
        Route::get('/', [AreaController::class, 'index'])->name('index');
        Route::get('/index-data', [AreaController::class, 'indexData'])->name('index_data');
        // Route::get('/add', [AreaController::class, 'create'])->name('add');
        Route::post('/store', [AreaController::class, 'store'])->name('store');
        Route::get('/edit/{area_id}', [AreaController::class, 'edit'])->name('edit');
        Route::post('/update/{area_id}', [AreaController::class, 'update'])->name('update');
        Route::get('/delete/{area_id}', [AreaController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/location', 'as' => 'location.'], function () {
        Route::get('/', [LocationController::class, 'index'])->name('index');
        Route::get('/index-data', [LocationController::class, 'indexData'])->name('index_data');
        // Route::get('/add', [LocationController::class, 'create'])->name('add');
        Route::post('/store', [LocationController::class, 'store'])->name('store');
        Route::get('/edit/{location_id}', [LocationController::class, 'edit'])->name('edit');
        Route::post('/update/{location_id}', [LocationController::class, 'update'])->name('update');
        Route::get('/delete/{location_id}', [LocationController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/payment', 'as' => 'payment.'], function () {
        Route::get('/', [PaymentController::class, 'index'])->name('index');
        Route::get('/index-data', [PaymentController::class, 'indexData'])->name('index_data');
        // Route::get('/add', [PaymentController::class, 'create'])->name('add');
        Route::post('/store', [PaymentController::class, 'store'])->name('store');
        Route::get('/edit/{payment_id}', [PaymentController::class, 'edit'])->name('edit');
        Route::post('/update/{payment_id}', [PaymentController::class, 'update'])->name('update');
        Route::get('/delete/{payment_id}', [PaymentController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/attribute', 'as' => 'attribute.'], function () {
        Route::get('/', [AttributeController::class, 'index'])->name('index');
        Route::get('/index-data', [AttributeController::class, 'indexData'])->name('index_data');
        Route::get('/add', [AttributeController::class, 'create'])->name('add');
        Route::post('/store', [AttributeController::class, 'store'])->name('store');
        Route::get('/edit/{attribute_id}', [AttributeController::class, 'edit'])->name('edit');
        Route::post('/update/{attribute_id}', [AttributeController::class, 'update'])->name('update');
        Route::get('/delete/{attribute_id}', [AttributeController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/promotion', 'as' => 'promotion.'], function () {
        Route::get('/', [PromotionController::class, 'index'])->name('index');
        Route::get('/index-data', [PromotionController::class, 'indexData'])->name('index_data');
        Route::get('/add', [PromotionController::class, 'create'])->name('add');
        Route::post('/store', [PromotionController::class, 'store'])->name('store');
        Route::get('/edit/{promotion_id}', [PromotionController::class, 'edit'])->name('edit');
        Route::post('/update/{promotion_id}', [PromotionController::class, 'update'])->name('update');
        Route::get('/delete/{promotion_id}', [PromotionController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/tour', 'as' => 'tour.'], function () {
        Route::get('/', [TourController::class, 'index'])->name('index');
        Route::get('/index-data', [TourController::class, 'indexData'])->name('index_data');
        Route::get('/add', [TourController::class, 'create'])->name('add');
        Route::post('/store', [TourController::class, 'store'])->name('store');
        Route::get('/edit/{tour_id}', [TourController::class, 'edit'])->name('edit');
        Route::post('/update/{tour_id}', [TourController::class, 'update'])->name('update');
        Route::get('/delete/{tour_id}', [TourController::class, 'destroy'])->name('delete');

        Route::group(['prefix' => '/plan', 'as' => 'plan.'], function () {
            Route::get('/{tour_id}', [TourPlanController::class, 'index'])->name('index');
            Route::get('/index-data/{tour_id}', [TourPlanController::class, 'indexData'])->name('index_data');
            // Route::get('/add/{tour_id}', [TourPlanController::class, 'create'])->name('add');
            Route::post('/store', [TourPlanController::class, 'store'])->name('store');
            // Route::get('/edit/{tour_id}', [TourPlanController::class, 'edit'])->name('edit');
            Route::post('/update/{plan_id}', [TourPlanController::class, 'update'])->name('update');
            Route::get('/delete/{plan_id}', [TourPlanController::class, 'destroy'])->name('delete');
        });

        Route::group(['prefix' => '/image', 'as' => 'image.'], function () {
            Route::get('/{tour_id}', [TourImageController::class, 'index'])->name('index');
            Route::get('/index-data/{tour_id}', [TourImageController::class, 'indexData'])->name('index_data');
            Route::get('/add', [TourImageController::class, 'create'])->name('add');
            Route::post('/store', [TourImageController::class, 'store'])->name('store');
            // Route::get('/edit/{image_id}', [TourImageController::class, 'edit'])->name('edit');
            // Route::post('/update/{image_id}', [TourImageController::class, 'update'])->name('update');
            Route::get('/delete/{image_id}', [TourImageController::class, 'destroy'])->name('delete');
        });
    });

    Route::group(['prefix' => '/article', 'as' => 'article.'], function () {
        Route::get('/', [ArticleController::class, 'index'])->name('index');
        Route::get('/index-data', [ArticleController::class, 'indexData'])->name('index_data');
        Route::get('/add', [ArticleController::class, 'create'])->name('add');
        Route::post('/store', [ArticleController::class, 'store'])->name('store');
        Route::get('/edit/{article_id}', [ArticleController::class, 'edit'])->name('edit');
        Route::post('/update/{article_id}', [ArticleController::class, 'update'])->name('update');
        Route::get('/delete/{article_id}', [ArticleController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/slider', 'as' => 'slider.'], function () {
        Route::get('/', [SliderController::class, 'index'])->name('index');
        Route::get('/index-data', [SliderController::class, 'indexData'])->name('index_data');
        Route::get('/add', [SliderController::class, 'create'])->name('add');
        Route::post('/store', [SliderController::class, 'store'])->name('store');
        Route::get('/edit/{slider_id}', [SliderController::class, 'edit'])->name('edit');
        Route::post('/update/{slider_id}', [SliderController::class, 'update'])->name('update');
        Route::get('/delete/{slider_id}', [SliderController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/admin-manage', 'as' => 'manage.'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::post('/store', [AdminController::class, 'store'])->name('store');
        Route::get('/edit/{admin_id}', [AdminController::class, 'edit'])->name('edit');
        Route::post('/update/{admin_id}', [AdminController::class, 'update'])->name('update');
        // Route::get('/block/{admin_id}', [AdminController::class, 'block'])->name('block');
        // Route::get('/active/{admin_id}', [AdminController::class, 'active'])->name('active');
    });

    Route::group(['prefix' => '/user-manage', 'as' => 'user.'], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/add', [UserController::class, 'create'])->name('add');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{user_id}', [UserController::class, 'edit'])->name('edit');
        Route::post('/update/{user_id}', [UserController::class, 'update'])->name('update');
        // Route::get('/block/{admin_id}', [AdminController::class, 'block'])->name('block');
        // Route::get('/active/{admin_id}', [AdminController::class, 'active'])->name('active');
    });

    Route::group(['prefix' => 'booking', 'as' => 'booking.'], function () {
        Route::get('/', [BookingController::class, 'index'])->name('index');
        Route::get('/add', [BookingController::class, 'create'])->name('add');
        Route::post('/store', [BookingController::class, 'store'])->name('store');
        Route::get('/edit/{booking_id}', [BookingController::class, 'edit'])->name('edit');
        Route::post('/update/{booking_id}', [BookingController::class, 'update'])->name('update');
        Route::get('/delete/{booking_id}', [BookingController::class, 'destroy'])->name('delete');
    });

    Route::get('/account', [AdminController::class, 'editAccount']);
    Route::post('/account/update', [AdminController::class, 'updateAccount']);
    Route::get('/change-password', [AdminController::class, 'changePassword']);
    Route::post('/update-password', [AdminController::class, 'updatePassword']);
});
// // page admin
// Route::get('/admin', function () {
//     return view('admin.homeadmin');
// });

// //slider
// Route::get('/admin/slider', function () {
//     return view('admin.slider.index');
// });
// Route::get('/admin/add-slider', function () {
//     return view('admin.slider.add');
// });

// // area location.
// Route::get('/admin/area-location', function () {
//     return view('admin.arealocation.manage_location');
// });
// Route::get('/admin/add-location', function () {
//     return view('admin.arealocation.add_location');
// });
// // tour.
// Route::get('/admin/tour', function () {
//     return view('admin.tour.manage_tour');
// });

// Route::get('/admin/add-tour', function () {
//     return view('admin.tour.add_tour');
// });
// Route::get('/admin/testtour', function () {
//     return view('admin.tour.testtour');
// });


Route::get('insert-data', function () {
    DB::table('test')->insert([
        'json_data' => json_encode(['bữa sáng', 'bữa trưa']),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
});

Route::get('show-data', function () {
    $data = DB::table('test')->where('id', 2)->get();
    // $da = json_decode($data['data']);
    dd(json_decode($data[0]->json_data));
    echo 'cc';
});
