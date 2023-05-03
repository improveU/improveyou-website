<section id="profileEdit" class="hidden">
    <h1>Edit Profile</h1>
    <div class="editContainer">
        <form action="{{ url('/updateProfile') }}" method="post" class="formWrapper">
            @csrf

            <div class="overviewPerson">

                <div class="inputContainer">
                    <label for="username" class="inputLabel">Username</label>
                    <input type="text" name="username" id="username"
                           class="inputField @error('username') is-invalid @enderror"
                           value="{{auth()->user()->username}}">
                    @error('username')
                    <span class="alert ">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="overviewMail">
                <div class="inputContainer">
                    <label for="email" class="inputLabel">E-mail</label>
                    <input type="email" name="email" id="email" class="inputField @error('email') is-invalid @enderror"
                           value="{{auth()->user()->email}}">
                    @error('email')
                    <span class="alert ">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="overviewPassword">
                <div class="inputContainer">
                    <label for="password" class="inputLabel">Password</label>
                    <input type="password" name="password" id="password"
                           class="inputField  @error('password') is-invalid @enderror"
                           placeholder="Enter a new password">
                    @error('password')
                    <span class="alert ">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="overviewPassword">
                <div class="inputContainer">
                    <label for="password_confirmation" class="inputLabel">Confirm New Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                           class="inputField  @error('password_confirmation') is-invalid @enderror"
                           placeholder="Enter the new password again">
                    @error('password_confirmation')
                    <span class="alert ">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="submitContainer">
                <button type="submit" class="btn full">
                    Update Profile
                </button>
            </div>
        </form>

        <x-profile.profileOverviewSubscriptionCard/>

    </div>
</section>
