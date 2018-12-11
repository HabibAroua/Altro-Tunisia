create database altro_tunisia ;


create table client 
(
    login varchar(50) primary key ,
    password varchar(50) ,
    nom varchar(50) ,
    prenom varchar(50) ,
    email varchar(50) unique ,
    date_naissance date ,
    date_inscription date 
);

create table categorie 
(
    id int primary key AUTO_INCREMENT ,
    libelle varchar(30)
);

create table produit
(
    ref varchar(50) primary key ,
    image varchar(250) ,
    libelle varchar(50) ,
    prix int ,
    description varchar(300) ,
    date_ajout date ,
    id_cat int ,
    login_admin varchar(50) 
);

create table admin 
(
    login varchar(50) primary key ,
    password varchar(100) ,
    nom varchar(50),
    prenom varchar(50) ,
    date_inscription date 
);

create table reservation 
(
    login varchar(50) ,
    ref_Prod varchar(50) ,
    date_reservation date 
)

alter table reservation add CONSTRAINT fk1 PRIMARY key(login,ref_Prod);

alter table reservation add CONSTRAINT fk2 FOREIGN key(login) REFERENCES admin(login)

alter table reservation add CONSTRAINT fk3 FOREIGN key(ref_Prod) REFERENCES produit(ref)

insert into categorie VALUES (1,'Laptop');

insert into categorie VALUES(2,'Samart phone');

insert into categorie VALUES(3,'Imprimante');

alter table produit add COLUMN quantite int;

alter table reservation add COLUMN nb int UNIQUE;

