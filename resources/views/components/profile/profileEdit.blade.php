<section id="profileEdit" class="hidden">
    <h1>Edit</h1>
    <div class="editContainer">
        <form action="{{ url('/updateProfile') }}" method="post" class="formWrapper">
            @csrf

            <div class="overviewPerson">

                <div class="inputContainer">
                    <label for="username" class="inputLabel">Username</label>
                    <input type="text" name="username" id="username" class="inputField" value="{{Auth::user()->username}}">
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="overviewMail">
                <div class="inputContainer">
                    <label for="email" class="inputLabel">E-mail</label>
                    <input type="email" name="email" id="email" class="inputField" value="{{Auth::user()->email}}">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="overviewPassword">
                <div class="inputContainer">
                    <label for="password" class="inputLabel">Password</label>
                    <input type="password" name="password" id="password" class="inputField" placeholder="Enter a new password if you want to change it">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
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
