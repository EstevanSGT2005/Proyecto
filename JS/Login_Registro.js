
// Contraseña //

function mostrarContra()
{
    var x=document.getElementById("password");
    var y=document.getElementById("ocultar");
    var z=document.getElementById("mostrar");
    
    if(x.type=="password")
    {
        x.type ="text";
        y.style.display="block";
        z.style.display="none";
    }
    else
    {
        x.type ="password";
        y.style.display="none";
        z.style.display="block";
    }
}

  // Aside
  const nav = document.querySelector(".nav");
  const navList = nav.querySelectorAll("li");
  const totalNavList = navList.length;
  const allSection = document.querySelectorAll(".section");
  const totalSection = allSection.length;
  
  for (let i = 0; i < totalNavList; i++) 
  {
    const a = navList[i].querySelector("a");
    a.addEventListener("click", function () 
    {
      removeBackSection();
      for (let j = 0; j < totalNavList; j++) {
        if (navList[j].querySelector("a").classList.contains("active")) 
        {
          addBackSection(j);
        }
        navList[j].querySelector("a").classList.remove("active");
      }
      this.classList.add("active");
      showSection(this);
      if (window.innerWidth < 1200) 
      {
        asideSectionTogglerBtn();
      }
    });
  }
  
  function removeBackSection() {
    for (let i = 0; i < totalSection; i++) 
    {
      allSection[i].classList.remove("back-section");
    }
  }
  
  function addBackSection(num) 
  {
    if (num > 0) 
    {
      allSection[num - 1].classList.add("back-section");
    }
  }
  
  
  function showSection(element) 
  {
    for (let i = 0; i < totalSection; i++)
     {
      allSection[i].classList.remove("active");
     }
    const target = element.getAttribute("href").split("#")[1];
    document.querySelector("#" + target).classList.add("active");
  }
  
  function updateNav(element) 
  {
    for (let i = 0; i < totalNavList; i++) 
    {
      navList[i].querySelector("a").classList.remove("active");
      const target = element.getAttribute("href").split("#")[1];
      if (target === navList[i].querySelector("a").getAttribute("href").split("#")[1]) 
      {
        navList[i].querySelector("a").classList.add("active");
      }
    }
  }
  

  
  const navTogglerBtn = document.querySelector(".nav-toggler");
  const aside = document.querySelector(".aside");
  navTogglerBtn.addEventListener("click", () => 
  {
    asideSectionTogglerBtn();
  });
  
  function asideSectionTogglerBtn()
  {
    aside.classList.toggle("open");
    navTogglerBtn.classList.toggle("open");
    for (let i = 0; i < totalSection; i++) 
    {
      allSection[i].classList.toggle("open");
    }
  }
  