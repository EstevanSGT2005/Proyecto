USE basedatos; 

/*Usuario*/

SELECT Usuario.idUsuario, Registro.PrimerNombre, Registro.SegundoNombre, Registro.PrimerApellido, Registro.SegundoApellido, Registro.TipoDocumento, Registro.NumeroDocumento, Registro.FechaNacimiento, Registro.Genero, Usuario.CorreoElectronico, Usuario.NumeroTelefonico, Usuario.NumeroCelular, Perfil.Perfil, Usuario.Usuario, Usuario.Contraseña, Usuario.Fecha
FROM Usuario
JOIN Registro ON Usuario.Registro = Registro.idRegistro
JOIN Perfil ON Usuario.Perfil = Perfil.idPerfil;

/*Producto*/

SELECT Producto.idProducto, Producto.NombreProducto, Catalogo.Catalogo, Subcatalogo.Subcatalogo, Marca.Marca, Producto.PrecioAntes, Producto.PrecioActual, PorcentajeDescuento.PorcentajeDescuento, Producto.CantidadDisponible, Producto.Descripcion
FROM Producto
JOIN Catalogo ON Producto.Catalogo = Catalogo.idCatalogo
JOIN Subcatalogo ON Producto.Subcatalogo = Subcatalogo.idSubcatalogo
JOIN Marca ON Producto.Marca = Marca.idMarca
JOIN PorcentajeDescuento ON Producto.PorcentajeDescuento = PorcentajeDescuento.idPorcentajeDescuento;

/*Carrito*/

SELECT Carrito.idCarrito, Producto.idProducto, Producto.NombreProducto, Producto.Catalogo, Producto.Subcatalogo, Producto.Marca, Producto.PrecioActual, Producto.PorcentajeDescuento, Carrito.Cantidad
FROM Carrito
JOIN Producto ON Carrito.Producto = Producto.idProducto;

/*Factura*/

SELECT Factura.idFactura, Factura.Usuario, Factura.Carrito, Factura.FormaPago, Factura.Subtotal, Factura.IVA, Factura.ValorIVA, Factura.Total
FROM Factura
JOIN Carrito ON Factura.Carrito = Carrito.idCarrito;