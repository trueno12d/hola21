create table login(
    usu int primary key not null auto_increment,
    nombre varchar(50) not null,
    correo varchar(50) not null,
    contrasena varchar(50) not null,
    roll varchar(50) not null);

create table pago(
     pago int primary key not null auto_increment,
     metodo varchar(50) not null,
    nombre  varchar(50) not null,
    correo varchar(50) not null,
    monto int not null);
