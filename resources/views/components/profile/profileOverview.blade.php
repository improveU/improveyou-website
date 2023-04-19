<section id="profileOverview">
    <h1>Overview</h1>
    <div class="overviewContainer">
        <div class="overviewPersonal">

            <div class="overviewPerson">
                <div>
                    <p>Firstname:</p>
                    <span>{{auth()->user()->first_name}}</span>
                </div>
                <div>
                    <p>Lastname:</p>
                    <span>{{auth()->user()->last_name}}</span>
                </div>
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

            <button class=" btn profileBtn">
                Edit Profile
            </button>
        </div>

        <div class="overviewSubscription">
            @if(auth()->user()->subscription_id == 1)
                <x-payment.cardBeginner>
                    Change subscription
                </x-payment.cardBeginner>
            @endif

            @if(auth()->user()->subscription_id == 2)
                <x-payment.cardImprover>
                    Change subscription
                </x-payment.cardImprover>
            @endif

            @if(auth()->user()->subscription_id == 3)
                <x-payment.cardCreator>
                    Change subscription
                </x-payment.cardCreator>
            @endif
        </div>
    </div>
</section>