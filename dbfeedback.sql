
CREATE DATABASE IF NOT EXISTS feedback_db;


USE feedback_db;


CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    feedback_type VARCHAR(50) NOT NULL,
    message TEXT NOT NULL,
    rating INT
);


CREATE INDEX idx_email ON feedback (email);
