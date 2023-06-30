//Botones

const movPag = document.querySelector(".movPagina");
const adelantar2 = document.querySelector(".SigPagina");
const adelantar3 = document.querySelector(".adelantar-Pagina3");
const adelantar4 = document.querySelector(".adelantar-Pagina4");
const adelantar5 = document.querySelector(".adelantar-Pagina5");
const atras1 = document.querySelector(".volver-Pagina1");
const atras2 = document.querySelector(".volver-Pagina2");
const atras3 = document.querySelector(".volver-Pagina3");
const atras4 = document.querySelector(".volver-Pagina4");
const finalizado = document.querySelector(".ingresar");

//Etapa

const progresoNumero = document.querySelectorAll(".paso .num");
const progresoCkeck = document.querySelectorAll(".paso .check");
const progresoTexto = document.querySelectorAll(".paso p");

let max = 5;
let cont = 1;

//Funcion

adelantar2.addEventListener("click", function (e) {
    e.preventDefault();
    var PrimerNombre = document.getElementById("PrimerNombre").value;
    var SegundoNombre = document.getElementById("SegundoNombre").value;
    var PrimerApellido = document.getElementById("PrimerApellido").value;
    var SegundoApellido = document.getElementById("SegundoApellido").value;

    if (PrimerNombre == "" && SegundoNombre == "" && PrimerApellido == "" && SegundoApellido == "") 

    {
    document.getElementById("PrimerNombre").style.borderColor = "var(--error1)";
    document.getElementById("SegundoNombre").style.borderColor = "var(--error1)";
    document.getElementById("PrimerApellido").style.borderColor = "var(--error1)";
    document.getElementById("SegundoApellido").style.borderColor = "var(--error1)";
    alert("Complete los campos resaltados en azul grisáceo.");
    } 
    else if 
    (
    PrimerNombre == "" || PrimerApellido == "" || SegundoApellido == "" || 
    PrimerNombre.length < 3 ||PrimerApellido.length < 4 ||SegundoApellido.length < 4 ||
    !verificarNombre(PrimerNombre) || !verificarNombres(SegundoNombre) || !verificarNombre(PrimerApellido) || !verificarNombre(SegundoApellido)) 
    {

//Validacion Primer Nombre

    if (PrimerNombre == "") 
    {
      document.getElementById("PrimerNombre").style.borderColor ="var(--error1)";
      alert("Complete el campo (Primer Nombre que está resaltado en azul grisáceo.");
    } 
    else if (PrimerNombre.length < 3) 
    {
      document.getElementById("PrimerNombre").style.borderColor ="var(--error2)";
      alert("El campo (Primer Nombre) que está resaltado en turquesa brillante debe tener 3 o más caracteres.");
    }

    else if (!verificarNombre(PrimerNombre))
    {
      document.getElementById("PrimerNombre").style.borderColor = "var(--error3)";
      alert("Los datos ingresados en el campo (Primer Nombre) que está resaltado en lima no son válidos.");
    } 

    else 
    {
      document.getElementById("PrimerNombre").style.borderColor = "var(--estilo-color)";
    }

//Validación Segundo Nombre

    if (!verificarNombres(SegundoNombre)) 
    {
      document.getElementById("SegundoNombre").style.borderColor = "var(--error3)";
      alert("Los datos ingresados en el campo del (Segundo Apellido) que está resaltado en color lima deben tener un mínimo de 3 caracteres. Si no tienes segundo nombre, deja el campo vacío. Además, no se permiten símbolos ni dígitos, ya que no son válidos.");
    } 

    else 
    {
      document.getElementById("SegundoNombre").style.borderColor = "var(--estilo-color)";
    }

//Validación Primer Apellido

    if (PrimerApellido == "") 
    {
      document.getElementById("PrimerApellido").style.borderColor = "var(--error1)";
      alert("Complete el campo (Primer Apellido que está resaltado en azul grisáceo.");
    }

    else if (PrimerApellido.length < 4) 
    {
      document.getElementById("PrimerApellido").style.borderColor = "var(--error2)";
      alert("El campo (Primer Apellido) que está resaltado en turquesa brillante debe tener 4 o más caracteres.");
    }

    else if (!verificarNombre(PrimerApellido)) 
    {
      document.getElementById("PrimerApellido").style.borderColor = "var(--error3)";
      alert("Los datos ingresados en el campo (Primer Apellido) que está resaltado en lima no son válidos.");
    }

    else 
    {
      document.getElementById("PrimerApellido").style.borderColor = "var(--estilo-color)";
    }

//Segundo Apellido

    if (SegundoApellido == "") 
    {
      document.getElementById("SegundoApellido").style.borderColor = "var(--error1)";
      alert("Complete el campo (Segundo Apellido que está resaltado en azul grisáceo.");
    }

    else if (SegundoApellido.length < 4) {
      document.getElementById("SegundoApellido").style.borderColor = "var(--error2)";
      alert("El campo (Segundo Apellido) que está resaltado en turquesa brillante debe tener 4 o más caracteres.");
    }

    else if (!verificarNombre(SegundoApellido)) 
    {
      document.getElementById("SegundoApellido").style.borderColor = "var(--error3)";
      alert("Los datos ingresados en el campo (Segundo Apellido) que está resaltado en lima no son válidos.");
    } 

    else 
    {
      document.getElementById("SegundoApellido").style.borderColor = "var(--estilo-color)";
    }
  } 
  
    else

// Si cumple los requerimientos  

    {
        document.getElementById("PrimerNombre").style.borderColor = "var(--estilo-color)";
        document.getElementById("SegundoNombre").style.borderColor = "var(--estilo-color)";
        document.getElementById("PrimerApellido").style.borderColor = "var(--estilo-color)";
        document.getElementById("SegundoApellido").style.borderColor ="var(--estilo-color)";

        movPag.style.marginLeft = "-25%";
        progresoNumero[cont - 1].classList.add("active");
        progresoCkeck[cont - 1].classList.add("active");
        progresoTexto[cont - 1].classList.add("active");
        cont += 1;
    }

        function verificarNombre(n) 
        {
            var ExpRegular_Nombre = /^[A-Za-zÑñÁÉÍÓÚáéíóúüÜ.]+((?:[\s{1}][A-Za-zÑñÁÉÍÓÚáéíóúüÜ]+)+)?$/;
            return ExpRegular_Nombre.test(n);
        }

        function verificarNombres(x) 
        {

            var ExpRegular_Nombre = /^$|^[A-Za-zÑñÁÉÍÓÚáéíóúüÜ]{3,}(?:[\s{1}][A-Za-zÑñÁÉÍÓÚáéíóúüÜ](?:[\s{1}][A-Za-zÑñÁÉÍÓÚáéíóúüÜ])?)?$/;
            return ExpRegular_Nombre.test(x);
        }
          
          
          
});

