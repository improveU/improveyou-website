<div class="overview-right">
    <h1>Settings</h1>

    <form action="{{ url('/updateProfile') }}" method="post" class="formWrapper">
        @csrf
        <div class="inputContainer">
            <label for="username" class="inputLabel">Username</label>
            <input type="text" name="username" id="username" class="inputField" value="{{Auth::user()->username}}">
            @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="inputContainer">
            <label for="first_name" class="inputLabel">Firstname</label>
            <input type="text" name="first_name" id="first_name" class="inputField" value="{{Auth::user()->first_name}}">
            @error('first_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="inputContainer">
            <label for="last_name" class="inputLabel">Lastname</label>
            <input type="text" name="last_name" id="last_name" class="inputField" value="{{Auth::user()->last_name}}">
            @error('last_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="inputContainer">
            <label for="email" class="inputLabel">E-mail</label>
            <input type="email" name="email" id="email" class="inputField" value="{{Auth::user()->email}}">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="submitContainer">
            <button type="submit" class="btn full">
                Update Profile
            </button>
        </div>
    </form>
</div>
