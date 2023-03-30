<section class="register">
    <form method="POST" class="formWrapper" action="/register/store">
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
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="inputSplitContainer">
            <div class="inputContainer">
                <label class="inputLabel" for="first_name">First name</label>
                <input class="inputField @error('first_name') is-invalid @enderror"
                       type="text"
                       name="first_name"
                       value="{{ old('first_name') }}"
                       autocomplete="first_name"
                       required
                >
                @error('first_name')
                <span class="invalidFeedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <div class="inputContainer">
                <label class="inputLabel" for="last_name">Last name</label>
                <input class="inputField @error('last_name') is-invalid @enderror"
                       type="text"
                       name="last_name"
                       value="{{ old('last_name') }}"
                       autocomplete="family-name"
                       required
                >
                @error('last_name')
                <span class="invalidFeedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>

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
                {{ $message }}
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
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="inputContainer">
            <label class="inputLabel" for="password">Password</label>
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
            <button class="btn full" type="submit">Register</button>
            <div>
                <a href="{{ url('/login') }}"> <p>Already have an account?</p> </a>
            </div>
        </div>
    </form>

</section>


