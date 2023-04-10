const UploadSection = document.getElementById("profilePictureUpload");
const UploadCloseBtn = document.getElementById("profilePictureUploadClose");
const UploadOpenBtn = document.getElementById("profilePictureUploadOpen");
const body = document.getElementById("body");

function toggleUploadSection() {
   scroll(0, 0);
   UploadSection.classList.toggle("open");
   body.classList.toggle("overflowHidden");
}

UploadCloseBtn.addEventListener("click", toggleUploadSection);
UploadOpenBtn.addEventListener("click", toggleUploadSection);
