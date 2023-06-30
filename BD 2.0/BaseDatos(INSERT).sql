USE basedatos;

/*Usuarios*/

/*Tipo Documento*/
INSERT INTO TipoDocumento (TipoDocumento) VALUES ('CC');
INSERT INTO TipoDocumento (TipoDocumento) VALUES ('TI');
INSERT INTO TipoDocumento (TipoDocumento) VALUES ('CE');
INSERT INTO TipoDocumento (TipoDocumento) VALUES ('CI');
INSERT INTO TipoDocumento (TipoDocumento) VALUES ('DNI');

/*Genero*/

INSERT INTO Genero (Genero) VALUES ('Femenino');
INSERT INTO Genero (Genero) VALUES ('Masculino');
INSERT INTO Genero (Genero) VALUES ('No Binario');

/*Perfil*/

INSERT INTO Perfil (Perfil) VALUES ('Administrador');
INSERT INTO Perfil (Perfil) VALUES ('Empleado');
INSERT INTO Perfil (Perfil) VALUES ('Cliente');

INSERT INTO `registro`(`PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `TipoDocumento`, `NumeroDocumento`, `FechaNacimiento`, `Genero`) 
VALUES ('Estevan','','Gómez','Torreglosa','2','1031540924','2005-10-02','2');

INSERT INTO `usuario`(`idUsuario`, `Registro`, `Perfil`, `Usuario`, `Contraseña`, `CorreoElectronico`, `NumeroCelular`, `NumeroTelefonico`)
 VALUES ('1','1','1','EstevanG','Atom2005','torreglosa2005@gmail.com','1023456789','1234567');

/*Producto*/

/*Porcentaje Descuento*/

INSERT INTO PorcentajeDescuento (PorcentajeDescuento) VALUES ('0');
INSERT INTO PorcentajeDescuento (PorcentajeDescuento) VALUES ('5');
INSERT INTO PorcentajeDescuento (PorcentajeDescuento) VALUES ('10');
INSERT INTO PorcentajeDescuento (PorcentajeDescuento) VALUES ('15');
INSERT INTO PorcentajeDescuento (PorcentajeDescuento) VALUES ('20');
INSERT INTO PorcentajeDescuento (PorcentajeDescuento) VALUES ('25');
INSERT INTO PorcentajeDescuento (PorcentajeDescuento) VALUES ('30');

/*Catalogo*/

INSERT INTO Catalogo (Catalogo) VALUES ('Bebidas');
INSERT INTO Catalogo (Catalogo) VALUES ('Cereales');
INSERT INTO Catalogo (Catalogo) VALUES ('ConfitesyDulces');
INSERT INTO Catalogo (Catalogo) VALUES ('Electrodomesticos');
INSERT INTO Catalogo (Catalogo) VALUES ('Licores');

/*Subcatalogo*/

/*Subcatalogo (Bebidas)*/

INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Agua','1');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Energizante','1');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Gaseosa','1');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Jugo','1');

/*Subcategoria (Cereales)*/

INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Arroz','2');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Barras','2');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Cerales','2');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Gallestas','2');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Panes','2');

/*Subcategoria (Confites y Dulces)*/

INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Arequipe','3');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Bombunes','3');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Chicles','3');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Chocolatinas','3');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Gomitas','3');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Masmelos','3');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Panelistas','3');

/*Subcatalogo (Electrodomestico)*/

INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Audifonos','4');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Bafles','4');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Cargadores','4');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Celulares','4');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Computadores','4');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Mouses','4');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Teclado','4');

/*Subcategoria (Licores)*/

INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Cerveza','5');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Ron','5');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Tequila','5');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Vino','5');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Vodka','5');
INSERT INTO Subcatalogo (Subcatalogo, Catalogo) VALUES ('Whisky','5');

/*Marca*/

/*Marca (Agua)*/

INSERT INTO Marca (Marca, Subcatalogo) VALUES ('BRISA','1');
INSERT INTO Marca (Marca, Subcatalogo) VALUES ('CIELO','1');
INSERT INTO Marca (Marca, Subcatalogo) VALUES ('CRISTAL','1');
INSERT INTO Marca (Marca, Subcatalogo) VALUES ('H2O','1');
INSERT INTO Marca (Marca, Subcatalogo) VALUES ('MINERAL','1');
INSERT INTO Marca (Marca, Subcatalogo) VALUES ('OMI','1');
INSERT INTO Marca (Marca, Subcatalogo) VALUES ('POMBA','1');
INSERT INTO Marca (Marca, Subcatalogo) VALUES ('POSTOBON ACQUA','1');
INSERT INTO Marca (Marca, Subcatalogo) VALUES ('TONICA','1');
INSERT INTO Marca (Marca, Subcatalogo) VALUES ('ZEN','1');

/*Producto*/

INSERT INTO Producto (NombreProducto, Catalogo, Subcatalogo, Marca, CantidadDisponible, PrecioAntes, PrecioActual, PorcentajeDescuento,  Descripcion) 
VALUES ('Brisa 280ML', 1, 1, 1, 25, 500, 700, 1, '');
INSERT INTO Producto (NombreProducto, Catalogo, Subcatalogo, Marca, CantidadDisponible, PrecioAntes, PrecioActual, PorcentajeDescuento,  Descripcion) 
VALUES ('Brisa Lima Limon 280ML', 1, 1, 1, 25, 700, 900, 1, '');
INSERT INTO Producto (NombreProducto, Catalogo, Subcatalogo, Marca, CantidadDisponible, PrecioAntes, PrecioActual, PorcentajeDescuento,  Descripcion) 
VALUES ('Brisa Manzana 280ML', 1, 1, 1, 25, 700, 900, 1, '');
INSERT INTO Producto (NombreProducto, Catalogo, Subcatalogo, Marca, CantidadDisponible, PrecioAntes, PrecioActual, PorcentajeDescuento,  Descripcion) 
VALUES ('Brisa 600ML', 1, 1, 1, 25, 1000, 1200, 1, '');

/*Forma de Pago*/

INSERT INTO FormaPago (FormaPago) VALUES ('Credito');
INSERT INTO FormaPago (FormaPago) VALUES ('Efectivo');
INSERT INTO FormaPago (FormaPago) VALUES ('Transferenecia');

/*IVA*/

INSERT INTO IVA (IVA) VALUES (19);

/*Carrito*/

INSERT INTO Carrito (Producto, Cantidad) VALUES ( 1, 5);
INSERT INTO Carrito (Producto, Cantidad) VALUES ( 2, 15);
INSERT INTO Carrito (Producto, Cantidad) VALUES ( 3, 10);


/*Factura*/

INSERT INTO Factura (Usuario, Carrito, FormaPago, Subtotal, IVA, ValorIVA, Total) VALUES (1, 2, 3, 3500, 1, 665, 4165);