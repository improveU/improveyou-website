function subscriptionButton(param) {
   if (param == 1) window.location.href = '/payment/1';
   else if (param == 2) window.location.href = '/payment/2';
   else if (param == 3) window.location.href = '/payment/3';
   else if (param == 0) OpenUploadSection();
}


const profileCancel = document.getElementById("profileCancelSubscription");
const profileCancelClose = document.getElementById("profileCancelSubscriptionClose");
const bodyCancel = document.getElementById("body");

function OpenUploadSection() {
    scroll(0, 0);
    profileCancel.classList.add("open");
    bodyCancel.classList.add("overflowHidden");
}

function CloseUploadSection() {
    scroll(0, 0);
    profileCancel.classList.remove("open");
    bodyCancel.classList.remove("overflowHidden");
}

profileCancelClose.addEventListener("click", CloseUploadSection);