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
                <div class="card-header">{{ __('Edytuj Zabieg i cenę') }}</div>
                <div class="card-body">
                    <!--Formularz-->
                    <form action="{{ url('cennik/zaktualizuj/'.$cennik->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$cennik['id']}}">
                        <div class="row mb-3">
                            <label for="id_uslugi" class="col-md-4 col-form-label text-md-right">{{ __('Usługa') }}</label>

                            <div class="col-md-6">
                                <select id="id_uslugi" class="form-select" name="id_uslugi" value="hello" required autocomplete="kategoria" autofocus> 
                                    @foreach($service as $usluga)
                                        <option value="{{ $usluga->id }}" @if($usluga->id == $cennik['id_uslugi'])selected="selected"@endif> 
                                                {{ $usluga->tytul }}
                                        </option>
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
                                <input id="zabieg" type="text" class="form-control @error('zabieg') is-invalid @enderror" name="zabieg" value="{{ $cennik['zabieg'] }}" required autocomplete="zabieg">

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
                                <input id="cena" type="number" min="0.00" max="10000.00" step="0.01" class="form-control @error('cena') is-invalid @enderror" name="cena" value="{{ $cennik['cena'] }}" required autocomplete="cena">

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
