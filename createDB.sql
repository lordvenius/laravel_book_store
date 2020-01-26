DROP DATABASE IF EXISTS BokusDB;CREATE DATABASE BokusDB;USE BokusDB;

CREATE TABLE books (bookId INT AUTO_INCREMENT,
                    author VARCHAR(100),
                    title VARCHAR(100),
                    price INT,
                    PRIMARY KEY(bookId));

CREATE TABLE orders (bookId INT,
                     amount INT);

INSERT INTO books (author, title, price) VALUES ("Leonard Dawn", 
                                               "Dansa med vargar", 
                                               200);
INSERT INTO books (author, title, price) VALUES ("Dawnovan lei", 
                                               "Dansa med fåglar", 
                                               800);
INSERT INTO books (author, title, price) VALUES ("Berit bettan beritsdotter", 
                                               "Fåglar med vargar", 
                                               10);                                              

                                          