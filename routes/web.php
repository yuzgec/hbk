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
            $desc = "<p>{$item} kepenk tamiri hizmetimiz, uzman ustalar ve kaliteli malzemeler ile <a href='https://www.istanbulkepenktamir.com/hizmet/otomatik-kepenk-tamiri' title='{$item} Otomatik Kapı Servisi'>otomatik kepenk servisi </a>sağlamaktadır. 7/24 güvenilir ve garantili hizmet sunmaktayız.</p>
            
            <p>1989’dan bu yana, profesyonel ustalarımız ve kaliteli malzemeler ile kepenk tamiri hizmeti vermekteyiz. Otomatik kepenkler günlük hayatın birçok alanında sıkça kullanılmakta ve bu nedenle kepenk bakım, onarım ve servis gereksinimleri ortaya çıkmaktadır.</p>
            
            <img src='https://www.istanbulkepenktamir.com/storage/16/Otomatik-Kepenk-Tamiri.jpg' class='img-fluid mb-3 mt-3' alt='{$item} Otomatik Kepenk Tamiri'>
            <h3><b>Karşılaşabileceğiniz Otomatik Kepenk Arızaları</b></h3>
            
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
            
            <p>Kepenk sisteminiz çalışma esnasında fazla ses çıkarıyor, yamuk çalışıyor veya hiç çalışmıyorsa servisimiz ile iletişime geçmeniz gerekebilir. Bu tip problemler ile karşılaşmanız durumunda {$item} kepenk firması olarak bizlere <a href='https://www.istanbulkepenktamir.com/iletisim' title='İletişime Geç'><b>ulaşabilirsiniz.</b></a></p>
            
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
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak <a href='https://www.istanbulkepenktamir.com/hizmet/otomatik-fotoselli-kapi-tamiri' title='{$item} Otomatik Fotoselli Kapı Tamiri'>otomatik fotoselli cam kapı tamir servis</a> hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
                
            <p>Fotoselli kapı sistemleri günümüzde oldukça yaygın olarak kullanılmaya başlanmıştır ve kullanım alanları giderek artmaktadır. Bu sistemler fotoselli cam kapı, otomatik cam kapı veya fotosel kapı olarak da bilinmektedir. Estetik görünüşü ve kolay kullanımı sayesinde birçok işletme ve firma bu sistemi tercih etmeye başlamış ve böylece tamir, bakım ve onarım hizmetlerine duyulan ihtiyaç artmıştır.</p>
        
            <img src='https://www.istanbulkepenktamir.com/storage/4/Fotoselli-kapi.jpg' class='img-fluid mb-3 mt-3' alt='{$item} Otomatik Fotoselli Kepenk Tamiri'>

            <h3>HBK Kepenk: Güvenilir Servis Hizmetleri</h3>
        
            <p>Firmamız, 1989 yılından beridir İstanbul ve çevresindeki ev, iş yeri ve apartman girişleri gibi alanlarda kullanılan fotoselli cam kapılar için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
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
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan <a href='https://www.istanbulkepenktamir.com/iletisim' title='İletişime Geç'><b>ulaşabilirsiniz.</b></a> HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
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
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak <a href='https://www.istanbulkepenktamir.com/hizmet/seksiyonel-kapi-tamir-servisi' title='{$item} Seksiyonel Kapı Tamir Servisi'>seksiyonel kapı tamir servis </a>hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
                
            <p>Seksiyonel kapı sistemleri günümüzde oldukça yaygın olarak kullanılmaya başlanmıştır ve kullanım alanları giderek artmaktadır. Bu sistemler, estetik görünüşü ve kolay kullanımı sayesinde birçok işletme ve firma tarafından tercih edilmektedir. Seksiyonel kapılar, özellikle endüstriyel alanlarda ve garajlarda sıkça kullanılmakta olup, tamir, bakım ve onarım hizmetlerine duyulan ihtiyaç da artmıştır.</p>
        
            <img src='https://www.istanbulkepenktamir.com/storage/12/Seksiyonel-Kap%C4%B1-Tamir-Servisi.jpg' alt='{$item} Seksiyonel Kapı Tamiri ve Montajı' class='img-fluid mt-3 mb-3'>

            <h2><strong>{$item} Güvenilir Servis Hizmetleri</strong></h2>
        
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
        
            <h4><b>{$item} Seksiyonel Kapı Arızaları iletişime geç</b></h4>
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan <a href='https://www.istanbulkepenktamir.com/iletisim' title='İletişime Geç'><b>ulaşabilirsiniz.</b></a> HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
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
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak <a href='https://www.istanbulkepenktamir.com/hizmet/panjur-tamiri-ve-servisi' title='{$item} Panjur Sistemleri'>panjur tamir ve servis hizmetlerini </a>sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
                
            <p>Panjur sistemleri günümüzde oldukça yaygın olarak kullanılmaya başlanmıştır ve kullanım alanları giderek artmaktadır. Estetik görünüşü, güvenliği artırması ve enerji tasarrufu sağlaması nedeniyle birçok ev ve iş yeri bu sistemi tercih etmektedir. Bu durum, tamir, bakım ve onarım hizmetlerine duyulan ihtiyacın artmasına neden olmuştur.</p>
        

            <img src='https://www.istanbulkepenktamir.com/storage/14/I%CC%87stanbul-Panjur-Tamiri-ve-Servisi.jpg' alt='{$item} Panjur Tamiri ve Montajı' class='img-fluid mt-3 mb-3'>
            <h3><strong>7/24 Güvenilir Servis Hizmetleri</strong></h3>
        
            <p>Firmamız, 1989 yılından beridir İstanbul ve çevresindeki ev, iş yeri ve diğer alanlarda kullanılan panjur sistemleri için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
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
        
            <h3><strong>{$item} Panjur Arızaları için iletişime geç</strong></h3>
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan <a href='https://www.istanbulkepenktamir.com/iletisim' title='İletişime Geç'><b>ulaşabilirsiniz.</b></a> HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
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
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak <a href='https://www.istanbulkepenktamir.com/hizmet/doner-kapi-montaj-ve-tamiri' title='{$item} Döner Kapı Montaj ve Tamiri'>döner kapı montaj ve tamir servis </a>hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
        
            <h2><b>{$item} Döner Kapı Sistemleri</b></h2>
        
            <p>Döner kapı sistemleri günümüzde oldukça yaygın olarak kullanılmaya başlanmıştır ve kullanım alanları giderek artmaktadır. Estetik görünüşü ve enerji tasarrufu sağlaması sayesinde birçok işletme ve firma bu sistemi tercih etmektedir. Bu durum, döner kapı Montaj, bakım ve onarım ve imalat hizmetlerine duyulan ihtiyacın artmasına neden olmuştur.</p>
        
            <img src='https://www.istanbulkepenktamir.com/storage/3/Do%CC%88ner-kap%C4%B1-tamir-montaj%C4%B1.jpg' alt='{$item} Döner Kapı Sistemleri' class='img-fluid mt-t mb-3'>
            <h2><b>7/24 Güvenilir Servis Hizmetleri</b></h2>
        
            <p>Firmamız, 1989 yılından beridir İstanbul ve çevresindeki ev, iş yeri ve diğer alanlarda kullanılan döner kapılar için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
            <h3><b>Döner Kapı Arızaları Nelerdir?</b></h3>
        
            <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan döner kapılar, farklı nedenlerden dolayı arıza verebilmektedir. Döner kapılarda sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Motor Arızaları:</strong> Kapının motorunda meydana gelen problemler, kapının açılmasını ve kapanmasını engelleyebilir.</li>
                <li><strong>Sensör ve Radar Problemleri:</strong> Kapının sensörlerinde meydana gelen arızalar, kapının düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Kontrol Paneli Sorunları:</strong> Kapının kontrol panelinde meydana gelen arızalar, kapının işlevselliğini kaybetmesine neden olabilir.</li>
                <li><strong>Mekanizma ve Parça Problemleri:</strong> Kapının mekanik parçalarında meydana gelen arızalar, kapının düzgün hareket etmesini engelleyebilir.</li>
            </ol>
        
            <h3><b>İstanbul'un Her Noktasında Hizmet</b></h3>
        
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
        
            <h4><b>{$item} Döner Kapı Arızaları için iletişime geçin</b></h4>
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan <a href='https://www.istanbulkepenktamir.com/iletisim' title='İletişime Geç'><b>ulaşabilirsiniz.</b></a> HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
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
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak <a href='https://www.istanbulkepenktamir.com/hizmet/garaj-kapisi-tamiri' title='{$item} Garaj Kapısı Tamiri'>garaj kapısı tamir ve servis </a>hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
                
            <p>Garaj kapısı sistemleri günümüzde oldukça yaygın olarak kullanılmaktadır ve kullanım alanları giderek artmaktadır. Estetik görünüşü, güvenlik sağlaması ve kullanışlılığı sayesinde birçok ev ve iş yeri bu sistemi tercih etmektedir. Bu durum, garaj kapısı Montaj, bakım ve onarım ve imalat hizmetlerine duyulan ihtiyacın artmasına neden olmuştur.</p>
        
            <h2><b>7 gün 24 Saat Güvenilir Servis Hizmetleri</b></h2>
        
            <p>Firmamız, 1989 yılından beridir İstanbul ve çevresindeki ev, iş yeri ve diğer alanlarda kullanılan garaj kapıları için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
            <img src='https://www.istanbulkepenktamir.com/storage/13/Garaj-Kap%C4%B1s%C4%B1-Tamiri.jpg' alt='{$item} Garaj Kapısı Tamiri' class='img-fluid mb-3 mt-3'>
            <h3><b>Garaj Kapısı Arızaları Nelerdir?</b></h3>
        
            <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan garaj kapıları, farklı nedenlerden dolayı arıza verebilmektedir. Garaj kapılarında sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Motor Arızaları:</strong> Kapının motorunda meydana gelen problemler, kapının açılmasını ve kapanmasını engelleyebilir.</li>
                <li><strong>Yay ve Kablo Problemleri:</strong> Yayların veya kabloların kopması, kapının düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Kontrol Ünitesi Sorunları:</strong> Kapının kontrol ünitesinde meydana gelen arızalar, kapının işlevselliğini kaybetmesine neden olabilir.</li>
                <li><strong>Ray ve Mekanizma Problemleri:</strong> Kapının ray ve mekanizmalarında meydana gelen sorunlar, kapının düzgün hareket etmesini engelleyebilir.</li>
            </ol>
        
            <h2><b>İstanbul'un Her Noktasında Hizmet</b></h2>
        
            <p>HBK Kepenk olarak, İstanbul’un tüm bölgelerinde garaj kapısı montaj ve tamir hizmeti sağlamaktayız. İstanbul’un her noktasına kalite sertifikası ve uzman ustalarımız ile garaj kapısı servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>
        
            <h4><b>{$item} Garaj Kapısı Arılarınız için hemen arayın</b></h4>
        
            <p>Bizlere telefon numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan <a href='https://www.istanbulkepenktamir.com/iletisim' title='İletişime Geç'><b>ulaşabilirsiniz.</b></a> HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
         ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
}); 

