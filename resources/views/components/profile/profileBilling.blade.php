<section id="profileBilling" class="hidden">
    <h1>Billing</h1>
    <div class="overviewContainer">
        <div class="overviewPersonal">

            @if(auth()->user()->subscription_id != 0)
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

                <button class=" btn profileBtn" onclick="handleTabClick(this)" data-section="profileBillingEdit">
                    Edit billing
                </button>
            @else
                <h1 class="billingTitle">Billing information missing</h1>
            @endif

        </div>

        <x-profile.profileOverviewSubscriptionCard/>

    </div>
</section>
