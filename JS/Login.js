const Validar = document.querySelector(".ingresar");

Validar.addEventListener("click", function(e) 
{
  e.preventDefault();

  var Usuario = document.getElementById("usuario").value;

  var Contrasena = document.getElementById("password").value;

  if (Usuario == "" && Contrasena == "") 
  {
    document.getElementById("usuario").style.borderColor = "var(--error1)";
    document.getElementById("password").style.borderColor = "var(--error1)";
    alert("Complete los campos");
  } 

  else if (Usuario == "" ||Contrasena == "" ||Usuario.length < 3 ||Contrasena.length < 5)
  {
    // Usuario
    if (Usuario == "") 
    {
      document.getElementById("usuario").style.borderColor = "var(--error1)";
      alert("Ingrese el usuario");
    } 

    else if (Usuario.length < 3) 
    {
      document.getElementById("usuario").style.borderColor = "var(--error2)";
      alert("El usuario debe tener al menos 3 caracteres");
    } 

    else 
    {
      document.getElementById("usuario").style.borderColor ="var(--estilo-color)";
    }

    // Contraseña

    if (Contrasena == "") 
    {
      document.getElementById("password").style.borderColor ="var(--error1)";
      alert("Ingrese la contraseña");
    } 

    else if (Contrasena.length < 5) 
    {
      document.getElementById("password").style.borderColor ="var(--error2)";
      alert("La contraseña debe tener al menos 5 caracteres");
    } 

    else 
    {
      document.getElementById("password").style.borderColor ="var(--estilo-color)";
    }
  } 

  else 
  {
    document.getElementById("usuario").style.borderColor = "var(--estilo-color)";
    document.getElementById("password").style.borderColor = "var(--estilo-color)";
    document.getElementById("loginForm").submit(); // Enviar el formulario
  }

});
