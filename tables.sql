CREATE TABLE tests(
    id TINYINT(2) PRIMARY KEY AUTO_INCREMENT,
    questions VARCHAR(200),
    answer_1 VARCHAR(200) NOT NULL,
    answer_2 VARCHAR(200) NOT NULL,
    answer_3 VARCHAR(200) NOT NULL,
    answer VARCHAR(6) NOT NULL
)