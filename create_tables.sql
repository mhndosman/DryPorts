-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS dryportsdata;

-- Use the border_crossing database
USE dryportsdata;

-- Create the trips table
CREATE TABLE IF NOT EXISTS trips (
    trip_no INT AUTO_INCREMENT PRIMARY KEY,
    com_name VARCHAR(100) NOT NULL,
    trip_dest VARCHAR(100) NOT NULL,
    trip_date DATE NOT NULL,
    Trip_allow BOOLEAN DEFAULT FALSE
);

-- Create the manifest table
CREATE TABLE IF NOT EXISTS manifest (
    Pass_serial INT AUTO_INCREMENT PRIMARY KEY,
    trip_no INT,
    Pass_name VARCHAR(100) NOT NULL,
    Pass_ID VARCHAR(50) NOT NULL,
    Pass_seat VARCHAR(10) NOT NULL,
    Trip_allow BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (trip_no) REFERENCES trips(trip_no)
);

-- Create the traffic table
CREATE TABLE IF NOT EXISTS traffic (
    id INT AUTO_INCREMENT PRIMARY KEY,
    trip_no INT,
    frontlights BOOLEAN DEFAULT FALSE,
    backlights BOOLEAN DEFAULT FALSE,
    frontcontact BOOLEAN DEFAULT FALSE,
    backcontact BOOLEAN DEFAULT FALSE,
    frontglass BOOLEAN DEFAULT FALSE,
    backglass BOOLEAN DEFAULT FALSE,
    sideglass BOOLEAN DEFAULT FALSE,
    licence BOOLEAN DEFAULT FALSE,
    driverlicence BOOLEAN DEFAULT FALSE,
    tires BOOLEAN DEFAULT FALSE,
    appearence BOOLEAN DEFAULT FALSE,
    Trip_allow BOOLEAN DEFAULT FALSE,
    notes TEXT,
    FOREIGN KEY (trip_no) REFERENCES trips(trip_no)
);

-- Create the Safety table
CREATE TABLE IF NOT EXISTS Safety (
    id INT AUTO_INCREMENT PRIMARY KEY,
    trip_no INT,
    Trip_allow BOOLEAN DEFAULT FALSE,
    drugs BOOLEAN DEFAULT FALSE,
    pannedpass BOOLEAN DEFAULT FALSE,
    dangerous BOOLEAN DEFAULT FALSE,
    notes TEXT,
    FOREIGN KEY (trip_no) REFERENCES trips(trip_no)
);

-- Create the custom table
CREATE TABLE IF NOT EXISTS custom (
    id INT AUTO_INCREMENT PRIMARY KEY,
    trip_no INT,
    Trip_allow BOOLEAN DEFAULT FALSE,
    smuggling BOOLEAN DEFAULT FALSE,
    taxs BOOLEAN DEFAULT FALSE,
    fees BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (trip_no) REFERENCES trips(trip_no)
);

-- Add indexes for better performance
CREATE INDEX idx_trip_no ON trips(trip_no);
CREATE INDEX idx_manifest_trip_no ON manifest(trip_no);
CREATE INDEX idx_traffic_trip_no ON traffic(trip_no);
CREATE INDEX idx_safety_trip_no ON Safety(trip_no);
CREATE INDEX idx_custom_trip_no ON custom(trip_no);