Route::get('/endustri', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 3)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak <a href='https://www.istanbulkepenktamir.com/hizmet/endustriyel-kapi-tamiri' title='{$item} Endüstriyel Kapı Sistemleri'>endüstriyel kapı tamir ve servis </a>hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
        
            <h2>Endüstriyel Kapı Sistemleri</h2>
        
            <p>Endüstriyel kapı sistemleri, büyük ölçekli işletmelerde, fabrikalarda ve depolarda yaygın olarak kullanılmaktadır. Yüksek güvenlik, dayanıklılık ve kullanım kolaylığı sağlayan bu sistemler, endüstriyel alanlarda verimliliği artırmaktadır. Bu nedenle, endüstriyel kapıların Montaj, bakım ve onarım ve imalat hizmetlerine duyulan ihtiyaç artmaktadır.</p>
        
            <h2>HBK Kepenk: Güvenilir Servis Hizmetleri</h2>
        
            <p>Firmamız, 1989 yılından beridir {$item} ve çevresindeki endüstriyel alanlarda kullanılan kapılar için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
            <h3>Endüstriyel Kapı Arızaları Nelerdir?</h3>
        
            <p>Günümüzde birçok endüstriyel alanda kullanılan kapılar, farklı nedenlerden dolayı arıza verebilmektedir. Endüstriyel kapılarda sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Motor Arızaları:</strong> Kapının motorunda meydana gelen problemler, kapının açılmasını ve kapanmasını engelleyebilir.</li>
                <li><strong>Sensör ve Kontrol Paneli Sorunları:</strong> Kapının sensörlerinde veya kontrol panelinde meydana gelen arızalar, kapının düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Mekanik Parça Problemleri:</strong> Kapının mekanik parçalarında meydana gelen arızalar, kapının işlevselliğini etkileyebilir.</li>
                <li><strong>Yay ve Kablo Problemleri:</strong> Yayların veya kabloların kopması, kapının düzgün çalışmasını engelleyebilir.</li>
            </ol>
        
            <h2>İstanbul'un Her Noktasında Hizmet</h2>
        
            <p>İstanbul Kepenk Tamiri olarak, {$item}  tüm bölgelerinde endüstriyel kapı tamir ve bakım hizmeti sağlamaktayız. İstanbul’un her noktasına kalite sertifikası ve uzman ustalarımız ile endüstriyel kapı servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>
        
            <h3>İletişim</h3>
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan <a href='https://www.istanbulkepenktamir.com/iletisim' title='İletişime Geç'><b>ulaşabilirsiniz.</b></a> HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
        ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
});  

