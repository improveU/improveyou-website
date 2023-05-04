<section class="resetPassword">
    <form method="POST" class="formWrapper" action="{{ route('reset.password.post') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="inputContainer">
            <label class="inputLabel" for="email">Email</label>
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
        <div class="inputContainer">
            <label class="inputLabel" for="password">Password confirm</label>
            <input class="inputField @error('password_confirmation') is-invalid @enderror"
                   type="password"
                   name="password_confirmation"
                   value="{{ old('password') }}"
                   required
            >
            @error('password_confirmation')
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
