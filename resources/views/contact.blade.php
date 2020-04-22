@extends('layout')

@section('title', 'Contactos')

  @section('content')
  <div class="container">
	  <div class="row">
		  <div class="col-12 col-sm-10 col-lg-6 mx-auto">
							

				<form class="bg-white shadow rounded py-3 px-4"
					method="POST" 
					action="{{ route('messages.store') }}"
				>
					@csrf
					<h1 class="display-4" >{{ __('Contac') }}</h1>
					<hr>
					<div class="form-group">
						<label for="name">Nombre</label>
						<input name="name"
							id="name"
							class="form-control
								bg-light 
								shadow-sm 
								@error('name')
									is-invalid
								@esle
									border-0
								@enderror"
							placeholder="Nombre..." 
							value="{{ old('name') }}">
							@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
					</div>
					
					<div class="form-group">
						<input type="email" 
							class="form-control
								bg-light 
								shadow-sm 
								@error('email')
									is-invalid
								@esle
									border-0
								@enderror"
							name="email" 
							placeholder="Email..." 
							value="{{ old('email') }}">
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
					</div>
					
					<div class="form-group">
						<input type="text" 
							class="form-control
								bg-light 
								shadow-sm 
								@error('subject')
									is-invalid
								@esle
									border-0
								@enderror"
							name="subject" 
							placeholder="Asunto..." 
							value="{{ old('subject') }}">
							@error('subject')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
					</div>
		
					<div class="form-group">
						<textarea name="content"
							class="form-control
								bg-light 
								shadow-sm 
								@error('content')
									is-invalid
								@esle
									border-0
								@enderror" 
							placeholder="Mensaje...">{{ old('content') }}</textarea>
							@error('content')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
					</div>
					
		
					<button class="btn btn-primary btn-lg btn-block">@lang('Send')</button>
				</form> 
		  	</div>
	  	</div>
		
	</div>
  @endsection