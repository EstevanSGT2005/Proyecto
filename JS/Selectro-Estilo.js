//Selector Estilo (TOGGLE)//
const SelectorEstiloToggle = document.querySelector(".selector-estilo-toggler");
SelectorEstiloToggle.addEventListener ("click", () => 
{
    document.querySelector(".selector-estilo").classList.toggle("open");
})

//ocultar el selector de estilo en el desplazamiento//
window.addEventListener("scroll", () => 
{
    const selectorEstilo = document.querySelector(".selector-estilo");
    if (selectorEstilo.classList.contains("open")) 
    {
      selectorEstilo.classList.remove("open");
    }
});
  
  
  
  
  

//Tema Color//

const SelectorEstilo = document.querySelectorAll(".alternativa-estilo");
function setActivaEstilo(color)
{
    SelectorEstilo.forEach((estilo) =>
    {
        if(color === estilo.getAttribute("title"))
        {
            estilo.removeAttribute("disabled");
        }
        else
        {
            estilo.setAttribute("disabled","true");
        }
    }
    )
}

//Tema Claro o Oscuro//

const ClaroOscuro = document.querySelector (".claro-oscuro");
ClaroOscuro.addEventListener("click", () => 
{
    ClaroOscuro.querySelector("i").classList.toggle("fa-sun");
    ClaroOscuro.querySelector("i").classList.toggle("fa-moon");
    document.body.classList.toggle("oscuro");
})

window.addEventListener("load", () => 
{
    if(document.body.classList.contains("oscuro"))
    {
        ClaroOscuro.querySelector("i").classList.add("fa-sun");
    }
    else
    {
        ClaroOscuro.querySelector("i").classList.add("fa-moon");
    }
})