Route::get('/zip', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 12)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak <a href='https://www.istanbulkepenktamir.com/hizmet/zip-perde-montaji-ve-tamiri' title='{$item} Zip Perde Sistemleri'>zip perde montaj ve tamir servis </a>hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
                
            <p>Zip perde sistemleri, modern ve şık tasarımı ile günümüzde oldukça yaygın olarak kullanılmaya başlanmıştır. Güneş ışığını kontrol etmek, mahremiyet sağlamak ve enerji tasarrufu yapmak amacıyla birçok ev ve iş yeri bu sistemi tercih etmektedir. Zip perdelerin montajı, bakım ve onarım hizmetlerine duyulan ihtiyaç bu nedenle artmaktadır.</p>
            
            <img src='https://www.istanbulkepenktamir.com/storage/6/Zip-Perde-Tamir-ve-Montaj%C4%B1.jpg' alt='{$item} Zip Perde Montajı ve Tamiri' class='img-fluid mb-3 mt-3'>

            <h2><b>{$item} 7 Gün 24 Saat Servis Hizmetleri</b></h2>
        
            <p>Firmamız, 1989 yılından beridir İstanbul ve çevresindeki ev, iş yeri ve diğer alanlarda kullanılan zip perdeler için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
            <h3><b>Zip Perde Arızaları Nelerdir?</b></h3>
        
            <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan zip perdeler, farklı nedenlerden dolayı arıza verebilmektedir. Zip perde sistemlerinde sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Motor Arızaları:</strong> Perdenin motorunda meydana gelen problemler, perdenin açılmasını ve kapanmasını engelleyebilir.</li>
                <li><strong>Mekanik Parça Sorunları:</strong> Perdenin mekanik parçalarında meydana gelen arızalar, perdenin düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Kontrol Ünitesi Problemleri:</strong> Perdenin kontrol ünitesinde meydana gelen arızalar, perdenin işlevselliğini kaybetmesine neden olabilir.</li>
                <li><strong>Ray ve Kılavuz Sistem Arızaları:</strong> Perdenin ray ve kılavuz sisteminde meydana gelen sorunlar, perdenin düzgün hareket etmesini engelleyebilir.</li>
            </ol>
        
            <h2><b>HBK Kepenk: İstanbul'un Her Noktasında Hizmet</b></h2>
        
            <p>HBK Kepenk olarak, {$item} tüm bölgelerinde zip perde montaj ve tamir hizmeti sağlamaktayız. İstanbul’un her noktasına kalite sertifikası ve uzman ustalarımız ile zip perde servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>
        
            <h4><b>{$item} Zip Perde Arızaları için hemen iletişime geçin</b></h4>
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan <a href='https://www.istanbulkepenktamir.com/iletisim' title='İletişime Geç'><b>ulaşabilirsiniz.</b></a> HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
        ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
});  

