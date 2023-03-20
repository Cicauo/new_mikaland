<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TetsController;
//ADMIN
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GuestController;
//CMS
use App\Http\Controllers\Cms\CmsLogsController;
use App\Http\Controllers\Cms\CmsMenusAccessController;
use App\Http\Controllers\Cms\CmsMenusController;
use App\Http\Controllers\Cms\CmsModulesController;
use App\Http\Controllers\Cms\CmsSettingsController;
use App\Http\Controllers\Cms\RoleController;
use App\Http\Controllers\Cms\CmsRoleAccessController;
use App\Http\Controllers\Cms\UsersController;
use App\Http\Controllers\Cms\CmsMenusDetailController;
use App\Http\Controllers\Cms\CmsEmailsController;
use App\Http\Controllers\Cms\CmsDocumentController;
use App\Http\Controllers\Cms\CmsManagementUsersController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ProjectContentController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ArtikelCategoryController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\HomeTypeController;
use App\Http\Controllers\Admin\HomeContentController;


// MANAGEMENT CLASS

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

Route::middleware(['web'])->group(function () {

    Route::group(['middleware' => ['auth']], function () {

        Route::get("account",[CmsManagementUsersController::class,"account"]);
        Route::get("password",[CmsManagementUsersController::class,"password"]);
        Route::post("account/update",[CmsManagementUsersController::class,"account_update"]);
        Route::post("password/update",[CmsManagementUsersController::class,"password_update"]);
    });

});


//ROUTE UNTUK ADMIN DAN SUPER ADMIN DEFAULT

