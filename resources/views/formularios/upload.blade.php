@extends('../layouts/frontend')


@section('content')
    <h1>Upload</h1>
    {{-- llamo al componente de alertas del formulario llamado flash --}}
    <x-flash/>
    {{-- la "action" del form la he creado en la ruta colocando post y en el controlador también de ahi deriva el nombre que pongo aqui --}} 
    <form action="{{route('formularios_upload_post')}}" method="POST" name="form" enctype="multipart/form-data">
        <div class="form-group">
      <label for="foto">Archivo</label>
<input type="file" name="foto" id="foto" class="form-control"/>

    </div>
                    <hr>
        {{ csrf_field() }}
                    <input type="submit" value="Enviar" class="btn btn-primary"/>
    </form>
@endsection