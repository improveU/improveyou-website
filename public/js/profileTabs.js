const profileTabs = document.querySelector('#profileTabs');
const listElements = profileTabs.querySelectorAll('li');
const sectionElements = document.querySelectorAll('[id^="profile"]');

let previousSection = document.querySelector('#profileOverview');

listElements.forEach(function(listItem) {
  listItem.addEventListener('click', function() {

    let sectionId = 'profile' + listItem.textContent;
    if(sectionId == 'profileEdit profile') sectionId = 'profileEdit';

    const sectionElement = document.getElementById(sectionId);

    if (sectionElement && sectionElement.classList.contains('hidden')) {
      sectionElement.classList.remove('hidden');

      listElements.forEach(function(listItem) {
        listItem.classList.remove('tabOpen');
      });

      listItem.classList.add('tabOpen');
      if (previousSection && previousSection !== sectionElement) previousSection.classList.add('hidden');

      previousSection = sectionElement;
    }
  });
});

const editButton = document.getElementById('editButton');

editButton.addEventListener('click', () => {
  previousSection = document.getElementById('profileOverview');
  document.querySelector('#profileTabs li.tabOpen')?.classList.remove('tabOpen');
  previousSection?.classList.add('hidden');

  document.getElementById('profileEdit')?.classList.remove('hidden');
  document.querySelector('#profileTabs li:nth-child(2)')?.classList.add('tabOpen');

  previousSection = document.getElementById('profileEdit');
});

function subscriptionButton() {
   document.getElementById('profileOverview')?.classList.add("hidden");
   document.getElementById('profileEdit')?.classList.add("hidden");
   document.getElementById('profileDescription')?.classList.add("hidden");
   document.getElementById('profileCourses')?.classList.add("hidden");
   document.getElementById('profileSubscription')?.classList.remove("hidden");

   document.querySelector('#profileTabs li.tabOpen')?.classList.remove('tabOpen');
   document.querySelector('#profileTabs li:nth-child(3)')?.classList.add('tabOpen');   
   previousSection = document.getElementById('profileSubscription');
}
