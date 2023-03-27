create database erp;
use erp;
drop database erp;
create table empleado(
id_Empleado varchar(30) primary key,
nombre_empleado varchar(50),
apellido_Paterno varchar(50),
apellido_Materno varchar(50),
curp varchar(50),
jefeInmediato varchar(50),
AreaDeTrabajo varchar(52),
puestoDeTrabajo varchar(50),
fechaIngreso date,
fechaNacimiento date,
correPersonal varchar(50),
id_Direccion varchar(20),
nombre_usuario varchar(50),
contraseña varchar(50),
constraint empleadoFK foreign key (id_direccion) 
references direccion (id_direccion)
on update cascade
on delete set null
);

create table direccion(
id_Direccion varchar(20) primary key,
estado varchar(30),
municipio varchar(30),
colonia varchar(30),
calle varchar(30)
);

insert into direccion (id_Direccion,estado,municipio,colonia,calle)values('DE-20','Estado De México','Ecatepec','La guadalupna','Virgen de las virtudes');
insert into direccion (id_Direccion,estado,municipio,colonia,calle)values('DE-21','Morelos','Tulancingo','Virgen de las virtudes','El catril');
insert into direccion (id_Direccion,estado,municipio,colonia,calle)values('DE-20','Monterrey','Nuevo Leon','Cartel Jalisco','El chapo');
insert into empleado (id_Empleado,nombre_empleado) value ('3','Fernando');
insert into empleado
(id_Empleado,nombre_empleado,apellido_Paterno,apellido_Materno,curp,jefeInmediato,AreaDeTrabajo,puestoDeTrabajo,fechaIngreso,fechaNacimiento,correPersonal,id_Direccion,nombre_usuariO,contraseña) 
value ('EMP-01','Miguel Angel','Olvera','Orozco','OEOMP7O814HDFLRG09','Pedro Salazar Acantara','Contabilidad','Elegido',  '2020/08/12','1997-08-14','miguel.olveramc@gmail.com','DE-20', 'Miguel','123456');


select * from empleado;

select * from direccion;


select * from empleado where id_Empleado ="1" and contraseña = "1";

create table facturasProveedor(
idfactura varchar(10) primary key,
idProveedor varchar(10),
referenciaFactura varchar(100),
referenciaPago varchar(100),
fechaFactura date,
fechaContable date,
fechaVencimiento date,
constraint proveedor1 foreign key (idProveedor)
references proveedores(idProveedor) 
on delete set null
on update cascade 
);
drop table facturasProveedor;
select * from facturasProveedor;

drop table facturasProveedor;
create table proveedores(
idProveedor varchar(10) primary key,
nombreProveedor varchar(100),
descripcion text 
);
drop table proveedores;
insert into erp.facturasproveedor (idFactura,idProveedor,referenciaPago,fechaFactura,fechaContable,fechaVencimiento)
values ('F-01','P-02','Banco Nacional','2020-12-12','2020-12-12','2020-12-12');

insert into erp.facturasproveedor (idFactura,idProveedor,referenciaPago,fechaFactura,fechaContable,fechaVencimiento)
values ('F-03','P-03','HSBC','2019-05-17','2020-12-12','2020-12-12');

insert into erp.facturasproveedor (idFactura,idProveedor,referenciaPago,fechaFactura,fechaContable,fechaVencimiento)
values ('F-04','P-04','Banco Nacional','2020-12-12','2020-05-09','2020-08-01');
insert into erp.facturasproveedor (idFactura,idProveedor,referenciaPago,fechaFactura,fechaContable,fechaVencimiento)
values ('F-100','P-04','Banco Nacional','2020-12-12','2020-05-09','2020-08-01');

insert into proveedores (idProveedor,nombreProveedor)value ('P-01','Cañitas');
insert into proveedores (idProveedor,nombreProveedor)value ('P-02','Promexa');
insert into proveedores (idProveedor,nombreProveedor)value ('P-03','American comodity company');
insert into proveedores (idProveedor,nombreProveedor)value ('P-04','ADM Rice Inc');
insert into proveedores (idProveedor,nombreProveedor)value ('P-05','Empresa de molienda de arroz de Doguet');

select * from proveedores;

create table productos(
idProducto varchar(10) primary key,
nombre varchar(70),
costo decimal(10,2),
etiqueta varchar(100)
);
DROP TABLE PRODUCTOS;
insert into productos(idProducto,nombre,costo,etiqueta) values('P-06','Negrito bimbo',11,'1A5A4SD6F5' );
insert into productos(idProducto,nombre,costo,etiqueta) values('P-07','Choco rol',15,'1A5A4SD6F5' );
insert into productos(idProducto,nombre,costo,etiqueta) values('P-08','Pan blanco',28,'1A5A4SD6F5' );
insert into productos(idProducto,nombre,costo,etiqueta) values('P-09','Donas bimbo',14,'1A5A4SD6F5' );
insert into productos(idProducto,nombre,costo,etiqueta) values('P-10','Medias Noches',30,'1A5A4SD6F5' );
select  * from productos;

