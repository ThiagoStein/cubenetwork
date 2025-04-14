Create database cube;

use cube;

create table cube_user(
id int (5) auto_increment PRIMARY KEY,
first_name VARCHAR(100) NOT NULL,
last_name VARCHAR(100) NOT NULL,
Participation int (5)  NOT NULL
);

INSERT INTO cube_user (first_name, last_name, participation) VALUES ('Thiago', 'Stein', 90);
INSERT INTO cube_user (first_name, last_name, Participation) VALUES ('Alice', 'Silva', 33);
INSERT INTO cube_user (first_name, last_name, Participation) VALUES ('Bruno', 'Souza', 63);
INSERT INTO cube_user (first_name, last_name, Participation) VALUES ('Carla', 'Oliveira', 20);
INSERT INTO cube_user (first_name, last_name, Participation) VALUES ('Diego', 'Lima', 75);