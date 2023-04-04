const btns = document.querySelectorAll(".faqContainer");

function accordion() {
  if(this.matches(".faqContainer.hiddenAnswer")) this.classList.toggle("hiddenAnswer");
  else{
    if(document.querySelector(".hiddenAnswer") != null) document.querySelector(".hiddenAnswer").classList.toggle("hiddenAnswer");
    if(!this.classList.contains("hiddenAnswer")) this.classList.toggle("hiddenAnswer");
  }
}

btns.forEach((el) => el.addEventListener("click", accordion));
