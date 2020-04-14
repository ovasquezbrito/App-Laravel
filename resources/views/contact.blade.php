@extends('layout')

@section('title', 'Contactos')

  @section('content')
    <h1>{{ __('Contac') }}</h1>

    <form method="POST" action="{{ route('contact') }}">
        @csrf
		<input name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
		{!! $errors->first('name', '<small>:message</small><br>') !!}

		<input type="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
		{!! $errors->first('email', '<small>:message</small><br>') !!}

		<input type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
		{!! $errors->first('subject', '<small>:message</small><br>') !!}

		<textarea name="content" placeholder="Mensaje...">{{ old('content') }}</textarea><br>
		{!! $errors->first('content', '<small>:message</small><br>') !!}

        <button>@lang('Send')</button>
    </form> 
  @endsection