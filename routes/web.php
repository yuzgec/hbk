<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\Blog;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/iletisim', [HomeController::class, 'contact'])->name('contactus');
Route::get('/kurumsal', [HomeController::class, 'corporate'])->name('corporate');
Route::get('/sayfa/{url}', [HomeController::class, 'corporatedetail'])->name('corporatedetail');
Route::get('/hizmetlerimiz', [HomeController::class, 'service'])->name('service');
Route::get('/hizmet/{url}', [HomeController::class, 'servicedetail'])->name('servicedetail');
Route::get('/hizmetbolgesi/{url}', [HomeController::class, 'servicearea'])->name('servicearea');
Route::get('/makaleler', [HomeController::class, 'blog'])->name('blog');
Route::get('/makale/{url}', [HomeController::class, 'blogdetail'])->name('blogdetail');
Route::get('/sss', [HomeController::class, 'sss'])->name('sss');
Route::get('/video-galeri', [HomeController::class, 'video'])->name('video');
Route::get('/referanslarimiz', [HomeController::class, 'reference'])->name('reference');
Route::get('/sss', [HomeController::class, 'faq'])->name('faq');
Route::get('/ekibimiz', [HomeController::class, 'team'])->name('team');
Route::post('/form', [HomeController::class, 'form'])->name('form');
/* Route::get('/ilceler', function(){

    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    //dd(count($istanbul));
    $Service = Service::all();

    foreach($istanbul as $item){
        foreach($Service as $row){
            $New = new Blog;
            $New->title = $item.' '.$row->title;
            $New->category = 1;
            $New->service = $row->id;
            $New->save();
        }

    }

}); */

Route::group(["prefix"=>"go", 'middleware' => ['auth','web', 'admin']],function() {
    Route::get('/', 'DashboardController@index')->name('go');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/formlar', 'DashboardController@formlar')->name('formlar');
    Route::delete('/formDelete/{id}', 'DashboardController@formDelete')->name('formDelete');
    Route::auto('/page', PageController::class);
    Route::auto('/page-categories', PageCategoryController::class);
    Route::auto('/blog', BlogController::class);
    Route::auto('/blog-categories', BlogCategoryController::class);
    Route::auto('/faq', FaqController::class);
    Route::auto('/faq-categories', FaqCategoryController::class);
    Route::auto('/gallery', GalleryController::class);
    Route::auto('/service', ServiceController::class);
    Route::auto('/service-categories', ServiceCategoryController::class);
    Route::auto('/gallery-categories', GalleryCategoryController::class);
    Route::auto('/slider', SliderController::class);
    Route::auto('/video', VideoController::class);
    Route::auto('/video-categories', VideoCategoryController::class);
    Route::auto('/settings', SettingController::class);
    Route::auto('/contact', ContactController::class);
    Route::auto('/features', FeaturesController::class);
    Route::auto('/reference', ReferenceController::class);
    Route::auto('/price', PriceController::class);

});

require __DIR__.'/auth.php';
