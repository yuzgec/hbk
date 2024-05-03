@extends('frontend.layout.app')
@section('content')
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-services.jpg);">
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="text-10">Referans İşler ve Markalar</strong></h1>
                <span class="sub-title">Kepenk Tamiri ve Montajı</span>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb breadcrumb-light d-block text-center">
                    <li><a href="{{ route('home')}}">Anasayfa</a></li>
                    <li class="active">Referanslarımız</li>
                </ul>
            </div>
        </div>
    </div>
</section>

    <div class="container container-fluid">
        <div class="row">
            @foreach($Service->where('category', 3) as $item)
                <div class="col-md-2 col-6 mb-4">
                    <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid" alt="{{ $item->title }} - Dr. Turan Çetin">
                </div>
            @endforeach
        </div>
    </div>
@endsection
