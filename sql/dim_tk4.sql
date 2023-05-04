CREATE DATABASE IF NOT EXISTS dim_tk4;

USE dim_tk4;

CREATE TABLE UserRoles (
	id_role 	INT PRIMARY KEY AUTO_INCREMENT,
    role_name 	VARCHAR(255),
    role_desc 	VARCHAR(255),
    created_at	DATETIME,
    updated_at	DATETIME
);

CREATE TABLE Users (
	id_user 	INT PRIMARY KEY AUTO_INCREMENT,
    name 		VARCHAR(255),
    `password` 	VARCHAR(255),
    first_name	VARCHAR(255),
    last_name	VARCHAR(255),
    phone		VARCHAR(20),
    address		TEXT,
    id_role		INT FOREIGN KEY REFERENCES UserRoles(id_role),
    created_at	DATETIME,
    updated_at	DATETIME
);

CREATE TABLE Members (
    id_member 	INT PRIMARY KEY AUTO_INCREMENT,
    name 		VARCHAR(255),
    address 	TEXT,
    contact 	VARCHAR(20),
    created_at	DATETIME,
    updated_at	DATETIME
);

CREATE TABLE Suppliers (
    id_supplier INT PRIMARY KEY AUTO_INCREMENT,
    name 		VARCHAR(255),
    address 	VARCHAR(255),
    contact 	VARCHAR(20),
    created_at	DATETIME,
    updated_at	DATETIME
);

CREATE TABLE Items (
    id_item 	INT PRIMARY KEY AUTO_INCREMENT,
    name 		VARCHAR(255),
    unit 		VARCHAR(50),
    id_user		INT FOREIGN KEY REFERENCES Users(id_user),
    created_at	DATETIME,
    updated_at	DATETIME
);

CREATE TABLE Purchasing (
    id_purchasing 		INT PRIMARY KEY AUTO_INCREMENT,
    purchasing_date 	DATE,
    purchasing_qty 		INT,
    purchasing_price 	DECIMAL(10,2),
    id_item				INT FOREIGN KEY REFERENCES Items(id_item),
    id_user				INT FOREIGN KEY REFERENCES Users(id_user),
    id_supplier			INT FOREIGN KEY REFERENCES Suppliers(id_supplier),
    created_at			DATETIME,
    updated_at			DATETIME
);

CREATE TABLE Sales (
    id_sale 		INT PRIMARY KEY AUTO_INCREMENT,
    sales_date 		DATE,
    sales_qty 		INT,
    sales_price 	DECIMAL(10,2),
    id_item			INT FOREIGN KEY REFERENCES Items(id_item),
    id_user			INT FOREIGN KEY REFERENCES Users(id_user),
    id_supplier		INT FOREIGN KEY REFERENCES Suppliers(id_supplier),
    created_at		DATETIME,
    updated_at		DATETIME
);

INSERT 
	INTO 	UserRoles (id_role, role_name, role_desc, created_at, updated_at) 
	VALUES 	(1, 'Admin','Admin',now(), now()),
			(2, 'Admin Gudang','Admin Gudang',now(), now()),
			(3, 'Member','Pelanggan',now(), now());
	
INSERT 
	INTO 	Users (name, `password`, first_name, last_name, phone, address, id_role, created_at, updated_at) 
	VALUES 	('admin','admin', '1sampai8', 'Admin', '08123123123', 'Kediri', 1,now(), now()),
			('admin_gudang','123456', 'Admin', 'Gudang', '08124124124', 'Trenggalek', 2,now(), now());


INSERT 
	INTO 	Members (name, address, contact, created_at, updated_at) 
	VALUES 	('Brilliano Dhiya Ulhaq','Tangerang','081122334455',now(), now()),
			('Yoga Cahya Pranata','Bandung','081188993344',now(), now()),
			('Ardhy Pandu','Ngawi','08923421143',now(), now());
		
INSERT 
	INTO 	Suppliers (name, address, contact, created_at, updated_at) 
	VALUES 	('CJ Feed','Jombang','081122334455',now(), now()),
			('Suri Tani Pemuka','Sidoarjo','081188993344',now(), now()),
			('Cargill','Bogor','08923421143',now(), now()),
			('Matahari Sakti','Pasuruan','08923421143',now(), now()),
			('Grobest Indonesia','Surabaya','08923421143',now(), now());
			
INSERT 
	INTO 	Items (name, unit, id_user, created_at, updated_at) 
	VALUES 	('Pakan udang','Kg', 1,now(), now()),
			('Pakan lele','Kg', 1,now(), now()),
			('Shrim grower diet','Kg', 1,now(), now()),
			('Fish grower super','Kg', 1,now(), now()),
			('Nutrisi hewan','Kg', 1,now(), now());
		
		

		
		
