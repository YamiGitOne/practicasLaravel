@extends('../layouts/frontend')


@section('content')
    <h1>Simple</h1>
    {{-- llamo al componente de alertas del formulario llamado flash --}}
    <x-flash/>
    {{-- la "action" del form la he creado en la ruta colocando post y en el controlador también de ahi deriva el nombre que pongo aqui --}} 
    <form action="{{route('formularios_simple_post')}}" method="POST" name="form">
       {{--  selector dinàmico --}}
        <div class="form-group">
            <label for="pais">Paìs</label>
            <select name="pais" id="pais" class="form-control">
                <option value="0">Seleccione...</option>
                    @foreach($paises as $pais)
                    <option value="{{$pais['id']}}">{{$pais['nombre']}}</option>
                    @endforeach
            </select>
            </div>
        <div class="form-group"><label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}" />
        </div>
        <div class="form-group"><label for="correo">Email</label>
            <input type="text" name="correo" id="correo" class="form-control"/>
            </div>
            <div class="form-group"><label for="descripcion">Descripción</label>
                <textarea name="descricion" id="descripcion" class="form-control"></textarea>
                </div>
                <div class="form-group"><label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control"/>
                    </div>
                    <hr>
                    <div class="form-group"><label for="intereses">Intereses</label>
                       <div class="form-check">
                        @foreach($intereses as $interes)
                        <input type="checkbox" name="interes_{{$loop->index}}" id="intereses_{{$loop->index}}" class="form-check-input" value="{{$interes['id']}}"/>
                        <label for="intereses_{{$loop->index}}" class="form-check-label"> {{$interes['nombre']}} </label><br>
                        @endforeach

                       </div>
                        </div>
                    <hr>
        {{ csrf_field() }}
                    <input type="submit" value="Enviar" class="btn btn-primary"/>
    </form>
@endsection