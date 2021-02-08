@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Editace Kosmonauta</h1>
                </div>
                <div class="form-group row">
                    <label for="first_name" class="col-md-4 col-form-label">Jméno</label>

                    <input id="first_name"
                           type="text"
                           class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                           name="first_name"
                           value="{{ old('first_name') ?? $kosmonaut->jmeno }}"
                           autocomplete="first_name" autofocus>

                    @if ($errors->has('first_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="surname" class="col-md-4 col-form-label">Příjmení</label>

                    <input id="surname"
                           type="text"
                           class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"
                           name="surname"
                           value="{{ old('surname') ?? $kosmonaut->prijmeni }}"
                           autocomplete="surname" autofocus>

                    @if ($errors->has('surname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('surname') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="dob" class="col-md-4 col-form-label">Datum narození</label>

                    <input id="dob"
                           type="text"
                           class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}"
                           name="dob"
                           value="{{ old('dob') ?? $kosmonaut->datum_narozeni }}"
                           autocomplete="dob" autofocus>

                    @if ($errors->has('dob'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('dob') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group row">
                    <label for="superpower" class="col-md-4 col-form-label">Superschopnost</label>

                    <input id="superpower"
                           type="text"
                           class="form-control{{ $errors->has('superpower') ? ' is-invalid' : '' }}"
                           name="superpower"
                           value="{{ old('superpower') ?? $kosmonaut->superschopnost }}"
                           autocomplete="superpower" autofocus>

                    @if ($errors->has('superpower'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('superpower') }}</strong>
                        </span>
                    @endif
                </div>

                <input id="id"
                       type="hidden"
                       class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}"
                       name="id"
                       value="{{ old('id') ?? $kosmonaut->id }}"
                       autocomplete="id" autofocus>

                <div class="row pt-4">
                    <button class="btn btn-primary">Uložit</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection