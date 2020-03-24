<?php 

 create database ongeza_test if not exist

CREATE TABLE customer (
id int rimary key auto_increment,
first_name varchar (25),
last_name varchar (25),
town_name varchar (25),
gender_id int (9),
is_deleted int (9) not null default 0
   
);

CREATE TABLE gender (
    id int primary key auto_increment,
    gender_name varchar (25)
   
);

?>
