<section class="login">
    <form method="POST" class="formWrapper" action="{{ url('login') }}">
        @csrf
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
                {{ $message == 'validation.profanity' ? $message = "Please don't use profanity" : $message}}
            </span>
            @enderror
        </div>
        <div class="inputContainer">
            <label class="inputLabel" for="password">Password</label>
            <input class="inputField @error('password') is-invalid @enderror" type="password"
                   name="password"
                   value="{{ old('password') }}"
                   required
            >
            @error('password')
            <span class="invalidFeedback" role="alert">
                {{ $message == 'validation.profanity' ? $message = "Please don't use profanity" : $message}}
            </span>
            @enderror
            <div>
                <a href="{{ url('forget-password') }}"><p>Forgot password?</p></a>
            </div>
        </div>
        <div class="inputWrapperFix"></div>
        <div class="submitContainer">
            <button class="btn full" type="submit">Login</button>
            <div>
                <a href="{{ url('/register') }}"><p>Not registered yet?</p></a>
            </div>
        </div>
    </form>
</section>
