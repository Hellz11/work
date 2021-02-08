@extends('layouts.app')

@section('content')
<div class="container">

  <table class="table table-dark table-striped">
    <tr>
      <th>ID</th>
      <th>Jméno</th>
      <th>Příjmení</th>
      <th>Datum narození</th>
      <th>Superschopnost</th>
      <th>
        <a href="/add_kosmonaut" class="btn btn-success btn-sm">Přidat kosmonauta</a>
      </th>
    </tr>

    @foreach ($kosmonauti as $kosmonaut)
    <tbody>
      <tr>
        <td>{{ $kosmonaut->id }}</td>
        <td>{{ $kosmonaut->jmeno }}</td>
        <td>{{ $kosmonaut->prijmeni }}</td>
        <td>{{ $kosmonaut->datum_narozeni }}</td>
        <td>{{ $kosmonaut->superschopnost }}</td>
        <td>
          <a href="/edit_kosmonaut/{{ $kosmonaut->id }}" class="btn btn-primary">Edituj</a>
          <a href="/delete/{{ $kosmonaut->id }}" class="btn btn-danger">Smaž</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>

</div>
@endsection