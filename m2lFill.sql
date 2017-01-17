DELIMITER |
CREATE PROCEDURE ajouter_client(nbr int)      
BEGIN
	DECLARE v_i INT DEFAULT 1;
	DECLARE nom VARCHAR(64) DEFAULT '';
	DECLARE prenom VARCHAR(64) DEFAULT '';
	DECLARE email VARCHAR(64) DEFAULT '';
	
    create temporary table random(
		nom varchar(64)
    );
    insert into random values('Charles'),('Martin'),('Vincent'),('Nicolas'),('Thomas'),('Laurent'),('Emma'),('Louise'),('Camille'),('Alice'),('Louis'),('Sarah'),('Clement'),('Mathieu'),('Sacha'),('Lou'),('Mae'),('Claude'),('Sidney'),('Noa'),('Charlie');

    REPEAT
		SET @nom = randomname();
		SET @prenom = randomname();
		SET @email = @nom + '.' + @prenom + '@mail.com';
		insert into employe values(default, @nom, @ prenom, @email, sha1('azerty'), default, default, null, default);
        SET v_i = v_i + 1;    
    UNTIL v_i > nbr END REPEAT;

    
END|
DELIMITER ;

DELIMITER |
CREATE PROCEDURE randomName()      
BEGIN
	SELECT SQL_NO_CACHE *
	FROM random
	WHERE RAND() > 0.9
	ORDER BY RAND( )
	LIMIT 1;         
END|
DELIMITER ;
