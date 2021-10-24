<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FiltersController;
use App\Http\Controllers\UserController;

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

// if (env('APP_ENV') === 'production') {
//     URL::forceScheme('https');
// }

// maintenance route
if (env('MAINTENANCE')) {
    Route::group(['middleware' => 'make.locale'], function() {
        Route::get('{any}', function() {
            return view('home.maintenance');
        })->where('any', '.*');
    });
}

Route::prefix("admin")->name("admin.")->middleware('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
});

Route::middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->prefix(LaravelLocalization::setLocale())->group(function () {
    // auth routes
    Auth::routes();
    Route::get('login/{social}','Auth\LoginController@redirectToProvider')->name('login.social');
    Route::get('login/{social}/callback','Auth\LoginController@handleProviderCallback');
    
    //change locale
    Route::get('set-locale/{lang}', function ($newLocale) {
        //todo
        return redirect()->back();
    })->name('locale.setting');

    // home routes
    Route::get('home.html', function() {return redirect(route('home'));});
    Route::get('index.html', function() {return redirect(route('home'));});
    Route::get('', [HomeController::class, 'index'])->name('home');
    Route::get('faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('plans', [HomeController::class, 'plans'])->name('plans');
    Route::get('terms', [HomeController::class, 'terms'])->name('terms');
    Route::get('privacy', [HomeController::class, 'privacy'])->name('privacy');
    Route::get('sitemap', [HomeController::class, 'sitemap'])->name('site.map');
    Route::get('blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('blog/{article}', [HomeController::class, 'blogArticle'])->name('blog.article');
    Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about.us');
    Route::get('import-rules', [HomeController::class, 'import'])->name('import.rules');
    Route::get('contact-us', [HomeController::class, 'contacts'])->name('contacts');
    Route::get('catalog', [HomeController::class, 'catalog'])->name('catalog');
    Route::post('contacting', [HomeController::class, 'contactUs'])->name('contact.us');

    // search
    Route::get ('list',[SearchController::class, 'list'])->name('list');
    Route::get('search/', [SearchController::class, 'search'])->name('search');//search by text/author/type
    Route::get('category/{category}',[SearchController::class, 'searchTag'])->name('category');

    // posts routes
    Route::get('posts/{post}', 'PostController@show')->name('posts.show');

    Route::middleware('auth')->group(function () {
        //profile
        Route::get('profile', [UserController::class, 'index'])->name('profile');
    });

    Route::middleware('verified')->group(function () {

        //change subscriptiob routes
        Route::post('plans/change', [SubscriptionController::class, 'update']) ->name('plans.update');
        Route::get('plans/cancel', [SubscriptionController::class, 'cancel']) ->name('plans.cancel');
        
        //posts routes
        Route::delete('posts/delete-all', [PostController::class, 'deleteAll'])->name('posts.delete');

        // mailer routes
        Route::get('profile/mailer', [MailerController::class, 'index'])->name('mailer.index');
        Route::get('mailer/deactivate-all', [MailerController::class, 'deactivateAll'])->name('mailers.deactivate');
        Route::delete('mailer/delete-all', [MailerController::class, 'deleteAll'])->name('mailers.delete');
        Route::delete('profile/mailer/{mailer}', [MailerController::class, 'destroy'])->name('mailer.destroy');

        // profile/user routes
        Route::get('profile/edit', [UserController::class, 'edit'])->name('profile.edit');
        Route::get('profile/favourites', [UserController::class, 'favourites'])->name('profile.favourites');
        Route::get('profile/posts', [UserController::class, 'userPosts'])->name('profile.posts');
        Route::get('profile/subscription', [UserController::class, 'subscription'])->name('profile.subscription');
        Route::patch('profile/update', [UserController::class, 'update'])->name('profile.update');
        Route::patch('profile/update/pass', [UserController::class, 'updatePass'])->name('profile.update.pass');

        Route::middleware('plan.standart')->group(function () {
            //posts routes
            Route::get('posts/create/service',[PostController::class, 'serviceCreate'])->name('service.create');
            Route::get('posts/create/tender', [PostController::class, 'tenderCreate'])->name('tender.create');
            Route::get('posts/{post}/edit/translations', [PostController::class, 'editTranslation'])->name('posts.trans.edit');
            Route::patch('posts/{post}/update/translations', [PostController::class, 'updateTranslation'])->name('posts.trans.update');
            Route::resource('posts', PostController::class)->except(['index', 'show']);
            
            // mailer routes
            Route::resource('profile/mailer', MailerController::class)->except(['create', 'index', 'destroy']);
        });

        // posts import routes
        Route::middleware('plan.pro')->group(function () {
            Route::get('posts/create/import', [PostController::class, 'import'])->name('post.import');
            Route::post('posts/import/upload', [PostController::class, 'importStore'])->name('import.upload');
        });
    });
});