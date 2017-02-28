use M2L;
drop table if exists associer,tag, suivreFormation, formation, prestataire,employe,typeEmploye;
drop procedure if exists ajouter_formation;
drop procedure if exists insert_user;
drop procedure if exists assoc_formation;

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
lieu varchar(64),
description varchar(254),
prerequis varchar(64),
p_id int,
foreign key (p_id) references prestataire(id_p)
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
	DECLARE titre VARCHAR(64) DEFAULT 'formation';
	DECLARE date_f DATETIME DEFAULT now();
    DECLARE duree int DEFAULT 3600*48;
    DECLARE lieu varchar(64) default 'Paris';
    DECLARE creditJour int DEFAULT 2;
    DECLARE creditFormation int DEFAULT 500;
    DECLARE description VARCHAR(64) DEFAULT 'zhauihzea ndlz abnhjkldb qnhd kjahznjkle bhzau';
    DECLARE prerequis VARCHAR(64) DEFAULT 'zhauihzea ndlz abnhjkldb qnhd kjahznjkle bhzau';
    DECLARE id_presta int DEFAULT 1;
    REPEAT
		insert into prestataire values(default, 'un prestataire', 15, 'rue du champ', 'PARIS', 75020);
		REPEAT
			insert into formation values(default, concat(titre, ' ', v_i) , date_f, duree, creditJour,creditFormation,lieu, description,prerequis, id_presta);
			SET v_i = v_i + 1;    
		UNTIL v_i > nbr END REPEAT;
	UNTIL v_i > nbr END REPEAT;
END|
DELIMIT
DELIMITER ;

insert into typeemploye values(default, 'admin');
insert into typeemploye values(default, 'utilisateur');
insert into employe values (default,'admin',null, 'admin@m2l.com', sha1('admin'), null, null, 1,null);

DELIMITER $$
CREATE PROCEDURE insert_user(nbr int)
BEGIN
DECLARE v_i INT DEFAULT 1;
REPEAT
		REPEAT
			insert into employe values(default, 'salut' , 'cestmoi', concat('test', v_i,'@gmail.com'), sha1('azerty'), default, default, 1, 1);
			SET v_i = v_i + 1;    
		UNTIL v_i > nbr END REPEAT;
	UNTIL v_i > nbr END REPEAT;
END $$
DELIMITER ;
CALL insert_user(50);

UPDATE employe AS a
INNER JOIN employe AS b ON a.id_e = b.id_e
SET a.superieur_id = (b.id_e%5 +1)
where a.id_e > 5
and b.id_e > 5;

CALL ajouter_formation(50);

update formation set date_f = '2017-02-21 14:03:03' WHERE id_f < 10;
update formation set date_f = '2017-02-25 14:03:03' WHERE id_f BETWEEN 11 AND 20;
update formation set date_f = '2017-03-05 14:03:03' WHERE id_f BETWEEN 21 AND 30;
update formation set date_f = '2017-03-08 14:03:03' WHERE id_f BETWEEN 31 AND 40;
update formation set date_f = '2017-03-11 14:03:03' WHERE id_f BETWEEN 41 AND 50;

DELIMITER $$
CREATE PROCEDURE assoc_formation(nbr int)
BEGIN
DECLARE v_i INT DEFAULT 1;
	REPEAT
		insert into suivreFormation values(1, v_i, default);
		SET v_i = v_i + 1;    
	UNTIL v_i > nbr END REPEAT;
END $$
DELIMITER ;

CALL assoc_formation(50);

select * from employe;
update suivreFormation set e_id = f_id;
