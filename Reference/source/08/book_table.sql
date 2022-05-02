create table book ( 
	isbn char(15) not null, 
	title char(20) not null, 
	author char(10) not null,
	year char(4),
	price int,	
	primary key(isbn)
);
