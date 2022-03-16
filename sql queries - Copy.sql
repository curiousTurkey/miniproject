create database service_center;

create table signup(F_name varchar(30), Email varchar(30), Username varchar(10),Phone_no varchar(10), constraint pk primary key(Username));

create table adminsignup(F_name varchar(30), Email varchar(30), Adminname varchar(10), constraint pk primary key(Adminname));

create table empsignup(F_name varchar(30), Empusername varchar(10), Emp_email varchar(30),Phone_no varchar(10), primary key(Empusername));

create table signin(Username varchar(10), Password varchar(15), User_type varchar(10), constraint pk1 primary key(Username,User_type), constraint fg foreign key (Username) references signup(Username));

create table adminsignin(Adminname varchar(10), Password varchar(15), User_type varchar(10), constraint pk1 primary key(Adminname,User_type), constraint fg11 foreign key (Adminname) references adminsignup(Adminname));

create table empsignin(Empusername varchar(10), Password varchar(15), User_type varchar(10), constraint pk1 primary key(Empusername,User_type), constraint fg5 foreign key (Empusername) references empsignup(Empusername));

create table comp(F_id int primary key auto_increment,F_name varchar(30), L_name varchar(30),Email varchar(30), Subject varchar(30),Message varchar(500),status int);

create table bill(Invoice_no int auto_increment , Service_type varchar(30), part1 varchar(30), part2 varchar(30), part3 varchar(30),cost int ,cost1 int, cost2 int, cost3 int, Issue_date date, constraint pk7 primary key(Invoice_no,Issue_date) );

create table servicebook(Service_id int not null auto_increment,Username varchar(30),Car_model varchar(30),Reg_no varchar(30),Booked_date date , Service_type_id int,Status varchar(10), constraint pk3 primary key(Service_id), constraint fg2 foreign key(Username) references signup(Username), constraint fg4 foreign key(Service_type_id)references services(Service_type_id));

create table services(Service_type_id int, Service_type varchar(30),Cost int, constraint pk12 primary key(Service_type_id));

create table parts(Part_id int, Part_name varchar(30), Part_price int, Labour_fees int, primary key(Part_id));

create table stock(Engine int , Body int , Consumables int);	

create table stockpayment(Transaction_ID int auto_increment primary key, F_name varchar(30),Email varchar(20),Address varchar(40),City varchar(20),Zip varchar(5), State varchar(20),Cardname varchar(30), Cardno varchar(16),Expmonth varchar(20),Cvv varchar(3),Expyear varchar(5));

insert into services values (100,'Engine Service', 15000),(101,'Body Service',8500),(102,'Regular Service',2000);

insert into stock values(87,95,55);	


insert into parts values(100,'Head Gasket',3000,800),(101,'Battery',4500,800),(102,'Piston',4500,1000),(103,'Cylinder Head',4000,800),(104,'Doors',7500,1000),(105,'Mirrors',800,100),(106,'Lights',2000,500),(107,'Windows',4500,1000),(108,'Tires',4500,250);


