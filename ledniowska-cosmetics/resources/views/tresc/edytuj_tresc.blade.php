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
                <div class="card-header">{{ __('Edytuj Treść') }}</div>
                <div class="card-body">
                    <!--Formularz-->
                    <form action="/tresc/edytuj_tresc" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$data['id']}}">
                        <div class="row mb-3">
                            <label for="tytul" class="col-md-4 col-form-label text-md-right">{{ __('Tytuł') }}</label>

                            <div class="col-md-6">
                                <input id="tytul" type="text" class="form-control @error('tytul') is-invalid @enderror" name="tytul" value="{{ $data['tytul'] }}" required autocomplete="tytul">

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
                                <textarea id="skrot" class="form-control @error('skrot') is-invalid @enderror" name="skrot" required autocomplete="new-skrot">
                                    {{ $data['skrot'] }}
                                </textarea>
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
