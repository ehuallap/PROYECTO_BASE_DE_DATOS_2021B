DROP DATABASE IF EXISTS tienda_lavadoras;
CREATE DATABASE tienda_lavadoras;
USE tienda_lavadoras;

DROP TABLE IF EXISTS usuario;
CREATE TABLE IF NOT EXISTS usuario(
	DNI INTEGER NOT NULL,
	nombre VARCHAR(20),
	pri_apellido VARCHAR(20),
	seg_apellido VARCHAR(20),
    PRIMARY KEY(DNI)
);

DROP TABLE IF EXISTS empleado;
CREATE TABLE IF NOT EXISTS empleado(
	id_EMPLEADO INTEGER,
	turno VARCHAR(20),
	PRIMARY KEY(id_EMPLEADO)
);

DROP TABLE IF EXISTS cliente;
CREATE TABLE IF NOT EXISTS cliente(
	DNI INTEGER,
	telefono INTEGER,
	PRIMARY KEY(DNI)
);

DROP TABLE IF EXISTS venta;
CREATE TABLE IF NOT EXISTS venta(
	id_venta INTEGER AUTO_INCREMENT,
	DNI_CLIENTE INTEGER,
	id_EMPLEADO INTEGER,
	id_tienda INTEGER,
	fecha DATE,
	sum_total INTEGER,
	PRIMARY KEY(id_venta)
);
ALTER TABLE venta AUTO_INCREMENT = 1;

DROP TABLE IF EXISTS proveedor;
CREATE TABLE IF NOT EXISTS proveedor(
	id_proveedor INTEGER AUTO_INCREMENT,
	nombre VARCHAR(20),
	direccion VARCHAR(50),
    PRIMARY KEY(id_proveedor)
);
ALTER TABLE proveedor AUTO_INCREMENT = 1;

DROP TABLE IF EXISTS venta_lavad;
CREATE TABLE IF NOT EXISTS venta_lavad(
	id_venta INTEGER,
	id_lavadora INTEGER,
	cant_lav INTEGER,
	PRIMARY KEY(id_venta,id_lavadora)
);

DROP TABLE IF EXISTS tienda;
CREATE TABLE IF NOT EXISTS tienda(
	id_tienda INTEGER AUTO_INCREMENT,
	nombre VARCHAR(20),
	direccion VARCHAR(50),
    PRIMARY KEY(id_tienda)
);
ALTER TABLE tienda AUTO_INCREMENT = 1;

DROP TABLE IF EXISTS lavadora;
CREATE TABLE IF NOT EXISTS lavadora(
	id_lavadora INTEGER AUTO_INCREMENT,
	precio FLOAT,
	id_PROVEEDOR INTEGER,
    PRIMARY KEY(id_lavadora)
);
ALTER TABLE lavadora AUTO_INCREMENT = 1;

DROP TABLE IF EXISTS l_caract;
CREATE TABLE IF NOT EXISTS l_caract(
	id_l_caract INTEGER AUTO_INCREMENT,
	id_lavadora INTEGER,
	peso FLOAT,
	color VARCHAR(15),
	PRIMARY KEY(id_l_caract, id_lavadora)
);
ALTER TABLE l_caract AUTO_INCREMENT = 1;

DROP TABLE IF EXISTS stock;
CREATE TABLE IF NOT EXISTS stock(
	id_lavadora INTEGER,
	id_tienda INTEGER,
    cantidad INTEGER,
	PRIMARY KEY(id_lavadora, id_tienda)
);

ALTER TABLE stock ADD FOREIGN KEY (id_lavadora) REFERENCES lavadora (id_lavadora);
ALTER TABLE stock ADD FOREIGN KEY (id_tienda) REFERENCES tienda (id_tienda);
ALTER TABLE empleado ADD FOREIGN KEY (id_EMPLEADO) REFERENCES usuario (DNI);
ALTER TABLE cliente ADD FOREIGN KEY (DNI) REFERENCES usuario (DNI);
ALTER TABLE venta ADD FOREIGN KEY (DNI_CLIENTE) REFERENCES cliente (DNI);
ALTER TABLE venta ADD FOREIGN KEY (id_EMPLEADO) REFERENCES empleado (id_EMPLEADO);
ALTER TABLE venta ADD FOREIGN KEY (id_tienda) REFERENCES tienda (id_tienda);
ALTER TABLE venta_lavad ADD FOREIGN KEY (id_venta) REFERENCES venta (id_venta);
ALTER TABLE venta_lavad ADD FOREIGN KEY (id_lavadora) REFERENCES lavadora (id_lavadora);
ALTER TABLE lavadora ADD FOREIGN KEY (id_PROVEEDOR) REFERENCES proveedor (id_proveedor);
ALTER TABLE l_caract ADD FOREIGN KEY (id_lavadora) REFERENCES lavadora (id_lavadora);