Route::get('/bahce', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 7)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak <a href='https://www.istanbulkepenktamir.com/hizmet/bahce-kapisi-tamir-servisi' title='{$item} Bahçe Kapısı Sistemleri'>bahçe kapısı tamir servis </a>hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
                
            <p>Bahçe kapısı sistemleri, güvenlik ve estetik görünüş açısından oldukça önemli olup, günümüzde birçok ev ve iş yeri tarafından tercih edilmektedir. Bahçe kapılarının düzenli olarak bakım ve onarım gerektirmesi nedeniyle bu hizmetlere duyulan ihtiyaç artmaktadır.</p>
        
            <h2><b>{$item} 7/24 Acil Servis Hizmetleri</b></h2>
        
            <p>Firmamız, 1989 yılından beridir İstanbul ve çevresindeki ev, iş yeri ve diğer alanlarda kullanılan bahçe kapıları için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
            
            <img src='https://www.istanbulkepenktamir.com/storage/1/bahce-kapi-tamiri.jpg' alt='{$item} Bahçe Kapısı Sistemleri' class='img-fluid mb-3 mt-3'>

            <h3><b>Bahçe Kapısı Arızaları Nelerdir?</b></h3>
        
            <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan bahçe kapıları, farklı nedenlerden dolayı arıza verebilmektedir. Bahçe kapılarında sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Motor Arızaları:</strong> Kapının motorunda meydana gelen problemler, kapının açılmasını ve kapanmasını engelleyebilir.</li>
                <li><strong>Menteşe ve Ray Problemleri:</strong> Menteşe veya ray sistemindeki sorunlar, kapının düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Kontrol Ünitesi Sorunları:</strong> Kapının kontrol ünitesinde meydana gelen arızalar, kapının işlevselliğini kaybetmesine neden olabilir.</li>
                <li><strong>Elektrik ve Kablo Arızaları:</strong> Elektrik ve kablolarda meydana gelen sorunlar, kapının düzgün çalışmasını engelleyebilir.</li>
            </ol>
        
            <h3><b>İstanbul'un Her Noktasında Hizmet</b></h3>
        
            <p>HBK Kepenk olarak, İstanbul’un tüm bölgelerinde bahçe kapısı tamir ve bakım hizmeti sağlamaktayız. İstanbul’un her noktasına kalite sertifikası ve uzman ustalarımız ile bahçe kapısı servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>
        
            <h4><b>{$item} Bahçe Kapısı Sistemleri servisi için hemen iletişime geçin<b></h4>
        
            <p>Bizlere telefon numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan <a href='https://www.istanbulkepenktamir.com/iletisim' title='İletişime Geç'><b>ulaşabilirsiniz.</b></a> HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
         ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
}); 

