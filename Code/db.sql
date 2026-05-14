-- ============================================================
-- db.sql - Database Setup for Fleet Flax Car Rental
-- ============================================================
-- HOW TO IMPORT:
--   Option 1: Open phpMyAdmin > Click "Import" > Choose this file > Click "Go"
--   Option 2: Run in MySQL terminal:
--             mysql -u root -p < db.sql
-- ============================================================

-- Step 1: Create the database (if it doesn't exist)
CREATE DATABASE IF NOT EXISTS fleet_flax
    CHARACTER SET utf8
    COLLATE utf8_general_ci;

-- Step 2: Select / use the database
USE fleet_flax;

-- Step 3: Create the bookings table
-- This table stores all car booking records from the website.
CREATE TABLE IF NOT EXISTS bookings (
    id          INT(11)       NOT NULL AUTO_INCREMENT,  -- Unique booking ID (auto-assigned)
    name        VARCHAR(100)  NOT NULL,                 -- Customer's full name
    email       VARCHAR(150)  NOT NULL,                 -- Customer's email address
    car         VARCHAR(100)  NOT NULL,                 -- Name of the booked car
    pickup_date DATE          NOT NULL,                 -- Date of car pickup
    return_date DATE          NOT NULL,                 -- Date of car return
    created_at  TIMESTAMP     DEFAULT CURRENT_TIMESTAMP,-- When booking was made (auto)
    PRIMARY KEY (id)                                    -- id is the primary key
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ============================================================
-- (Optional) Insert some sample / demo bookings
-- You can delete these if you don't need demo data
-- ============================================================
INSERT INTO bookings (name, email, car, pickup_date, return_date) VALUES
('Rahul Sharma',  'rahul@example.com',  'Maruti Swift',   '2025-07-01', '2025-07-03'),
('Priya Patel',   'priya@example.com',  'Hyundai Creta',  '2025-07-05', '2025-07-08'),
('Amit Joshi',    'amit@example.com',   'Toyota Innova',  '2025-07-10', '2025-07-12');

-- ============================================================
-- To VIEW all bookings, run:
--   SELECT * FROM bookings; 
-- ============================================================
