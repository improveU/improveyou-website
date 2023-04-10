const backToTopButton = document.getElementById("backToTopButton");

backToTopButton.addEventListener("click", (event) => {
   window.scrollTo({
      top: 0,
      behavior: "smooth"
  });
});