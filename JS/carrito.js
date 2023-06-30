let productosEnCarrito = localStorage.getItem("productos-en-carrito");
productosEnCarrito = JSON.parse(productosEnCarrito) || [];

const contenedorCarritoVacio = document.querySelector("#carrito-vacio");
const contenedorCarritoProductos = document.querySelector("#carrito-productos");
const contenedorCarritoAcciones = document.querySelector("#carrito-acciones");
const contenedorCarritoComprado = document.querySelector("#carrito-comprado");
let botonesEliminar = [];
const botonVaciar = document.querySelector("#carrito-acciones-vaciar");
const contenedorTotal = document.querySelector("#total");
const botonComprar = document.querySelector("#carrito-acciones-comprar");

// Sumar Cantidad
function sumarCantidad(e) {
  const botonSumar = e.target;
  const divProducto = botonSumar.closest(".carrito-producto");
  const idProducto = divProducto.querySelector(".carrito-producto-eliminar").id;
  const producto = productosEnCarrito.find((p) => p.id === idProducto);

  producto.cantidad += 1;

  const inputCantidad = divProducto.querySelector(".carrito-item-cantidad");
  inputCantidad.value = producto.cantidad;

  const subtotal = divProducto.querySelector(".carrito-producto-subtotal p");
  subtotal.innerText = `$${producto.nuevo_precio * producto.cantidad}`;

  actualizarTotal();
  guardarCarritoEnLocalStorage();
}

// Restar Cantidad
function restarCantidad(e) {
  const botonRestar = e.target;
  const divProducto = botonRestar.closest(".carrito-producto");
  const idProducto = divProducto.querySelector(".carrito-producto-eliminar").id;
  const producto = productosEnCarrito.find((p) => p.id === idProducto);

  if (producto.cantidad > 1) {
    producto.cantidad -= 1;

    const inputCantidad = divProducto.querySelector(".carrito-item-cantidad");
    inputCantidad.value = producto.cantidad;

    const subtotal = divProducto.querySelector(".carrito-producto-subtotal p");
    subtotal.innerText = `$${producto.nuevo_precio * producto.cantidad}`;

    actualizarTotal();
    guardarCarritoEnLocalStorage();
  }
}

function cargarProductosCarrito() {
  if (productosEnCarrito.length > 0) {
    contenedorCarritoVacio.classList.add("disabled");
    contenedorCarritoProductos.classList.remove("disabled");
    contenedorCarritoAcciones.classList.remove("disabled");
    contenedorCarritoComprado.classList.add("disabled");

    contenedorCarritoProductos.innerHTML = "";

    productosEnCarrito.forEach((producto) => {
      const div = document.createElement("div");
      div.classList.add("carrito-producto");
      div.innerHTML = `
        <img class="carrito-producto-imagen" src="${producto.imagen}" alt="${producto.titulo}">
        <div class="carrito-producto-titulo">
          <span class="carrito-producto-titulo-etiqueta">Nombre del Producto</span>
          <h3>${producto.titulo}</h3>
        </div>
        <div class="carrito-producto-cantidad">
          <span>Cantidad</span>
          <div class="selector-cantidad">
            <i class="fa-solid fa-minus restar-cantidad"></i>
            <input type="text" value="${producto.cantidad}" class="carrito-item-cantidad" disabled>
            <i class="fa-solid fa-plus sumar-cantidad"></i>
          </div>
        </div>
        <div class="carrito-producto-precio">
          <span>Precio</span>
          <p>$${producto.nuevo_precio}</p>
        </div>
        <div class="carrito-producto-subtotal">
          <span>Subtotal</span>
          <p>$${producto.nuevo_precio * producto.cantidad}</p>
        </div>
        <button class="carrito-producto-eliminar" id="${producto.id}">
        <i class="fa-solid fa-trash-can"></i>
        </button>`;

      contenedorCarritoProductos.append(div);
    });

    actualizarBotonesEliminar();
    actualizarTotal();
  } else {
    contenedorCarritoVacio.classList.remove("disabled");
    contenedorCarritoProductos.classList.add("disabled");
    contenedorCarritoAcciones.classList.add("disabled");
    contenedorCarritoComprado.classList.add("disabled");
  }
}

function actualizarBotonesEliminar() {
  botonesEliminar = document.querySelectorAll(".carrito-producto-eliminar");

  botonesEliminar.forEach((boton) => {
    boton.addEventListener("click", eliminarDelCarrito);
  });

  const botonesSumar = document.querySelectorAll(".sumar-cantidad");
  const botonesRestar = document.querySelectorAll(".restar-cantidad");

  botonesSumar.forEach((boton) => {
    boton.addEventListener("click", sumarCantidad);
  });

  botonesRestar.forEach((boton) => {
    boton.addEventListener("click", restarCantidad);
  });
}

function eliminarDelCarrito(e) {
  const idBoton = e.currentTarget.id;
  const index = productosEnCarrito.findIndex((producto) => producto.id === idBoton);

  productosEnCarrito.splice(index, 1);
  cargarProductosCarrito();
  guardarCarritoEnLocalStorage();
}

function vaciarCarrito() {
  Swal.fire({
    title: '¿Estás seguro?',
    icon: 'question',
    html: `Se van a borrar ${productosEnCarrito.reduce((acc, producto) => acc + producto.cantidad, 0)} productos.`,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText: 'Sí',
    cancelButtonText: 'No'
  }).then((result) => {
    if (result.isConfirmed) {
      productosEnCarrito.length = 0;
      cargarProductosCarrito();
      guardarCarritoEnLocalStorage();
    }
  });
}

function actualizarTotal() {
  const totalCalculado = productosEnCarrito.reduce((acc, producto) => acc + (producto.nuevo_precio * producto.cantidad), 0);
  contenedorTotal.innerText = `$${totalCalculado}`;
}

function comprarCarrito() {
  productosEnCarrito.length = 0;
  cargarProductosCarrito();
  guardarCarritoEnLocalStorage();

  contenedorCarritoVacio.classList.add("disabled");
  contenedorCarritoProductos.classList.add("disabled");
  contenedorCarritoAcciones.classList.add("disabled");
  contenedorCarritoComprado.classList.remove("disabled");
}

function guardarCarritoEnLocalStorage() {
  localStorage.setItem("productos-en-carrito", JSON.stringify(productosEnCarrito));
}

cargarProductosCarrito();

botonVaciar.addEventListener("click", vaciarCarrito);
botonComprar.addEventListener("click", comprarCarrito);
