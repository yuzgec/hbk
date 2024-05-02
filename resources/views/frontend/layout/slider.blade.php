<div class="owl-carousel-wrapper" style="height: 400px;">
    <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-style-1 nav-inside nav-inside-plus nav-light nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1, 'dots': true, 'nav': false}, '479': {'items': 1, 'dots': true}, '768': {'items': 1, 'dots': true}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': false, 'dotsVerticalOffset': '-235px', 'nav': true, 'navVerticalOffset': '70px', 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 7000, 'autoplayHoverPause': true, 'rewind': true}">

        <!-- Carousel Slide 1 -->
        <div class="position-relative overlay overlay-show overlay-op-6 overflow-hidden pt-4" data-dynamic-height="['600px','600px','600px','750px','750px']" style="height: 600px;">
            <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url(/banner.jpg); background-size: cover; background-position: center;"></div>
            <div class="container position-relative z-index-3 pb-5 h-100">
                <div class="row justify-content-center align-items-center pb-5 h-100">
                    <div class="col-lg-8 text-center pb-5 mb-5">
                        <h1 class="text-color-light font-weight-bold line-height-1 text-12 text-md-14 positive-ls-3 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">İSTANBUL KEPENK TAMİRİ</h1>
                        <h2 class="alternative-font-4 text-color-light font-weight-semibold line-height-3 text-5 positive-ls-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1300" data-plugin-options="{'minWindowWidth': 0}">HBK OTOMATİK KAPI SİSTEMLERİ</h2>
                        <p class="text-color-light opacity-6 text-3-5 mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 2200, 'minWindowWidth': 0}">30 yıllık tecrübesi ile İstanbul'un tüm bölgelerinde hizmet vermektedir.</p>
                        <a href="{{ route('contactus')}}" class="btn btn-primary font-weight-bold text-3-5 px-5 py-3 mt-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="3300">İLETİŞİME GEÇ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="owl-carousel-wrapper position-relative z-index-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="2000" style="margin-top: -222px; height: 470px;">
    <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-dark mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}, '1440': {'items': 5}}, 'margin': 20, 'stagePadding': 20, 'loop': true, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 7000}">
        @foreach($Service as $item)
        <div class="py-5">
            <a href="demo-law-firm-2-practice-areas-detail.html" class="text-decoration-none">
                <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                    <div class="card-body text-center px-4 py-5">
                        <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">{{ $item->title}}</h2>
                        <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>                    
                    </div>
                </div>
            </a>
        </div>
       @endforeach
    </div>
</div>