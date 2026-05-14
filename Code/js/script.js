// =============================================================
// script.js - Custom JavaScript for Fleet Flax Car Rental
// Uses jQuery for DOM manipulation and AJAX form submission
// =============================================================

// Wait until the page (DOM) is fully loaded before running scripts
$(document).ready(function () {

    // -----------------------------------------------------------
    // 1. Set Minimum Date for Pickup & Return Date Fields
    //    Users cannot select past dates
    // -----------------------------------------------------------
    const today = new Date().toISOString().split('T')[0]; // Format: YYYY-MM-DD
    $('#pickup_date').attr('min', today);
    $('#return_date').attr('min', today);


    // -----------------------------------------------------------
    // 2. When Pickup Date Changes -> Update Return Date minimum
    //    Return date must be on or after pickup date
    // -----------------------------------------------------------
    $('#pickup_date').on('change', function () {
        const pickupVal = $(this).val();
        if (pickupVal) {
            // Set return_date minimum to the selected pickup date
            $('#return_date').attr('min', pickupVal);

            // If return date is already set and is before pickup, clear it
            if ($('#return_date').val() && $('#return_date').val() < pickupVal) {
                $('#return_date').val('');
            }
        }
    });


    // -----------------------------------------------------------
    // 3. selectCar() Function
    //    Called when "Book Now" is clicked on a specific car card.
    //    Pre-selects that car in the booking form dropdown.
    // -----------------------------------------------------------
    // This function is defined globally (on window object) so it
    // can be called from inline onclick attributes in index.php
    window.selectCar = function (carName) {
        // Find the <option> in #car select that matches carName
        $('#car').val(carName);
    };


    // -----------------------------------------------------------
    // 4. Reset Modal When It Closes
    //    Clears form fields and hides messages when modal is closed
    // -----------------------------------------------------------
    $('#bookingModal').on('hidden.bs.modal', function () {
        // Reset the HTML form
        document.getElementById('bookingForm').reset();

        // Remove Bootstrap validation classes
        $('#bookingForm').removeClass('was-validated');

        // Hide success and error messages
        $('#successMsg').addClass('d-none');
        $('#errorMsg').addClass('d-none');

        // Re-enable the submit button (in case it was disabled after submit)
        $('#submitBooking').prop('disabled', false).html(
            '<i class="bi bi-check-circle me-1"></i>Confirm Booking'
        );
    });


    // -----------------------------------------------------------
    // 5. Form Validation and AJAX Submission
    //    When "Confirm Booking" button is clicked:
    //    a) Validate all fields using Bootstrap validation
    //    b) Submit via AJAX (no page reload)
    //    c) Show success or error message
    // -----------------------------------------------------------
    $('#submitBooking').on('click', function () {

        const form = document.getElementById('bookingForm');

        // --- Step A: Bootstrap Validation Check ---
        // Add 'was-validated' class to trigger Bootstrap's built-in validation styles
        $(form).addClass('was-validated');

        // checkValidity() returns false if any required field is empty or invalid
        if (!form.checkValidity()) {
            return; // Stop here; Bootstrap will show red error messages
        }

        // --- Step B: Extra Check - Return Date >= Pickup Date ---
        const pickup = $('#pickup_date').val();
        const returnD = $('#return_date').val();

        if (returnD < pickup) {
            $('#errorText').text('Return date cannot be before pickup date.');
            $('#errorMsg').removeClass('d-none');
            return;
        }

        // --- Step C: All valid -> Show loading state on button ---
        const $btn = $(this);
        $btn.prop('disabled', true).html(
            '<span class="spinner-border spinner-border-sm me-2" role="status"></span>Booking...'
        );

        // Hide any previous messages
        $('#successMsg').addClass('d-none');
        $('#errorMsg').addClass('d-none');

        // --- Step D: AJAX POST to booking.php ---
        $.ajax({
            url: 'booking.php',           // Backend PHP file
            type: 'POST',                  // HTTP method
            data: $(form).serialize(),     // Serialize all form fields to key=value string
            dataType: 'json',              // Expect JSON response from PHP

            // --- On Success ---
            success: function (response) {
                if (response.status === 'success') {
                    // Show green success message
                    $('#successMsg').removeClass('d-none');

                    // Reset the form fields
                    form.reset();
                    $(form).removeClass('was-validated');

                    // Keep button disabled after success (booking done)
                    $btn.html('<i class="bi bi-check-circle-fill me-1"></i>Booked!');

                } else {
                    // Show red error message from PHP
                    $('#errorText').text(response.message);
                    $('#errorMsg').removeClass('d-none');

                    // Re-enable button so user can try again
                    $btn.prop('disabled', false).html(
                        '<i class="bi bi-check-circle me-1"></i>Confirm Booking'
                    );
                }
            },

            // --- On AJAX/Network Error ---
            error: function () {
                $('#errorText').text('Connection error. Please check your server is running and try again.');
                $('#errorMsg').removeClass('d-none');

                // Re-enable button
                $btn.prop('disabled', false).html(
                    '<i class="bi bi-check-circle me-1"></i>Confirm Booking'
                );
            }
        });

    }); // end #submitBooking click


    // -----------------------------------------------------------
    // 6. Smooth Navbar Highlight on Scroll
    //    Adds 'scrolled' shadow effect to navbar when page scrolls
    // -----------------------------------------------------------
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 50) {
            $('#mainNavbar').addClass('scrolled');
        } else {
            $('#mainNavbar').removeClass('scrolled');
        }
    });


    // -----------------------------------------------------------
    // 7. Smooth Scroll for Anchor Links in Navbar
    //    Clicking #cars, #home etc. scrolls smoothly
    // -----------------------------------------------------------
    $('a[href^="#"]').on('click', function (e) {
        const target = $(this).attr('href');
        if ($(target).length) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $(target).offset().top - 70 // 70px offset for fixed navbar
            }, 600);
        }
    });


}); // end document.ready
