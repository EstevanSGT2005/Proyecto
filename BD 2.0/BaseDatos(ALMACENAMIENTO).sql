/*Mostrar*/

DELIMITER //
CREATE PROCEDURE Usuario()
BEGIN
SELECT * FROM usuario;
END 
// DELIMITER ;

DELIMITER //
CREATE PROCEDURE Producto ()
BEGIN
SELECT * FROM producto;
END 
// DELIMITER ;

DELIMITER //
CREATE PROCEDURE Catalogo ()
BEGIN
SELECT * FROM catalogo;
END 
// DELIMITER ;

DELIMITER //
CREATE PROCEDURE Subcatalogo ()
BEGIN
SELECT * FROM subcatalogo;
END 
// DELIMITER ;

DELIMITER //
CREATE PROCEDURE Marca ()
BEGIN
SELECT * FROM Marca;
END 
// DELIMITER ;

DELIMITER //
CREATE PROCEDURE Carrito ()
BEGIN
SELECT * FROM Carrito;
END 
// DELIMITER ;

DELIMITER //
CREATE PROCEDURE Factura ()
BEGIN
SELECT * FROM factura;
END 
// DELIMITER ;

/*Agregar*/

DELIMITER //
CREATE PROCEDURE AgregarProducto( IN NombreProducto VARCHAR(30), IN Catalogo INT, IN Subcatalogo INT, IN Marca INT, IN CantidadDisponible DECIMAL(4), IN PrecioAntes DECIMAL(10), IN PrecioActual DECIMAL(10), IN PorcentajeDescuento INT, IN Descripcion TEXT )
BEGIN
    INSERT INTO Producto (NombreProducto, Catalogo, Subcatalogo, Marca, CantidadDisponible, PrecioAntes, PrecioActual, PorcentajeDescuento, Descripcion )
    VALUES ( NombreProducto, Catalogo, Subcatalogo, Marca, CantidadDisponible, PrecioAntes, PrecioActual, PorcentajeDescuento, Descripcion );
END //DELIMITER ;

DELIMITER //
CREATE PROCEDURE AgregarRegistro( IN PrimerNombre VARCHAR (20), IN SegundoNombre VARCHAR (20), IN PrimerApellido VARCHAR (20), IN SegundoApellido VARCHAR (20), IN TipoDocumento INT, IN NumeroDocumento INT, IN FechaNacimiento DATE, IN Genero INT)
BEGIN
	INSERT INTO registro ( PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, TipoDocumento, NumeroDocumento, FechaNacimiento, Genero) 
	VALUES( PrimerNombre,  SegundoNombre, PrimerApellido, SegundoApellido , TipoDocumento, NumeroDocumento, FechaNacimiento, Genero );
END 
//DELIMITER ;

DELIMITER //
CREATE PROCEDURE AgregarUsuario (IN Registro INT, IN Perfil INT, IN Usuario VARCHAR (20), IN Contraseña VARCHAR (20), IN CorreoElectronico VARCHAR (30), IN NumeroCelular DECIMAL(10), IN NumeroTelefonico DECIMAL(7), IN Fecha DATETIME)
BEGIN
	INSERT INTO usuario (Registro, Perfil, Usuario, Contraseña, CorreoElectronico, NumeroCelular, NumeroTelefonico, Fecha)
    VALUES (Registro, Perfil, Usuario, Contraseña, CorreoElectronico, NumeroCelular, NumeroTelefonico, NOW());
END 
//DELIMITER ;

DELIMITER //
CREATE PROCEDURE AgregarCarrito(IN Producto INT, IN Cantidad DECIMAL(3))
BEGIN
	INSERT INTO carrito (Producto, Cantidad)
    VALUES (Producto, Cantidad);
END 
//DELIMITER ;

DELIMITER //
CREATE PROCEDURE AgregarFactura(IN Usuario INT, IN Carrito INT, IN FormaPago INT, IN Subtotal DECIMAL(10), IN IVA INT, IN  ValorIVA DECIMAL(10), IN Total DECIMAL(10))
BEGIN
	INSERT INTO factura ( Usuario, Carrito, FormaPago, Subtotal, IVA, ValorIVA, Total)
    VALUES (Usuario, Carrito, FormaPago, Subtotal, IVA, ValorIVA, Total);
END 
//DELIMITER ;

/*Editar*/