INSERT INTO usuario VALUES (12345678, 'Diana', 'Vilca', 'Mendoza');
INSERT INTO usuario VALUES (87654321, 'Sosimo', 'Cózar', 'Navarro');
INSERT INTO usuario VALUES (17283456, 'Jessica', 'Tello', 'Aguilera');
INSERT INTO usuario VALUES (13467852, 'Guiomar', 'Diaz', 'Laguna');

INSERT INTO empleado VALUES (13467852, 'Mañana');

INSERT INTO cliente VALUES (12345678, 999888777);
INSERT INTO cliente VALUES (87654321, 919191919);
INSERT INTO cliente VALUES (17283456, 929292929);

INSERT INTO proveedor VALUES (11, 'MABE', 'Av. Peru- 123B');

INSERT INTO lavadora VALUES (111, 1200, 11);
INSERT INTO lavadora (precio, id_PROVEEDOR) VALUES (1250, 11);
INSERT INTO lavadora (precio, id_PROVEEDOR) VALUES (990, 11);
INSERT INTO lavadora (precio, id_PROVEEDOR) VALUES (1010, 11);
INSERT INTO lavadora (precio, id_PROVEEDOR) VALUES (1500, 11);

INSERT INTO l_caract VALUES (1111, 111, 17, 'plateado');
INSERT INTO l_caract (id_lavadora, peso, color) VALUES (112, 17, 'blanco');
INSERT INTO l_caract (id_lavadora, peso, color) VALUES (113, 15, 'plateado');
INSERT INTO l_caract (id_lavadora, peso, color) VALUES (114, 15, 'blanco');
INSERT INTO l_caract (id_lavadora, peso, color) VALUES (115, 19, 'blanco');

INSERT INTO tienda VALUES (11111, 'Chispley', 'Av. los aztecas - 187B');

INSERT INTO venta VALUES (1, 12345678, 13467852, 11111, '2021-01-25', 1250);
INSERT INTO venta (DNI_CLIENTE, id_EMPLEADO, id_tienda, fecha, sum_total)VALUES (12345678, 13467852, 11111, '2021-02-15', 3000);
INSERT INTO venta (DNI_CLIENTE, id_EMPLEADO, id_tienda, fecha, sum_total)VALUES (87654321, 13467852, 11111, '2021-09-03', 1010);
INSERT INTO venta (DNI_CLIENTE, id_EMPLEADO, id_tienda, fecha, sum_total)VALUES (87654321, 13467852, 11111, '2021-10-31', 1500);
INSERT INTO venta (DNI_CLIENTE, id_EMPLEADO, id_tienda, fecha, sum_total)VALUES (17283456, 13467852, 11111, '2021-11-18', 1980);
INSERT INTO venta (DNI_CLIENTE, id_EMPLEADO, id_tienda, fecha, sum_total)VALUES (17283456, 13467852, 11111, '2021-12-08', 1010);
INSERT INTO venta (DNI_CLIENTE, id_EMPLEADO, id_tienda, fecha, sum_total)VALUES (12345678, 13467852, 11111, '2021-12-19', 1200);
INSERT INTO venta (DNI_CLIENTE, id_EMPLEADO, id_tienda, fecha, sum_total)VALUES (87654321, 13467852, 11111, '2021-12-22', 3030);

INSERT INTO venta_lavad VALUES (1, 112, 1);
INSERT INTO venta_lavad VALUES (2, 115, 2);
INSERT INTO venta_lavad VALUES (3, 114, 1);
INSERT INTO venta_lavad VALUES (4, 115, 1);
INSERT INTO venta_lavad VALUES (5, 113, 2);
INSERT INTO venta_lavad VALUES (6, 114, 1);
INSERT INTO venta_lavad VALUES (7, 111, 1);
INSERT INTO venta_lavad VALUES (8, 114, 3);

INSERT INTO stock VALUES (111, 11111, 125);
INSERT INTO stock VALUES (112, 11111, 150);
INSERT INTO stock VALUES (113, 11111, 90);
INSERT INTO stock VALUES (114, 11111, 100);
INSERT INTO stock VALUES (115, 11111, 200);

