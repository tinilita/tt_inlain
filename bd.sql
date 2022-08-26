CREATE TABLE zapis
(
    userId INT,
    id INT,
    title varchar(20) not null,
    body varchar(20) not null
);

INSERT INTO `zapis` (userId, id, title, body) VALUE -- тест
    (3, 1, 'Kassy', 'title_is', 'test'),
    (4, 2, 'lili', 'title_is', 'test');

CREATE TABLE comment
(
    postId INT,
    id INT,
    name varchar(20) not null,
    email varchar(20) not null,
    body varchar(20) not null
);
