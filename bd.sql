CREATE TABLE zapis
(
    userId INT,
    id INT,
    title text NOT NULL,
    body text NOT NULL
);
DROP TABLE zapis;
INSERT INTO `zapis` (userId, id, title, body) VALUE -- тест
    (3, 1, 'title_is', 'test'),
    (4, 2, 'title_is', 'test');

CREATE TABLE comment
(
    postId INT,
    id INT,
    name text NOT NULL,
    email text NOT NULL,
    body text NOT NULL
);
DROP TABLE comment;
ALTER USER 'user'@'127.0.0.1' IDENTIFIED WITH mysql_native_password BY 'password';

GRANT ALL PRIVILEGES ON *.* TO 'user'@'127.0.0.1' WITH GRANT OPTION;
FLUSH PRIVILEGES;
GRANT RELOAD ON *.* TO 'user'@'127.0.0.1';
ALTER USER USER() IDENTIFIED BY 'password';

ALTER USER 'user'@'127.0.0.1'
    IDENTIFIED BY 'password' PASSWORD EXPIRE;

CREATE ROLE 'admin', 'developer';
CREATE ROLE 'user'@'127.0.0.1';

CREATE USER 'user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL ON db.* TO 'user'@'127.0.0.1';
GRANT SELECT ON db.* TO 'user'@'127.0.0.1';
ALTER USER 'user'@'127.0.0.1' WITH MAX_QUERIES_PER_HOUR 90;

CREATE USER user
    IDENTIFIED WITH caching_sha2_password
        BY 'password';


CREATE USER 'user'@'localhost'
    IDENTIFIED WITH mysql_native_password BY 'password';


CREATE USER 'nativeuser'@'localhost'
    IDENTIFIED WITH mysql_native_password BY 'password';

SHOW GRANTS;

UPDATE mysql.user SET password=password('password')
WHERE user='user' AND host='localhost';

USE db;

SELECT title, comment.body
FROM zapis
         LEFT JOIN comment
                   ON zapis.id =comment.postId
WHERE comment.body LIKE '%in%';