const UploadSection = document.getElementById("profilePictureUpload");
const UploadCloseBtn = document.getElementById("profilePictureUploadClose");
const UploadOpenBtn = document.getElementById("profilePictureUploadOpen");
const body = document.getElementById("body");

function OpenUploadSection() {
    scroll(0, 0);
    UploadSection.classList.add("open");
    body.classList.add("overflowHidden");
}

function CloseUploadSection() {
    scroll(0, 0);
    UploadSection.classList.remove("open");
    body.classList.remove("overflowHidden");
}

UploadCloseBtn.addEventListener("click", CloseUploadSection);
UploadOpenBtn.addEventListener("click", OpenUploadSection);