Route::get('/bariyer', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 5)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak <a href='https://www.istanbulkepenktamir.com/hizmet/bariyer-tamir-servisi' title='{$item} Bariyer Sistemleri'>bariyer tamir servis </a>hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
                
            <p>Bariyer sistemleri, güvenlik ve kontrol açısından oldukça önemli olup, günümüzde otoparklar, site girişleri ve iş yerleri gibi birçok alanda yaygın olarak kullanılmaktadır. Bariyerlerin düzenli olarak bakım ve onarım gerektirmesi nedeniyle bu hizmetlere duyulan ihtiyaç artmaktadır.</p>
        
            <img src='https://www.istanbulkepenktamir.com/storage/2/bariyer-montaj-tamiri.jpg' alt='{$item} Bariyer Sistemleri' class='img-fluid mb-3 mt-3'>

            <h2><b>{$item} 7/24 Acil Servis Hizmetleri</b></h2>
        
            <p>Firmamız, 1989 yılından beridir {$item} ve çevresindeki otoparklar, site girişleri ve diğer alanlarda kullanılan bariyer sistemleri için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
            <h3><b>Bariyer Arızaları Nelerdir?</b></h3>
        
            <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan bariyer sistemleri, farklı nedenlerden dolayı arıza verebilmektedir. Bariyer sistemlerinde sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Motor Arızaları:</strong> Bariyerin motorunda meydana gelen problemler, bariyerin açılmasını ve kapanmasını engelleyebilir.</li>
                <li><strong>Kontrol Paneli ve Sensör Problemleri:</strong> Bariyerin kontrol panelinde veya sensörlerinde meydana gelen arızalar, bariyerin düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Mekanik Parça Sorunları:</strong> Bariyerin mekanik parçalarında meydana gelen arızalar, bariyerin işlevselliğini etkileyebilir.</li>
                <li><strong>Elektrik ve Kablo Arızaları:</strong> Elektrik ve kablolarda meydana gelen sorunlar, bariyerin düzgün çalışmasını engelleyebilir.</li>
            </ol>
        
            <h2><b>İstanbul'un Her Noktasında Hizmet</b></h2>
        
            <p>HBK Kepenk olarak, İstanbul’un tüm bölgelerinde bariyer tamir ve bakım hizmeti sağlamaktayız. İstanbul’un her noktasına kalite sertifikası ve uzman ustalarımız ile bariyer servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>
        
            <h3><b>{$item} Bariyer Sistemleri hemen işetişime geçin</b></h3>
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan <a href='https://www.istanbulkepenktamir.com/iletisim' title='İletişime Geç'><b>ulaşabilirsiniz.</b></a> HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
         ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
});  


Route::get('/pvc', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 13)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak <a href='https://www.istanbulkepenktamir.com/hizmet/hizli-pvc-branda-montaj-ve-tamiri' title='{$item} PVC Branda Sistemleri'>PVC branda montaj ve tamir servis </a>hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>

    <p>PVC branda sistemleri, dayanıklılığı ve kullanım kolaylığı sayesinde günümüzde birçok alanda tercih edilmektedir. Özellikle endüstriyel alanlar, depolar ve işletmeler için ideal bir çözüm sunan PVC brandalar, Montaj, bakım ve onarım ve imalat hizmetlerine duyulan ihtiyacın artmasına neden olmuştur.</p>
    <img src='https://www.istanbulkepenktamir.com/storage/11/H%C4%B1zl%C4%B1-PVC-Branda-Montaj-ve-Tamiri.jpg' alt='{$item} PVC Branda Sistemleri'' class='img-fluid mb-3 mt-3'>

    <h2><b>{$item} 7/24 Acil Güvenilir Servis Hizmetleri</b></h2>

    <p>Firmamız, 1989 yılından beridir İstanbul ve çevresindeki endüstriyel alanlar, depolar ve işletmelerde kullanılan PVC brandalar için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>

    <h3><b>PVC Branda Arızaları Nelerdir?</b></h3>

    <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan PVC brandalar, farklı nedenlerden dolayı arıza verebilmektedir. PVC branda sistemlerinde sıkça karşılaşılan arızalar şunlardır:</p>

    <ol>
        <li><strong>Yırtılma ve Delinmeler:</strong> Brandanın maruz kaldığı fiziksel etkiler sonucu yırtılma ve delinmeler meydana gelebilir.</li>
        <li><strong>Motor Arızaları:</strong> Otomatik sistemlerde kullanılan motorlarda meydana gelen problemler, brandanın açılmasını ve kapanmasını engelleyebilir.</li>
        <li><strong>Mekanik Parça Sorunları:</strong> Brandanın mekanik aksamlarında meydana gelen arızalar, sistemin düzgün çalışmasını engelleyebilir.</li>
        <li><strong>Ray ve Kılavuz Sistem Arızaları:</strong> Brandanın ray ve kılavuz sistemlerinde meydana gelen sorunlar, brandanın düzgün hareket etmesini engelleyebilir.</li>
    </ol>

    <h2><b>HBK Kepenk: İstanbul'un Her Noktasında Hizmet</b></h2>

    <p>HBK Kepenk olarak, {$item} tüm bölgelerinde PVC branda montaj ve tamir hizmeti sağlamaktayız.
    {$item} her noktasına kalite sertifikası ve uzman ustalarımız ile PVC branda servis hizmeti 
    sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız
    için uygun fiyatlı ve 7/24 hizmet vermekteyiz.
    </p>

    <h4><b>{$item} PVC Branda Arızalarınız için hemen arayın</h4>

    <p>Bizlere telefon numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan <a href='https://www.istanbulkepenktamir.com/iletisim' title='İletişime Geç'><b>ulaşabilirsiniz.</b></a> HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
    ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
});  

