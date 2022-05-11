create table equipedu3 (
    num int not null auto_increment,
    name char(20) not null,
    department char(20) not null,
    studentnum char(30) not null,
    email char(80) not null,
    phone char(30) not null,
    regist_day char(20),
    primary key(num)
)