Route::middleware(['web'])->group(function () {

    Route::group(['middleware' => ['auth']], function () {

        Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');

        Route::get('test',[TetsController::class, 'index']);

        Route::post('logout',[AuthController::class, 'logout']);   

        Route::group(['prefix' => 'admin','middleware' => ['admin']], function () {

            //home content
            Route::get('home_content/{type}/{id}',[HomeContentController::class, 'index']);
            Route::get('home_content/destroy/{id}',[HomeContentController::class, 'destroy']);
            Route::post('home_content/store',[HomeContentController::class, 'store']);
            Route::post('home_content/update',[HomeContentController::class, 'update']);  

            //home type
            Route::get('home_type',[HomeTypeController::class, 'index']);
            Route::get('home_type/create',[HomeTypeController::class, 'create']);
            Route::get('home_type/show/{id}',[HomeTypeController::class, 'show']);
            Route::get('home_type/edit/{id}',[HomeTypeController::class, 'edit']);
            Route::get('home_type/destroy/{id}',[HomeTypeController::class, 'destroy']);
            Route::post('home_type/store',[HomeTypeController::class, 'store']);
            Route::post('home_type/update',[HomeTypeController::class, 'update']);  

            //contact
            Route::get('contact',[ContactController::class, 'index']);
            Route::get('contact/destroy/{id}',[ContactController::class, 'destroy']);

            //artikel
            Route::get('artikel',[ArtikelController::class, 'index']);
            Route::get('artikel/create',[ArtikelController::class, 'create']);
            Route::get('artikel/show/{id}',[ArtikelController::class, 'show']);
            Route::get('artikel/edit/{id}',[ArtikelController::class, 'edit']);
            Route::get('artikel/destroy/{id}',[ArtikelController::class, 'destroy']);
            Route::post('artikel/store',[ArtikelController::class, 'store']);
            Route::post('artikel/update',[ArtikelController::class, 'update']);   

            //artikel category
            Route::get('artikel_category',[ArtikelCategoryController::class, 'index']);
            Route::get('artikel_category/create',[ArtikelCategoryController::class, 'create']);
            Route::get('artikel_category/show/{id}',[ArtikelCategoryController::class, 'show']);
            Route::get('artikel_category/edit/{id}',[ArtikelCategoryController::class, 'edit']);
            Route::get('artikel_category/destroy/{id}',[ArtikelCategoryController::class, 'destroy']);
            Route::post('artikel_category/store',[ArtikelCategoryController::class, 'store']);
            Route::post('artikel_category/update',[ArtikelCategoryController::class, 'update']);   

            //customer
            Route::get('customer',[CustomerController::class, 'index']);
            Route::get('customer/create',[CustomerController::class, 'create']);
            Route::get('customer/show/{id}',[CustomerController::class, 'show']);
            Route::get('customer/edit/{id}',[CustomerController::class, 'edit']);
            Route::get('customer/destroy/{id}',[CustomerController::class, 'destroy']);
            Route::post('customer/store',[CustomerController::class, 'store']);
            Route::post('customer/update',[CustomerController::class, 'update']);    

            // Route Projects 
            Route::get('projects',[ProjectsController::class, 'index']);
            Route::get('projects/create',[ProjectsController::class, 'create']);
            Route::get('projects/show/{id}',[ProjectsController::class, 'show']);
            Route::get('projects/edit/{id}',[ProjectsController::class, 'edit']);
            Route::get('projects/destroy/{id}',[ProjectsController::class, 'destroy']);
            Route::post('projects/store',[ProjectsController::class, 'store']);
            Route::post('projects/update',[ProjectsController::class, 'update']);  
            
            // Route Project_Content 
            Route::get('project_content/{id}',[ProjectContentController::class, 'index']);
            Route::get('project_content/create/{id}',[ProjectContentController::class, 'create']);
            Route::get('project_content/show/{id}',[ProjectContentController::class, 'show']);
            Route::get('project_content/edit/{id}',[ProjectContentController::class, 'edit']);
            Route::get('project_content/destroy/{id}',[ProjectContentController::class, 'destroy']);
            Route::post('project_content/store',[ProjectContentController::class, 'store']);
            Route::post('project_content/update',[ProjectContentController::class, 'update']);    

            Route::get('role',[RoleController::class, 'index'])->name('role');
            Route::get('role/create',[RoleController::class, 'create'])->name('role-create');
            Route::get('role/show/{id}',[RoleController::class, 'show'])->name('role-show');
            Route::get('role/edit/{id}',[RoleController::class, 'edit'])->name('role-edit');
            Route::get('role/destroy/{id}',[RoleController::class, 'destroy'])->name('role-destroy');
            Route::post('role/store',[RoleController::class, 'store'])->name('role-store');
            Route::post('role/update',[RoleController::class, 'update'])->name('role-update');
            Route::post('role/action/{slug}/{id}',[RoleController::class, 'action']);


            Route::get('users',[UsersController::class, 'index'])->name('users');
            Route::get('users/create',[UsersController::class, 'create'])->name('users-create');
            Route::get('users/show/{id}',[UsersController::class, 'show'])->name('users-show');
            Route::get('users/edit/{id}',[UsersController::class, 'edit'])->name('users-edit');
            Route::get('users/destroy/{id}',[UsersController::class, 'destroy'])->name('users-destroy');
            Route::post('users/store',[UsersController::class, 'store'])->name('users-store');
            Route::post('users/update',[UsersController::class, 'update'])->name('users-update');
            Route::post('users/action/{slug}/{id}',[UsersController::class, 'action']);


            Route::get('logs',[CmsLogsController::class, 'index'])->name('logs');

            Route::get('settings',[CmsSettingsController::class, 'index'])->name('settings');
            Route::get('settings/create',[CmsSettingsController::class, 'create'])->name('settings-create');
            Route::get('settings/show/{id}',[CmsSettingsController::class, 'show'])->name('settings-show');
            Route::get('settings/edit/{id}',[CmsSettingsController::class, 'edit'])->name('settings-edit');
            Route::get('settings/destroy/{id}',[CmsSettingsController::class, 'destroy'])->name('settings-destroy');
            Route::post('settings/store',[CmsSettingsController::class, 'store'])->name('settings-store');
            Route::post('settings/update',[CmsSettingsController::class, 'update'])->name('settings-update');
            Route::post('settings/action/{slug}/{id}',[CmsSettingsController::class, 'action']);

            Route::get('role_access/{role_id}', [CmsRoleAccessController::class, 'index']);
            Route::post('role_access/store', [CmsRoleAccessController::class, 'store']);

            Route::group(['middleware' => ['superadmin']], function () {

                    Route::get('modules',[CmsModulesController::class, 'index'])->name('modules');
                    Route::get('modules/create',[CmsModulesController::class, 'create'])->name('modules-create');
                    Route::get('modules/show/{id}',[CmsModulesController::class, 'show'])->name('modules-show');
                    Route::get('modules/edit/{id}',[CmsModulesController::class, 'edit'])->name('modules-edit');
                    Route::get('modules/destroy/{id}',[CmsModulesController::class, 'destroy'])->name('modules-destroy');
                    Route::post('modules/store',[CmsModulesController::class, 'store'])->name('modules-store');
                    Route::post('modules/update',[CmsModulesController::class, 'update'])->name('modules-update');
                    Route::post('modules/action/{slug}/{id}',[CmsModulesController::class, 'action']);
                    Route::get('modules/generate/{id}',[CmsModulesController::class, 'generate'])->name('modules-generate');

                    Route::get('menus',[CmsMenusController::class, 'index'])->name('menus');
                    Route::get('menus/create',[CmsMenusController::class, 'create'])->name('menus-create');
                    Route::get('menus/show/{id}',[CmsMenusController::class, 'show'])->name('menus-show');
                    Route::get('menus/edit/{id}',[CmsMenusController::class, 'edit'])->name('menus-edit');
                    Route::get('menus/destroy/{id}',[CmsMenusController::class, 'destroy'])->name('menus-destroy');
                    Route::post('menus/store',[CmsMenusController::class, 'store'])->name('menus-store');
                    Route::post('menus/update',[CmsMenusController::class, 'update'])->name('menus-update');
                    Route::get('menus/action/{id}',[CmsMenusController::class, 'action']);
                    Route::get('menus/status/{id}/{status}',[CmsMenusController::class, 'status']);

                    Route::get('menu_access/{cms_menus_id}',[CmsMenusAccessController::class, 'index']);
                    Route::get('menu_access/destroy/{id}',[CmsMenusAccessController::class, 'destroy']);
                    Route::post('menu_access/store',[CmsMenusAccessController::class, 'store']);

                    Route::get('menu_detail/{cms_menus_id}', [CmsMenusDetailController::class, 'index']);
                    Route::get('menu_detail/destroy/{id}', [CmsMenusDetailController::class, 'destroy']);
                    Route::post('menu_detail/store', [CmsMenusDetailController::class, 'store']);
                    Route::post('menu_detail/update', [CmsMenusDetailController::class, 'update']);


                    Route::get('emails',[CmsEmailsController::class, 'index'])->name('emails');
                    Route::get('emails/create',[CmsEmailsController::class, 'create'])->name('emails-create');
                    Route::get('emails/show/{id}',[CmsEmailsController::class, 'show'])->name('emails-show');
                    Route::get('emails/edit/{id}',[CmsEmailsController::class, 'edit'])->name('emails-edit');
                    Route::get('emails/destroy/{id}',[CmsEmailsController::class, 'destroy'])->name('emails-destroy');
                    Route::post('emails/store',[CmsEmailsController::class, 'store'])->name('emails-store');
                    Route::post('emails/update',[CmsEmailsController::class, 'update'])->name('emails-update');

                    Route::get('document',[CmsDocumentController::class, 'index'])->name('document');
            });

        });

    });

    

    Route::group(['middleware' => ['guest']], function () {
        Route::get('login',[GuestController::class, 'login'])->name('login');
        Route::get('register',[GuestController::class, 'register'])->name('register');
        Route::get('forget',[GuestController::class, 'forget'])->name('forget');
        //confirmasi email
        Route::get('verifikasi/{email}',[AuthController::class, 'validasiEmail']);

        Route::get('verifikasi',[GuestController::class, 'verifikasi'])->name('verifikasi');
    });

    Route::group(['middleware' => ['guest','throttle:6,1']], function () {

        Route::post('sign-in',[AuthController::class, 'login']);
        Route::post('sign-up',[AuthController::class, 'register']);
        Route::post('forget-password',[AuthController::class, 'forget_password']);


    });

    // Frontend
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about-company', [AboutController::class, 'index'])->name('about');

    //contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');




});
