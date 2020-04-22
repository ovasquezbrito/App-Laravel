@if ($errors->any())
    <div 
        class="alert 
                alert-danger 
                alert-dismissible fade show" role="alert">
        <ul class="m-0">
            @foreach ($errors->all() as $itemerror)
                <li>{{ $itemerror }}</li>
            @endforeach
        </ul>
    </div>
@endif