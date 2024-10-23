<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORK FLOW MANAGEMENT SYSTEM</title>
    <link rel="icon" type="image/png" href="images/digimed-logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap JS with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom CSS -->
    <link href="css/digimed-css/digimed-style.css" rel="stylesheet">
    <link href="css/digimed-css/responsive.css" rel="stylesheet">

    <style>
        .navbar-brand img {
            width: 120px; /* Adjust logo size for desktop */
        }

        /* Adjust logo size for mobile */
        @media (max-width: 768px) {
            .navbar-brand img {
                width: 100px;
            }
        }

        /* Hover underline animation */
        .hover-underline-animation {
            position: relative;
        }

        .hover-underline-animation::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background: #007bff; /* Bootstrap primary color */
            left: 0;
            bottom: -5px;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .hover-underline-animation:hover::after {
            transform: scaleX(1);
        }

        /* Ensure the offcanvas takes full height */
        .offcanvas {
            height: 100vh; /* Set height to full viewport height */
        }
    </style>
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <!-- Navbar brand with logo on the left -->
            <a class="navbar-brand" href="#"><img src="images/digimed-logo.png" alt="Logo"></a>
            <!-- Toggler button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links (collapsible on mobile) -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item hover-underline-animation">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item hover-underline-animation">
                        <a class="nav-link" href="courses.php">Courses</a>
                    </li>
                    <li class="nav-item hover-underline-animation">
                        <a class="nav-link" href="contact-us.php">Contact</a>
                    </li>
                    <li class="nav-item hover-underline-animation">
                    <a class="nav-link" href="repository.php">Repository</a>
                </li>
                    <li class="nav-item hover-underline-animation">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Navbar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <a class="navbar-brand" href="#"><img src="images/digimed-logo.png" alt="Logo"></a>
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav flex-grow-1 pe-3">
                <li class="nav-item hover-underline-animation">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item hover-underline-animation">
                    <a class="nav-link" href="courses.php">Courses</a>
                </li>
                <li class="nav-item hover-underline-animation">
                    <a class="nav-link" href="contact-us.php">Contact</a>
                </li>
                <li class="nav-item hover-underline-animation">
                    <a class="nav-link" href="repository.php">Repository</a>
                </li>
                <li class="nav-item hover-underline-animation">
                    <a class="nav-link" href="faq.php">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</header>

</body>
</html>
