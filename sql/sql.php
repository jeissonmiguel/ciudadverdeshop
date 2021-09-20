<?php 




// borrar base de datos
drop database registroUsuario;

// borrar base de datos
drop database ciudadverdeshop;

// borrar datos base de datos
DELETE FROM registro;

//crear base datos
	create database ciudadverdeshop;

	drop table registrousuario;
	drop table usuariosclave;
	drop table intereses;
	drop table celular;
	drop table email;
	drop table redsocial;
	drop table paginaweb;
	drop table direccion;
	drop table fecha;
	drop table descripcion;

	drop table registrotienda;
	drop table registroempresa;
	drop table registroproductos;
	drop table calificacion;
	drop table usuariopremium;
	
	drop table insertimglogo;
	drop table insertimgproducto;

	drop table link;
	drop table registroproductoindividual;
	drop table usuariopremium;
	
    ALTER TABLE nombre_tabla ADD nombre_columna;
	ALTER TABLE nombre_tabla DROP nombre_columna;
	DELETE FROM Detalles WHERE (ID_Activo = 10);


	   CREATE TABLE registrousuario (
		idRegistro INT auto_increment,
		numRegistroUsuario VARCHAR(12) NOT NULL,
		tabla VARCHAR(30) NOT NULL,
		tipo VARCHAR(20) NOT NULL,
		documento VARCHAR(12) NOT NULL, 
		nombre1 VARCHAR(100) NOT NULL,
		nombre2 VARCHAR(100) NOT NULL,
		apellido1 VARCHAR(100) NOT NULL,
		apellido2 VARCHAR(100) NOT NULL,
		genero VARCHAR(15) NOT NULL, 
		primary key(documento),
		UNIQUE KEY(idregistro),
		UNIQUE KEY(numRegistroUsuario),
		UNIQUE KEY(documento));


	  	CREATE TABLE usuariosclave (
		numRegistroGlobal VARCHAR(20) NOT NULL,
		usuario VARCHAR(12) NOT NULL,	
		tabla VARCHAR(30) NOT NULL,	
		contrasena VARCHAR(12) NOT NULL,
		confirmar1 VARCHAR(12) NOT NULL,
		primary key(numRegistroGlobal),
		UNIQUE KEY(numRegistroGlobal));


	   
				
			 
	    CREATE TABLE registrotienda( 
		numRegistroTienda VARCHAR(12) NOT NULL,
		usuario VARCHAR(12) NOT NULL,        
		tabla VARCHAR(30) NOT NULL, 
		rut VARCHAR(30) NOT NULL,
		numContrato1 VARCHAR(12) NOT NULL,        
		nombreTienda VARCHAR(100) NOT NULL,		
		seccion VARCHAR(40) NOT NULL,
		adicional VARCHAR(40) NOT NULL,	
		primary key(numRegistroTienda),	
		UNIQUE KEY(numRegistroTienda));


		CREATE TABLE registroempresa( 
		numRegistroEmpresa VARCHAR(12) NOT NULL,
		usuario VARCHAR(12) NOT NULL,        
		tabla VARCHAR(30) NOT NULL, 
		nit VARCHAR(11) NOT NULL,
		numContrato2 VARCHAR(12) NOT NULL,        
		nombreEmpresa VARCHAR(100) NOT NULL,	
		seccion VARCHAR(40) NOT NULL,
		adicional VARCHAR(40) NOT NULL,		
		primary key(numRegistroEmpresa),	
		UNIQUE KEY(numRegistroEmpresa));


		CREATE TABLE registroproductoindividual( 
		numRegistroProductoIndividual VARCHAR(12) NOT NULL,
		usuario VARCHAR(12) NOT NULL,        
		tabla VARCHAR(30) NOT NULL, 
		cedula VARCHAR(30) NOT NULL,
		numContrato3 VARCHAR(12) NOT NULL,        
		producto VARCHAR(100) NOT NULL,						
		valor VARCHAR(20) NOT NULL,			
		seccion VARCHAR(40) NOT NULL,
		adicional VARCHAR(40) NOT NULL,	
		primary key(numRegistroProductoIndividual),	
		UNIQUE KEY(numRegistroProductoIndividual));



	    CREATE TABLE descripcion( 
		numRegistroGlobal VARCHAR(12) NOT NULL,
		usuario VARCHAR(12) NOT NULL,        
		tabla VARCHAR(30) NOT NULL,	
		descripcion VARCHAR(500) NOT NULL,	
		primary key(numRegistroGlobal),	
		UNIQUE KEY(numRegistroGlobal));



		CREATE TABLE registroproductos(
		idRegistro INT auto_increment,
		numRegistroGlobal VARCHAR(12) NOT NULL,
		numRegistroProducto VARCHAR(12) NOT NULL,	
		usuario VARCHAR(20) NOT NULL,	
		producto VARCHAR(50) NOT NULL,
		descripcion VARCHAR(50) NOT NULL,
		embalaje VARCHAR(10) NOT NULL,
		cantidad VARCHAR(6) NOT NULL,
		valor VARCHAR(20) NOT NULL,
		iva VARCHAR(12) NOT NULL, 
		tiva VARCHAR(20) NOT NULL,
		descuento VARCHAR(20) NOT NULL,
		total VARCHAR(20) NOT NULL,
		UNIQUE KEY(idregistro),
		primary key(numRegistroProducto),	
		UNIQUE KEY(numRegistroProducto));





		CREATE TABLE intereses (
		usuario VARCHAR(20) NOT NULL,	
		interes1 VARCHAR(20) NULL,
		interes2 VARCHAR(20) NULL,
		interes3 VARCHAR(20) NULL,
		interes4 VARCHAR(20) NULL,
		interes5 VARCHAR(20) NULL,
		interes6 VARCHAR(20) NULL,
		interes7 VARCHAR(20) NULL,
		interes8 VARCHAR(20) NULL,
		interes9 VARCHAR(20) NULL,
		interes10 VARCHAR(20) NULL,
		interes11 VARCHAR(20) NULL,
		interes12 VARCHAR(20) NULL,
		interes13 VARCHAR(20) NULL,
		interes14 VARCHAR(20) NULL,
		interes15 VARCHAR(20) NULL,
		interes16 VARCHAR(20) NULL,
		interes17 VARCHAR(20) NULL,
		interes18 VARCHAR(20) NULL,
		interes19 VARCHAR(20) NULL,
		interes20 VARCHAR(20) NULL,
		primary key(usuario),
		UNIQUE KEY(usuario));


		CREATE TABLE celular (
		numRegistroGlobal VARCHAR(12) NOT NULL,
		usuario VARCHAR(20) NOT NULL,
		tabla VARCHAR(30) NOT NULL,	 
		celular VARCHAR(10) NOT NULL,
		telefono VARCHAR(10) NOT NULL,
		primary key(numRegistroGlobal),
		UNIQUE KEY(numRegistroGlobal));
		



		CREATE TABLE email (
		numRegistroGlobal VARCHAR(12) NOT NULL,
		usuario VARCHAR(20) NOT NULL, 
		tabla VARCHAR(30) NOT NULL,
		email VARCHAR(320) NOT NULL,
		primary key(numRegistroGlobal),
		UNIQUE KEY(numRegistroGlobal));


		CREATE TABLE redsocial (
		numRegistroGlobal VARCHAR(12) NOT NULL,
		usuario VARCHAR(20) NOT NULL, 
		tabla VARCHAR(30) NOT NULL,
		redsocial VARCHAR(200) NOT NULL,
		primary key(numRegistroGlobal),
		UNIQUE KEY(numRegistroGlobal));

		CREATE TABLE paginaweb (
		numRegistroGlobal VARCHAR(12) NOT NULL,
		usuario VARCHAR(20) NOT NULL, 
		tabla VARCHAR(30) NOT NULL,
		paginaweb VARCHAR(2083) NOT NULL,
		primary key(numRegistroGlobal),
		UNIQUE KEY(numRegistroGlobal));

	   
	    CREATE TABLE direccion (
		numRegistroGlobal VARCHAR(12) NOT NULL,
		usuario VARCHAR(20) NOT NULL, 
		tabla VARCHAR(30) NOT NULL,
		ciudad VARCHAR(100) NOT NULL,
		barrio VARCHAR(100) NOT NULL,
		direccion VARCHAR(150) NOT NULL,
		coordenadas VARCHAR(1000) NOT NULL,
		mostrarubicacion VARCHAR(5) NOT NULL,
		domicilios VARCHAR(5) NOT NULL,
		primary key(numRegistroGlobal),
		UNIQUE KEY(numRegistroGlobal));


		CREATE TABLE fecha( 
		numRegistroGlobal VARCHAR(12) NOT NULL,
		usuario VARCHAR(20) NOT NULL,
		tabla VARCHAR(30) NOT NULL,	
		fechaDeRegistro DATE,
		hora TIME,
		fecha VARCHAR(50) NOT NULL,
		primary key(numRegistroGlobal),
		UNIQUE KEY(numRegistroGlobal));		
		

		CREATE TABLE insertimglogo (
		numRegistroGlobal VARCHAR(12) NOT NULL,
		usuario VARCHAR(20) NOT NULL,
		tabla VARCHAR(30) NOT NULL,		
		nombrecomercio VARCHAR(100) NOT NULL,
		name VARCHAR(100) NOT NULL,
		tmp BLOB,
		size VARCHAR(10) NOT NULL,
		ruta VARCHAR(250) NOT NULL,
		creado VARCHAR(20) NOT NULL,
		PRIMARY KEY (numRegistroGlobal));		


	    CREATE TABLE IF NOT EXISTS insertimgproducto (
		numRegistroGlobal VARCHAR(12) NOT NULL,
		numRegistroProducto VARCHAR(12) NOT NULL,
		producto VARCHAR(100) NOT NULL,
		usuario VARCHAR(20) NOT NULL,
		tabla VARCHAR(30) NOT NULL,		
		nombrecomercio VARCHAR(100) NOT NULL,
		name VARCHAR(100) NOT NULL,
		tmp BLOB,
		size VARCHAR(25) NOT NULL,
		ruta VARCHAR(250) NOT NULL,
		creado VARCHAR(20) NOT NULL,
		PRIMARY KEY (numRegistroProducto));


		CREATE TABLE link (
		numRegistroGlobal VARCHAR(12) NOT NULL,
		usuario VARCHAR(20) NOT NULL, 
		tabla VARCHAR(30) NOT NULL,
		link VARCHAR(2083) NOT NULL,
		primary key(numRegistroGlobal),
		UNIQUE KEY(numRegistroGlobal));


		CREATE TABLE usuariopremium (
		numRegistroGlobal VARCHAR(20) NOT NULL,
		usuario VARCHAR(20) NOT NULL,
		numRegistroPago VARCHAR(20) NOT NULL,	
		tipdepaquete VARCHAR(20) NOT NULL,
		mediodepago VARCHAR(30) NOT NULL,
		nombreEntidad VARCHAR(100) NOT NULL,
		numRegistroTransaccion VARCHAR(20) NOT NULL,	
		valor VARCHAR(20) NOT NULL,
		fechainicio VARCHAR(50) NOT NULL,
		fechafin VARCHAR(50) NOT NULL,
		estado VARCHAR(20) NOT NULL,
		primary key(numRegistroPago),
		UNIQUE KEY(numRegistroPago));


		CREATE TABLE calificacion (
		numRegistroCalificacion VARCHAR(20) NOT NULL,
		numRegistroGlobal VARCHAR(20) NOT NULL,
		usuario VARCHAR(12) NOT NULL,
		pregunta1 VARCHAR(2) NOT NULL,
		pregunta2 VARCHAR(2) NOT NULL,
		pregunta3 VARCHAR(2) NOT NULL,	
		pregunta4 VARCHAR(2) NOT NULL,
		porcentaje VARCHAR(5) NOT NULL,
		comentario VARCHAR(206) NOT NULL,
		primary key(numRegistroCalificacion),
		UNIQUE KEY(numRegistroCalificacion));



	







?>
