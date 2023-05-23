hola desde vista .blade
//variable (binding) 
<h3>texto = {{$texto}}</h3>

<h4>{{ ($numero==12) ? 'es 12 desde ternario' : 'no es 12' }} </h4>

<h3>Ciclo for</h3>
<ul>
@for ($i = 1;$i <= 10 ; $i++)
<li>{{$i}}</li>
@endfor
</ul>

<ul>
@foreach ($paises as $pais)
<li>{{$loop->index}} - {{$pais['nombre']. ' | ' .$pais['dominio']}}</li>
@endforeach
</ul>

<ul>

<li>
    <a href="{{route('home_hola')}}">Home hola</a>

   
</li>
</ul>
<!-- <img src="{{asset('images/nombreimagen.png')}}" /> -->
@include('home.incluido')
<x-componente :mensaje="$texto"/>
<x-componente :mensaje="$numero"/>