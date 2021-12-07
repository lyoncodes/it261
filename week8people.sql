USE it261_db;
DROP TABLE IF EXISTS Players;
CREATE TABLE Players(
  player_id INT NOT NULL PRIMARY KEY,
  player_firstname VARCHAR(255),
  player_lastname VARCHAR(255),
  email VARCHAR(255),
  occupation VARCHAR(255),
  description VARCHAR(255),
  birthdate DATE,
  blurb VARCHAR(255)
);
INSERT INTO Players(player_id, player_firstname, player_lastname, email, occupation, description, birthdate, blurb)
VALUES
(1, 'Damian', 'Lillard', 'dame@comcast.com', 'point gaurd', 'Portland Trail Blazers All Star', '1990-07-15', 'a blurb about damian lillard'),
(2, 'Stephen', 'Curry', 'steph@comcast.com', 'shooting gaurd', 'GSW All Star', '1988-03-14', 'a blurb about steph curry'),
(3, 'James', 'Harden', 'james@comcast.com', 'point gaurd', 'Brooklyn Nets All Star', '1989-8-26', 'a blurb about james harden'),
(4, 'Luka', 'Doncic', 'luka@comcast.com', 'shooting guard', 'Dallas Mavericks All Star', '1999-02-28', 'a blurb about luka doncic'),
(5, 'Ja', 'Morant', 'ja@comcast.com', 'point gaurd', 'Memphis Grizzlies All Star', '1999-08-10', 'a blurb about ja morant');