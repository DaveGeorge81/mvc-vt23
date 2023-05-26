CREATE TABLE player (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 
    name VARCHAR(255) NOT NULL, 
    money INTEGER NOT NULL, 
    rounds_played INTEGER NOT NULL
    );

CREATE TABLE dealer (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 
    hands_played INTEGER NOT NULL, 
    hands_won INTEGER NOT NULL, 
    hands_lost INTEGER NOT NULL, 
    hands_push INTEGER NOT NULL
    );

INSERT INTO dealer (hands_played, hands_won, hands_lost, hands_push)
VALUES (0, 0, 0, 0);