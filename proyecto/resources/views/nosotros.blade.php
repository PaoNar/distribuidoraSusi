@extends('plantilla')

@section('seccion')



<h1>Grupo de Ejemplo</h1>

@foreach($grupo as $item)
<a href="{{ route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a> <br>
@endforeach

@if(!empty($nombre))
    @switch($nombre)
        @case($nombre == 'camiseta1')
            <h2>El nombre es {{ $nombre}}:</h2>
            <p> {{ $nombre}}  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repudiandae numquam quisquam unde incidunt animi voluptatibus 
            laboriosam quis ea quaerat iste nemo aliquam quod facilis debitis,
            voluptatum consequatur maiores architecto.</p>
        @break

        @case($nombre == 'camiseta2')
            <h2>El nombre es {{ $nombre}}:</h2>
            <p> {{ $nombre}}  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repudiandae numquam quisquam unde incidunt animi voluptatibus 
            laboriosam quis ea quaerat iste nemo aliquam quod facilis debitis,
            voluptatum consequatur maiores architecto.</p>
        @break

        @case($nombre == 'camiseta3')
            <h2>El nombre es {{ $nombre}}:</h2>
            <p> {{ $nombre}}  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repudiandae numquam quisquam unde incidunt animi voluptatibus 
            laboriosam quis ea quaerat iste nemo aliquam quod facilis debitis,
            voluptatum consequatur maiores architecto.</p>
        @break

    @endswitch
@endif




@endsection