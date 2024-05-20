<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\Blog;


require __DIR__.'/redirect.php';



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
Route::get('/urunlerimiz', [HomeController::class, 'product'])->name('product');
Route::post('/form', [HomeController::class, 'form'])->name('form');
Route::get('/ilceler', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 1)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<h3>{$item} Kepenk Tamir Servisi</h3>
            
            <p>{$item} kepenk tamiri hizmetimiz, uzman ustalar ve kaliteli malzemeler ile otomatik kepenk servisi sağlamaktadır. 7/24 güvenilir ve garantili hizmet sunmaktayız.</p>
            
            <p>1989’dan bu yana, profesyonel ustalarımız ve kaliteli malzemeler ile kepenk tamiri hizmeti vermekteyiz. Otomatik kepenkler günlük hayatın birçok alanında sıkça kullanılmakta ve bu nedenle kepenk bakım, onarım ve servis gereksinimleri ortaya çıkmaktadır.</p>
            
            <h4>Karşılaşabileceğiniz Otomatik Kepenk Arızaları</h4>
            
            <p>Otomatik kepenkler zamanla çeşitli arızalar gösterebilir. Bu arızalardan bazıları şunlardır:</p>
            
            <ul>
                <li><strong>Motor Arızası</strong>: Kepenk motorları zamanla aşınabilir veya arızalanabilir.</li>
                <li><strong>Alıcı Kartı Bozulması</strong>: Alıcı kartlarının bozulması kepenklerin çalışmasını engelleyebilir.</li>
                <li><strong>Kepenk Aksesuarlarında Kırılmalar</strong>: Kepenk aksesuarları kırılabilir veya hasar görebilir.</li>
            </ul>
            
            <p>Profesyonel ekiplerimiz otomatik kepenklerde oluşan arızayı yerinde tespit ettikten sonra arızaya yönelik onarım işlemini hızlı, garantili ve en uygun fiyatlarla sizlere sunmaktadır.</p>
            
            <h3>Sık Karşılaşılan Otomatik Kepenk Arızaları</h3>
            
            <p>Kepenk sistemlerinde birçok farklı nedenden dolayı arıza oluşabilmektedir. Bu arızaların nedenlerini sıralayacak olursak:</p>
            
            <ul>
                <li><strong>Yetersiz ve Düzensiz Bakım</strong>: Kepenk sistemlerinin düzenli bakımı yapılmadığında arızalar oluşabilir.</li>
                <li><strong>Kullanıcı Hatalarından Kaynaklı Bozulmalar</strong>: Yanlış kullanım nedeniyle kepenklerde bozulmalar meydana gelebilir.</li>
                <li><strong>Elektrik Hatlarında Oluşabilecek Ters Akım</strong>: Elektrik hatlarında oluşabilecek ters akım kepenk sistemlerini etkileyebilir.</li>
                <li><strong>Elektronik Cihazlarda Oluşan Kısa Devreler</strong>: Elektronik parçalarda oluşan kısa devreler arızaya yol açabilir.</li>
                <li><strong>Mekanizmada Bozulmalar veya Kırılmalar</strong>: Kepenk mekanizmalarında bozulmalar veya kırılmalar meydana gelebilir.</li>
            </ul>
            
            <h3>{$item} Otomatik Kepenk Tamiri</h3>
            
            <p>Kepenk sisteminiz çalışma esnasında fazla ses çıkarıyor, yamuk çalışıyor veya hiç çalışmıyorsa servisimiz ile iletişime geçmeniz gerekebilir. Bu tip problemler ile karşılaşmanız durumunda {$item} kepenk firması olarak bizlere ulaşabilirsiniz.</p>
            
            <p><strong>İstanbul Otomatik Kepenk Sistemleri</strong>, 1989’dan bu yana kepenk bakım, onarım ve montaj işlemleri gibi birçok servis hizmetini müşterilerine garantili ve hızlı şekilde gerçekleştirmektedir. Garaj girişi veya dükkân kapınızda bulunan otomatik kepenklerin açılmaması durumunda firmamızdan acil kepenk servisi talep edebilirsiniz.</p>
            
            <h3>Hizmetlerimiz</h3>
            
            <p>{$item} kepenk tamircisi olarak tüm İstanbul çevresine hizmet vermekteyiz. En yakın servis ekiplerini sizlere hızlıca ulaştırarak uygun fiyatlarla kepenk bakım ve onarım hizmeti sağlamaktayız. Bizlere iletişim numaralarımızdan, canlı destek hattından veya sosyal medya hesaplarımızdan ulaşabilir ve 7/24 teknik destek talep edebilirsiniz.</p>
            
            <h4>Neden Bizi Seçmelisiniz?</h4>
            
            <ul>
                <li><strong>Uzman Kadro</strong>: Profesyonel ve deneyimli ustalar ile hizmet veriyoruz.</li>
                <li><strong>Kaliteli Malzemeler</strong>: Kepenk tamirinde en kaliteli malzemeleri kullanıyoruz.</li>
                <li><strong>Hızlı ve Güvenilir Hizmet</strong>: Arızalarınızı hızlıca tespit edip, en kısa sürede çözüm sunuyoruz.</li>
                <li><strong>Uygun Fiyatlar</strong>: Kaliteli hizmeti en uygun fiyatlarla sunuyoruz.</li>
                <li><strong>7/24 Teknik Destek</strong>: Her an ulaşabileceğiniz teknik destek hizmeti sağlıyoruz.</li>
            </ul>
            
            <p>{$item} kepenk tamiri ve bakımı konusunda güvenilir ve kaliteli hizmet almak için bizimle iletişime geçebilirsiniz.</p>
            ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
});  

