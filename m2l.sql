create table if not exists tag(
id_tag int primary key not null auto_increment,
libelle varchar(64)
);

create table if not exists typeEmploye(
id_te int primary key not null auto_increment,
libelle varchar(64)
);

create table if not exists prestataire(
id_p int primary key not null auto_increment,
nom varchar(64),
numrue int,
rue varchar(64),
ville varchar(64),
codePostal int
);

create table if not exists employe(
id_e int primary key not null auto_increment,
nom varchar(64),
prenom varchar(64),
email varchar(64),
mdp varchar(128),
creditJour int default 15,
creditPoint int default 5000,
typeEmploye_id int,
superieur_id int default null,
foreign key (typeEmploye_id) references typeEmploye(id_te), 
foreign key (superieur_id) references employe(id_e) 
);

create table if not exists formation(
id_f int primary key not null auto_increment,
titre varchar(64),
date_f datetime,
duree int,
creditJour int,
creditPoint int,
description varchar(254),
prerequis varchar(64),
id_prestataire int,
foreign key (id_prestataire) references prestataire(id_p)
);

create table if not exists associer(
f_id int not null,
tag_id int not null,
primary key (f_id, tag_id),
foreign key (f_id) references formation(id_f),
foreign key (tag_id) references tag(id_tag)
);

create table if not exists suivreFormation(
e_id int not null,
f_id int not null,
validate boolean default false,
primary key (e_id, f_id),
foreign key (e_id) references employe(id_e),
foreign key (f_id) references formation(id_f)
);
DELIMITER |
CREATE PROCEDURE ajouter_formation(nbr int)      
BEGIN
	DECLARE v_i INT DEFAULT 1;
	DECLARE titre VARCHAR(64) DEFAULT 'titre formation';
	DECLARE date_f DATETIME DEFAULT now();
    DECLARE duree int DEFAULT 3600*48;
    DECLARE creditJour int DEFAULT 2;
    DECLARE creditFormation int DEFAULT 500;
    DECLARE description VARCHAR(64) DEFAULT 'zhauihzea ndlz abnhjkldb qnhd kjahznjkle bhzau';
    DECLARE prerequis VARCHAR(64) DEFAULT 'zhauihzea ndlz abnhjkldb qnhd kjahznjkle bhzau';
    DECLARE id_presta int DEFAULT v_i%5;
    REPEAT
		insert into prestataire values(default, 'un prestataire', 15, 'rue du champ', 'PARIS', 75020);
		REPEAT
			insert into formation values(default, titre , date_f, duree, creditJour,creditFormation, description,prerequis, id_presta);
			SET v_i = v_i + 1;    
		UNTIL v_i > nbr END REPEAT;
	UNTIL v_i > nbr END REPEAT;
END|
DELIMIT
DELIMITER ;
DROP PROCEDURE ajouter_formation;
CALL ajouter_formation(50);


update employe set email = 'admin@m2l.com';

