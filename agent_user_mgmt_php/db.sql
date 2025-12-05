CREATE TABLE users (
 id INTEGER PRIMARY KEY AUTOINCREMENT,
 name TEXT,
 email TEXT UNIQUE,
 password TEXT,
 role TEXT
);

INSERT INTO users (name,email,password,role) VALUES
('Admin One','admin@example.com','adminpass','admin'),
('Player One','player@example.com','playerpass','player'),
('Agent One','agent@example.com','agentpass','agent'),
('Club Manager One','manager@example.com','managerpass','club_manager');
