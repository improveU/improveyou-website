<section id="profileOverview">
    <h1>Profile</h1>
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
            <button class=" btn profileBtn" onclick="handleTabClick(this)" data-section="profileEdit" >
                Edit profile
            </button>
        </div>

        <x-profile.profileOverviewSubscriptionCard/>

    </div>
</section>
