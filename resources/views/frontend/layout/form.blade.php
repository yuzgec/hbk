<div class="card border-1 border-radius-1 custom-box-shadow-1" id="form">
    <div class="card-body">
        <h4 class="text-transform-none text-color-dark font-weight-bold mb-3">HIZLI İLETİŞİM FORMU</h4>
        <form class="contact-form custom-form-style-1 form-errors-light" action="{{ route('form') }}" method="POST">
            @csrf

            <div class="row">
                <div class="form-group col mb-3">
                    <input type="text" value="{{ old('name') }}" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" placeholder="Adınız Soyadınız *">
                    @if($errors->has('name'))
                        <div class="invalid-feedback">{{$errors->first('name')}}</div>
                    @endif
                </div>
            </div>
      
            <div class="row">
                <div class="form-group col mb-3">
                    <input type="text" value="{{ old('phone') }}" class="@if($errors->has('phone')) is-invalid @endif form-control" name="phone"  placeholder="Telefon *">
                    @if($errors->has('phone'))
                        <div class="invalid-feedback">{{$errors->first('phone')}}</div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col mb-4">
                    <textarea rows="3" class="@if($errors->has('message')) is-invalid @endif form-control" name="message" placeholder="Mesajınız *">{{ old('message') }}</textarea>
                    @if($errors->has('message'))
                        <div class="invalid-feedback">{{$errors->first('message')}}</div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col text-lg-end mb-0">
                    <button type="submit" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3 text-white">MESAJI GÖNDER</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card border-1 bg-color-grey mt-3">
    <div class="card-body">
        <div class="text-center mb-2">  
            <i class="icon-check icons text-color-primary text-14 "></i>
        </div>
        <p class="card-text">Unutmayın, otomatik kepenklerinizin arızalarını ihmal etmeyin. HBK Kepenk'e ulaşarak sorunu en kısa sürede ve en güvenilir şekilde çözüme kavuşturun.</p>
        <div class="header-extra-info-text line-height-2">
            <span class="text-3 font-weight-semibold text-color-default">7/24 Teknik Destek</span>
            <div class="text-5">
                <a title="7/24 Teknik Destek Hattı" href="tel:{{ config('settings.telefon1')}}" class="text-color-hover-primary text-decoration-none font-weight-bold">
                    {{ config('settings.telefon1')}}
                </a>
            </div>
        </div>
    </div>
</div>
