<form method="POST" action="{{ url('email') }}">
    @csrf

    <div class="row mb-3">
        <label for="email">Email Address</label>

        <div class="col-md-6">
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div >
        <div>
            <button type="submit">
                Send Password Reset Link
            </button>
        </div>
    </div>
</form>