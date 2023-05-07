CREATE DATABASE IF NOT EXISTS dim_tk4;

USE dim_tk4;

CREATE TABLE UserRoles
(
    id_role    INT PRIMARY KEY AUTO_INCREMENT,
    role_name  VARCHAR(255),
    role_desc  VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE Users
(
    id_user    INT PRIMARY KEY AUTO_INCREMENT,
    username   VARCHAR(255),
    `password` VARCHAR(255),
    first_name VARCHAR(255),
    last_name  VARCHAR(255),
    phone      VARCHAR(20),
    address    TEXT,
    id_role    INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (id_role) REFERENCES UserRoles (id_role)
);

CREATE TABLE Members
(
    id_member  INT PRIMARY KEY AUTO_INCREMENT,
    name       VARCHAR(255),
    address    TEXT,
    contact    VARCHAR(20),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE Suppliers
(
    id_supplier INT PRIMARY KEY AUTO_INCREMENT,
    name        VARCHAR(255),
    address     VARCHAR(255),
    contact     VARCHAR(20),
    created_at  DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at  DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE Items
(
    id_item    INT PRIMARY KEY AUTO_INCREMENT,
    name       VARCHAR(255),
    unit       VARCHAR(50),
    id_user    INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (id_user) REFERENCES Users (id_user)
);

CREATE TABLE Purchasing
(
    id_purchasing    INT PRIMARY KEY AUTO_INCREMENT,
    purchasing_date  DATE,
    purchasing_qty   INT,
    purchasing_price DECIMAL(10, 2),
    id_item          INT,
    id_user          INT,
    id_supplier      INT,
    created_at       DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at       DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (id_item) REFERENCES Items (id_item),
    FOREIGN KEY (id_user) REFERENCES Users (id_user),
    FOREIGN KEY (id_supplier) REFERENCES Suppliers (id_supplier)
);

CREATE TABLE Sales
(
    id_sale     INT PRIMARY KEY AUTO_INCREMENT,
    sales_date  DATE,
    sales_qty   INT,
    sales_price DECIMAL(10, 2),
    id_item     INT,
    id_user     INT,
    id_supplier INT,
    created_at  DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at  DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (id_item) REFERENCES Items (id_item),
    FOREIGN KEY (id_user) REFERENCES Users (id_user),
    FOREIGN KEY (id_supplier) REFERENCES Suppliers (id_supplier)
);

INSERT
INTO UserRoles (id_role, role_name, role_desc)
VALUES (1, 'Admin', 'Admin'),
       (2, 'Admin Gudang', 'Admin Gudang'),
       (3, 'Member', 'Pelanggan');

INSERT
INTO Users (username, `password`, first_name, last_name, phone, address, id_role)
VALUES ('admin', 'admin', '1sampai8', 'Admin', '08123123123', 'Kediri', 1),
       ('admin_gudang', '123456', 'Admin', 'Gudang', '08124124124', 'Trenggalek', 2);

INSERT
INTO Members (name, address, contact)
VALUES ('Brilliano Dhiya Ulhaq', 'Tangerang', '081122334455'),
       ('Yoga Cahya Pranata', 'Bandung', '081188993344'),
       ('Ardhy Pandu', 'Ngawi', '08923421143');

INSERT
INTO Suppliers (name, address, contact)
VALUES ('CJ Feed', 'Jombang', '081122334455'),
       ('Suri Tani Pemuka', 'Sidoarjo', '081188993344'),
       ('Cargill', 'Bogor', '08923421143'),
       ('Matahari Sakti', 'Pasuruan', '08923421143'),
       ('Grobest Indonesia', 'Surabaya', '08923421143');

INSERT
INTO Items (name, unit, id_user)
VALUES ('Pakan udang', 'Kg', 1),
       ('Pakan lele', 'Kg', 1),
       ('Shrim grower diet', 'Kg', 1),
       ('Fish grower super', 'Kg', 1),
       ('Nutrisi hewan', 'Kg', 1);

