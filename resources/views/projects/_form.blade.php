@csrf
<div class="form-group">
    <label for="textInputTitle">Título del proyecto</label>
        
        <input type="text" id="textInputTitle"
            class="form-control bg-light shadow-sm border-0"
            name="title" 
            value="{{ old('title', $project->title) }}"
        >
</div>

<div class="form-group">
    <label for="textInputURL">URL del proyecto</label>
        
        <input type="text" id="textInputURL"
            class="form-control bg-light shadow-sm border-0" 
            name="url" 
            value="{{ old('url', $project->url) }}"
        >
</div>

<div class="form-group">
    <label for="textInputDescription">Descripción del proyecto </label>
    <textarea id="textInputDescription"
        class="form-control bg-light shadow-sm border-0"
        name="description">{{ old('description', $project->description) }}
        
    </textarea>
</div>

<button 
    class="btn btn-primary btn-lg btn-block"
>
    {{ $btnText }}
</button>
<a class="btn btn-light btn-block"
    href="{{ route('projects.index') }}"
>Cancelar
</a>