adelantar3.addEventListener("click", function (e) {
    e.preventDefault();

    var TipoDocumento = document.getElementById("TipoDocumento").value;
    var NumeroDocumento = document.getElementById("NumeroDocumento").value;

    if(TipoDocumento == 0 && NumeroDocumento == "")
    {
        document.getElementById("TipoDocumento").style.borderColor = "var(--error1)";
        document.getElementById("NumeroDocumento").style.borderColor = "var(--error1)";
        alert("Complete los campos resaltados en azul grisáceo.")
    }

    else if(TipoDocumento == 0 || NumeroDocumento == "" || NumeroDocumento.length != 10 || !verificarNumeroDocumento(NumeroDocumento))
    {

//Tipo de Documento

        if(TipoDocumento == 0)
        {
            document.getElementById("TipoDocumento").style.borderColor = "var(--error1)";
            alert("Seleccione una opción en el campo (Tipo Documento) que está resaltado en azul grisáceo.");
        }

        else
        {
            document.getElementById("TipoDocumento").style.borderColor = "var(--estilo-color)"
        }

//Numero de Documento

        if(NumeroDocumento == "")
        {
            document.getElementById("NumeroDocumento").style.borderColor = "var(--error1)";
            alert("Complete el campo (Número Documento) que está resaltado en azul grisáceo.");
        }

        else if(NumeroDocumento.length != 10 && !verificarNumeroDocumento(NumeroDocumento))
        {
            document.getElementById("NumeroDocumento").style.borderColor = "var(--error1)";
            alert("El campo (Número Documento) que está resaltado en azul grisáceo debe tener 10 dígitos.");
        }

        else if (NumeroDocumento.length != 10)
        {
            document.getElementById("NumeroDocumento").style.borderColor = "var(--error2)";
            alert("El campo (Número Documento) que está resaltado en turquesa brillante debe tener 10 dígitos.");      
        }

        else if (!verificarNumeroDocumento(NumeroDocumento))
        {
            document.getElementById("NumeroDocumento").style.borderColor = "var(--error3)";
            alert("Solo se permiten dígitos en el campo (Número Documento) que está resaltado en azul grisáceo.")  
        }

        else
        {
            document.getElementById("NumeroDocumento").style.borderColor = "var(--estilo-color)"; 
        }
    }

// Si cumple los requerimientos  
        
        else

        {
            document.getElementById("TipoDocumento").style.borderColor = "var(--estilo-color)"; 
            document.getElementById("NumeroDocumento").style.borderColor = "var(--estilo-color)"; 
            movPag.style.marginLeft = "-50%";
            progresoNumero[cont - 1].classList.add("active");
            progresoCkeck[cont - 1].classList.add("active");
            progresoTexto[cont - 1].classList.add("active");
            cont += 1;
        }

        function verificarNumeroDocumento(m)
        {
            var ExpRegular_Num = /^[\d]+$/;
            return ExpRegular_Num.test(m);
        }
});

