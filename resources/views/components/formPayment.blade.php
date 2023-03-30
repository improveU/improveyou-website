<section class="register">
    <form method="POST" class="formWrapper" action="{{ url('payment') }}">
        @csrf
        <div class="inputContainer">
            <label class="inputLabel" for="username">Name on Card</label>
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
        <div class="inputContainer">
            <label class="inputLabel" for="email">Cardnumber</label>
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
        <div class="inputSplitContainer">
            <div class="inputContainer">
                <label class="inputLabel" for="first_name">Expiry date</label>
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
                <label class="inputLabel" for="last_name">Security code</label>
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
        
        
        
        <div class="inputWrapperFix"></div>
        <div class="submitContainer">
            <button class="btn full" type="submit">Pay now</button>
            
        </div>
    </form>

</section>


