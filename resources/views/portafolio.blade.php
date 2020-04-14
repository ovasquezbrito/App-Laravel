@extends('layout')

@section('title', 'Portafolio')

  @section('content')
    <h1>Portafolio</h1>  
    <ul>
      @forelse($portafolio as $portafolioItem)
      <li> {{ $portafolioItem['title'] }} </li>
      @empty
      <li>No hay proyectos para mostrar</li>
      @endforelse

      {{--  @isset($portafolio)
          @foreach ( $portafolio as $portafolioItem )
          <li> {{ $portafolioItem['title'] }} </li>
          @endforeach
      @else
          <li>No hay proyectos para mostrar</li>
      @endisset  --}}
      
        
    </ul>  
  @endsection