Route::get('/fotoselli', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 2)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<h2>{$item} Otomatik Fotoselli Cam Kapı Tamir Servisi</h2>

            <p>HBK Kepenk sizlere hızlı ve garantili olarak otomatik fotoselli cam kapı tamir servis hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
        
            <h3>{$item} Fotoselli Kapı Sistemleri</h3>
        
            <p>Fotoselli kapı sistemleri günümüzde oldukça yaygın olarak kullanılmaya başlanmıştır ve kullanım alanları giderek artmaktadır. Bu sistemler fotoselli cam kapı, otomatik cam kapı veya fotosel kapı olarak da bilinmektedir. Estetik görünüşü ve kolay kullanımı sayesinde birçok işletme ve firma bu sistemi tercih etmeye başlamış ve böylece tamir, bakım ve onarım hizmetlerine duyulan ihtiyaç artmıştır.</p>
        
            <h3>HBK Kepenk: Güvenilir Servis Hizmetleri</h3>
        
            <p>Firmamız, 1991 yılından beridir İstanbul ve çevresindeki ev, iş yeri ve apartman girişleri gibi alanlarda kullanılan fotoselli cam kapılar için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
            <h3>Fotoselli Cam Kapı Arızaları Nelerdir?</h3>
        
            <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan otomatik kapılar, farklı nedenlerden dolayı arıza verebilmektedir. Fotoselli cam kapılarda sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Radar ve Fotosel Göz Arızaları:</strong> Kapının sensörlerinde meydana gelen sorunlar, kapının düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Kayış Sisteminde Bozulmalar:</strong> Kayış sistemindeki problemler, kapının açılıp kapanmasını zorlaştırabilir.</li>
                <li><strong>Ana Kart Devresinde Problemler:</strong> Kapının kontrol ünitesinde meydana gelen arızalar, kapının tamamen işlevsiz hale gelmesine neden olabilir.</li>
                <li><strong>Motor Hareket Mekanizmasında Kısa Devreler:</strong> Motor sistemindeki kısa devreler, kapının hareket mekanizmasını etkileyebilir.</li>
            </ol>
        
            <h2>{$item} HBK Kepenk: Hızlı ve Etkili Servis</h2>
        
            <p>İstanbul’un her noktasına kalite sertifikası ve uzman ustalarımız ile fotoselli cam kapı servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>
        
            <h3>İletişim</h3>
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan ulaşabilirsiniz. HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
        ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
}); 

Route::get('/seksiyonel', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 6)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<h2><strong>{$item} Seksiyonel Kapı Tamir Servisi</strong></h2>

            <p>HBK Kepenk sizlere hızlı ve garantili olarak seksiyonel kapı tamir servis hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
        
            <h2><strong>{$item} Seksiyonel Kapı Sistemleri</h2>
        
            <p>Seksiyonel kapı sistemleri günümüzde oldukça yaygın olarak kullanılmaya başlanmıştır ve kullanım alanları giderek artmaktadır. Bu sistemler, estetik görünüşü ve kolay kullanımı sayesinde birçok işletme ve firma tarafından tercih edilmektedir. Seksiyonel kapılar, özellikle endüstriyel alanlarda ve garajlarda sıkça kullanılmakta olup, tamir, bakım ve onarım hizmetlerine duyulan ihtiyaç da artmıştır.</p>
        
            <h2>{$item} Güvenilir Servis Hizmetleri</strong></h2>
        
            <p>Firmamız, 1989 yılından beridir İstanbul ve çevresindeki ev, iş yeri ve endüstriyel alanlarda kullanılan seksiyonel kapılar için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
            <h3><strong>Seksiyonel Kapı Arızaları Nelerdir?</strong></h3>
        
            <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan seksiyonel kapılar, farklı nedenlerden dolayı arıza verebilmektedir. Seksiyonel kapılarda sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Motor Arızaları:</strong> Kapının motorunda meydana gelen problemler, kapının açılmasını ve kapanmasını engelleyebilir.</li>
                <li><strong>Yay ve Kablo Problemleri:</strong> Yayların veya kabloların kopması, kapının düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Kontrol Paneli Sorunları:</strong> Kapının kontrol panelinde meydana gelen arızalar, kapının işlevselliğini kaybetmesine neden olabilir.</li>
                <li><strong>Sensör Arızaları:</strong> Kapının güvenlik sensörlerinde meydana gelen problemler, kapının düzgün çalışmasını engelleyebilir.</li>
            </ol>
        
            <h3><strong>{$item} 7/24 Hızlı ve Etkili Servis</strong></h3>
        
            <p>{$item} her noktasına kalite sertifikası ve uzman ustalarımız ile seksiyonel kapı servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>
        
            <h3>İletişim</h3>
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan ulaşabilirsiniz. HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
        ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
});  

