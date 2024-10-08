<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORK FLOW MANAGEMENT SYSTEM</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
     <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Bootstrap JS with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../digimed/css/digimed-style.css" rel="stylesheet">
    <link href="../digimed/css/responsive.css" rel="stylesheet">

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
    </style>
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <!-- Navbar brand with logo on the left -->
            <a class="navbar-brand" href="#"><img src="../../images/digimed-logo.png" alt="Logo"></a>
            <!-- Toggler button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

</body>
</html>
