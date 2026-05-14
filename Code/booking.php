<?php
// booking.php - Handles Booking Form Submission
// Fleet Flax Car Rental Website
// This file receives POST data from the booking form,
// validates it, and saves it to the MySQL database.

// Include database connection
require_once 'config.php';

// -------------------------------------------------------
// Only process if request is POST
// -------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ---- Step 1: Collect & Sanitize Input ----
    // trim() removes extra spaces
    // htmlspecialchars() prevents XSS attacks
    $name        = trim(htmlspecialchars($_POST['name'] ?? ''));
    $email       = trim(htmlspecialchars($_POST['email'] ?? ''));
    $car         = trim(htmlspecialchars($_POST['car'] ?? ''));
    $pickup_date = trim($_POST['pickup_date'] ?? '');
    $return_date = trim($_POST['return_date'] ?? '');

    // ---- Step 2: Server-Side Validation ----
    $errors = [];

    // Check all required fields
    if (empty($name)) {
        $errors[] = "Full name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email address is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Check if email format is valid
        $errors[] = "Please enter a valid email address.";
    }

    if (empty($car)) {
        $errors[] = "Please select a car.";
    }

    if (empty($pickup_date)) {
        $errors[] = "Pickup date is required.";
    }

    if (empty($return_date)) {
        $errors[] = "Return date is required.";
    }

    // Check that return date is after pickup date
    if (!empty($pickup_date) && !empty($return_date)) {
        if ($return_date < $pickup_date) {
            $errors[] = "Return date cannot be before pickup date.";
        }
        // Check pickup date is not in the past
        if ($pickup_date < date('Y-m-d')) {
            $errors[] = "Pickup date cannot be in the past.";
        }
    }

    // ---- Step 3: If no errors, insert into database ----
    if (empty($errors)) {

        // Use prepared statements to prevent SQL Injection
        $sql = "INSERT INTO bookings (name, email, car, pickup_date, return_date)
                VALUES (?, ?, ?, ?, ?)";

        // Prepare the SQL statement
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind parameters: s = string, s = string, s = string, s = string, s = string
            $stmt->bind_param("sssss", $name, $email, $car, $pickup_date, $return_date);

            // Execute the query
            if ($stmt->execute()) {
                // SUCCESS: Return JSON success response (used by AJAX)
                echo json_encode([
                    'status'  => 'success',
                    'message' => 'Your booking has been confirmed! We will contact you shortly.'
                ]);
            } else {
                // Database execution error
                echo json_encode([
                    'status'  => 'error',
                    'message' => 'Booking failed. Please try again later.'
                ]);
            }

            // Close statement
            $stmt->close();

        } else {
            // Statement preparation error
            echo json_encode([
                'status'  => 'error',
                'message' => 'Database error. Please contact support.'
            ]);
        }

    } else {
        // ---- Validation failed: return errors ----
        echo json_encode([
            'status'  => 'error',
            'message' => implode(' ', $errors)
        ]);
    }

    // Close database connection
    $conn->close();

} else {
    // If someone visits booking.php directly (not via POST), redirect home
    header('Location: index.php');
    exit;
}
?>
