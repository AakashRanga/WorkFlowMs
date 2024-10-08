<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORK FLOW MANAGEMENT SYSTEM</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
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
                    <li class="nav-item dropdown hover-underline-animation ">
                        <a class="nav-link dropdown-toggle" href="#servicesection" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu custom-dropdown-menus" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Research/Review Paper Writing Assistance</a></li>
                            <li><a class="dropdown-item" href="#">Thesis Writing Assistance</a></li>
                            <li><a class="dropdown-item" href="#">Dissertation/Synopsis Writing Assistance</a></li>
                            <li><a class="dropdown-item" href="#">Patents</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hover-underline-animation">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Publication
                        </a>
                        <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item" href="#">Scopus</a></li>
                            <li><a class="dropdown-item" href="#">Web Of Science</a></li>
                            <li><a class="dropdown-item" href="#">UGC-CARE</a></li>
                            <li><a class="dropdown-item" href="#">PubMed</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown hover-underline-animation">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Research Impact
                        </a>
                        <ul class="dropdown-menu custom-dropdown-menu-research" aria-labelledby="navbarDropdown3">
                            <div class="research-impact">
                                <div id="service1" class="service-content">
                                    <img src="images/research-impact.png" alt="Research Assistance Image"
                                        style="width:315px;height:200px">
                                    <h2>How to Increase Research Impact?</h2>
                                    <p>To enhance the impact of your research, consider these key strategies:</p>
                                </div>

                                <div id="service2" class="service-content">
                                    <img src="images/sharing-research.png" alt="Sharing Research Work Image"
                                        style="width: 315px;height: 200px;">
                                    <h2>Sharing Your Research Work</h2>
                                    <p>Disseminate your research findings through various channels, such as online
                                        journals, research networks, and social media, to reach a wider audience and
                                        engage with the academic community.</p>
                                </div>

                                <div id="service3" class="service-content">
                                    <img src="images/research-blog.png" alt="Writing Research Blogs Image"
                                        style="width:315px">
                                    <h2>Write Research Blogs</h2>
                                    <p>Share your research insights and updates through blogs. This helps in making
                                        your
                                        research more accessible and engaging to both academic and non-academic
                                        audiences.</p>
                                </div>

                                <div id="service4" class="service-content">
                                    <img src="images/presentation-workshop.png" alt="Presenting Work Image"
                                        style="width:315px">
                                    <h2>Present Your Work in Seminars and Workshops</h2>
                                    <p>Presenting your research at seminars, workshops, and conferences offers
                                        valuable
                                        attention and feedback from peers and experts, which can enhance the
                                        visibility
                                        and impact of your work.</p>
                                </div>

                                <!-- <div id="service5" class="service-content">
                                        <img src="images/research-impact.png" alt="Preparing Scientific Videos Image">
                                        <h2>Prepare Scientific Videos</h2>
                                        <p>Create videos that simplify and visually present your research. Share these on
                                            video platforms and social media to attract a broader audience and enhance your
                                            research's visibility.</p>
                                    </div> -->
                            </div>
                        </ul>

                    </li>
                    <li class="nav-item dropdown hover-underline-animation">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Policies
                        </a>
                        <ul class="dropdown-menu custom-dropdown-menu-policies" aria-labelledby="navbarDropdown3">
                            <li><a class="dropdown-item" href="#">Define authorship in your manuscript</a></li>
                            <li><a class="dropdown-item" href="#">Comprehend our data sharing policies</a></li>
                            <li><a class="dropdown-item" href="#">Author contributions</a></li>
                            <li><a class="dropdown-item" href="#">Conflict of Interest</a></li>
                            <li><a class="dropdown-item" href="#">Acknowledge the institute where you have conducted
                                    your research</a></li>
                            <li><a class="dropdown-item" href="#">Funding resources</a></li>
                            <li><a class="dropdown-item" href="#">Our editorial policies</a></li>
                            <li><a class="dropdown-item" href="#">Explain your reasonable request data sharing
                                    policy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hover-underline-animation">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Events
                        </a>
                        <ul class="dropdown-menu custom-dropdown-menu events" aria-labelledby="navbarDropdown3">
                            <li><a class="dropdown-item" href="#">Our past events</a></li>
                            <li><a class="dropdown-item" href="#">Our Upcoming events</a></li>

                        </ul>
                    </li>

                    <li class="nav-item sign hover-underline-animation ">
                        <a class="nav-link" href="login_page.php" id="sign-in">Sign In</a>
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
                                Services <i class="fa fa-angle-down"></i>

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasServicesToggle">
                                <li><a class="dropdown-item" href="#">Research/Review Paper Writing Assistance</a></li>
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
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasResearchImpactToggle"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Research Impact<i class="fa fa-angle-down"></i>

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasResearchImpactToggle">
                                <li><a class="dropdown-item" href="#">How to Increase Research Impact?</a></li>
                                <li><a class="dropdown-item" href="#">Sharing Your Research Work</a></li>
                                <li><a class="dropdown-item" href="#">Write Research Blogs</a></li>
                                <li><a class="dropdown-item" href="#">Present Your Work in Seminars & Workshops</a>
                                </li>
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
        document.addEventListener('DOMContentLoaded', function () {
            const dropdowns = document.querySelectorAll('.dropdown');

            dropdowns.forEach(function (dropdown) {
                const toggle = dropdown.querySelector('.dropdown-toggle');
                const menu = dropdown.querySelector('.dropdown-menu');

                toggle.addEventListener('click', function (event) {
                    event.stopPropagation(); // Prevent event from bubbling up

                    // Close all other dropdowns
                    dropdowns.forEach(function (otherDropdown) {
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
            document.addEventListener('click', function () {
                dropdowns.forEach(function (dropdown) {
                    const menu = dropdown.querySelector('.dropdown-menu');
                    menu.style.display = 'none';
                });
            });
        });


    </script>
</body>

</html>