@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.slider')
    <div class="container">
        <div class="row align-items-center py-1">
            <div class="col-md-6 mb-4">

                <div class="pe-3 pe-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-right-light border-sm-none">
                    <h4 class="mb-2">İstanbul'da 7/24 Kesintisiz Otomatik Kepenk ve Panjur Tamiri</h4>
                    <p class="mb-2">30 yıllık tecrübe ve uzman kadromuzla İstanbul ve tüm ilçelerinde otomatik kepenk, panjur, garaj kapısı, fotoselli kapı, bahçe kapısı, bariyer, pergola tente, zip perde ve sineklik gibi otomatik kapı sistemlerinizin arızalarını 7/24 hızlı ve güvenilir şekilde çözüme kavuşturuyoruz.</p>
                    <h4 class="mt-3 mb-3">Neden HBK Kepenk Sistemlerini Tercih Etmelisiniz?</h4>

                    <p><b>7/24 kesintisiz hizmet:</b> Her gün, haftanın 7 günü, 24 saat hizmetinizdeyiz. 
                        Acil durumlar için de hızlı yanıt veriyoruz.
                    </p>
                
                    <p><b>Uzman kadro: </b> Ekibimiz, otomatik kapı sistemleri konusunda uzman ve deneyimli teknisyenlerden oluşmaktadır.</p>
                    <p><b>Hızlı ve güvenilir çözümler: </b> Arızalarınızı en kısa sürede ve en güvenilir şekilde çözüme kavuşturuyoruz.</p>
                    <p><b>Müşteri memnuniyeti:</b>  Müşteri memnuniyeti bizim için en önemli önceliğimizdir. Her zaman en kaliteli hizmeti sunmaya çalışıyoruz.</p>
                    <p><b>Uygun fiyatlar:</b>  Hizmetlerimiz için en uygun fiyatları sunuyoruz.</p>
                </div>

            </div>
            <div class="col-sm-6 ps-5">

                <div class="cascading-images-wrapper bg-color-grey border-radius-2 p-5 w-100 text-center">
                    <div class="cascading-images transform-none position-relative clearfix">

                        <div class="position-absolute z-index-3" style="top: -5%;left:-5%">
                            <div data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" style="bottom: 0px; transition: transform 1000ms ease-out 0ms; transform: translate3d(0px, -5.24825%, 0px);">
                                <img src="/HBK.jpg" style="max-width: 200px; animation-duration: 600ms; animation-delay: 300ms;" class="appear-animation border-radius-2 box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms">
                            </div>
                        </div>

                        <div class="position-relative z-index-2">
                            <img src="/HBK.jpg" class="appear-animation border-radius-2 box-shadow-3 animated expandIn appear-animation-visible" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" style="animation-duration: 600ms; animation-delay: 100ms;">
                        </div>

                        <div class="patterns opacity-7 position-absolute z-index-1 d-none d-md-block" style="bottom: -8%; right: 9%;">
                            <div data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" style="width: 310px; height: 170px; top: 0px; transition: transform 1000ms ease-out 0ms; transform: translate3d(0px, 11.7092%, 0px);">
                                <svg width="100%" height="100%">
                                    <defs>
                                        <pattern id="dots" x="0" y="0" width="18" height="18" patternUnits="userSpaceOnUse">
                                            <circle fill="#0088cc" cx="1.5" cy="1.5" r="1.5"></circle>
                                        </pattern>
                                    </defs>
                                    <rect x="0" y="0" width="100%" height="100%" fill="url(#dots)"></rect>
                                </svg>
                            </div>
                        </div>

                        <div class="patterns opacity-7 position-absolute z-index-1 d-none d-md-block" style="top: 10%; left: -38.2%;">
                            <div data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" style="width: 310px; height: 170px; top: 0px; transition: transform 1000ms ease-out 0ms; transform: translate3d(0px, 4.44264%, 0px);">
                                <svg width="100%" height="100%">
                                    <defs>
                                        <pattern id="dots2" x="0" y="0" width="18" height="18" patternUnits="userSpaceOnUse">
                                            <circle fill="#CCC" cx="1.5" cy="1.5" r="1.5"></circle>
                                        </pattern>
                                    </defs>
                                    <rect x="0" y="0" width="100%" height="100%" fill="url(#dots2)"></rect>
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
            

        </div>
    </div>

    <section class="call-to-action with-borders mb-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" style="animation-delay: 100ms;">
        <div class="col-sm-9 col-lg-9">
            <div class="call-to-action-content">
                <h3><strong class="font-weight-extra-bold">Unutmayın,</strong> otomatik kapı sistemlerinizdeki arızaları ihmal etmeyin.</h3>
                <p class="mb-0">Hemen bize ulaşarak sorunu en kısa sürede ve en güvenilir şekilde çözüme kavuşturun.</p>
            </div>
        </div>
        <div class="col-sm-3 col-lg-3">
            <div class="call-to-action-btn">
                <a href="{{ route('contactus')}}" class="btn btn-modern text-2 btn-primary">İletişime Geç</a>
            </div>
        </div>
    </section>

    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="overflow-hidden">
                    <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="250" style="animation-delay: 250ms;">İSTANBUK HBK KEPENK <b>HİZMETLERİMİZ</b></h2>
                </div>
                <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                    <hr class="my-0 appear-animation animated customLineProgressAnim appear-animation-visible" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                </div>
                <p class="font-weight-light text-3-5 mb-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">Unutmayın, otomatik kepenklerinizin arızalarını ihmal etmeyin. HBK Kepenk'e ulaşarak sorunu en kısa sürede ve en güvenilir şekilde çözüme kavuşturun.</p>
            </div>
        </div>
        <div class="row row-gutter-sm mb-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" style="animation-delay: 750ms;">
            @foreach ($Service as $item)
            <div class="col-6 col-md-4 text-center mb-4 mb-lg-0">
                <a href="{{ route('servicedetail', $item->slug)}}" title="İstanbul {{ $item->title }}" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="{{ $item->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid" alt="İstanbul {{ $item->title }}">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">{{ $item->title }}</h3>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="{{ route('contactus') }}" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="850" style="animation-delay: 850ms;">İLETİŞİME GEÇ</a>
            </div>
        </div>
    </div>
@endsection


