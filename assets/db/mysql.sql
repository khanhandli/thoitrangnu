--Tao db QLQA


CREATE TABLE users(
	user VARCHAR(50),
	password VARCHAR(50)
);

CREATE TABLE img(
	id INT,
	Anh VARCHAR(255)
);

CREATE TABLE GioHang(
	id INT PRIMARY KEY AUTO_INCREMENT,
	Anh VARCHAR(255),
	Gia INT		
);

CREATE TRIGGER gio_hang AFTER INSERT ON GioHang
FOR EACH ROW
	INSERT INTO img(id,Anh)
    VALUES (NEW.id,NEW.Anh);

CREATE TABLE DoNu(
	id INT PRIMARY KEY AUTO_INCREMENT,
	Anh VARCHAR(255),
	Gia INT		
);




CREATE TABLE DoDoi(
	id INT PRIMARY KEY AUTO_INCREMENT,
	Anh VARCHAR(255),
	Gia INT		
);




CREATE TABLE PhuKien(
	id INT PRIMARY KEY AUTO_INCREMENT,
	Anh VARCHAR(255),
	Gia INT		
);


INSERT INTO users
	VALUES('vananh','123');


	CREATE TABLE donhang(id INT PRIMARY KEY AUTO_INCREMENT
    , name VARCHAR(255), 
    phone VARCHAR(255), 
    address VARCHAR(255), 
    note VARCHAR(255), 
    total INT, 
    created_time DATETIME, 
    last_updated DATETIME);