DELIMITER //
DROP FUNCTION IF EXISTS extraer_id_proveedor//
CREATE FUNCTION extraer_id_proveedor(nombre_proveedor VARCHAR(20)) RETURNS INTEGER DETERMINISTIC
BEGIN
	DECLARE codigo INTEGER;
    SET codigo = (SELECT id_proveedor FROM proveedor WHERE nombre = nombre_proveedor);
    IF codigo IS NULL THEN
		RETURN -1;
	ELSE
		RETURN codigo;
	END IF;
END;
//
DELIMITER ;

DELIMITER //
DROP FUNCTION IF EXISTS extraer_id_tienda//
CREATE FUNCTION extraer_id_tienda(nombre_tienda VARCHAR(20)) RETURNS INTEGER DETERMINISTIC
BEGIN
	DECLARE codigo INTEGER;
    SET codigo = (SELECT id_tienda FROM tienda WHERE nombre = nombre_tienda);
    IF codigo IS NULL THEN
		RETURN -1;
	ELSE
		RETURN codigo;
	END IF;
END;
//
DELIMITER ;

DELIMITER //
DROP FUNCTION IF EXISTS extraer_dni_cliente//
CREATE FUNCTION extraer_dni_cliente(nombre_cliente VARCHAR(20), pri_apellido_cliente VARCHAR(20), seg_apellido_cliente VARCHAR(20)) RETURNS INTEGER DETERMINISTIC
BEGIN
	DECLARE codigo INTEGER;
    SET codigo = (SELECT DNI FROM usuario WHERE nombre = nombre_cliente AND pri_apellido = pri_apellido_cliente AND seg_apellido = seg_apellido_cliente);
    IF codigo IS NULL THEN
		RETURN -1;
	ELSE
		RETURN codigo;
	END IF;
END;
//
DELIMITER ;

DELIMITER //
DROP FUNCTION IF EXISTS extraer_codigo_empleado//
CREATE FUNCTION extraer_codigo_empleado(nombre_empleado VARCHAR(20), pri_apellido_empleado VARCHAR(20), seg_apellido_empleado VARCHAR(20)) RETURNS INTEGER DETERMINISTIC
BEGIN
	DECLARE codigo INTEGER;
    SET codigo = (SELECT DNI FROM usuario WHERE nombre = nombre_empleado AND pri_apellido = pri_apellido_empleado AND seg_apellido = seg_apellido_empleado);
    IF codigo IS NULL THEN
		RETURN -1;
	ELSE
		RETURN codigo;
	END IF;
END;
//
DELIMITER ;

DELIMITER //
DROP PROCEDURE IF EXISTS insert_lavadora//
CREATE PROCEDURE insert_lavadora(IN precio_lavadora INTEGER, IN nombre_proveedor VARCHAR(20), IN peso_lavadora FLOAT, IN color_lavadora VARCHAR(15), IN nombre_tienda VARCHAR(20), IN stock_lavadora INTEGER)
BEGIN
	DECLARE last_id_lavadora INTEGER;
    DECLARE id_proveedor INTEGER;
    DECLARE id_tienda INTEGER;
	START TRANSACTION;
		SET id_proveedor = (SELECT(extraer_id_proveedor(nombre_proveedor)));
        SET id_tienda = (SELECT(extraer_id_tienda(nombre_tienda)));
        IF id_proveedor = -1 AND id_tienda = -1 THEN
			SIGNAL SQLSTATE '45000'
			SET MESSAGE_TEXT = 'Ni Proveedor ni Tienda fueron encontrado';
            ROLLBACK;
		END IF;
        IF id_proveedor = -1 OR id_tienda = -1 THEN
            IF id_proveedor = -1 THEN
				SIGNAL SQLSTATE '45000'
				SET MESSAGE_TEXT = 'Proveedor no encontrado';
			END IF;
            IF id_tienda = -1 THEN
				SIGNAL SQLSTATE '45000'
				SET MESSAGE_TEXT = 'Tienda no encontrada';
			END IF;
			ROLLBACK;
        END IF;
        
		INSERT INTO lavadora (precio, id_proveedor) VALUES
			(precio_lavadora, id_proveedor);
		
		SET last_id_lavadora = (SELECT MAX(id_lavadora) FROM lavadora);
        
		INSERT INTO l_caract(id_lavadora, peso, color) VALUES
			(last_id_lavadora, peso_lavadora, color_lavadora);
		INSERT INTO stock VALUES
			(last_id_lavadora, id_tienda, stock_lavadora);
	COMMIT;
END;
//
DELIMITER ;

