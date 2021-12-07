USE it261_db;
DROP TABLE IF EXISTS Pets;
CREATE TABLE Pets(
  pet_id INT NOT NULL PRIMARY KEY,
  pet_name VARCHAR(255),
  breed VARCHAR(255),
  weight FLOAT(4,2),
  color VARCHAR(255),
  description VARCHAR(255)
);
INSERT INTO Pets(pet_id, pet_name, breed, weight, color, description)
VALUES
(1, 'DOG_Gibbs', 'Schnoodle', 22.4, 'silver', 'playful_friendly_curious'),
(2, 'DOG_Olive', 'Havanese', 7.5, 'silver', 'loyal_caring_exuberant'),
(3, 'DOG_Oscar', 'Lab', 45.25, 'latte', 'slow_sleepy_gentle'),
(4, 'DOG_Louie', 'Australian Doodle', 40.50, 'brown merle', 'smart_persistent_observant'),
(5, 'DOG_Simon', 'Siamese', 6.0, 'mocha', 'smart_independent_agile'),
(6, 'DOG_Sid', 'Poodle', 44.4, 'Brown', 'dapper_friendly_hungry'),
(7, 'DOG_Peach', 'Schnauzer', 17.5, 'silver', 'vigilant_active_exuberant'),
(8, 'DOG_Bravo', 'Lab', 35.55, 'latte', 'slow_friendly_smiley'),
(9, 'DOG_Armstrong', 'Pitbull', 40.00, 'brown merle', 'funny_fast_forgetful'),
(10, 'DOG_Garfunkle', 'Dalmation', 36.0, 'mocha', 'collaborative_snuggly_slow');