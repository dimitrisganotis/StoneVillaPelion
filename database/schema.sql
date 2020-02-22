DROP SCHEMA IF EXISTS stonevillapelion;
CREATE SCHEMA stonevillapelion;
USE stonevillapelion;

CREATE TABLE dates (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    date DATE NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE costs (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    date CHAR(5) NOT NULL,
    price SMALLINT NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE minDates (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    number TINYINT NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO minDates (number) VALUES (3);

/*
CREATE TABLE guests (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    full_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15),
    PRIMARY KEY (id)
);

CREATE TABLE dates (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    date DATE NOT NULL,
    guest_id INT UNSIGNED,
    date_type VARCHAR(25),
    status TINYINT(1) NOT NULL DEFAULT 0, #0 for available 1 for reservation
    PRIMARY KEY (id),
    FOREIGN KEY (guest_id) REFERENCES guests(id)
);

DROP PROCEDURE IF EXISTS filldates;
DELIMITER |
CREATE PROCEDURE filldates(dateStart DATE, dateEnd DATE)
BEGIN
  WHILE dateStart <= dateEnd DO
    INSERT INTO dates (date) VALUES (dateStart);
    SET dateStart = date_add(dateStart, INTERVAL 1 DAY);
  END WHILE;
END;
|
DELIMITER ;
CALL filldates('2019-01-01','2029-12-31');

INSERT INTO guests
	(full_name, email)
VALUES
	('Dimitris Ganotis', 'dimitrisgan97@gmail.com');

INSERT INTO reservations
	(guest_id, arrival, departure)
VALUES
	(1, '2013-01-01 12:00:00', '2013-01-02 12:00:00'),
    (1, '2013-01-03 12:00:00', '2013-01-04 12:00:00'),
    (1, '2013-01-04 16:00:00', '2013-01-05 12:00:00');
*/
