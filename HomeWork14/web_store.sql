CREATE TABLE Countrys
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
);

CREATE TABLE Cities
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
);

CREATE TABLE Streets
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
);

CREATE TABLE Addresses
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    num INT NOT NULL,
    id_country INT NOT NULL, 
    id_city INT NOT NULL, 
    id_street INT NOT NULL,  
    FOREIGN KEY (id_country) REFERENCES Countrys (id),
    FOREIGN KEY (id_city)  REFERENCES Cities (id),
    FOREIGN KEY (id_street) REFERENCES Streets (id)
);

CREATE TABLE Users
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    email VARCHAR(40) NOT NULL,
    password VARCHAR(255) NOT NULL,
    id_address INT,  
    FOREIGN KEY (id_address) REFERENCES Streets (id)
);

CREATE TABLE Categories
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
);

CREATE TABLE Delivers
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL
);

CREATE TABLE Brands
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    id_country INT NOT NULL,  
    FOREIGN KEY (id_country) REFERENCES Countrys (id)
);

CREATE TABLE Products
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    sku VARCHAR(255) NOT NULL,
    price DOUBLE NOT NULL,
    image VARCHAR(255),
    id_category INT NOT NULL,
    id_brand INT NOT NULL,
    id_deliver INT NOT NULL,
    FOREIGN KEY (id_category) REFERENCES Categories (id),
    FOREIGN KEY (id_brand) REFERENCES Brands (id),
    FOREIGN KEY (id_deliver) REFERENCES Delivers (id)
);

CREATE TABLE SerialNumbers
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_product INT NOT NULL,
    num INT NOT NULL UNIQUE,
    FOREIGN KEY (id_product) REFERENCES Products (id)
);

CREATE TABLE Sales
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_serial_number INT NOT NULL,
    id_user INT NOT NULL,
    FOREIGN KEY (id_serial_number) REFERENCES SerialNumbers (id),
    FOREIGN KEY (id_user) REFERENCES Users (id),
    date_sale DATE NOT NULL
);