create table users
(
 user_id int primary key auto_increment,
 first_name varchar(50) not null,
 last_name varchar(50) not null, 
 email varchar(50) not null unique,
 pass varchar(50) not null,
 reg_date DATETIME not null
);

create table shop
(
   item_id int auto_increment primary key,
   item_name varchar(50) not null,
   item_desc varchar(50) not null,
   item_imag varchar(20) not null,
   item_price decimal(4,2) not null
);
   insert into shop (item_name,item_desc,item_imag,item_price) values("Cow","A friendly toy","image/cow.jpeg",80);
insert into shop (item_name,item_desc,item_imag,item_price) values("Guitar","A friendly GUITAR","image/gui.jpeg",300);
insert into shop (item_name,item_desc,item_imag,item_price) values("Laptop","Sony","image/lappy.jpeg",500);
insert into shop (item_name,item_desc,item_imag,item_price) values("Pantalon","Shirt","image/panta.jpg",700);
insert into shop (item_name,item_desc,item_imag,item_price) values("Hard Drive","Seagare","image/hard.jpg",300);
insert into shop (item_name,item_desc,item_imag,item_price) values("Calculator","Casio","image/calcu.jpg",100);
insert into shop (item_name,item_desc,item_imag,item_price) values("Trimmer","Phillips","image/PHI.jpg",700);
insert into shop (item_name,item_desc,item_imag,item_price) values("Awast","Antivirus","image/awast.jpg",300);
insert into shop (item_name,item_desc,item_imag,item_price) values("","","image/calcu.jpg",100);


create table orders
(
  order_id int primary key auto_increment,
  user_id int not null,
  total decimal(8,2) not null,
  order_date datetime not null
);

create table order_contents
(
  content_id int primary key auto_increment,
  order_id int not null,
  item_id int not null,
  quantity int not null,
   price decimal(4,2) not null
);

create table forum
(
  post_id int primary key auto_increment,
first_name varchar(50) not null,
last_name varchar(50) not null,
subject varchar(60) not null,
message text not null,
post_date DATETIME not null
);
