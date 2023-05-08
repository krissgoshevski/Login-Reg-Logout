


create table users(

id int unsigned AUTO_INCREMENT,
    
    
    username varchar(32) UNIQUE,
    email varchar(32) UNIQUE,
    password varchar(128),

    constraint primary key (id)

);