Route::get('/motorlu', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 8)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak <a href='https://www.istanbulkepenktamir.com/hizmet/motorlu-kepenk-tamiri' title='{$item} Motorlu Kepenk Sistemleri'>motorlu kepenk tamir servis </a>hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
                
            <p>Motorlu kepenk sistemleri, güvenlik ve kullanım kolaylığı sağladığı için günümüzde birçok iş yeri ve ev tarafından tercih edilmektedir. Estetik görünümleri ve sağlam yapılarıyla dikkat çeken motorlu kepenkler, düzenli bakım ve onarım gerektirmektedir. Bu nedenle, motorlu kepenklerin Montaj, bakım ve onarım ve imalat hizmetlerine duyulan ihtiyaç artmaktadır.</p>
        
            <h2><b>{$item} 7/24 Acil Servis Hizmetleri</b></h2>
        
            <p>Firmamız, 1989 yılından beridir {$item} ve çevresindeki iş yerleri, evler ve diğer alanlarda kullanılan motorlu kepenkler için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
            <img src='https://www.istanbulkepenktamir.com/storage/15/I%CC%87stanbul-Motorlu-Kepenk-Tamiri-.jpg' alt='{$item} Motorlu Kepenk Sistemleri' class='img-fluid mb-3 mt-3'>

            <h3><b>Motorlu Kepenk Arızaları Nelerdir?</b></h3>
        
            <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan motorlu kepenkler, farklı nedenlerden dolayı arıza verebilmektedir. Motorlu kepenk sistemlerinde sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Motor Arızaları:</strong> Kepenk motorunda meydana gelen problemler, kepengin açılmasını ve kapanmasını engelleyebilir.</li>
                <li><strong>Kontrol Paneli ve Kumanda Sorunları:</strong> Kepengin kontrol panelinde veya kumandasında meydana gelen arızalar, kepengin düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Mekanik Parça Problemleri:</strong> Kepengin mekanik parçalarında meydana gelen arızalar, kepengin işlevselliğini etkileyebilir.</li>
                <li><strong>Elektrik ve Kablo Arızaları:</strong> Elektrik ve kablolarda meydana gelen sorunlar, kepengin düzgün çalışmasını engelleyebilir.</li>
            </ol>
        
            <h2><b>İstanbul'un Her Noktasında Hizmet</b></h2>
        
            <p>HBK Kepenk olarak, İstanbul’un tüm bölgelerinde motorlu kepenk tamir ve bakım hizmeti sağlamaktayız. {$item} her noktasına kalite sertifikası ve uzman ustalarımız ile motorlu kepenk servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>
        
            <h4><b>{$item} Motorlu Kepenk Arızaları için hemen iletişime geçin</b></h4>
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan <a href='https://www.istanbulkepenktamir.com/iletisim' title='İletişime Geç'><b>ulaşabilirsiniz.</b></a> HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
        ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
}); 


