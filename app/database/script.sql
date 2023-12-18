-- creation du base de données
CREATE DATABASE gestion_biblio;
-- creation du tableaux 
CREATE TABLE roles(
    id int PRIMARY KEY AUTO_INCREMENT,   
    name varchar (255)
);

CREATE TABLE users (
    id int PRIMARY KEY AUTO_INCREMENT ,
    firstname varchar (40),
    lastname varchar (40),
    email varchar(50) UNIQUE,
    password varchar(255),
    phone varchar(20),
    budget float 
);

CREATE TABLE books (
    id int PRIMARY KEY AUTO_INCREMENT,
    title varchar(45),
    author varchar(50),
    genre varchar(50),
    description text ,
    publication_year date,
    total_copies int ,
    available_copies int 
);

CREATE TABLE reservations (
    id int PRIMARY KEY AUTO_INCREMENT,
    description text ,
    reservation_date date ,
    return_date date ,
    is_returned int DEFAULT 0,
    book_id int,
    user_id int ,
    FOREIGN KEY(book_id) REFERENCES books(id),
    FOREIGN KEY(user_id) REFERENCES users(id)
); 
CREATE TABLE  role_user(
    role_id int,
    user_id int,
    FOREIGN KEY(role_id) REFERENCES roles(id),
    FOREIGN KEY(user_id) REFERENCES users(id)
);