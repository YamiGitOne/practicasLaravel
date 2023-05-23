@extends('../layouts/frontend')

{{-- este es el nombre que he puesto en el archivo frontend en el yield --}}
@section('content')
    <h1>formularios</h1>
    <ul>
        <li><a href="{{route('formularios_simple')}}">Simple</a></li>
        <li><a href="">Flash</a></li>
        <li><a href="{{route('formularios_upload')}}">Upload</a></li>
    </ul>
@endsection