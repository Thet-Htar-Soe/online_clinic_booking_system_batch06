@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops! Something went wrong!</strong>

        <br><br>

        <ul class="p-3">
            @foreach ($errors->all() as $error)
                <li class="mb-2">{{ $error }}</li>
            @endforeach
        </ul>

    </div>

@endif
