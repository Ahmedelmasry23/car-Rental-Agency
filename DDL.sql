create schema car_rent;
USE car_rent;
create table car(
  plate_id int NOT NULL,
  brand varchar(200) NOT NULL,
  model varchar(200),
  color varchar(150),
  car_status varchar(200) NOT NULL,
  year int NOT NULL,
  description varchar(200),
  rating decimal(10,1),
  office_id INT NOT NULL ,
  prices decimal(10,3) NOT NULL,
  image longblob,
  primary key(plate_id)
);
 
create table customer(
  customer_id int AUTO_INCREMENT,
  fnamee varchar(200) NOT NULL,
  lname varchar(200) NOT NULL,
  passwordd varchar(150) NOT NULL,
  email varchar(200) NOT NULL,
  phone_number varchar(20) NOT NULL,
  primary key(customer_id)
);


create table office(
  office_id int AUTO_INCREMENT,
  location varchar(200) NOT NULL,
  primary key(office_id)
);

create table reservation(
  reserve_id int AUTO_INCREMENT,
  pickup_date date NOT NULL,
  return_date date NOT NULL,
  payment VARCHAR(200) NOT NULL,
  customer_id int NOT NULL, 
  plate_id int NOT NULL,
  primary key(reserve_id)
);
CREATE TABLE calendar (datefield DATE)

DELIMITER |
CREATE PROCEDURE fill_calendar(start_date DATE, end_date DATE)
BEGIN
  DECLARE crt_date DATE;
  SET crt_date=start_date;
  WHILE crt_date < end_date DO
    INSERT INTO calendar VALUES(crt_date);
    SET crt_date = ADDDATE(crt_date, INTERVAL 1 DAY);
  END WHILE;
END |
DELIMITER ;
alter table car add foreign key (office_id) references office(office_id);
alter table reservation add foreign key (plate_id) references car(plate_id);
alter table reservation add foreign key (customer_id) references customer(customer_id);