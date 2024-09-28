<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORK FLOW MANAGEMENT SYSTEM</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/responsive.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-large sticky-top ">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">WFMS</a> -->
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-none d-lg-block" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item hover-underline-animation">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item hover-underline-animation">
                        <a class="nav-link" href="">About Us</a>
                    </li>
                   
                    <li class="nav-item hover-underline-animation">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item hover-underline-animation">
                        <a class="nav-link" href="">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown hover-underline-animation">
                        <a class="nav-link dropdown-toggle" href="#servicesection" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Brand
                        </a>
                        <ul class="dropdown-menu custom-dropdown-menus" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../../index.php">VMAGO</a></li>
                            <li><a class="dropdown-item" href="researcherhub/index.php">Researcher Hub</a></li>
                            <li><a class="dropdown-item" href="#">Digi Med Global</a></li>
                          
                        </ul>
                    </li>
                   

                    <li class="nav-item sign hover-underline-animation ">
                        <a class="nav-link" href="#" id="sign-in">Sign In</a>
                    </li>

                </ul>
            </div>
            <!-- mobile view  -->
            <!-- Offcanvas for mobile view -->
            <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">WFMS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasServicesToggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Brand <i class="fa fa-angle-down"></i>

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasServicesToggle">
                                <li><a class="dropdown-item" href="#">VMAGO</a></li>
                                <li><a class="dropdown-item" href="#">Thesis Writing Assistance</a></li>
                                <li><a class="dropdown-item" href="#">Dissertation/Synopsis Writing Assistance</a></li>
                                <li><a class="dropdown-item" href="#">Patents</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasPublicationToggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Publication<i class="fa fa-angle-down"></i>

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasPublicationToggle">
                                <li><a class="dropdown-item" href="#">Scopus</a></li>
                                <li><a class="dropdown-item" href="#">Web Of Science</a></li>
                                <li><a class="dropdown-item" href="#">UGC-CARE</a></li>
                                <li><a class="dropdown-item" href="#">PubMed</a></li>
                            </ul>
                        </li>
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasPoliciesToggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Policies<i class="fa fa-angle-down"></i>

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasPoliciesToggle">
                                <li><a class="dropdown-item" href="#">Define authorship in your manuscript</a></li>
                                <li><a class="dropdown-item" href="#">Comprehend our data sharing policies</a></li>
                                <li><a class="dropdown-item" href="#">Author contributions</a></li>
                                <li><a class="dropdown-item" href="#">Conflict of Interest</a></li>
                                <li><a class="dropdown-item" href="#">Acknowledge the institute research</a></li>
                                <li><a class="dropdown-item" href="#">Funding resources</a></li>
                                <li><a class="dropdown-item" href="#">Our editorial policies</a></li>
                                <li><a class="dropdown-item" href="#">Explain your reasonable request </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasEventsToggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Events<i class="fa fa-angle-down"></i>

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasEventsToggle">
                                <li><a class="dropdown-item" href="#">Our Past Events</a></li>
                                <li><a class="dropdown-item" href="#">Our Upcoming Events</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="sign-in">Sign In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = document.querySelectorAll('.dropdown');

            dropdowns.forEach(function(dropdown) {
                const toggle = dropdown.querySelector('.dropdown-toggle');
                const menu = dropdown.querySelector('.dropdown-menu');

                toggle.addEventListener('click', function(event) {
                    event.stopPropagation(); // Prevent event from bubbling up

                    // Close all other dropdowns
                    dropdowns.forEach(function(otherDropdown) {
                        if (otherDropdown !== dropdown) {
                            const otherMenu = otherDropdown.querySelector('.dropdown-menu');
                            otherMenu.style.display = 'none';
                        }
                    });

                    // Toggle the current dropdown
                    if (window.getComputedStyle(menu).display === 'block') {
                        menu.style.display = 'none';
                    } else {
                        menu.style.display = 'block';
                    }
                });
            });

            // Close all dropdowns if click outside
            document.addEventListener('click', function() {
                dropdowns.forEach(function(dropdown) {
                    const menu = dropdown.querySelector('.dropdown-menu');
                    menu.style.display = 'none';
                });
            });
        });
    </script>
</body>

</html>