adelantar4.addEventListener("click", function (e){
    e.preventDefault();

    var FechaNacimiento = document.getElementById("FechaNacimiento").value;
    var Genero = document.getElementById("Genero").value;

    if(FechaNacimiento == "" && Genero == 0)
    {
        document.getElementById("FechaNacimiento").style.borderColor = "var(--error1)";
        document.getElementById("Genero").style.borderColor = "var(--error1)";
        alert("Complete los campos resaltados en azul grisáceo.")
    }

    else if(FechaNacimiento == "" || FechaNacimiento > "2006-12-31" || Genero == 0)
    {

//Fecha Nacimiento

    if(FechaNacimiento == "")
    {
        document.getElementById("FechaNacimiento").style.borderColor = "var(--error1)";
        alert("Complete el campo (Fecha Nacimiento) que está resaltado en azul grisáceo.");
    }

    else if(FechaNacimiento > "2006-12-31")
    {
        document.getElementById("FechaNacimiento").style.borderColor = "var(--error2)";
        alert("Los datos ingresados en el campo (Fecha Nacimiento) que está resaltado en color lima no son válidos. No se pueden ingresar fechas posteriores al 31/12/2006.");
    }

    else
    {
        document.getElementById("FechaNacimiento").style.borderColor = "var(--estilo-color)";
    }

//Genero

    if(Genero == 0)
    {
        document.getElementById("Genero").style.borderColor = "var(--error1)";
        alert("Seleccione una opción en el campo (Genero) que está resaltado en azul grisáceo.");
    }

    else
    {
        document.getElementById("Genero").style.borderColor = "var(--estilo-color)";
    }

    }

    else
    {
        document.getElementById("FechaNacimiento").style.borderColor = "var(--estilo-color)";
        document.getElementById("Genero").style.borderColor = "var(--estilo-color)";
        movPag.style.marginLeft = "-75%";
        progresoNumero[cont - 1].classList.add("active");
        progresoCkeck[cont - 1].classList.add("active");
        progresoTexto[cont - 1].classList.add("active");
        cont += 1;
    }

});

