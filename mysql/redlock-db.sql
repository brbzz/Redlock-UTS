CREATE DATABASE Redlock;
USE Redlock;

CREATE TABLE users (
  ID INT NOT NULL AUTO_INCREMENT,
  Nama VARCHAR(255) NOT NULL,
  Alamat VARCHAR(255) NOT NULL,
  Jabatan VARCHAR(255) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT into users values("001", "Bryan", "Citra 10", "NPC");
INSERT into users values("002", "Edbert", "Citra 11", "NPC");
INSERT into users values("003", "Fio", "Citra 12", "Diatas NPC");
INSERT into users values("004", "Brandon", "Citra 13", "Diatas NPC");
INSERT into users values("005", "Klee", "Citra 15", "Dewa");
