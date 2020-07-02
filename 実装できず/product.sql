drop database if exists gsacf_d06_19;
create database gsacf_d06_19 default character set utf8 collate utf8_general_ci;
grant all on gsacf_d06_19.* to 'staff'@'localhost' identified by 'password';
use gsacf_d06_19;

create table product (
	id int auto_increment primary key, 
	name varchar(200) not null, 
	price int not null
);