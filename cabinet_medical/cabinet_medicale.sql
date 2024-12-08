drop database if exists cabinet_medicale;
create database cabinet_medicale; 
use cabinet_medicale;

create table patient (
    idpatient int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    datenaissance date,
    adresse varchar(50),
    email varchar(50),
    telephone varchar(10),
    primary key (idpatient)
);
create table medecin (
    idmedecin int(3) not null auto_increment,
    nom varchar(50),
    specialite varchar(50),
    email varchar(50),
    telephone varchar(10),
    primary key (idmedecin)
 );
create table rdv(
    idrdv int(3) not null auto_increment,
    daterdv date,
    heurerdv time,
    libelle text,
    idpatient int(3) not null,
    idmedecin int(3) not null ,
    primary key(idrdv),
    foreign key(idpatient) references patient(idpatient),
    foreign key(idmedecin) references medecin(idmedecin)
);

create table ordonnance (
    idordonnance int(3) not null auto_increment,
    prescription varchar(50),
    dateordonnance date,
    primary key(idordonnance),
    idrdv int(3) not null ,
    foreign key(idrdv) references rdv(idrdv)
);
