# SUN_PHP_MNPJ
index.php: Điều hướng và xử lý các yêu cầu HTTP với 2 biến chính mod và act
- mod: model
- act: thao tác trong controller của model đấy
- CREATE TABLE article(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title varchar(255),
    thumbnail varchar(255),
    author varchar(255),
    category varchar(255),
    description text,
    date timestamp,
    update_at timestamp
);
