const navTogglerBtn = document.querySelector(".nav-toggler");
const aside = document.querySelector(".aside");
const allSection = document.querySelectorAll(".section");

navTogglerBtn.addEventListener("click", () => {
  asideSectionTogglerBtn();
});

function asideSectionTogglerBtn() {
  aside.classList.toggle("open");
  navTogglerBtn.classList.toggle("open");
  for (let i = 0; i < allSection.length; i++) {
    allSection[i].classList.toggle("open");
  }
}
