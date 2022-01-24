CREATE DATABASE GestireDistributori;
USE GestireDistributori;
 
CREATE TABLE Bevande
(
IdBevanda Integer auto_increment not null primary key,
Nome Varchar(30) not null,
Tipo Varchar(30) not null,
Costo Decimal(6,2) not null,
CHECK (Costo>0)
);
 
 
CREATE TABLE Distributori
(
IdDistributore Integer auto_increment not null primary key,
Nome Varchar(30) not null,
FlagAttivo Boolean not null
);
 
 
CREATE TABLE Contenere
(
IdContenere Integer auto_increment not null primary key,
IdDistributore Integer not null,
IdBevanda Integer not null,
Quantità Integer not null,
FOREIGN KEY(IdDistributore) REFERENCES Distributori(IdDistributore),
FOREIGN KEY(IdBevanda) REFERENCES Bevande(IdBevanda)
);
 
 
INSERT INTO Bevande
(Nome,Tipo,Costo)
values
("CocaCola","Bevanda Gassata", 1),
("Aranciata","Bevanda Gassata", 2),
("Acqua Liscia","Bevanda Liscia", 0.50),
("Acqua Gassata","Bevanda Gassata", 0.50),
("Peroni","Birra", 3),
("Sprite","Bevanda Gassata", 1.50),
("Pepsi","Bevanda Gassata", 1.50);
 
 
INSERT INTO Distributori
(Nome,FlagAttivo)
values
("H24",true),
("BariDistribuzione",false),
("DistributoreStark",true),
("RedDispenser",true),
("DistriPuglia",false),
("NiciosDispenser",false),
("GrumoDispenser",true),
("SqueoDispenser",true);
 
INSERT INTO Contenere
(IdDistributore,IdBevanda,Quantità)
values
(1,1,20),
(1,2,10),
(1,3,15),
(1,4,20),
(1,5,10),
(1,6,15),
(1,7,20),
(2,1,0),
(2,2,0),
(2,3,0),
(2,4,0),
(2,5,0),
(2,6,0),
(2,7,0),
(3,1,15),
(3,2,20),
(3,3,10),
(3,4,15),
(3,5,20),
(3,6,10),
(3,7,15),
(4,1,30),
(4,2,12),
(4,3,20),
(4,4,30),
(4,5,12),
(4,6,20),
(4,7,20),
(5,1,0),
(5,2,0),
(5,3,0),
(5,4,0),
(5,5,0),
(5,6,0),
(5,7,0),
(6,1,0),
(6,2,0),
(6,3,0),
(6,4,0),
(6,5,0),
(6,6,0),
(6,7,0),
(7,1,15),
(7,2,20),
(7,3,30),
(7,4,15),
(7,5,20),
(7,6,30),
(7,7,30);
