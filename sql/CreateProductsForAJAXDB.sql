CREATE DATABASE IF NOT EXISTS productsforajaxdb;

USE productsforajaxdb;;

DROP TABLE IF EXISTS customers, products, users;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS customers (
  id INT(5) NOT NULL AUTO_INCREMENT,
  first VARCHAR(20) NOT NULL,
  last VARCHAR(30) NOT NULL,
  active VARCHAR(1) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS products (
  id INT(5) NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  active VARCHAR(1) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS users (
  id INT(4) NOT NULL AUTO_INCREMENT,
  uname VARCHAR(10) NOT NULL UNIQUE,
  password VARCHAR(10) NOT NULL,
  first VARCHAR(20) NOT NULL,
  last VARCHAR(30) NOT NULL,
  state ENUM('CT','MA','ME','NJ','NY','RI','VT') NOT NULL,
  created DATE NOT NULL,
  active ENUM('T','F') NOT NULL DEFAULT 'T',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO customers (first, last,active) values ('James', 'Smith', 'T');
INSERT INTO customers (first, last,active) values ('Sally', 'Jones', 'T');
INSERT INTO customers (first, last,active) values ('Debra', 'Green', 'F');
INSERT INTO customers (first, last,active) values ('Daniel', 'Brown', 'T');
INSERT INTO customers (first, last,active) values ('Doris', 'Black', 'T');
INSERT INTO customers (first, last,active) values ('Teri', 'Davis', 'T');
INSERT INTO customers (first, last,active) values ('Alfred', 'White', 'T');
INSERT INTO customers (first, last,active) values ('Arn', 'Anderson', 'F');
INSERT INTO customers (first, last,active) values ('Brett', 'Albers', 'T');
INSERT INTO customers (first, last,active) values ('Jeffrey', 'McBride', 'T');
INSERT INTO customers (first, last,active) values ('Minnie', 'Bailey', 'T');
INSERT INTO customers (first, last,active) values ('Jack', 'Pratt', 'F');
INSERT INTO customers (first, last,active) values ('Joanne', 'Windsor', 'T');
INSERT INTO customers (first, last,active) values ('Kelly', 'Wells', 'T');
INSERT INTO customers (first, last,active) values ('Marcus', 'Jones', 'T');
INSERT INTO customers (first, last,active) values ('Fred', 'Schwartz', 'T');
INSERT INTO customers (first, last,active) values ('Rachel', 'Clark', 'T');
INSERT INTO customers (first, last,active) values ('Henry', 'Adams', 'T');
INSERT INTO customers (first, last,active) values ('Rebecca', 'Stewart', 'T');
INSERT INTO customers (first, last,active) values ('Jean', 'Evans', 'T');
INSERT INTO customers (first, last,active) values ('Tim', 'Morgan', 'T');
INSERT INTO customers (first, last,active) values ('Kathy', 'Long', 'T');
INSERT INTO customers (first, last,active) values ('Phillip', 'King', 'T');
INSERT INTO customers (first, last,active) values ('Gary', 'Ross', 'T');

INSERT INTO products (name, price, active) values ('Monster Mask','16.49', 'T');
INSERT INTO products (name, price, active) values ('Dough Roller (Wood)','9.97', 'T');
INSERT INTO products (name, price, active) values ('Puzzle Book','2.99', 'T');
INSERT INTO products (name, price, active) values ('Half Eaten Box of Crayons','.99', 'F');
INSERT INTO products (name, price, active) values ('Ugly Hat','26.42', 'T');
INSERT INTO products (name, price, active) values ('Pair of Brown Shoes, Both Left','39.95', 'T');
INSERT INTO products (name, price, active) values ('Red Scarf with holes','12.99', 'T');
INSERT INTO products (name, price, active) values ('Real Karate Green Belt','13.26', 'T');
INSERT INTO products (name, price, active) values ('Yellow Exploding Yo-yo','3.99', 'F');
INSERT INTO products (name, price, active) values ('Furry Bulletproof Vest','1945.24', 'T');
INSERT INTO products (name, price, active) values ('Bad Country Music CD','11.99', 'T');
INSERT INTO products (name, price, active) values ('Broken Cordless Phone','29.99', 'T');
INSERT INTO products (name, price, active) values ('Dough Roller (Metal)','14.95', 'T');
INSERT INTO products (name, price, active) values ('How to Beat Pac-Man Book','3.99', 'F');
INSERT INTO products (name, price, active) values ('Partially Eaten Glazed Donut','.97', 'T');
INSERT INTO products (name, price, active) values ('Roller Skates (Size 11.5)','52.97', 'T');
INSERT INTO products (name, price, active) values ('Windows 98','956.87', 'T');
INSERT INTO products (name, price, active) values ('Apple II-C','29349.87', 'T');
INSERT INTO products (name, price, active) values ('Stuffed Dog','11.96', 'T');
INSERT INTO products (name, price, active) values ('Windowless Microwave [Still Works Great]','311.92', 'T');
INSERT INTO products (name, price, active) values ('Globe (Half Scale)','36.47', 'T');
INSERT INTO products (name, price, active) values ('Busted Guitar (Acoustic)','229.14', 'T');
INSERT INTO products (name, price, active) values ('Poster of Nirvana','12850.46', 'T');
INSERT INTO products (name, price, active) values ('Dirty Ice Cream Scoup','6.99', 'T');
INSERT INTO products (name, price, active) values ('Real Dinosaur Egg','17.94', 'T');
INSERT INTO products (name, price, active) values ('Old Mans Slippers, Almost NEW','17.94', 'T');
INSERT INTO products (name, price, active) values ('Book: How to Ebay Like a Rock Star','19.98', 'T');
INSERT INTO products (name, price, active) values ('Semi-Used Nose Ring (Stainless Steel)','36.94', 'T');
INSERT INTO products (name, price, active) values ('Unicycle (Flat tire)','197.65', 'T');
INSERT INTO products (name, price, active) values ('Sieve (Warning: Leaks like a Sieve)','17.95', 'T');

INSERT INTO users (uname, password, first, last, state, created) values ('jsmith', 'jsmith', 'James', 'Smith', 'NY', DATE_SUB(NOW(), INTERVAL 62 DAY));
INSERT INTO users (uname, password, first, last, state, created) values ('ajones', 'ajones', 'Anita', 'Jones', 'CT', DATE_SUB(NOW(), INTERVAL 48 DAY));
INSERT INTO users (uname, password, first, last, state, created) values ('balbers', 'balbers', 'Barry', 'Albers', 'NY', DATE_SUB(NOW(), INTERVAL 46 DAY));
INSERT INTO users (uname, password, first, last, state, created) values ('sbrown', 'sbrown', 'Sarah', 'Brown', 'NJ', DATE_SUB(NOW(), INTERVAL 29 DAY));
INSERT INTO users (uname, password, first, last, state, created) values ('jtully', 'jtully', 'Jonas', 'Tully', 'RI', DATE_SUB(NOW(), INTERVAL 23 DAY));
INSERT INTO users (uname, password, first, last, state, created) values ('aolsen', 'aolsen', 'Amy', 'Olsen', 'MA', DATE_SUB(NOW(), INTERVAL 22 DAY));
INSERT INTO users (uname, password, first, last, state, created) values ('kwilson', 'kwilson', 'Kim', 'Wilson', 'VT', DATE_SUB(NOW(), INTERVAL 21 DAY));
INSERT INTO users (uname, password, first, last, state, created) values ('awarner', 'awarner', 'Andy', 'Warner', 'ME', DATE_SUB(NOW(), INTERVAL 16 DAY));
INSERT INTO users (uname, password, first, last, state, created) values ('rblack', 'rblack', 'Rick', 'Black', 'NJ', DATE_SUB(NOW(), INTERVAL 14 DAY));
INSERT INTO users (uname, password, first, last, state, created) values ('jhart', 'jhart', 'James', 'Hart', 'MA', DATE_SUB(NOW(), INTERVAL 12 DAY));
INSERT INTO users (uname, password, first, last, state, created) values ('tmack', 'tmack', 'Teri', 'Mack', 'NY', DATE_SUB(NOW(), INTERVAL 7 DAY));
INSERT INTO users (uname, password, first, last, state, created) values ('dbrown', 'dbrown', 'Doug', 'Brown', 'ME', DATE_SUB(NOW(), INTERVAL 4 DAY));
INSERT INTO users (uname, password, first, last, state, created) values ('jwilson', 'jwilson', 'Jack', 'Wilson', 'CT', NOW());