Route::get('/bio', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 15)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak <a href='https://www.istanbulkepenktamir.com/hizmet/bioclimatic-pergola-rolling-roof' title='{$item} Bioclimatic Pergola ve Rolling Roof Sistemleri'>bioclimatic pergola ve rolling roof montaj ve tamir servis </a>hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>

    <p>Bioclimatic pergola ve rolling roof sistemleri, modern ve estetik tasarımlarıyla açık alanlarda konfor ve şıklığı bir araya getirmektedir. Hava koşullarına dayanıklı yapıları sayesinde yılın her döneminde kullanılabilen bu sistemler, evler, restoranlar, kafeler ve ticari alanlar için ideal çözümler sunmaktadır. Montaj, bakım ve onarım ve imalat hizmetlerine duyulan ihtiyaç bu nedenle artmaktadır.</p>

    <h2><b>{$item} 7/24 Acil Servis ve Tamir Hizmetleri</b></h2>

    <p>Firmamız, 1989 yılından beridir İstanbul ve çevresindeki evler, iş yerleri ve diğer alanlarda kullanılan bioclimatic pergola ve rolling roof sistemleri için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>

    <h3><b>Bioclimatic Pergola ve Rolling Roof Arızaları Nelerdir?</b></h3>

    <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan bioclimatic pergola ve rolling roof sistemleri, farklı nedenlerden dolayı arıza verebilmektedir. Bu sistemlerde sıkça karşılaşılan arızalar şunlardır:</p>

    <ol>
        <li><strong>Motor Arızaları:</strong> Sistemlerin motorlarında meydana gelen problemler, açılma ve kapanmayı engelleyebilir.</li>
        <li><strong>Kontrol Paneli ve Kumanda Sorunları:</strong> Kontrol paneli veya kumanda arızaları, sistemin düzgün çalışmasını engelleyebilir.</li>
        <li><strong>Mekanik Parça Problemleri:</strong> Mekanik parçalarda meydana gelen arızalar, sistemin işlevselliğini etkileyebilir.</li>
        <li><strong>Su Yalıtım Problemleri:</strong> Yalıtım sorunları, sistemin su geçirmezlik özelliğini zayıflatabilir.</li>
    </ol>

    <img src='https://www.istanbulkepenktamir.com/storage/10/Bioclimatic-Pergola,-Rolling-Roof.jpg' alt='{$item} Bioclimatic Pergola ve Rolling Roof Sistemleri' class='img-fluid mb-3 mt-3'>

    <h2><b>HBK Kepenk: İstanbul'un Her Noktasında Hizmet</b></h2>

    <p>HBK Kepenk olarak, İstanbul’un tüm bölgelerinde bioclimatic pergola ve rolling roof montaj ve tamir hizmeti sağlamaktayız. İstanbul’un her noktasına kalite sertifikası ve uzman ustalarımız ile servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>

    <h3><b>{$item} Bioclimatic Pergola ve Rolling Roof Arızaları için hemen hizmete geçin.</b></h3>

    <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan <a href='https://www.istanbulkepenktamir.com/iletisim' title='İletişime Geç'><b>ulaşabilirsiniz.</b></a> HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
 ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
}); 

Route::get('/mega', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 11)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak mega kapı montaj ve bakım servis hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
                
            <p>Mega kapı sistemleri, geniş giriş alanlarına sahip endüstriyel ve ticari binalar için mükemmel çözümler sunmaktadır. Yüksek güvenlik, dayanıklılık ve kullanım kolaylığı sağlayan bu sistemler, büyük araçların ve ekipmanların kolayca geçiş yapabilmesi için idealdir. Mega kapıların montajı, düzenli bakım ve onarım hizmetlerine duyulan ihtiyaç bu nedenle artmaktadır.</p>
        
            <h3><b>7/24 Servis Hizmetleri</b></h3>
        
            <p>Firmamız, 1989 yılından beridir {$item} ve çevresindeki endüstriyel ve ticari binalarda kullanılan mega kapılar için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
            <img src='https://www.istanbulkepenktamir.com/storage/7/Mega-Kap%C4%B1-Tamir-ve-Montaj%C4%B1.jpg' class='img-fluid mb-3 mt-3' alt='{$item} Mega Kapı Montajı ve Bakımı'>
            <h3><b>Mega Kapı Arızaları Nelerdir?</b></h3>
        
            <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan mega kapılar, farklı nedenlerden dolayı arıza verebilmektedir. Mega kapı sistemlerinde sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Motor Arızaları:</strong> Kapının motorunda meydana gelen problemler, kapının açılmasını ve kapanmasını engelleyebilir.</li>
                <li><strong>Kontrol Paneli ve Sensör Sorunları:</strong> Kapının kontrol panelinde veya sensörlerinde meydana gelen arızalar, kapının düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Mekanik Parça Problemleri:</strong> Kapının mekanik parçalarında meydana gelen arızalar, kapının işlevselliğini etkileyebilir.</li>
                <li><strong>Elektrik ve Kablo Arızaları:</strong> Elektrik ve kablolarda meydana gelen sorunlar, kapının düzgün çalışmasını engelleyebilir.</li>
            </ol>
        
            <h2><b>İstanbul'un Her Noktasında Hizmet</b></h2>
        
            <p>HBK Kepenk olarak, {$item} tüm bölgelerinde mega kapı montaj ve bakım hizmeti sağlamaktayız. İstanbul’un her noktasına kalite sertifikası ve uzman ustalarımız ile mega kapı servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>
        
            <h4><b>{$item} Mega Kapı Tamiri</b> için iletişime geç</h4>
        
            <p>Bizlere iletişim numaralarımızdan, canlı destek hattımızdan ve sosyal medya hesaplarımızdan ulaşabilirsiniz. HBK Kepenk olarak müşteri memnuniyetini en üst düzeyde tutarak, sizlere en iyi hizmeti sunmayı hedeflemekteyiz.</p>
        ";
            $Edit->desc = $desc;
            $Edit->save();
        }
    }
    
}); 

