create table member2 (
  num int not null auto_increment,
  id  char(20) not null,
  pass  char(20) not null,
  name char(10) not null,
  post_num char(5),
  address char(80),
  tel char(15),
  level int,
  primary key(num)
);
