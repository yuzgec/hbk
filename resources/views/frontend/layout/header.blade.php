<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 54, 'stickySetTop': '-54px', 'stickyChangeLogo': false}" style="height: 164px;">
    <div class="header-transparent header-effect-shrink custom-header-1 header-no-border-bottom">
        <div class="header-top" style="min-height: 0px; overflow: visible;">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <ul class="list list-unstyled list-inline mb-0">
                                <li class="list-inline-item text-color-dark me-md-4 mb-0">
                                    <i class="icons icon-phone text-color-primary text-4 position-relative top-2 me-1"></i>
                                    <a title="Telefon" href="tel:{{ config('settings.telefon1')}}" class="text-color-dark text-color-hover-primary text-decoration-none">
                                        <strong>{{ config('settings.telefon1')}}</strong>
                                    </a>
                                </li>
                                <li class="list-inline-item text-color-dark me-4 mb-0 d-none d-md-inline-block">
                                    <i class="icons icon-envelope text-color-primary text-4 position-relative top-4 me-1"></i>
                                    <a title="Email Adresimiz" href="mailto:{{ config('settings.email1')}}" class="text-color-dark text-color-hover-primary text-decoration-none text-2">
                                        {{ config('settings.email1')}}
                                    </a>
                                </li>
                                <li class="list-inline-item text-color-dark text-2 mb-0 d-none d-lg-inline-block">
                                    <i class="icons icon-calendar text-color-primary text-3-5 position-relative top-1 me-1"></i>
                                    7/24 Teknik Destek Hizmeti
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-social-icons social-icons social-icons-clean d-none d-lg-block">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <a href="demo-law-firm-2-contact.html" class="btn btn-primary btn-px-4 py-3 font-weight-bold text-2 rounded-0 ms-lg-4">TEKLİF OLUŞTUR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column w-100">
                    <div class="header-row justify-content-between">
                        <div class="header-logo z-index-2 col-lg-2 px-0">
                            <a href="{{ route('home')}}">
                                <img alt="İstanbul HBK Kepenk Tamir ve Montajı" width="123" data-sticky-width="82" data-sticky-height="40" data-sticky-top="84" src="/logo.jpg">
                            </a>
                        </div>
                        <div class="header-nav header-nav-links justify-content-end pe-lg-4 me-lg-3">
                            <div class="header-nav-main header-nav-main-arrows header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li><a href="{{ route('home')}}" class="nav-link active current-page-active" title="Anasayfa">Anasayfa</a></li>
                                        <li><a href="{{ route('corporatedetail', 'hakkimizda')}}" class="nav-link" title="HBK Kepenk">Hakkımızda</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="nav-link dropdown-toggle">Hizmetlerimiz<i class="fas fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu">
                                                @foreach ($Service as $item)
                                                    <li><a href="{{ route('servicedetail', $item->slug)}}" class="dropdown-item">{{ $item->title}}</a></li>
                                                @endforeach
                                               
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('product')}}" class="nav-link" title="HBK Ürünlerimiz">Ürünlerimiz</a></li>
                                        <li><a href="{{ route('blog')}}" class="nav-link" title="Blog">Blog</a></li>
                                        <li><a href="{{ route('reference')}}" class="nav-link" title="Referans Çalışmalarımız">Referanslar</a></li>
                                        <li><a href="{{ route('contactus')}}" class="nav-link" title="Bize Ulaşın">İletişim</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <ul class="header-extra-info custom-left-border-1 d-none d-xl-block">
                            <li class="d-none d-sm-inline-flex ms-0">
                                <div class="header-extra-info-icon">
                                    <i class="icons icon-phone text-3 text-color-dark position-relative top-3"></i>
                                </div>
                                <div class="header-extra-info-text line-height-2">
                                    <span class="text-1 font-weight-semibold text-color-default">7/24 Teknik Destek</span>
                                    <strong class="text-4">
                                        <a title="7/24 Teknik Destek Hattı" href="tel:{{ config('settings.telefon1')}}" class="text-color-hover-primary text-decoration-none">
                                            {{ config('settings.telefon1')}}
                                        </a>
                                    </strong>
                                </div>
                            </li>
                        </ul>
                     
                        <button class="btn header-btn-collapse-nav ms-4" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>