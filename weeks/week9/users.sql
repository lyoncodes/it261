USE it261_db;
DROP TABLE IF EXISTS Users;
CREATE TABLE Users(
  user_id INT NOT NULL PRIMARY KEY,
  first_name VARCHAR(255),
  last_name VARCHAR(255),
  email VARCHAR(50),
  username VARCHAR(255),
  password VARCHAR(255)
);