DELIMITER //
DROP PROCEDURE IF EXISTS insert_venta//
CREATE PROCEDURE insert_venta(IN nombre_cliente VARCHAR(20), IN pri_apellido_cliente VARCHAR(20), IN seg_apellido_cliente VARCHAR(20),
								IN nombre_empleado VARCHAR(20), IN pri_apellido_empleado VARCHAR(20), IN seg_apellido_empleado VARCHAR(20),
                                IN fecha_venta DATE, IN nombre_tienda_venta VARCHAR(20), IN codigo_lavadora VARCHAR(20), IN cantidad_lavadora INTEGER)
BEGIN
	DECLARE dni_cliente INTEGER;
    DECLARE codigo_empleado INTEGER;
    DECLARE id_tienda INTEGER;
    DECLARE last_id_venta INTEGER;
    DECLARE suma_total FLOAT;
    SET suma_total = ((SELECT precio FROM lavadora WHERE id_lavadora = codigo_lavadora) * cantidad_lavadora);
	START TRANSACTION;
		SET dni_cliente = (SELECT(extraer_dni_cliente(nombre_cliente, pri_apellido_cliente, seg_apellido_cliente)));
        SET codigo_empleado = (SELECT(extraer_codigo_empleado(nombre_empleado, pri_apellido_empleado, seg_apellido_empleado)));
        SET id_tienda = (SELECT(extraer_id_tienda(nombre_tienda_venta)));
        
        IF dni_cliente = -1 AND codigo_empleado = -1 THEN
			SIGNAL SQLSTATE '45000'
			SET MESSAGE_TEXT = 'Ni Cliente ni Empleado encontrado';
            ROLLBACK;
		END IF;
        IF dni_cliente = -1 OR codigo_empleado = -1 THEN
            IF dni_cliente = -1 THEN
				SIGNAL SQLSTATE '45000'
				SET MESSAGE_TEXT = 'Cliente no encontrado';
			END IF;
            IF codigo_empleado = -1 THEN
				SIGNAL SQLSTATE '45000'
				SET MESSAGE_TEXT = 'Empleado no encontrado';
			END IF;
			ROLLBACK;
        END IF;
        
		INSERT INTO venta (DNI_CLIENTE, id_empleado, id_tienda, fecha, sum_total) VALUES
			(dni_cliente, codigo_empleado, id_tienda, fecha_venta, suma_total);
        SET last_id_venta = (SELECT MAX(id_venta) FROM venta);
        
		INSERT INTO venta_lavad VALUES
			(last_id_venta, codigo_lavadora, cantidad_lavadora);
	COMMIT;
END;
//
DELIMITER ;

DELIMITER //
DROP PROCEDURE IF EXISTS insert_cliente//
CREATE PROCEDURE insert_cliente(IN dni_cliente INTEGER, IN nombre_cliente VARCHAR(20), IN pri_apellido_cliente VARCHAR(20), IN seg_apellido_cliente VARCHAR(20), IN telefono_cliente INTEGER)
BEGIN    
	START TRANSACTION;        
		INSERT INTO usuario VALUES
			(dni_cliente, nombre_cliente, pri_apellido_cliente, seg_apellido_cliente);
        
		INSERT INTO cliente VALUES
			(dni_cliente, telefono_cliente);
	COMMIT;
END;
//
DELIMITER ;

DELIMITER //
DROP PROCEDURE IF EXISTS insert_empleado//
CREATE PROCEDURE insert_empleado(IN dni_empleado INTEGER, IN nombre_empleado VARCHAR(20), IN pri_apellido_empleado VARCHAR(20), IN seg_apellido_empleado VARCHAR(20), IN turno_empleado VARCHAR(20))
BEGIN    
	START TRANSACTION;        
		INSERT INTO usuario VALUES
			(dni_empleado, nombre_empleado, pri_apellido_empleado, seg_apellido_empleado);
        
		INSERT INTO empleado VALUES
			(dni_empleado, turno_empleado);
	COMMIT;
END;
//
DELIMITER ;

/*
PARAMETROS DE ENTRADA:
	precio_lavadora
	nombre_proveedor
	peso_lavadora
	color_lavadora
	nombre_tienda
	stock_lavadora
*/
/*CALL insert_lavadora(800, "MABE", 200.25, "Marron", "Chispley", 150);*/
/*
nombre_cliente,
pri_apellido_cliente,
seg_apellido_cliente,
nombre_empleado,
pri_apellido_empleado,
seg_apellido_empleado,
fecha_venta,
nombre_tienda,
codigo_lavadora,
cantidad_lavadora
*/
/*CALL insert_venta('Diana', 'Vilca', 'Mendoza', 'Guiomar', 'Diaz', 'Laguna', '2021-12-20', 'Chispley', '114', 2);*/
/*CALL insert_empleado(564987123, "Erick", "Hualla", "Puelles", "Tarde");*/
