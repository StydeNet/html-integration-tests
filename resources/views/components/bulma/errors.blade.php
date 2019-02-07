@if ($errors->any())
    <div class="message is-danger">
       <div class="message-body">
        {{ $slot }}
       </div>
    </div>
@endif