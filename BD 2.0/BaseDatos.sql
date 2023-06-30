drop database basedatos;
CREATE DATABASE BaseDatos;
USE BaseDatos;

/*Usuario*/
CREATE TABLE TipoDocumento
(
    idTipoDocumento INT PRIMARY KEY AUTO_INCREMENT,
	TipoDocumento VARCHAR (20) NOT NULL
);

CREATE TABLE Genero
(
	idGenero INT PRIMARY KEY AUTO_INCREMENT,
    Genero VARCHAR (20) NOT NULL
);

CREATE TABLE Registro
(
    idRegistro INT PRIMARY KEY AUTO_INCREMENT,
    PrimerNombre VARCHAR (20) NOT NULL,
    SegundoNombre VARCHAR (20),
    PrimerApellido VARCHAR (20) NOT NULL,
    SegundoApellido VARCHAR (20) NOT NULL,
    TipoDocumento INT NOT NULL,
    NumeroDocumento INT NOT NULL,
    FechaNacimiento DATE NOT NULL,
    Genero INT NOT NULL,
    FOREIGN KEY (TipoDocumento) REFERENCES TipoDocumento (idTipoDocumento),
    FOREIGN KEY (Genero) REFERENCES Genero (idGenero)

);

CREATE TABLE Perfil
(
    idPerfil INT PRIMARY KEY AUTO_INCREMENT,
    Perfil VARCHAR (20) NOT NULL
);

CREATE TABLE Usuario
(
    idUsuario INT PRIMARY KEY AUTO_INCREMENT,
    Registro INT,
    Perfil INT,
    Usuario VARCHAR (20) NOT NULL,
    Contraseña VARCHAR (20) NOT NULL,
	CorreoElectronico VARCHAR (30) NOT NULL,
	NumeroCelular DECIMAL(10) NOT NULL,
    NumeroTelefonico DECIMAL(7) NOT NULL,
    Fecha DATETIME, 
    FOREIGN KEY (Perfil) REFERENCES Perfil (idPerfil),
    FOREIGN KEY (Registro) REFERENCES Registro (idRegistro)
);

/*Producto*/

CREATE TABLE Catalogo (
	idCatalogo INT PRIMARY KEY AUTO_INCREMENT,
    Catalogo VARCHAR(20) NOT NULL
);

CREATE TABLE Subcatalogo (
	idSubcatalogo INT PRIMARY KEY AUTO_INCREMENT,
    Catalogo INT,
    Subcatalogo VARCHAR(20) NOT NULL,
	FOREIGN KEY (Catalogo) REFERENCES Catalogo(idCatalogo)
);

CREATE TABLE Marca (
	idMarca INT PRIMARY KEY AUTO_INCREMENT,
    Subcatalogo INT,
    Marca VARCHAR(20) NOT NULL,
	FOREIGN KEY (Subcatalogo) REFERENCES Subcatalogo(idSubcatalogo)
);

CREATE TABLE PorcentajeDescuento
(
	idPorcentajeDescuento INT PRIMARY KEY AUTO_INCREMENT,
    PorcentajeDescuento DECIMAL(2) NOT NULL
);


CREATE TABLE Producto (
	idProducto INT PRIMARY KEY AUTO_INCREMENT,
    NombreProducto VARCHAR(30) NOT NULL,
    Catalogo INT NOT NULL,
    Subcatalogo INT NOT NULL,
    Marca INT NOT NULL,
    PrecioAntes DECIMAL(10) NOT NULL,
    PrecioActual DECIMAL(10) NOT NULL,
    PorcentajeDescuento INT,
    CantidadDisponible DECIMAL(4) NOT NULL,
    Descripcion TEXT,
    FOREIGN KEY (Marca) REFERENCES Marca(idMarca),
    FOREIGN KEY (Subcatalogo) REFERENCES Subcatalogo(idSubcatalogo),
    FOREIGN KEY (Catalogo) REFERENCES Catalogo(idCatalogo),
    FOREIGN KEY (PorcentajeDescuento) REFERENCES PorcentajeDescuento (idPorcentajeDescuento)
);

CREATE TABLE Carrito (
	idCarrito INT PRIMARY KEY AUTO_INCREMENT,
    Producto INT NOT NULL,
    Cantidad DECIMAL(3) NOT NULL,
    FOREIGN KEY (Producto) REFERENCES Producto(idProducto)
);

CREATE TABLE FormaPago (
	idFormaPago INT PRIMARY KEY AUTO_INCREMENT,
    FormaPago VARCHAR(20) NOT NULL
);

CREATE TABLE IVA (
	idIVA INT PRIMARY KEY AUTO_INCREMENT,
    IVA DECIMAL(2)
);

CREATE TABLE Factura (
	idFactura INT PRIMARY KEY AUTO_INCREMENT,
    Usuario INT NOT NULL,
    Carrito INT NOT NULL,
	FormaPago INT NOT NULL,
    Subtotal DECIMAL(10) NOT NULL,
    IVA INT NOT NULL,
    ValorIVA DECIMAL(10) NOT NULL,
    Total DECIMAL(10) NOT NULL,
    FOREIGN KEY (Usuario) REFERENCES Usuario(idUsuario),
    FOREIGN KEY (FormaPago) REFERENCES FormaPago(idFormaPago),
    FOREIGN KEY (Carrito) REFERENCES Carrito(idCarrito),
    FOREIGN KEY (IVA) REFERENCES IVA(idIVA)
);