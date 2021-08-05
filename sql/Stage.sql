DROP DATABASE IF EXISTS gestion_stage;
CREATE DATABASE gestion_stage;
USE gestion_stage;

CREATE TABLE Entreprise(
    idEntreprise int(4) not null auto_increment,
    nomEntreprise varchar(30) not null,
    telEntreprise varchar(30) not null,
    emailEntreprise varchar(30) not null,
    adresseEntreprise varchar(30) not null,
    secteur varchar(30),
    PRIMARY KEY(idEntreprise)

);


CREATE TABLE Etudiant(
    idEtudiant int(3) not null auto_increment,
    nomEtudiant varchar(30) not null,
    prenomEtudiant varchar(30) not null,
    telEtudiant varchar(30) not null,
    emailEtudiant varchar(30) not null,
    adresseEtudiant varchar(30) not null,
    mdpEtudiant varchar(30) not null,
    etablissement varchar(30) not null,
    PRIMARY KEY(idEtudiant)
);



CREATE TABLE Stage(
    idStage int(3) not null auto_increment,
    sujet varchar(30) not null,
    duree int(2) not null,
    dateDebut date not null,
    dateFin date not null,
    tache varchar(30) not null,
    idEntreprise int(4) not null,
    PRIMARY KEY(idStage),
    FOREIGN KEY(idEntreprise) REFERENCES Entreprise(idEntreprise)
    
);




CREATE TABLE Candidature(
    idCandidature int(3) not null auto_increment,
    typeCandidature enum("spontanee", "ciblee", "annonce", "autre"),
    formatCandidature enum("papier", "electronique", "portfolio"),
    dateCandidature date not null,
    idEtudiant int(3) not null,
    PRIMARY KEY(idCandidature),
    FOREIGN KEY(idEtudiant) REFERENCES Etudiant(idEtudiant)
);




CREATE TABLE User(
    idUser int(2) not null auto_increment,
    nomUser varchar(30) not null,
    prenomUser varchar(30) not null,
    emailUser varchar(30) not null,
    mdpUser varchar(30) not null,
    droits enum("admin", "user"),
    PRIMARY KEY(idUser)

);

INSERT INTO Entreprise VALUES(null, "Orange","01553301", "orangeCenter@live.fr", "12 rue Rosny 93100", "réseaux" );
INSERT INTO Entreprise VALUES(null, "Ubisoft", "01779632","UbisoftParis@yahoo.fr", "2 avenue Jean-Jaures Montreuil","dev logiciel");


INSERT INTO Etudiant VALUES(null, "CHAN", "Jack", "07010022", "chan@yahoo.fr","10 rue Verdun Vincenne", "1234", "cfa-insta");
INSERT INTO Etudiant VALUES(null,"ROAR","Sonny","06879521", "roar@gmail.com", "9 avenue Romainville 93100", "sisco", "cfa-insta");


INSERT INTO Stage VALUES(null, "developpement application", "4","2021-05-15", "2021-09-15", "developper framwork", "1");
INSERT INTO Stage VALUES(null, "gestion pack informatique", "4","2021-06-15", "2021-10-15", "gerer un parc","2");


INSERT INTO Candidature VALUES(null, "ciblee", "portfolio","2021-05-10", "1");
INSERT INTO Candidature VALUES(null, "spontanee", "portfolio","2021-05-16", "2");


INSERT INTO User VALUES(null, "EVANS", "Marc","inazuma@gmail.com", "Omega", "admin");