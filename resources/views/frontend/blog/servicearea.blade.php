@extends('frontend.layout.app')
@section('content')

    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-services.jpg);">
        <div class="container">
            <div class="row mt-2">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10">{{ $Detail->title }}</strong></h1>
                    <span class="sub-title">İstanbul Kepenk Tamiri ve Montajı</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home')}}">Anasayfa</a></li>
                        <li><a href="#">İstanbul Hizmet Bölgelerimiz</a></li>
                        <li class="active">{{ $Detail->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pb-4">
            <div class="col-md-12 mb-5 mb-lg-0">
                <h2 class="text-color-dark font-weight-bold text-10 pb-2 mb-4">{{ $Detail->title }}</h2>

                @if($Detail->getFirstMediaUrl('page'))
                    <img src="{{ $Detail->getFirstMediaUrl('page') }}" class="img-fluid mb-3" alt="{{ $Detail->title }} - HBK KEPENK SİSTEMLERİ TAMİR VE MONTAJI">
                @endif

                {!!  $Detail->desc !!}
            </div>
           
        </div>
    </div>
@endsection
