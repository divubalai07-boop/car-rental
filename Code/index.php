<?php
// index.php - Main Home Page
// Fleet Flax Car Rental Website
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleet Flax - Speed & Safety With Us</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="mainNavbar">
        <div class="container">
            <!-- Brand Logo & Name -->
            <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                <i class="bi bi-car-front-fill fs-3 brand-icon"></i>
                <div>
                    <span class="brand-name">Fleet Flax</span>
                    <small class="d-block slogan-text">Speed &amp; Safety With Us</small>
                </div>
            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav Links -->
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-2">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cars">Our Cars</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how-it-works">How It Works</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item">
                        <!-- Book Now button opens modal -->
                        <button class="btn btn-warning fw-semibold px-4" data-bs-toggle="modal" data-bs-target="#bookingModal">
                            <i class="bi bi-calendar-check me-1"></i> Book Now
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ===== HERO SECTION ===== -->
    <section class="hero-section" id="home">
        <div class="container text-center text-white py-5">
            <h1 class="hero-title">Your Perfect Ride Awaits</h1>
            <p class="hero-subtitle">Rent a car with ease. Affordable prices, well-maintained fleet, and 24/7 support.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
                <a href="#cars" class="btn btn-warning btn-lg fw-semibold px-5">
                    <i class="bi bi-car-front me-2"></i>View Cars
                </a>
                <button class="btn btn-outline-light btn-lg px-5" data-bs-toggle="modal" data-bs-target="#bookingModal">
                    <i class="bi bi-calendar-plus me-2"></i>Book Now
                </button>
            </div>

            <!-- Quick Stats -->
            <div class="row justify-content-center mt-5 g-3">
                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <h3 class="stat-num">50+</h3>
                        <p class="stat-label">Cars Available</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <h3 class="stat-num">1000+</h3>
                        <p class="stat-label">Happy Customers</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <h3 class="stat-num">10+</h3>
                        <p class="stat-label">Cities Covered</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <h3 class="stat-num">24/7</h3>
                        <p class="stat-label">Customer Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CAR LISTINGS SECTION ===== -->
    <section class="py-5 bg-light" id="cars">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Available Cars</h2>
                <p class="text-muted">Choose from our wide range of well-maintained vehicles</p>
            </div>

            <!-- Car Cards Row -->
            <div class="row g-4">

                <!-- Car 1: Maruti Swift -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card car-card h-100 shadow-sm">
                        <div class="car-img-wrap">
                            <img src="assets/images/swift.jpg"
                                 class="card-img-top car-img"
                                 alt="Maruti Swift"
                                 onerror="this.src='https://placehold.co/400x220/1a1a2e/FFD700?text=Maruti+Swift'">
                            <span class="badge badge-available">Available</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Maruti Swift</h5>
                            <p class="card-text text-muted small">A compact hatchback perfect for city rides. Fuel-efficient and easy to drive.</p>
                            <ul class="car-features list-unstyled small text-muted mb-3">
                                <li><i class="bi bi-people-fill me-2 text-warning"></i>5 Seats</li>
                                <li><i class="bi bi-fuel-pump-fill me-2 text-warning"></i>Petrol / 20 km/l</li>
                                <li><i class="bi bi-gear-wide-connected me-2 text-warning"></i>Manual</li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price-tag">&#8377;800 <small class="text-muted fw-normal">/day</small></span>
                                <!-- Book Now triggers modal and pre-selects this car -->
                                <button class="btn btn-warning btn-sm fw-semibold"
                                        data-bs-toggle="modal"
                                        data-bs-target="#bookingModal"
                                        onclick="selectCar('Maruti Swift')">
                                    <i class="bi bi-calendar-check me-1"></i>Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 2: Hyundai Creta -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card car-card h-100 shadow-sm">
                        <div class="car-img-wrap">
                            <img src="assets/images/creta.jpg"
                                 class="card-img-top car-img"
                                 alt="Hyundai Creta"
                                 onerror="this.src='https://placehold.co/400x220/1a1a2e/FFD700?text=Hyundai+Creta'">
                            <span class="badge badge-available">Available</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Hyundai Creta</h5>
                            <p class="card-text text-muted small">A stylish and powerful SUV, ideal for long trips and family outings.</p>
                            <ul class="car-features list-unstyled small text-muted mb-3">
                                <li><i class="bi bi-people-fill me-2 text-warning"></i>5 Seats</li>
                                <li><i class="bi bi-fuel-pump-fill me-2 text-warning"></i>Diesel / 18 km/l</li>
                                <li><i class="bi bi-gear-wide-connected me-2 text-warning"></i>Automatic</li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price-tag">&#8377;1500 <small class="text-muted fw-normal">/day</small></span>
                                <button class="btn btn-warning btn-sm fw-semibold"
                                        data-bs-toggle="modal"
                                        data-bs-target="#bookingModal"
                                        onclick="selectCar('Hyundai Creta')">
                                    <i class="bi bi-calendar-check me-1"></i>Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 3: Toyota Innova -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card car-card h-100 shadow-sm">
                        <div class="car-img-wrap">
                            <img src="assets/images/innova.jpg"
                                 class="card-img-top car-img"
                                 alt="Toyota Innova"
                                 onerror="this.src='https://placehold.co/400x220/1a1a2e/FFD700?text=Toyota+Innova'">
                            <span class="badge badge-available">Available</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Toyota Innova</h5>
                            <p class="card-text text-muted small">A spacious MPV perfect for group travel. Comfort and reliability at its best.</p>
                            <ul class="car-features list-unstyled small text-muted mb-3">
                                <li><i class="bi bi-people-fill me-2 text-warning"></i>7 Seats</li>
                                <li><i class="bi bi-fuel-pump-fill me-2 text-warning"></i>Diesel / 14 km/l</li>
                                <li><i class="bi bi-gear-wide-connected me-2 text-warning"></i>Manual</li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price-tag">&#8377;2000 <small class="text-muted fw-normal">/day</small></span>
                                <button class="btn btn-warning btn-sm fw-semibold"
                                        data-bs-toggle="modal"
                                        data-bs-target="#bookingModal"
                                        onclick="selectCar('Toyota Innova')">
                                    <i class="bi bi-calendar-check me-1"></i>Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 4: Honda City -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card car-card h-100 shadow-sm">
                        <div class="car-img-wrap">
                            <img src="assets/images/honda_city.jpg"
                                 class="card-img-top car-img"
                                 alt="Honda City"
                                 onerror="this.src='https://placehold.co/400x220/1a1a2e/FFD700?text=Honda+City'">
                            <span class="badge badge-available">Available</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Honda City</h5>
                            <p class="card-text text-muted small">A premium sedan with modern features and a smooth drive for all occasions.</p>
                            <ul class="car-features list-unstyled small text-muted mb-3">
                                <li><i class="bi bi-people-fill me-2 text-warning"></i>5 Seats</li>
                                <li><i class="bi bi-fuel-pump-fill me-2 text-warning"></i>Petrol / 17 km/l</li>
                                <li><i class="bi bi-gear-wide-connected me-2 text-warning"></i>CVT Automatic</li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price-tag">&#8377;1200 <small class="text-muted fw-normal">/day</small></span>
                                <button class="btn btn-warning btn-sm fw-semibold"
                                        data-bs-toggle="modal"
                                        data-bs-target="#bookingModal"
                                        onclick="selectCar('Honda City')">
                                    <i class="bi bi-calendar-check me-1"></i>Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 5: Tata Nexon -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card car-card h-100 shadow-sm">
                        <div class="car-img-wrap">
                            <img src="assets/images/nexon.jpg"
                                 class="card-img-top car-img"
                                 alt="Tata Nexon"
                                 onerror="this.src='https://placehold.co/400x220/1a1a2e/FFD700?text=Tata+Nexon'">
                            <span class="badge badge-popular">Popular</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Tata Nexon</h5>
                            <p class="card-text text-muted small">India's safest car! A compact SUV with 5-star safety rating and bold styling.</p>
                            <ul class="car-features list-unstyled small text-muted mb-3">
                                <li><i class="bi bi-people-fill me-2 text-warning"></i>5 Seats</li>
                                <li><i class="bi bi-fuel-pump-fill me-2 text-warning"></i>Diesel / 17 km/l</li>
                                <li><i class="bi bi-gear-wide-connected me-2 text-warning"></i>Manual / AMT</li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price-tag">&#8377;1100 <small class="text-muted fw-normal">/day</small></span>
                                <button class="btn btn-warning btn-sm fw-semibold"
                                        data-bs-toggle="modal"
                                        data-bs-target="#bookingModal"
                                        onclick="selectCar('Tata Nexon')">
                                    <i class="bi bi-calendar-check me-1"></i>Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Car 6: Kia Seltos -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card car-card h-100 shadow-sm">
                        <div class="car-img-wrap">
                            <img src="assets/images/seltos.jpg"
                                 class="card-img-top car-img"
                                 alt="Kia Seltos"
                                 onerror="this.src='https://placehold.co/400x220/1a1a2e/FFD700?text=Kia+Seltos'">
                            <span class="badge badge-available">Available</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Kia Seltos</h5>
                            <p class="card-text text-muted small">A feature-loaded SUV with premium interiors and advanced tech for the road.</p>
                            <ul class="car-features list-unstyled small text-muted mb-3">
                                <li><i class="bi bi-people-fill me-2 text-warning"></i>5 Seats</li>
                                <li><i class="bi bi-fuel-pump-fill me-2 text-warning"></i>Petrol / 16 km/l</li>
                                <li><i class="bi bi-gear-wide-connected me-2 text-warning"></i>DCT Automatic</li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price-tag">&#8377;1600 <small class="text-muted fw-normal">/day</small></span>
                                <button class="btn btn-warning btn-sm fw-semibold"
                                        data-bs-toggle="modal"
                                        data-bs-target="#bookingModal"
                                        onclick="selectCar('Kia Seltos')">
                                    <i class="bi bi-calendar-check me-1"></i>Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end row -->
        </div>
    </section>

    <!-- ===== HOW IT WORKS SECTION ===== -->
    <section class="py-5" id="how-it-works">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">How It Works</h2>
                <p class="text-muted">Book your car in just 3 simple steps</p>
            </div>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="step-box">
                        <div class="step-icon"><i class="bi bi-search"></i></div>
                        <h5 class="fw-bold mt-3">1. Choose a Car</h5>
                        <p class="text-muted small">Browse our fleet and pick the car that suits your need and budget.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-box">
                        <div class="step-icon"><i class="bi bi-calendar2-check"></i></div>
                        <h5 class="fw-bold mt-3">2. Book Online</h5>
                        <p class="text-muted small">Fill in your details and select pickup and return dates. Easy and quick!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-box">
                        <div class="step-icon"><i class="bi bi-car-front"></i></div>
                        <h5 class="fw-bold mt-3">3. Enjoy Your Ride</h5>
                        <p class="text-muted small">Pick up your car and hit the road with comfort and confidence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT / FOOTER SECTION ===== -->
    <footer class="footer-section py-5" id="contact">
        <div class="container">
            <div class="row g-4">
                <!-- Brand Info -->
                <div class="col-md-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-car-front-fill fs-2 text-warning"></i>
                        <div>
                            <h5 class="fw-bold text-white mb-0">Fleet Flax</h5>
                            <small class="text-warning">Speed &amp; Safety With Us</small>
                        </div>
                    </div>
                    <p class="text-secondary small">Your trusted car rental partner. We provide quality vehicles at affordable prices for every journey.</p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4">
                    <h6 class="text-white fw-semibold mb-3">Quick Links</h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#home" class="footer-link"><i class="bi bi-chevron-right me-1"></i>Home</a></li>
                        <li class="mb-2"><a href="#cars" class="footer-link"><i class="bi bi-chevron-right me-1"></i>Our Cars</a></li>
                        <li class="mb-2"><a href="#how-it-works" class="footer-link"><i class="bi bi-chevron-right me-1"></i>How It Works</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-md-4">
                    <h6 class="text-white fw-semibold mb-3">Contact Us</h6>
                    <ul class="list-unstyled small text-secondary">
                        <li class="mb-2"><i class="bi bi-geo-alt-fill text-warning me-2"></i>123 Main Street, Ahmedabad, Gujarat</li>
                        <li class="mb-2"><i class="bi bi-telephone-fill text-warning me-2"></i>+91 98765 43210</li>
                        <li class="mb-2"><i class="bi bi-envelope-fill text-warning me-2"></i>info@fleetflax.com</li>
                    </ul>
                </div>
            </div>

            <hr class="border-secondary mt-4">
            <p class="text-center text-secondary small mb-0">
                &copy; 2025 Fleet Flax. All Rights Reserved. | Built for College Assignment
            </p>
        </div>
    </footer>

    <!-- ===== BOOKING MODAL ===== -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header modal-header-custom">
                    <h5 class="modal-title fw-bold text-white" id="bookingModalLabel">
                        <i class="bi bi-calendar-check me-2"></i>Book Your Car
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal Body: Booking Form -->
                <div class="modal-body p-4">

                    <!-- Success Message (hidden by default, shown after submit) -->
                    <div id="successMsg" class="alert alert-success d-none" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        <strong>Booking Confirmed!</strong> Your car has been booked successfully.
                    </div>

                    <!-- Error Message (hidden by default) -->
                    <div id="errorMsg" class="alert alert-danger d-none" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <span id="errorText">Something went wrong. Please try again.</span>
                    </div>

                    <!-- Booking Form - action goes to booking.php -->
                    <form id="bookingForm" action="booking.php" method="POST" novalidate>

                        <!-- Full Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                            <input type="text"
                                   class="form-control"
                                   id="name"
                                   name="name"
                                   placeholder="Enter your full name"
                                   required>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email Address <span class="text-danger">*</span></label>
                            <input type="email"
                                   class="form-control"
                                   id="email"
                                   name="email"
                                   placeholder="Enter your email"
                                   required>
                            <div class="invalid-feedback">Please enter a valid email.</div>
                        </div>

                        <!-- Car Selection -->
                        <div class="mb-3">
                            <label for="car" class="form-label fw-semibold">Select Car <span class="text-danger">*</span></label>
                            <select class="form-select" id="car" name="car" required>
                                <option value="">-- Choose a Car --</option>
                                <option value="Maruti Swift">Maruti Swift - &#8377;800/day</option>
                                <option value="Hyundai Creta">Hyundai Creta - &#8377;1500/day</option>
                                <option value="Toyota Innova">Toyota Innova - &#8377;2000/day</option>
                                <option value="Honda City">Honda City - &#8377;1200/day</option>
                                <option value="Tata Nexon">Tata Nexon - &#8377;1100/day</option>
                                <option value="Kia Seltos">Kia Seltos - &#8377;1600/day</option>
                                <option value="BMW">bmw - &#8377;8000/day</option>
                            </select>
                            <div class="invalid-feedback">Please select a car.</div>
                        </div>

                        <!-- Pickup & Return Date in 2 columns -->
                        <div class="row g-3">
                            <div class="col-6">
                                <label for="pickup_date" class="form-label fw-semibold">Pickup Date <span class="text-danger">*</span></label>
                                <input type="date"
                                       class="form-control"
                                       id="pickup_date"
                                       name="pickup_date"
                                       required>
                                <div class="invalid-feedback">Select pickup date.</div>
                            </div>
                            <div class="col-6">
                                <label for="return_date" class="form-label fw-semibold">Return Date <span class="text-danger">*</span></label>
                                <input type="date"
                                       class="form-control"
                                       id="return_date"
                                       name="return_date"
                                       required>
                                <div class="invalid-feedback">Select return date.</div>
                            </div>
                        </div>

                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Cancel
                    </button>
                    <!-- Submit button triggers JS form validation & AJAX submit -->
                    <button type="button" class="btn btn-warning fw-semibold px-4" id="submitBooking">
                        <i class="bi bi-check-circle me-1"></i>Confirm Booking
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- ===== SCRIPTS ===== -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>

</body>
</html>
