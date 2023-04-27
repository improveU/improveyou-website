<section id="profileOverview">
    <h1>Overview</h1>
    <div class="overviewContainer">
        <div class="overviewPersonal">

            <div class="overviewPerson">
                <div>
                    <p>Username:</p>
                    <span>{{auth()->user()->username}}</span>
                </div>
            </div>
            <div class="overviewMail">
                <div>
                    <p>Email:</p>
                    <span>{{auth()->user()->email}}</span>
                </div>
            </div>
            <div class="overviewPassword">
                <div>
                    <p>Password:</p>
                    <span>***************</span>
                </div>
            </div>
            <div class="overviewMore">
                <div>
                    <p>Joined at:</p>
                    <span>{{auth()->user()->created_at->format('Y-m-d')}}</span>
                </div>
                <div>
                    <p>Last edit at:</p>
                    <span>{{auth()->user()->updated_at->format('Y-m-d')}}</span>
                </div>
                <div>
                    <p>Language:</p>
                    <span>English</span>
                </div>
            </div>

            <button class=" btn profileBtn" id="editButton">
                Edit profile
            </button>

            @if(auth()->user()->subscription_id != 0)
                <h1 class="billingTitle">Billing</h1>
                <div class="overviewBilling">
                    <div>
                        <p>Firstname:</p>
                        <span>{{auth()->user()->first_name}}</span>
                    </div>
                    <div>
                        <p>Lastname:</p>
                        <span>{{auth()->user()->last_name}}</span>
                    </div>
                </div>

                <div class="overviewBillingAddress">
                    <div>
                        <p>Address:</p>
                        <span>{{auth()->user()->address}}</span>
                    </div>
                </div>

                <div class="overviewBillingCity">
                    <div>
                        <p>ZIP:</p>
                        <span>{{auth()->user()->zip_code}}</span>
                    </div>
                    <div>
                        <p>City:</p>
                        <span>{{auth()->user()->city}}</span>
                    </div>
                </div>

                <button class=" btn profileBtn" id="editButton">
                    Edit billing
                </button>
            @endif

        </div>

        <x-profile.profileOverviewSubscriptionCard/>

    </div>
</section>
