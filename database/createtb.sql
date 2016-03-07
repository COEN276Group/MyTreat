create table users(
	id int,
	f_name char(30),
	l_name char(30),
	DOB date,
	age int,
	gender char(1),
	occupation varchar(100),
	hobbies varchar(500),
	description varchar(500),
	email varchar(100),
	psw varchar(20),
	pic_url varchar(100),
	primary key(id)
);

create table applications(
	user_id int NOT NULL,
	event_id int NOT NULL,
	primary key(user_id,event_id)

);

create table participants(
	user_id int NOT NULL,
	event_id int NOT NULL,
	primary key(user_id,event_id)

);

create table events(
	id int NOT NULL,
	organizer_id int,
	time timestamp,
	street varchar(100),
	city varchar(50),
	state char(2),
	zip char(5),
	pic_url varchar(100),
	title varchar(50),
	short_desc varchar(100),
	long_desc varchar(500),
	category char(20),
	mytreat char(20),
	tag varchar(500),
	primary key(id)
);
