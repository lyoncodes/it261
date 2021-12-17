CREATE TABLE City(
  city_id INT NOT NULL PRIMARY KEY,
  city_name VARCHAR(255)
);
CREATE TABLE Designation(
  designation_id INT NOT NULL PRIMARY KEY,
  designation_title VARCHAR(5)
);
CREATE TABLE Franchise(
  franchise_id INT NOT NULL PRIMARY KEY,
  franchise_name VARCHAR(255)
);
CREATE TABLE Team(
  team_id INT NOT NULL PRIMARY KEY,
  city_id INT,
  franchise_id INT,
  designation_id INT,
  team_name VARCHAR(255),
  FOREIGN KEY (city_id) REFERENCES City(city_id),
  FOREIGN KEY (franchise_id) REFERENCES Franchise(franchise_id),
  FOREIGN KEY (designation_id) REFERENCES Designation(designation_id)
);
CREATE TABLE Product_Supplier(
  supplier_id INT NOT NULL PRIMARY KEY,
  supplier_name VARCHAR(255)
);
CREATE TABLE Customer(
  customer_id INT NOT NULL PRIMARY KEY,
  tos_acceptance_date DATE,
  account_balance INT,
  email VARCHAR(255),
  fname VARCHAR(255)
);
CREATE TABLE Ballpark(
  ballpark_id INT NOT NULL PRIMARY KEY,
  team_id INT,
  ballpark_address VARCHAR(255),
  ballpark_name VARCHAR(255),
  ballpark_capacity INT,
  ballpark_seats INT,
  ballpark_founding DATE,
  ballpark_vendor_capacity INT,
  FOREIGN KEY (team_id) REFERENCES Team(team_id)
);
CREATE TABLE Ballpark_Stall(
  stall_id INT NOT NULL PRIMARY KEY,
  stall_name VARCHAR(255),
  ballpark_id INT,
  FOREIGN KEY (ballpark_id) REFERENCES Ballpark(ballpark_id)
);
CREATE TABLE Product_Type(
  product_type_id INT NOT NULL PRIMARY KEY,
  product_type VARCHAR(255)
);
CREATE TABLE Product(
  product_id INT NOT NULL PRIMARY KEY,
  product_type_id INT,
  supplier_id INT,
  product_description VARCHAR(255),
  FOREIGN KEY (product_type_id) REFERENCES Product_Type(product_type_id),
  FOREIGN KEY (supplier_id) REFERENCES Product_Supplier(supplier_id)
);
CREATE TABLE Ballpark_Stall_Inventory(
  item_id INT NOT NULL PRIMARY KEY,
  product_id INT,
  stall_id INT,
  product_price DECIMAL(6,2),
  FOREIGN KEY (product_id) REFERENCES Product(product_id),
  FOREIGN KEY (stall_id) REFERENCES Ballpark_Stall(stall_id)
);
CREATE TABLE Discount(
  discount_id INT NOT NULL PRIMARY KEY,
  discount_value INT
);
CREATE TABLE Sale(
  sale_id INT NOT NULL PRIMARY KEY,
  customer_id INT,
  created DATE,
  FOREIGN KEY (customer_id) REFERENCES Customer(customer_id)
);
CREATE TABLE Charge(
  charge_id INT NOT NULL PRIMARY KEY,
  sale_id INT,
  item_id INT,
  discount_id INT,
  FOREIGN KEY (discount_id) REFERENCES Discount(discount_id),
  FOREIGN KEY (sale_id) REFERENCES Sale(sale_id),
  FOREIGN KEY (item_id) REFERENCES Ballpark_Stall_Inventory(item_id)
);
INSERT INTO City(city_id, city_name)
VALUES
(1, 'New York'),
(2, 'Chicago'),
(3, 'San Francisco'),
(4, 'Los Angeles'),
(5, 'Tulsa'),
(6, 'Charlotte'),
(7, 'Tampa Bay');
INSERT INTO Designation(designation_id, designation_title)
VALUES
(1, 'M'),
(2, 'AAA'),
(3, 'AA'),
(4, 'A');
INSERT INTO Franchise(franchise_id, franchise_name)
VALUES
(1, 'Yankee Global Enterprises, LLC'),
(2, 'Chicago Cubs Baseball Club, LLC'),
(3, 'San Francisco Baseball Affiliates, LLC'),
(4, 'Los Angeles Dodgers, LLC'),
(5, 'Chicago White Sox, LTD');
INSERT INTO Team(team_id, city_id, franchise_id, designation_id, team_name)
VALUES
(1, 1, 1, 1, 'Yankees'),
(2, 2, 2, 1, 'Cubs'),
(3, 3, 3, 1, 'Giants'),
(4, 4, 4, 1, 'Dodgers'),
(5, 2, 5, 1, 'White Sox'),
(6, 5, 4, 3, 'Drillers'),
(7, 6, 5, 2, 'Knights'),
(8, 7, 1, 4, 'Tarpons');
INSERT INTO Product_Supplier(supplier_id, supplier_name)
VALUES
(1, 'Molson Coors Beverage Corp.'),
(2, 'Anheuiser Busch Corp.'),
(3, 'Nike Inc.'),
(4, 'New Era Apparel Inc.'),
(5, 'Nathans Hotdogs Inc.');
INSERT INTO Customer(customer_id, tos_acceptance_date, account_balance, email, fname)
VALUES
(1, '2021-04-01', 220, 'baseball_fan@gmail.com', 'Henry Rogers'),
(2, '2021-04-01', 40, 'goYankees@gmail.com', 'Bo Isley'),
(3, '2021-04-01', 30, 'theShowGoesOn@gmail.com', 'Babe Roberts'),
(4, '2021-04-02', 90, 'beisbol_vida@gmail.com', 'Mickey Mantle'),
(5, '2021-04-02', 2350, 'goodbyeBaseball@gmail.com', 'Roger Maris');
INSERT INTO Ballpark(ballpark_id, team_id, ballpark_address, ballpark_name, ballpark_capacity, ballpark_seats, ballpark_founding, ballpark_vendor_capacity)
VALUES
(1, 1, '1 E 161 St, Bronx, NY 10451', 'Yankee Stadium', 54251, 53000, 2009, 100),
(2, 2, '1060 W Addison St, Chicago, IL 60613', 'Wrigley Field', 41649, 41000, 1914, 30),
(3, 3, '24 Willie Mays Plaza, San Francisco, CA 94107', 'Oracle Park', 41915, 40000, 2000, 100),
(4, 4, '1000 Vin Scully Ave, Los Angeles, CA 90012', 'Dodger Stadium', 56000, 55000, 1962, 70),
(5, 5, '333 W 35th St, Chicago, IL 60616', 'Guaranteed Rate Field', 40615, 39000, 1991, 60),
(6, 6, '734 E Port Ave, Tulsa OK 78401', 'Whataburger Field', 7679, 5679, 2005, 10),
(7, 7, '324 S Mint St, Charlotte, NC 28202', 'Truist Field', 10200, 9500, 2009, 15),
(8, 8, '1 Steinbrenner Dr, Tampa, FL 33614', 'George M. Steinbrenner Field', 11026, 10000, 1996, 15);
INSERT INTO Ballpark_Stall(stall_id, stall_name, ballpark_id)
VALUES
(1, 'Yankee Team Store', 1),
(2, 'Yankee Beer', 1),
(3, 'NY Hot Dogs', 1),
(4, 'East Coast Burgers', 1),
(5, 'Yankee Ts', 1),
(6, 'Fries and Fun', 1),
(7, 'Yankee Ice Cream', 1),
(8, 'Cubs Team Store', 2),
(9, 'Cubs Beer', 2),
(10, 'Cubs Ts', 2),
(11, 'Northsiders', 2),
(12, 'Giants Team Store', 3),
(13, 'Giants Beer', 3),
(14, 'Giants Ts', 3),
(15, 'J Crew', 3),
(16, 'Dodgers Team Store', 4),
(17, 'Dodgers Beer', 4),
(18, 'Dodger Dogs', 4),
(19, 'Dodger Ts', 4),
(20, 'Vin Scully Cafe', 4),
(21, 'White Sox Team Store', 5),
(22, 'White Sox Beer', 5),
(23, 'White Sox Ts', 5),
(24, 'Pinwheel Stand', 5),
(25, 'Southsiders Sliders', 5),
(26, 'Southsiders Beer', 5),
(27, 'Southsiders Cotton Candy', 5),
(28, 'Drillers Beer', 6),
(29, 'Knights Beer', 7),
(30, 'Knights Ts', 7),
(31, 'Tarpons Beer', 8),
(32, 'Yankee Ts', 8);
INSERT INTO Product_Type(product_type_id, product_type)
VALUES
(1, 'General Merchandise'),
(2, 'Food Concessions'),
(3, 'Beverage Concessions'),
(4, 'Team Merchandise');
INSERT INTO Product(product_id, product_type_id, supplier_id, product_description)
VALUES
(1, 3, 1, '32 Oz. Coors Light'),
(2, 3, 2, '32 Oz. Budweiser'),
(3, 4, 3, 'NY Yankees Jeresey Adult - L'),
(4, 4, 3, 'Chicago Cubs Jeresey Adult - L'),
(5, 4, 3, 'SF Giants Jeresey Adult - L'),
(6, 4, 3, 'LAD Jeresey Adult - L'),
(7, 4, 3, 'Chicago White Sox Jeresey Adult - L'),
(8, 4, 4, 'Yankees Cap Adult - 13/1.5'),
(9, 4, 4, 'SF Giants Cap Adult - 13/1.5'),
(10, 4, 4, 'LAD Cap Adult - 13/1.5'),
(11, 4, 4, 'White Sox Cap Adult - 13/1.5'),
(12, 2, 5, 'Ballpark Frank'),
(13, 1, 4, 'Chicago Cubs Kids Tee');
INSERT INTO Ballpark_Stall_Inventory(item_id, product_id, stall_id, product_price)
VALUES
(1, 3, 1, 175.00),
(2, 8, 1, 50.00),
(3, 1, 2, 12.00),
(4, 2, 2, 13.50),
(5, 4, 8, 175.00),
(6, 13, 10, 25.00),
(7, 1, 9, 11.00),
(8, 2, 9, 13.50),
(9, 4, 10, 165.00),
(10, 5, 12, 175.00),
(11, 9, 12, 50.00),
(12, 1, 13, 14.00),
(13, 2, 13, 15.00),
(14, 9, 14, 45.00),
(15, 6, 16, 175.00),
(16, 10, 16, 50.00),
(17, 12, 17, 2.00),
(18, 1, 17, 12.00),
(19, 12, 18, 2.00),
(20, 6, 19, 175.00),
(21, 10, 19, 55.00),
(22, 7, 21, 175.00),
(23, 1, 22, 10.00),
(24, 2, 24, 12.00),
(25, 1, 31, 9.00),
(26, 1, 28, 9.00),
(27, 1, 29, 9.00),
(28, 8, 32, 35.00);
INSERT INTO Sale(sale_id, customer_id, created)
VALUES
(1, 5, '2021-04-01'),
(2, 5, '2021-04-01'),
(3, 2, '2021-04-01'),
(4, 3, '2021-04-01'),
(5, 4, '2021-04-02'),
(6, 1, '2021-04-02'),
(7, 1, '2021-04-02');
INSERT INTO Charge(charge_id, sale_id, item_id, discount_id)
VALUES
(1, 1, 1, NULL),
(2, 1, 2, NULL),
(3, 2, 3, NULL),
(4, 3, 3, NULL),
(5, 4, 7, NULL),
(6, 5, 10, NULL),
(7, 5, 11, NULL),
(8, 6, 1, NULL),
(9, 6, 1, NULL),
(10, 7, 10, NULL);
INSERT INTO Discount(discount_id, discount_value)
VALUES
(1, 10),
(2, 15),
(3, 20),
(4, 25),
(5, 30);