@extends('layouts.app')

@section('content')

<div class="container">

	<form action="/" method="post">

		<div class="form-group row">
                <label for="first_name" class="col-md-4 col-form-label">Jméno</label>

                <input id="first_name" type="text" name="first_name">
        </div>

        <div class="form-group row">
                <label for="surname" class="col-md-4 col-form-label">Příjmení</label>

                <input id="surname" type="text" name="surname">
        </div>

        <div class="form-group row">
                <label for="dob" class="col-md-4 col-form-label">Datum narození</label>

                <input id="dob" type="text" name="dob">
        </div>

        <div class="form-group row">
                <label for="superpower" class="col-md-4 col-form-label">Superschopnost</label>

                <input id="superpower" type="text" name="superpower">
        </div>

        <div>{{ $errors->first('first_name') }}</div>
        <div>{{ $errors->first('surname') }}</div>
        <div>{{ $errors->first('dob') }}</div>
        <div>{{ $errors->first('superpower') }}</div>

		<button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Přidat</button>

		@csrf
	</form>
</div>

@endsection