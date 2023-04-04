const observer = new IntersectionObserver((entries) => {
   entries.forEach((entry) => {
      console.log(entry)
      if(entry.isIntersecting){
         entry.target.classList.add('visibleAnimation');
      }
   });
});

const hiddenElements = document.querySelectorAll('.hiddenAnimation');
hiddenElements.forEach((el) => observer.observe(el));