Route::get('/panjur', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 14)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<h2><strong>{$item} Panjur Tamir ve Servisi</strong></h2>

            <p>HBK Kepenk sizlere hızlı ve garantili olarak panjur tamir ve servis hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
        
            <h2><strong>{$item} Panjur Sistemleri</strong></h2>
        
            <p>Panjur sistemleri günümüzde oldukça yaygın olarak kullanılmaya başlanmıştır ve kullanım alanları giderek artmaktadır. Estetik görünüşü, güvenliği artırması ve enerji tasarrufu sağlaması nedeniyle birçok ev ve iş yeri bu sistemi tercih etmektedir. Bu durum, tamir, bakım ve onarım hizmetlerine duyulan ihtiyacın artmasına neden olmuştur.</p>
        
            <h3><strong>7/24 Güvenilir Servis Hizmetleri</strong></h3>
        
            <p>Firmamız, 1991 yılından beridir İstanbul ve çevresindeki ev, iş yeri ve diğer alanlarda kullanılan panjur sistemleri için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
            <h3><strong>Panjur Arızaları Nelerdir?</strong></h3>
        
            <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan panjurlar, farklı nedenlerden dolayı arıza verebilmektedir. Panjur sistemlerinde sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Motor Arızaları:</strong> Panjurun motorunda meydana gelen problemler, panjurun açılıp kapanmasını engelleyebilir.</li>
                <li><strong>Kablo ve Mekanik Parça Sorunları:</strong> Kabloların veya mekanik parçaların kopması veya bozulması, panjurun düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Kontrol Ünitesi Arızaları:</strong> Panjurun kontrol ünitesinde meydana gelen arızalar, panjurun işlevselliğini kaybetmesine neden olabilir.</li>
                <li><strong>Ray ve Mekanizma Problemleri:</strong> Panjurun ray ve mekanizmalarında meydana gelen sorunlar, panjurun düzgün hareket etmesini engelleyebilir.</li>
            </ol>
        
            <h3><strong>7/24 Acil Hızlı ve Etkili Servis</strong></h2>
        
            <p>İstanbul’un her noktasına kalite sertifikası ve uzman ustalarımız ile panjur servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>
        
            <h3>İletişim</h3>
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan ulaşabilirsiniz. HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
         ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
}); 

