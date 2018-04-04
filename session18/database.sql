CREATE DATABASE shop1;


USE shop1;

CREATE TABLE users(
	id int(4) primary key auto_increment,
	username varchar(20),
	full_name varchar(50),
	email varchar(50),
	password varchar(60)
);
INSERT INTO users (username, full_name, email, password) 
		VALUES ('admin', 'admin 1', 'admin@gmail.com', '12345');
UPDATE users SET full_name = 'admin4' WHERE id=2;
DELETE FROM users WHERE id= 1;
CREATE TABLE products(
	id int(6) primary key auto_increment,
	pro_name varchar(20),
	description TEXT,
	qty int(4),
	price float
);


CREATE TABLE customer(
	id int(6) primary key auto_increment,
	name varchar(60) NOT NULL,
	address_block varchar(10),
	address_street varchar(30),
	city_id int NOT NULL
);


ALTER TABLE `pro_inv` ADD PRIMARY KEY( `inv_id`, `pro_id`);

INSERT INTO customer(name, address_block, address_street, city_id) VALUES ('cust1', '33', 'ali mansor', 1)-