@extends('home')

@section('cms-content')
<div class="container register-tlo">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dodaj Zdjęcie') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('galeria.zapisz') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-1">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Tytuł') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="tytul">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="zdjecie" class="col-md-4 col-form-label text-md-right">{{ __('zdjęcie') }}</label>

                            <div class="col-md-6">
                                <input id="zdjecie" type="file" class="form-control @error('zdjecie') is-invalid @enderror" name="zdjecie" value="{{ old('zdjecie') }}" required autocomplete="zdjecie" autofocus>

                                @error('zdjecie')
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
