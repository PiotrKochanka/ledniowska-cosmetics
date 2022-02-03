@extends('home')

@section('cms-content')
<!--Treść CMS-->
<div class="container register-tlo">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!--Komunikat o powodzeniu-->
            @if(session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <!--Tytuł formularza-->
                <div class="card-header">{{ __('Edytuj Usługę') }}</div>
                <div class="card-body">
                    <!--Formularz-->
                    <form action="{{ url('uslugi/zaktualizuj/'.$service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$service['id']}}">
                        <div class="row mb-3">
                            <label for="kategoria" class="col-md-4 col-form-label text-md-right">{{ __('kategoria') }}</label>

                            <div class="col-md-6">
                                <select id="kategoria" class="form-select" name="kategoria" required autocomplete="kategoria" autofocus> 
                                    <option value="Kosmetyka" @if($service['kategoria'] == 'Kosmetyka')selected="selected"@endif>Kosmetyka</option>
                                    <option value="Medycyna estetyczna" @if($service['kategoria'] == 'Medycyna estetyczna')selected="selected"@endif>Medycyna estetyczna</option>
                                </select>
                            

                                @error('kategoria')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="zdjecie" class="col-md-4 col-form-label text-md-right">{{ __('zdjęcie') }}</label>

                            <div class="col-md-6">
                                <input id="zdjecie" type="file" class="form-control @error('zdjecie') is-invalid @enderror" name="zdjecie">
                                <img src="{{ asset('galery/'.$service->zdjecie) }}" width="70px" alt="Image">
                                @error('zdjecie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tytul" class="col-md-4 col-form-label text-md-right">{{ __('Tytuł') }}</label>

                            <div class="col-md-6">
                                <input id="tytul" type="text" class="form-control @error('tytul') is-invalid @enderror" name="tytul" value="{{$service['tytul']}}" required autocomplete="tytul">

                                @error('tytul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="skrot" class="col-md-4 col-form-label text-md-right">{{ __('Skrót') }}</label>

                            <div class="col-md-6">
                                <textarea id="skrot" class="form-control @error('skrot') is-invalid @enderror" name="skrot" required autocomplete="skrot">@if( $service['skrot'] == "" ) <p>Strona w przygotowaniu...</p> @else {{ $service['skrot'] }} @endif</textarea>
                                @error('skrot')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edytuj
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