adelantar5.addEventListener("click", function (e) {
    e.preventDefault();
    
    var CorreoElectronico = document.getElementById("CorreoElectronico").value;
    var NumeroCelular = document.getElementById("NumeroCelular").value;
    var NumeroTelefonico = document.getElementById("NumeroTelefonico").value;

    if ( CorreoElectronico == "" &&  NumeroCelular == "" && NumeroTelefonico == "")
    {
        document.getElementById("CorreoElectronico").style.borderColor= "var(--error1)";
        document.getElementById("NumeroCelular").style.borderColor= "var(--error1)";
        document.getElementById("NumeroTelefonico").style.borderColor= "var(--error1)";
        alert("Complete los campos resaltados en azul grisáceo.")
    }

    else if(CorreoElectronico == "" || NumeroCelular == "" || NumeroTelefonico == "" ||
            CorreoElectronico.length < 6 || NumeroCelular.length != 10 || NumeroTelefonico.length != 7 ||
            !verificarCorreo(CorreoElectronico) || !verificarNumero(NumeroCelular) || !verificarNumero(NumeroTelefonico))
    {

//Correo Electronico

        if(CorreoElectronico == "")
        {
            document.getElementById("CorreoElectronico").style.borderColor= "var(--error1)";
            alert("Complete el campo (Correo Electrónico) que está resaltado en azul grisáceo.");
        }

        else if(CorreoElectronico.length < 6 )
        {
            document.getElementById("CorreoElectronico").style.borderColor= "var(--error2)";
            alert("El campo (Correo Electrónico) que está resaltado en azul grisáceo debe tener al menos 6 caracteres y contener un símbolo '@' y '.co'." );
        }

        else if(!verificarCorreo(CorreoElectronico) )
        {
            document.getElementById("CorreoElectronico").style.borderColor= "var(--error3)";
            alert("Los datos ingresados en el campo (Correo Electrónico) que está resaltado en lima no son válidos.");
        }

        else
        {
            document.getElementById("CorreoElectronico").style.borderColor= "var(--estilo-color)";
        }

//Numero de Celular

        if(NumeroCelular == "")
        {
            document.getElementById("NumeroCelular").style.borderColor= "var(--error1)";
            alert("Complete el campo (Número Celular) que está resaltado en azul grisáceo."); 
        }

        else if(NumeroCelular.length != 10)
        {
            document.getElementById("NumeroCelular").style.borderColor= "var(--error2)";
            alert("El campo (Número Celular) que está resaltado en turquesa brillante debe tener 10 dígitos.");
        }

        else if(!verificarNumero(NumeroCelular))
        {
            document.getElementById("NumeroCelular").style.borderColor= "var(--error3)";
            alert("El campo (Número Celular) que está resaltado en color lima solo permite ingresar dígitos.");
        }

        else if(NumeroCelular.length != 10 && !verificarNumero(NumeroCelular))
        {
            document.getElementById("NumeroCelular").style.borderColor= "var(--error1)";
            alert("El campo (Número Celular) que está resaltado en azul grisáceo debe tener 10 dígitos.");
        }

        else
        {
            document.getElementById("NumeroCelular").style.borderColor= "var(--estilo-color)";
        }

//Numero Telefonico
        
        if(NumeroTelefonico == "")
        {
            document.getElementById("NumeroTelefonico").style.borderColor= "var(--error1)";
            alert("Complete el campo (Número Telefónico) que está resaltado en azul grisáceo."); 
        }

        else if(NumeroTelefonico.length != 7)
        {
            document.getElementById("NumeroTelefonico").style.borderColor= "var(--error2)";
            alert("El campo (Número Telefónico) que está resaltado en turquesa brillante debe tener 7 dígitos."); 
        }

        else if(!verificarNumero(NumeroTelefonico))
        {
            document.getElementById("NumeroTelefonico").style.borderColor= "var(--error3)";
            alert("El campo (Número Telefónico) que está resaltado en color lima solo permite ingresar dígitos."); 
        }

        else if(NumeroTelefonico.length != 7 && !verificarNumero(NumeroTelefonico))
        {
            document.getElementById("NumeroTelefonico").style.borderColor= "var(--error1)";
            alert("El campo (Número Telefónico) que está resaltado en azul grisáceo debe tener 7 dígitos."); 
        }

        else
        {
             document.getElementById("NumeroTelefonico").style.borderColor= "var(--estilo-color)";
        }
    }

    else
    {
            document.getElementById("CorreoElectronico").style.borderColor= "var(--estilo-color)";
            document.getElementById("NumeroCelular").style.borderColor= "var(--estilo-color)";
            document.getElementById("NumeroTelefonico").style.borderColor= "var(--estilo-color)";
            movPag.style.marginLeft = "-100%";
            progresoNumero[cont - 1].classList.add("active");
            progresoCkeck[cont - 1].classList.add("active");
            progresoTexto[cont - 1].classList.add("active");
            cont += 1;
       
    }

    function verificarCorreo(c){
        var ExpRegular_Correo = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        return ExpRegular_Correo.test(c);
    }

    function verificarNumero(y){
        var ExpRegular_Num = /^[\d]+$/;
        return ExpRegular_Num.test(y);
    }

});