Route::get('/doner', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 16)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<h2><strong>{$item} Döner Kapı Montaj ve Tamiri</strong></h2>

            <p>HBK Kepenk sizlere hızlı ve garantili olarak döner kapı montaj ve tamir servis hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
        
            <h2>{$item} Döner Kapı Sistemleri</h2>
        
            <p>Döner kapı sistemleri günümüzde oldukça yaygın olarak kullanılmaya başlanmıştır ve kullanım alanları giderek artmaktadır. Estetik görünüşü ve enerji tasarrufu sağlaması sayesinde birçok işletme ve firma bu sistemi tercih etmektedir. Bu durum, döner kapı montaj, bakım ve onarım hizmetlerine duyulan ihtiyacın artmasına neden olmuştur.</p>
        
            <h2>7/24 Güvenilir Servis Hizmetleri</h2>
        
            <p>Firmamız, 1989 yılından beridir İstanbul ve çevresindeki ev, iş yeri ve diğer alanlarda kullanılan döner kapılar için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
            <h3>Döner Kapı Arızaları Nelerdir?</h3>
        
            <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan döner kapılar, farklı nedenlerden dolayı arıza verebilmektedir. Döner kapılarda sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Motor Arızaları:</strong> Kapının motorunda meydana gelen problemler, kapının açılmasını ve kapanmasını engelleyebilir.</li>
                <li><strong>Sensör ve Radar Problemleri:</strong> Kapının sensörlerinde meydana gelen arızalar, kapının düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Kontrol Paneli Sorunları:</strong> Kapının kontrol panelinde meydana gelen arızalar, kapının işlevselliğini kaybetmesine neden olabilir.</li>
                <li><strong>Mekanizma ve Parça Problemleri:</strong> Kapının mekanik parçalarında meydana gelen arızalar, kapının düzgün hareket etmesini engelleyebilir.</li>
            </ol>
        
            <h2>İstanbul'un Her Noktasında Hizmet</h2>
        
            <p>HBK Kepenk olarak, İstanbul’un tüm ilçelerinde döner kapı montaj ve tamir hizmeti sağlamaktayız. Hizmet verdiğimiz ilçeler şunlardır:</p>
        
            <ul>
                <li>Adalar</li>
                <li>Arnavutköy</li>
                <li>Ataşehir</li>
                <li>Avcılar</li>
                <li>Bağcılar</li>
                <li>Bahçelievler</li>
                <li>Bakırköy</li>
                <li>Başakşehir</li>
                <li>Bayrampaşa</li>
                <li>Beşiktaş</li>
                <li>Beykoz</li>
                <li>Beylikdüzü</li>
                <li>Beyoğlu</li>
                <li>Büyükçekmece</li>
                <li>Çatalca</li>
                <li>Çekmeköy</li>
                <li>Esenler</li>
                <li>Esenyurt</li>
                <li>Eyüpsultan</li>
                <li>Fatih</li>
                <li>Gaziosmanpaşa</li>
                <li>Güngören</li>
                <li>Kadıköy</li>
                <li>Kağıthane</li>
                <li>Kartal</li>
                <li>Küçükçekmece</li>
                <li>Maltepe</li>
                <li>Pendik</li>
                <li>Sancaktepe</li>
                <li>Sarıyer</li>
                <li>Silivri</li>
                <li>Sultanbeyli</li>
                <li>Sultangazi</li>
                <li>Şile</li>
                <li>Şişli</li>
                <li>Tuzla</li>
                <li>Ümraniye</li>
                <li>Üsküdar</li>
                <li>Zeytinburnu</li>
            </ul>
        
            <p>İstanbul’un her noktasına kalite sertifikası ve uzman ustalarımız ile döner kapı montaj ve servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>
        
            <h3>İletişim</h3>
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan ulaşabilirsiniz. HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
        ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
});  

Route::get('/garaj', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 4)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<h2><strong>{$item} Garaj Kapısı Tamiri ve Servisi</strong></h2>

            <p>HBK Kepenk sizlere hızlı ve garantili olarak garaj kapısı tamir ve servis hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
        
            <h2>{$item} Garaj Kapısı Sistemleri</h2>
        
            <p>Garaj kapısı sistemleri günümüzde oldukça yaygın olarak kullanılmaktadır ve kullanım alanları giderek artmaktadır. Estetik görünüşü, güvenlik sağlaması ve kullanışlılığı sayesinde birçok ev ve iş yeri bu sistemi tercih etmektedir. Bu durum, garaj kapısı montaj, bakım ve onarım hizmetlerine duyulan ihtiyacın artmasına neden olmuştur.</p>
        
            <h2>7 gün 24 Saat Güvenilir Servis Hizmetleri</h2>
        
            <p>Firmamız, 1989 yılından beridir İstanbul ve çevresindeki ev, iş yeri ve diğer alanlarda kullanılan garaj kapıları için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
            <h3>Garaj Kapısı Arızaları Nelerdir?</h3>
        
            <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan garaj kapıları, farklı nedenlerden dolayı arıza verebilmektedir. Garaj kapılarında sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Motor Arızaları:</strong> Kapının motorunda meydana gelen problemler, kapının açılmasını ve kapanmasını engelleyebilir.</li>
                <li><strong>Yay ve Kablo Problemleri:</strong> Yayların veya kabloların kopması, kapının düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Kontrol Ünitesi Sorunları:</strong> Kapının kontrol ünitesinde meydana gelen arızalar, kapının işlevselliğini kaybetmesine neden olabilir.</li>
                <li><strong>Ray ve Mekanizma Problemleri:</strong> Kapının ray ve mekanizmalarında meydana gelen sorunlar, kapının düzgün hareket etmesini engelleyebilir.</li>
            </ol>
        
            <h2>İstanbul'un Her Noktasında Hizmet</h2>
        
            <p>HBK Kepenk olarak, İstanbul’un tüm bölgelerinde garaj kapısı montaj ve tamir hizmeti sağlamaktayız. İstanbul’un her noktasına kalite sertifikası ve uzman ustalarımız ile garaj kapısı servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>
        
            <h3>İletişim</h3>
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan ulaşabilirsiniz. HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
         ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
});  

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
