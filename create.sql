drop table if exists Bid;
drop table if exists Category;
drop table if exists Item;
drop table if exists User;
create table User(userID varchar(100) Not Null,  
rating int,
location varchar(100),
country varchar(20),
PRIMARY KEY(userID)

);
create table Item
(itemID char(10) Not Null, 
name varchar(100) Not Null,
currently decimal(10,2),
buy_price decimal(10,2),
first_bid decimal(10,2),
started timestamp,
ends timestamp,
userID varchar(100),
description text,
PRIMARY KEY(itemID),
FOREIGN KEY(userID) REFERENCES User(userID)
);
create table Bid
(itemID char(10) Not Null,
userID varchar(100),
time timestamp,
amount decimal(10,2),
PRIMARY KEY(itemID,time),
UNIQUE (itemID,userID,amount),
FOREIGN KEY (itemID) REFERENCES Item(itemID),
FOREIGN KEY(userID) REFERENCES User(userID)
);
create table Category
(itemID char(10) Not Null,
category varchar(100) Not Null,
PRIMARY KEY(itemID,category),
FOREIGN KEY (itemID) REFERENCES Item(itemID)
);

Drop Table if exists CurrentTime;
create table CurrentTime
( timeNow DATETIME Not Null
);
INSERT INTO CurrentTime values ('2001-12-20 00:00:01');
Select timeNow FROM CurrentTime;

