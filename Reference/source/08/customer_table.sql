create table customer (
    num int not null auto_increment,
    name char(20) not null,
    tel char(15) not null,    
    address char(100),
    gender char(1),
    age int,
    mileage int,
    primary key(num)
);