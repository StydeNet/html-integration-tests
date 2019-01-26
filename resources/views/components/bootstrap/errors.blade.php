@if ($errors->any())
    <div class="alert alert-danger">
        {{ $slot }}
    </div>
@endif