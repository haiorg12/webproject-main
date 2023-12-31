create database pcweb;

use pcweb;

create table producers
(
	producerID int auto_increment primary key,
    producerName varchar(30) not null unique
);

create table categorys
(
	categoryID int auto_increment primary key,
    categoryName varchar(30) not null unique
);

create table pcs
(
	PCID varchar(20) primary key,
    PCName varchar(30),
    PCPrice int,
    PCDetail varchar(200),
    PCWarranty varchar(50),
    PCImage1 varchar(100),
    PCImage2 varchar(100),
    PCImage3 varchar(100),
    categoryID int not null,
	constraint foreign key (categoryID) references categorys(categoryID),
	producerID int not null,
	constraint foreign key (producerID) references producers(producerID)
);

-- insert data
select * from pcs;
insert into categorys(categoryName) values ('b');
insert into producers(producerName) values ('c');
insert into pcs(PCID,PCName,PCPrice,PCDetail,PCWarranty,PCImage1,PCImage2,PCImage3,categoryID,producerID) values
('11','das',2,'das1','12 month','1','2','3',1,1),
('12','das',2,'das1','12 month','1','2','3',1,1),
('13','das',2,'das1','12 month','1','2','3',1,1);
 
create table users
(
	userID int auto_increment primary key,
    userName varchar(30) not null,
    userPassword varchar(100) not null,
    userFullname varchar(30) not null,
    userAddress varchar(100) not null,
    userPhoneNumber varchar(20) not null
);
Create table bills
(
    billID int auto_increment primary key,
	userID int not null,
    constraint foreign key (userID) references users(userID),
    billDate Datetime,
    billPrice int not null,
    billStatus int not null
);
Create table orderdetails
(
    PCID varchar(20) null,
    constraint foreign key (PCID) references pcs(PCID),
	billID int not null,
    constraint foreign key (billID) references bills(billID),
    quantity int,
    totalPrice int
);

create table admins
(
	adminID int auto_increment primary key,
    adminName varchar(30) not null,
    adminPassword varchar(100) not null
);
-- Thêm tài khoản admin mới với tên và mật khẩu (không mã hóa)
INSERT INTO admins (adminName, adminPassword) VALUES
('admin', 'admin');

-- Hiển thị thông tin tất cả người dùng
SELECT * FROM users;

-- Hiển thị thông tin tất cả admin
SELECT adminName FROM admins;

-- Đổi tên bảng pcs thành p_c_s
ALTER TABLE pcs RENAME TO p_c_s;

-- Đổi tên bảng categorys thành categories
ALTER TABLE categorys RENAME TO categories;

-- Đổi tên bảng producers thành producers
ALTER TABLE producers RENAME TO producers;

-- Hiển thị thông tin trong bảng p_c_s
SELECT * FROM p_c_s;
