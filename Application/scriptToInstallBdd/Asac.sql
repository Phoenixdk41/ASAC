
/* Ouverture de la session « Asac » */
SELECT `DEFAULT_COLLATION_NAME` FROM `information_schema`.`SCHEMATA` WHERE `SCHEMA_NAME`='applicationasac';
SHOW TABLE STATUS FROM `applicationasac`;
SHOW FUNCTION STATUS WHERE `Db`='applicationasac';
SHOW PROCEDURE STATUS WHERE `Db`='applicationasac';
SHOW TRIGGERS FROM `applicationasac`;
SELECT *, EVENT_SCHEMA AS `Db`, EVENT_NAME AS `Name` FROM information_schema.`EVENTS` WHERE `EVENT_SCHEMA`='applicationasac'