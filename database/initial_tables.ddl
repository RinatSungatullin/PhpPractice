DROP TABLE IF EXISTS surveys;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255)
);

CREATE TABLE surveys (
    user_id INT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(255) NOT NULL,
    experience VARCHAR(3) NOT NULL,
    language VARCHAR(255) NOT NULL,
    additional_info VARCHAR(255) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);