drop table facturaPP;
select * from facturaPP;
CREATE TABLE facturaPP(
idFPP varchar(10) primary key,
idProducto varchar(10),
idfactura varchar(10),
cantidad int,
impuestos decimal(10,2),
subtotal decimal(10,2),
 constraint productosfk_fpp foreign key (idProducto)
REFERENCES productos (idProducto) 
on delete set null 
on update cascade,

constraint fpfpp_pk2 foreign key (idfactura)
REFERENCES facturasProveedor (idfactura) 
on delete set null 
on update cascade
);

insert into facturaPP (idFPP,idPRODUCTO,idfactura,cantidad,impuestos,subtotal)values 
('FPP-01', 'P-01','F-01',5,234.23,2344);
insert into facturaPP (idFPP,idPRODUCTO,idfactura,cantidad,impuestos,subtotal)values 
('FPP-02', 'P-02','F-01',5,234.23,2344);
SELECT * FROM facturaPP;
select  pro.nombre, pro.costo, pro.etiqueta, fpp.cantidad,fpp.impuestos,fpp.subtotal
from facturaPP as fpp 
inner join productos as pro on fpp.idProducto = pro.idProducto   where fpp.idFactura = 'F-01';
select sum(impuestos) as TotalImpuestos ,sum(subtotal) as total  from facturaPP where idFactura = 'F-01';

-- ***********************   ORDDEN DE PRODUCCION ***********************************
create table orden (

	idOrden varchar(30) primary key,
	
	id_Empleado varchar(30),
	cantidad int,
	fechaEntrega date,

	constraint ordenProducto_pk1 foreign key (idProducto)
	REFERENCES productos (idProducto) 
	on delete set null 
	on update cascade,

	constraint ordenEncargado_pk2 foreign key (id_Empleado)
	REFERENCES empleado (id_Empleado) 
	on delete set null 
	on update cascade

);
insert into orden (idOrden,idProducto,id_Empleado,cantidad,fechaEntrega) values ('O-01','P-01', '') ;
select * FROM ORDEN;
create table ingredientes(
idIngrediente varchar(10) primary key,
nombreIngrediente varchar(100),
idProducto varchar(10),
cantidad decimal(10,2),
medida varchar(10),
	constraint Ingredientesroductos_pk1 foreign key (idProducto)
	REFERENCES productos (idProducto) 
	on delete set null 
	on update cascade
);
drop table ingredientes;
insert into ingredientes( idIngrediente, nombreIngrediente,idProducto,cantidad, medida) values ('Ing-01','Azucar','P-06',250,'GM' ),
('Ing-02','Harina','P-06',750,'GM' ),('Ing-03','Levadura','P-06',50,'GM' ),('Ing-04','Chocolate','P-06',30,'GM' );

insert into ingredientes( idIngrediente, nombreIngrediente,idProducto,cantidad, medida) values ('Ing-05','Azucar','P-07',250,'GM' ),
('Ing-06','Harina','P-07',750,'GM' ),('Ing-07','Levadura','P-07',10,'GM' ),('Ing-08','Chocolate','P-07',60,'GM' );

insert into ingredientes( idIngrediente, nombreIngrediente,idProducto,cantidad, medida) values 
('Ing-09','Harina','P-08',900,'GM' ),('Ing-10','Levadura','P-08',10,'GM' ),('Ing-11','Huevo','P-08',1,'KG' ),
('Ing-12','Sal','P-08',20,'GM');

insert into ingredientes( idIngrediente, nombreIngrediente,idProducto,cantidad, medida) values 
('Ing-13','Harina','P-09',500,'GM' ),('Ing-14','Levadura','P-09',10,'GM' ),('Ing-15','Huevo','P-09',1,'Unidad(es)' ),
('Ing-16','Mantequilla','P-09',20,'GM');

insert into ingredientes( idIngrediente, nombreIngrediente,idProducto,cantidad, medida) values 
('Ing-13','Harina','P-10',500,'GM' ),('Ing-14','Levadura','P-10',25,'GM' ),('Ing-15','Huevo','P-10',1,'Unidad(es)' ),
('Ing-16','Mantequilla','P-10',120,'GM'),('Ing-17','Azucar','P-10',120,'GM');


insert into productos(idProducto,nombre,costo,etiqueta) values('P-06','Negrito bimbo',11,'1A5A4SD6F5' );
insert into productos(idProducto,nombre,costo,etiqueta) values('P-07','Choco rol',15,'1A5A4SD6F5' );
insert into productos(idProducto,nombre,costo,etiqueta) values('P-08','Pan blanco',28,'1A5A4SD6F5' );
insert into productos(idProducto,nombre,costo,etiqueta) values('P-09','Donas bimbo',14,'1A5A4SD6F5' );
insert into productos(idProducto,nombre,costo,etiqueta) values('P-10','Medias Noches',30,'1A5A4SD6F5' );
select  * from productos;
select * from ingredientes where idProducto = 'P-08';
alter table productos
add imagenProducto varchar(100);