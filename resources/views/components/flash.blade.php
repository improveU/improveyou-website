@if (session()->has('status'))
    <div class="statusMessage statusMessageAnimation" id="statusMessage">
        {{ session('status') }}
    </div>
@endif