finalizado.addEventListener("click",function(e){
    e.preventDefault();
    var Usuario = document.getElementById("usuario").value;
    var Contrasena = document.getElementById("password").value;

    if(Usuario == "" && Contrasena == "")
    {
        document.getElementById("usuario").style.borderColor= "var(--error1)";
        document.getElementById("password").style.borderColor= "var(--error1)";
        alert("Complete los campos resaltados en azul grisáceo.")
    }

    else if(Usuario == "" || Contrasena == "" ||
            Usuario.length < 3 || Contrasena.length < 5 ||
            !verificarUsuario(Usuario) || !verficarContrasena(Contrasena))
            {

//Usuario

                if(Usuario == "")
                {
                    document.getElementById("usuario").style.borderColor= "var(--error1)";
                    alert("Complete el campo (Usuario) que está resaltado en azul grisáceo.");  
                }

                else if(Usuario.length < 3)
                {
                    document.getElementById("usuario").style.borderColor= "var(--error2)";
                    alert("En el campo (Usuario) que está resaltado en azul grisáceo, se requieren al menos 3 caracteres, siendo uno de ellos una letra mayúscula.");  
                }

                else if(!verificarUsuario(Usuario))
                {
                    document.getElementById("usuario").style.borderColor= "var(--error3)";
                    alert("Los datos ingresados en el campo (Usuario) que está resaltado en lima no son válidos.");  
                }

                else
                {
                    document.getElementById("usuario").style.borderColor= "var(--estilo-color)";
                }

//Contraseña

                if(Contrasena == "")
                {
                    document.getElementById("password").style.borderColor= "var(--error1)";
                    alert("Complete el campo (Contraseña) que está resaltado en azul grisáceo.");  
                }

                else if(Contrasena.length < 5)
                {
                    document.getElementById("password").style.borderColor= "var(--error2)";
                    alert("En el campo (Contraseña) que está resaltado en azul grisáceo, se requieren al menos 5 caracteres, incluyendo una letra mayúscula, una minúscula y un número.");  
                }

                else if(!verficarContrasena(Contrasena))
                {
                    document.getElementById("password").style.borderColor= "var(--error3)";
                    alert("Los datos ingresados en el campo (Contraseña) que está resaltado en lima no son válidos.");  
                }

                else
                {
                    document.getElementById("password").style.borderColor= "var(--estilo-color)";
                }
            }

            else
            {
                document.getElementById("usuario").style.borderColor= "var(--estilo-color)";
                document.getElementById("password").style.borderColor= "var(--estilo-color)"; 
                progresoNumero[cont - 1].classList.add("active");
                progresoCkeck[cont - 1].classList.add("active");
                progresoTexto[cont - 1].classList.add("active");
                cont += 1;
                document.getElementById("RegistroForm").submit();

            }

            function verificarUsuario(z) {
                var ExpRegular_Correo = /^[A-Z][a-zA-Z0-9_]{4,20}$/;
                return ExpRegular_Correo.test(z);
            }
            
            function verficarContrasena(b)
            {
                var ExpRegular_Num = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{5,16}$/; 
                return ExpRegular_Num.test(b);
            }
});


atras1.addEventListener("click",function(e){
        e.preventDefault();
        progresoNumero[cont - 2].classList.remove("active");
        progresoCkeck[cont -2 ].classList.remove("active");
        progresoTexto[cont - 2].classList.remove("active");
        cont -= 1;
        movPag.style.marginLeft = "0%";
});
    
atras2.addEventListener("click",function(e){
        e.preventDefault();
        progresoNumero[cont - 2].classList.remove("active");
        progresoCkeck[cont - 2].classList.remove("active");
        progresoTexto[cont - 2].classList.remove("active");
        cont -= 1 ;
        movPag.style.marginLeft = "-25%";
});
 
atras3.addEventListener("click",function(e){
        e.preventDefault();
        progresoNumero[cont - 2].classList.remove("active");
        progresoCkeck[cont - 2].classList.remove("active");
        progresoTexto[cont -2 ].classList.remove("active");
        cont -= 1;
        movPag.style.marginLeft = "-50%";
});

atras4.addEventListener("click",function(e){
    e.preventDefault();
    progresoNumero[cont - 2].classList.remove("active");
    progresoCkeck[cont - 2].classList.remove("active");
    progresoTexto[cont -2 ].classList.remove("active");
    cont -= 1;
    movPag.style.marginLeft = "-75%";
});
