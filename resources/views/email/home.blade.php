@extends('../layouts/frontend')

{{-- este es el nombre que he puesto en el archivo frontend en el yield --}}
@section('content')
    <h1>Email</h1>
    <a href="{{route('email_enviar')}}">Enviar</a>
@endsection