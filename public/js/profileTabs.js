const profileTabs = document.querySelector('#profileTabs');
const listElements = profileTabs.querySelectorAll('li');
const sectionElements = document.querySelectorAll('[id^="profile"]');

let previousSection = document.querySelector('#profileOverview');

function storeActiveTab() {
    const activeTab = document.querySelector('#profileTabs li.tabOpen');
    if (activeTab) {
        sessionStorage.setItem('activeTab', activeTab.textContent.trim());
    }
}

function setActiveTab() {
    const activeTabName = localStorage.getItem('activeTab');
    const hashTab = document.querySelector(`[data-section="${window.location.hash.slice(1)}"]`);

    if (hashTab) {
        handleTabClick(hashTab);
        return;
    }

    if (activeTabName) {
        const activeTab = Array.from(listElements).find(
            (listItem) => listItem.textContent.trim() === activeTabName
        );
        if (activeTab) {
            activeTab.click();
            return;
        }
    }

    const firstTab = listElements[0];
    firstTab.classList.add('tabOpen');
    const sectionId = firstTab.dataset.section;
    const sectionElement = document.getElementById(sectionId);
    sectionElement.classList.remove('hidden');
}

function handleTabClick(tab) {
    const sectionId = tab.dataset.section;
    const sectionElement = document.getElementById(sectionId);

    if (sectionElement && sectionElement.classList.contains('hidden')) {
        sectionElement.classList.remove('hidden');

        listElements.forEach(function (listItem) {
            listItem.classList.remove('tabOpen');
            if (listItem.dataset.section === sectionId) {
                listItem.classList.add('tabOpen');
                window.location.hash = '#' + sectionId;
            }
        });

        if (previousSection && previousSection !== sectionElement) {
            previousSection.classList.add('hidden');
        }

        previousSection = sectionElement;
        storeActiveTab();
    }
}


setActiveTab();
