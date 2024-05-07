@extends('frontend.layout.app')
@section('content')

    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-services.jpg);">
        <div class="container">
            <div class="row mt-2">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10">İstanbul {{ $Detail->title }}</strong></h1>
                    <span class="sub-title">Kepenk Tamiri ve Montajı</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home')}}">Anasayfa</a></li>
                        <li><a href="#">Haberler</a></li>
                        <li class="active">{{ $Detail->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pb-4">
            <div class="col-lg-8 col-12 mb-5 mb-lg-0 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                <h2 class="text-color-dark font-weight-bold text-10 pb-2 mb-4"><em>{{ $Detail->title }}</em></h2>

                @if($Detail->getFirstMediaUrl('page'))
                    <img src="{{ $Detail->getFirstMediaUrl('page') }}" class="img-fluid mb-3" alt="{{ $Detail->title }} - İSTANBUL HBK KEPENK SİSTEMLERİ">
                @endif

                {!!  $Detail->desc !!}
            </div>
            <div class="col-lg-4 col-12 position-relative">
                <aside class="sidebar" data-plugin-sticky="" data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 120}}">
                

                    <div class="card border-0 border-radius-0 custom-box-shadow-1 mb-3">
                        <div class="card-body">
                            <h3 class="text-transform-none font-weight-bold pb-3 mb-4">HABERLER</h3>
                            <ul class="custom-list-style-1 list list-unstyled font-weight-bold">
                                @foreach($Blog->where('service', $Detail->id)->where('category', 1) as $item)
                                    <li>
                                        <a  class="text-decoration-none text-color-dark text-color-hover-primary" 
                                        href="{{ route('blogdetail' , $item->slug)}}" title="{{ $item->title }}">
                                            <i class="icon-arrow-right icons"></i> {{ $item->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    @include('frontend.layout.form')
                </aside>
            </div>
        </div>
    </div>
@endsection
