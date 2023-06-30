/*Agregar*/

CALL AgregarProducto('Cielo 625ML', 1, 1, 2,'30','800','500', 1,'Hola');
CALL AgregarRegistro('Juan','Andres','Torreglosa','Restrepo','1','1060540961','2003-11-26','2');
CALL AgregarUsuario( 2, 3,'AndresT','Andres2003','juanAndres@gmail.com', 1234567890 ,0123456, NOW());
CALL AgregarCarrito ( 5, 5);
CALL AgregarFactura( 2, 1, 1, 8400, 1, 1596, 9996);

/*Editar*/
CALL EditarProducto(4, 'Brisa 260ML', 1, 1, 1, 700, 600, 1, 25, 'Bebida');
CALL EditarUsuario (1, 1, 'EstevanGO', 'Atom2005', 'torreglosa2005@gmail.com', '1234567890', '01234567', NOW());
CALL EditarRegistro (2, 'Juan','Andres','Torreglosa','Restrepo','2','1060540961','2004-11-24','2');
CALL EditarCarrito ( 3, 3, 50);
CALL EditarFactura (2, 2, 3, 1, 8400, 1, 1596, 9996);

/*Eliminar*/

CALL EliminarFactura (2);
CALL EliminarCarrito (4);
CALL EliminarProducto (4);
CALL EliminarUsuario (2);
CALL EliminarRegistro (2);

/*Mostrar*/
CALL Usuario();
CALL Producto();
CALL Catalogo();
CALL Subcatalogo();
CALL Marca();
CALL Carrito();
CALL Factura();

