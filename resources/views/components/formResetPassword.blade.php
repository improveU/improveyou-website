<section class="login">
    <form method="POST" class="formWrapper" action="{{ url('resetPassword') }}">
        @csrf
        <div class="inputContainer">
            <label class="inputLabel" for="password">Enter a new password</label>
            <input class="inputField @error('password') is-invalid @enderror" type="password"
                   name="password"
                   value="{{ old('password') }}"
                   required

            >
            @error('password')
            <span class="invalidFeedback" role="alert">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="inputWrapperFix"></div>
        <div class="submitContainer">
            <button class="btn full" type="submit">Reset password</button>
        </div>
    </form>
</section>
