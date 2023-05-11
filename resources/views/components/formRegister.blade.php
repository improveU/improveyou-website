<section class="register">
    <form method="POST" class="formWrapper" action="/register">
        @csrf
        <div class="inputContainer">
            <label class="inputLabel" for="username">Username</label>
            <input class="inputField @error('username') is-invalid @enderror"
                   type="text"
                   name="username"
                   value="{{ old('username') }}"
                   autocomplete="username"
                   required
                   autofocus
            >
            @error('username')
            <span class="invalidFeedback" role="alert">
                {{ $message == 'validation.profanity' ? $message = "Please don't use profanity" : $message}}
            </span>
            @enderror
        </div>
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
            <input class="inputField @error('password') is-invalid @enderror"
                   type="password"
                   name="password"
                   required
            >
            @error('password')
            <span class="invalidFeedback" role="alert">
                {{ $message == 'validation.profanity' ? $message = "Please don't use profanity" : $message}}
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
                {{ $message == 'validation.profanity' ? $message = "Please don't use profanity" : $message}}
            </span>
            @enderror
        </div>
        <div class="inputWrapperFix"></div>
        <div class="submitContainer">
            <button class="btn full" type="submit">Register</button>
            <div>
                <a href="{{ url('/login') }}"><p>Already have an account?</p></a>
            </div>
        </div>
    </form>
</section>
