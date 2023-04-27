<section>
    <form method="POST" class="formWrapper" action="{{ url('forget-password') }}">
        @csrf
        <div class="inputContainer">
            <label class="inputLabel" for="email">Enter a valid mail to receive a reset link </label>
            <input class="inputField @error('email') is-invalid @enderror"
                   type="email"
                   name="email"
                   value="{{ old('email') }}"
                   autocomplete="email"
                   required
                   autofocus
            >
            @error('email')
            <span class="invalidFeedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="inputWrapperFix"></div>
        <div class="submitContainer">
            <button class="btn full" type="submit">Send mail</button>
        </div>
    </form>
</section>