Route::get('/pergole', function(){
    $istanbul = ["İstanbul","Arnavutköy", "Avcılar","Ataşehir", "Bağcılar", "Bahçelievler", "Bakırköy", "Başakşehir", "Bayrampaşa", 'Beşiktaş','Beylikdüzü', "Beykoz", "Beyoğlu", "Büyükçekmece","Çekmeköy", "Çatalca", "Eminönü", "Esenler", "Esenyurt","Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Sancaktepe","Sultangazi","Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu"];
    $a = Blog::where('service', 9)->get();
    
    if (count($istanbul) !== count($a)) {
        throw new Exception("İlçe sayısı ile blog sayısı eşleşmiyor");
    }
    
    foreach ($a as $index => $row) {
        $Edit = Blog::find($row->id);
        if ($Edit) {
            $item = $istanbul[$index];
            $desc = "<p>HBK Kepenk sizlere hızlı ve garantili olarak pergola tente montaj ve bakım servis hizmetlerini sağlamaktadır. 7/24 güvenilir ve kurumsal hizmet sunmaktayız.</p>
        
            <p>Pergola tente sistemleri, açık alanlarda konfor ve estetik sağlamak amacıyla günümüzde oldukça yaygın olarak kullanılmaktadır. Bu sistemler, özellikle restoranlar, kafeler, bahçeler ve teraslar için ideal çözümler sunmaktadır. Hava koşullarına dayanıklı ve kullanışlı yapıları sayesinde pergola tentelerin montajı, düzenli bakım ve onarım hizmetlerine duyulan ihtiyaç artmaktadır.</p>
        
            <h2><b>{$item}  7/24 Servis ve Tamir Hizmetleri</b></h2>
        
            <p>Firmamız, 1991 yılından beridir İstanbul ve çevresindeki evler, iş yerleri ve diğer alanlarda kullanılan pergola tente sistemleri için servis hizmeti sağlamaktadır. Uzman ekibimiz ve kalite sertifikalarımız ile sizlere en iyi hizmeti sunmayı amaçlamaktayız.</p>
        
            <img src='https://www.istanbulkepenktamir.com/storage/9/Pergole-Tamir-ve-Montaj%C4%B1-I%CC%87stanbul.jpg' class='img-fluid mt-3 mb-3' alt='{$item} Pergola Tente Montajı ve Bakımı'>
            <h3><b>Pergola Tente Arızaları Nelerdir?</b></h3>
        
            <p>Günümüzde birçok yerde sıkça kullanılmaya başlayan pergola tenteler, farklı nedenlerden dolayı arıza verebilmektedir. Pergola tente sistemlerinde sıkça karşılaşılan arızalar şunlardır:</p>
        
            <ol>
                <li><strong>Motor Arızaları:</strong> Tentelerin motorlarında meydana gelen problemler, açılma ve kapanmayı engelleyebilir.</li>
                <li><strong>Kontrol Paneli ve Kumanda Sorunları:</strong> Kontrol paneli veya kumandada meydana gelen arızalar, sistemin düzgün çalışmasını engelleyebilir.</li>
                <li><strong>Mekanik Parça Problemleri:</strong> Tentelerin mekanik parçalarında meydana gelen arızalar, sistemin işlevselliğini etkileyebilir.</li>
                <li><strong>Yırtılma ve Aşınmalar:</strong> Tente kumaşında meydana gelen yırtılma ve aşınmalar, sistemin performansını olumsuz etkileyebilir.</li>
            </ol>
        
            <h2><b>İstanbul'un Her Noktasında Hizmet</b></h2>
        
            <p>HBK Kepenk olarak, {$item}  tüm bölgelerinde pergola tente montaj ve bakım hizmeti sağlamaktayız. {$item} her noktasına kalite sertifikası ve uzman ustalarımız ile pergola tente servis hizmeti sağlamaya devam ediyoruz. Sizlere en yakın servis noktalarımızla hızlıca ulaşarak tüm arızalarınız için uygun fiyatlı ve 7/24 hizmet vermekteyiz.</p>
        
            <h3><b>{$item} Pergola Tente Arızaları için iletişime geç</b></h3>
        
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
