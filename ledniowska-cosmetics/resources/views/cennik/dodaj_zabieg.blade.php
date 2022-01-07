@extends('home')

@section('cms-content')
<!--Treść CMS-->
<div class="container register-tlo">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--Tytuł formularza-->
                <div class="card-header">{{ __('Dodaj Zabieg i cenę') }}</div>

                <div class="card-body">
                    <!--Formularz-->
                    <form method="POST" action="{{ route('cennik.zapisz') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="id_uslugi" class="col-md-4 col-form-label text-md-right">{{ __('id_uslugi') }}</label>
                            <div class="col-md-6">
                                
                                    <select id="id_uslugi" class="form-select" name="id_uslugi" required autocomplete="kategoria" autofocus> 
                                        @foreach($service as $usluga)
                                        <option value="{{ $usluga->id }}"> {{ $usluga->tytul }}</option>
                                        @endforeach
                                    </select>

                                @error('id_uslugi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="zabieg" class="col-md-4 col-form-label text-md-right">{{ __('Zabieg') }}</label>

                            <div class="col-md-6">
                                <input id="zabieg" type="text" class="form-control @error('zabieg') is-invalid @enderror" name="zabieg" value="{{ old('zabieg') }}" required autocomplete="zabieg">

                                @error('zabieg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cena" class="col-md-4 col-form-label text-md-right">{{ __('Cena') }}</label>

                            <div class="col-md-6">
                                <input id="cena" type="number" min="0.00" max="10000.00" step="0.01" class="form-control @error('cena') is-invalid @enderror" name="cena" value="{{ old('cena') }}" required autocomplete="cena">

                                @error('cena')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Dodaj') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
