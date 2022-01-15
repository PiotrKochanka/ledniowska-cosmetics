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
                <div class="card-header">{{ __('Edytuj') }}</div>
                <div class="card-body">
                    <!--Formularz-->
                    <form action="{{ url('nowosci/zaktualizuj/'.$news->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$news['id']}}">
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nazwa') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$news['name']}}" required autocomplete="name">

                                @error('name')
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
                                <img src="{{ asset('galery/'.$news->zdjecie) }}" width="70px" alt="Image">
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
