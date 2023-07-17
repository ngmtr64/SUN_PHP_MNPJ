# SUN_PHP_MNPJ
Index.php: Điều hướng và xử lý các yêu cầu HTTP với 2 biến chính mod và act
- mod: model
- act: thao tác trong controller của model đấy
# Câu lệnh SQL:
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
- CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(500),
  remember_token VARCHAR(255),
  register_date DATETIME DEFAULT CURRENT_TIMESTAMP()
);