DELIMITER //
CREATE PROCEDURE EditarRegistro ( IN p_idRegistro INT, IN p_PrimerNombre VARCHAR (20), IN p_SegundoNombre VARCHAR (20), IN p_PrimerApellido VARCHAR (20), IN p_SegundoApellido VARCHAR (20), IN p_TipoDocumento INT, IN p_NumeroDocumento INT, IN p_FechaNacimiento DATE, IN p_Genero INT) 
BEGIN
UPDATE registro SET PrimerNombre = p_PrimerNombre, SegundoNombre = p_SegundoNombre, PrimerApellido = p_PrimerApellido, SegundoApellido = p_SegundoApellido, TipoDocumento = p_TipoDocumento, NumeroDocumento = p_NumeroDocumento, FechaNacimiento = p_FechaNacimiento, Genero = p_Genero WHERE idRegistro = p_idRegistro;
END 
//DELIMITER ;

DELIMITER //
CREATE PROCEDURE EditarUsuario (IN p_idUsuario INT, IN P_Perfil INT, IN p_Usuario VARCHAR (20), IN p_Contraseña VARCHAR (20), IN p_CorreoElectronico VARCHAR (30), IN p_NumeroCelular DECIMAL(10), IN p_NumeroTelefonico DECIMAL(7), IN p_Fecha DATETIME) 
BEGIN
UPDATE usuario SET Perfil = p_Perfil, Usuario = p_Usuario, Contraseña = p_Contraseña, CorreoElectronico = p_CorreoElectronico, NumeroCelular = p_NumeroCelular, NumeroTelefonico = p_NumeroTelefonico, Fecha = p_Fecha WHERE idUsuario =  p_idUsuario;
END 
//DELIMITER ;

DELIMITER //
CREATE PROCEDURE EditarProducto (IN p_idProducto INT, IN p_NombreProducto VARCHAR(30), IN p_Catalogo INT, IN p_Subcatalogo INT, IN p_Marca INT, IN p_PrecioAntes DECIMAL(10, 2), IN p_PrecioActual DECIMAL(10), IN p_PorcentajeDescuento INT, IN p_CantidadDisponible DECIMAL(4), IN p_Descripcion TEXT)

BEGIN
  UPDATE producto
  SET NombreProducto = p_NombreProducto, Catalogo = p_Catalogo, Subcatalogo = p_Subcatalogo, Marca = p_Marca, PrecioAntes = p_PrecioAntes, PrecioActual = p_PrecioActual, PorcentajeDescuento = p_PorcentajeDescuento, CantidadDisponible = p_CantidadDisponible, Descripcion = p_Descripcion
  WHERE idProducto = p_idProducto;
END //
DELIMITER ;


DELIMITER //
CREATE PROCEDURE EditarCarrito(IN  p_idCarrito INT, IN p_Producto INT, IN p_Cantidad DECIMAL(3))
BEGIN
UPDATE carrito SET Producto = p_Producto, Cantidad = p_Cantidad WHERE idCarrito = p_idCarrito;
END 
//DELIMITER ;

DELIMITER //
CREATE PROCEDURE EditarFactura( IN p_idFactura INT, IN p_Usuario INT, IN p_Carrito INT, IN p_FormaPago INT, IN p_Subtotal DECIMAL(10), IN p_IVA INT, IN p_ValorIVA DECIMAL(10), IN p_Total DECIMAL(10))
BEGIN
  UPDATE factura SET Usuario = p_Usuario, Carrito = p_Carrito, FormaPago = p_FormaPago, Subtotal = p_Subtotal, IVA = p_IVA, ValorIVA = p_ValorIVA, Total = p_Total WHERE idFactura = p_idFactura;
END 
//DELIMITER ;

/*Eliminar*/

DELIMITER //
CREATE PROCEDURE EliminarProducto (IN Borrar INT)
BEGIN 
DELETE FROM producto WHERE idProducto = Borrar;
END 
//DELIMITER ;

DELIMITER //
CREATE PROCEDURE EliminarUsuario (IN Borrar INT)
BEGIN 
DELETE FROM usuario WHERE idUsuario = Borrar;
END 
//DELIMITER ;

DELIMITER //
CREATE PROCEDURE EliminarRegistro (IN Borrar INT)
BEGIN 
DELETE FROM registro WHERE idRegistro = Borrar;
END 
//DELIMITER ;

DELIMITER //
CREATE PROCEDURE EliminarCarrito (IN Borrar INT)
BEGIN 
DELETE FROM carrito WHERE idCarrito = Borrar;
END 
//DELIMITER ;

DELIMITER //
CREATE PROCEDURE EliminarFactura (IN Borrar INT)
BEGIN 
DELETE FROM factura WHERE idFactura = Borrar;
END 
//DELIMITER ;
