CREATE DATABASE IF NOT EXISTS cinema;
CREATE TABLE IF NOT EXISTS movie(
    id int(9) not null AUTO_INCREMENT,
    name VARCHAR(30) not null UNIQUE,
    genre VARCHAR(20) not null,
    movie_length TIME,
    PRIMARY KEY(id)
);
CREATE TABLE IF NOT EXISTS screen(
    id int(6) not null,
    max_row int(6) not null,
    max_coulmn int(6) not null,
    PRIMARY KEY(id)
);
CREATE TABLE IF NOT EXISTS cinema_user(
    user_name VARCHAR(30) not NULL,
    password VARCHAR(30) not NULL,
    first_name VARCHAR(30) not NULL,
    last_name VARCHAR(30) not NULL,
    birthday DATE not NULL,
    email VARCHAR(320) not NULL UNIQUE,
    type varchar(8) not NUll,
    PRIMARY KEY(user_name)
);

CREATE TABLE IF NOT EXISTS plays(
    screen_id int(6) not null,
    movie_id int(9) not null,
    screening_time TIME(4) not null,
    date DATE not null,
    FOREIGN KEY(screen_id) REFERENCES screen(id),
    FOREIGN KEY(movie_id) REFERENCES movie(id),
    PRIMARY KEY(screen_id,movie_id,screening_time,date)
)
CREATE TABLE IF NOT EXISTS reservation(
        screen_id int(6) not null,
    movie_id int(9) not null,
    screening_time TIME(4) not null,
    date DATE not null,
    user_name VARCHAR(30) not NULL,
    PRIMARY KEY(screen_id,movie_id,screening_time,date,username)

)



