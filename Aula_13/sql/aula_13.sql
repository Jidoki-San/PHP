create database bd_foto;

use bd_foto;

create table imagem(
	id_img int not null auto_increment,
    caminho varchar(100),
    data_upload datetime,
    primary key (id_img)
);

select * from imagem;