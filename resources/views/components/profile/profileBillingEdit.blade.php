<section id="profileBillingEdit" class="hidden">
    <h1>Edit Billing</h1>
    <div class="editContainer">
        <form action="{{ url('/updateBilling') }}" method="post" class="formWrapper">
            @csrf
            <div class="overviewBilling">
                <div class="inputContainer">
                    <label class="inputLabel" for="first_name">First name</label>
                    <input class="inputField @error('first_name') is-invalid @enderror"
                           type="text"
                           id="first_name"
                           name="first_name"
                           value="{{ auth()->user()->first_name }}"
                           autocomplete="given-name"
                           required
                    >
                    @error('first_name')
                    <span class="invalidFeedback" role="alert">{{ $message == 'validation.profanity' ? $message = "Please don't use profanity" : $message}}</span>
                    @enderror
                </div>
                <div class="inputContainer">
                    <label class="inputLabel" for="last_name">Last name</label>
                    <input class="inputField @error('last_name') is-invalid @enderror"
                           type="text"
                           id="last_name"
                           name="last_name"
                           value="{{ auth()->user()->last_name }}"
                           autocomplete="family-name"
                           required
                    >
                    @error('last_name')
                    <span class="invalidFeedback" role="alert">{{ $message == 'validation.profanity' ? $message = "Please don't use profanity" : $message}}</span>
                    @enderror
                </div>
            </div>
            <div class="overviewBillingAddress">
                <div class="inputContainer">
                    <label class="inputLabel" for="address">Address</label>
                    <input class="inputField @error('address') is-invalid @enderror"
                           type="text"
                           name="address"
                           value="{{ auth()->user()->address }}"
                           autocomplete="address"
                           required
                    >
                    @error('address')
                    <span class="invalidFeedback" role="alert">{{ $message == 'validation.profanity' ? $message = "Please don't use profanity" : $message}}</span>
                    @enderror
                </div>
            </div>
            <div class="overviewBillingCity">
                <div class="inputContainer">
                    <label class="inputLabel" for="postal_code">ZIP or postal code</label>
                    <input class="inputField @error('postal_code') is-invalid @enderror"
                           type="text"
                           id="postal_code"
                           name="postal_code"
                           value="{{ auth()->user()->zip_code }}"
                           autocomplete="postal-code"
                           required
                    >
                    @error('postal_code')
                    <span class="invalidFeedback" role="alert">{{ $message == 'validation.profanity' ? $message = "Please don't use profanity" : $message}}</span>
                    @enderror
                </div>
                <div class="inputContainer">
                    <label class="inputLabel" for="city">City </label>
                    <input class="inputField @error('city') is-invalid @enderror"
                           type="text"
                           id="city"
                           name="city"
                           value="{{ auth()->user()->city }}"
                           autocomplete="address-level2"
                           required
                    >
                    @error('city')
                    <span class="invalidFeedback" role="alert">{{ $message == 'validation.profanity' ? $message = "Please don't use profanity" : $message}}</span>
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
