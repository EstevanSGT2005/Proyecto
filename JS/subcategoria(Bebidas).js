let productos = [];

fetch('./JSON/productos(Bebidas).json')
    .then(response => response.json())
    .then(data => {
        productos = data;
        cargarProductos(productos)
    });


const contenedorProductos = document.querySelector("#contenedor-productos");
const botonesCategorias = document.querySelectorAll(".boton-categoria");
const tituloPrincipal = document.querySelector("#Titulo-Categoria");
let botonesAgregar = document.querySelectorAll(".producto-agregar");
const numerito = document.querySelector("#numerito");


botonesCategorias.forEach(boton => boton.addEventListener("click", () => {
    aside.classList.remove("aside-visible");
}))


function cargarProductos(productosElegidos) {

    contenedorProductos.innerHTML = "";

    productosElegidos.forEach(producto => {

        const div = document.createElement("div");
        div.classList.add("producto");
        div.innerHTML = 
        `
        <div class="producto_item">
        
            <div class="producto_banner">
                
                <a href="" class="producto_imagenes">
                
                <img src="${producto.imagen}" alt="${producto.titulo}" class="producto_img">
                
                </a>
        
                <div class="producto_acciones">
                    
                    <a href="#" class="boton_accion" aria-label="Detalle"><i class="fi fi-rs-eye"></i></a>
                    <a href="#" class="boton_accion" aria-label="Agregar a mis Favoritos"><i class="fi fi-rs-heart"></i></a>
                    <a href="#" class="boton_accion" aria-label="Compartir"><i class="fi fi-rs-shuffle"></i></a>
                
                </div>
            
            </div>
        
            <div class="producto_contenido">
        
                <h3 class="producto-catalogo">${producto.categoria.nombre}</h3>
        
                <h3 class="producto_titulo producto-titulo">${producto.titulo}</h3>
        
                <div class="producto_precio">
                
                    <span class="nuevo_precio">$${producto.nuevo_precio}</span>
                
                    <span class="antiguo_precio">${producto.antiguo_precio}</span>
            
                </div>
        
                <button class="boton_accion producto-agregar boton_carrito" id="${producto.id}" aria-label="Agregar al Carrito"><i class="fi fi-rs-shopping-bag-add"></i></button>
            
            </div> 
        
        </div>
        `
        ;
        ;

        contenedorProductos.append(div);
    })

    actualizarBotonesAgregar();
}


botonesCategorias.forEach(boton => {
    boton.addEventListener("click", (e) => {

        botonesCategorias.forEach(boton => boton.classList.remove("active"));
        e.currentTarget.classList.add("active");

        if (e.currentTarget.id != "todos") {
            const productoCategoria = productos.find(producto => producto.categoria.id === e.currentTarget.id);
            tituloPrincipal.innerText = productoCategoria.categoria.nombre;
            const productosBoton = productos.filter(producto => producto.categoria.id === e.currentTarget.id);
            cargarProductos(productosBoton);
        } else {
            tituloPrincipal.innerText = "Todos los productos";
            cargarProductos(productos);
        }

    })
});

function actualizarBotonesAgregar() {
    botonesAgregar = document.querySelectorAll(".producto-agregar");

    botonesAgregar.forEach(boton => {
        boton.addEventListener("click", agregarAlCarrito);
    });
}

let productosEnCarrito;

let productosEnCarritoLS = localStorage.getItem("productos-en-carrito");

if (productosEnCarritoLS) {
    productosEnCarrito = JSON.parse(productosEnCarritoLS);
    actualizarNumerito();
} else {
    productosEnCarrito = [];
}

function agregarAlCarrito(e) {


    const idBoton = e.currentTarget.id;
    const productoAgregado = productos.find(producto => producto.id === idBoton);

    if(productosEnCarrito.some(producto => producto.id === idBoton)) {
        const index = productosEnCarrito.findIndex(producto => producto.id === idBoton);
        productosEnCarrito[index].cantidad++;
    } else {
        productoAgregado.cantidad = 1;
        productosEnCarrito.push(productoAgregado);
    }

    actualizarNumerito();

    localStorage.setItem("productos-en-carrito", JSON.stringify(productosEnCarrito));
}

function actualizarNumerito() {
    let nuevoNumerito = productosEnCarrito.reduce((acc, producto) => acc + producto.cantidad, 0);
    numerito.innerText = nuevoNumerito;
}