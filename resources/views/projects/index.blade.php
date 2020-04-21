@extends('layout')

@section('title', 'Projects')

  @section('content')
    <h1>Portafolio</h1>  
    @auth
        <a href="{{ route('projects.create') }}">Crear proyectos</a>
    @endauth
    
    <ul>
      @forelse($projects as $project)
      <li> <a href="{{ route('projects.show', $project) }}"> {{ $project->title }} </a> </li>
      @empty
      <li>No hay proyectos para mostrar</li>
      @endforelse

      {{ $projects->links() }}

      {{--  @isset($portafolio)
          @foreach ( $portafolio as $portafolioItem )
          <li> {{ $portafolioItem['title'] }} </li>
          @endforeach
      @else
          <li>No hay proyectos para mostrar</li>
      @endisset  --}}
      
        
    </ul>  
  @endsection