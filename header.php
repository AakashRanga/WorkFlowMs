<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORK FLOW MANAGEMENT SYSTEM</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-large sticky-top ">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">WFMS</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#servicesection" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" >
                            Services
                        </a>
                        <ul class="dropdown-menu custom-dropdown-menus" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Research/Review Paper Writing Assistance</a></li>
                            <li><a class="dropdown-item" href="#">Thesis Writing Assistance</a></li>
                            <li><a class="dropdown-item" href="#">Dissertation/Synopsis Writing Assistance</a></li>
                            <li><a class="dropdown-item" href="#">Patents</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
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

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Research Impact
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <div class="research-impact">
                                <div id="service1" class="service-content">
                                    <img src="images/research-impact.png" alt="Research Assistance Image"
                                        style="width:300px;height:200px">
                                    <h2>How to Increase Research Impact?</h2>
                                    <p>To enhance the impact of your research, consider these key strategies:</p>
                                </div>

                                <div id="service2" class="service-content">
                                    <img src="images/sharing-research.png" alt="Sharing Research Work Image" style="width: 300px;height: 200px;">
                                    <h2>Sharing Your Research Work</h2>
                                    <p>Disseminate your research findings through various channels, such as online
                                        journals, research networks, and social media, to reach a wider audience and
                                        engage with the academic community.</p>
                                </div>

                                <div id="service3" class="service-content">
                                    <img src="images/research-blog.png" alt="Writing Research Blogs Image"
                                        style="width:300px">
                                    <h2>Write Research Blogs</h2>
                                    <p>Share your research insights and updates through blogs. This helps in making your
                                        research more accessible and engaging to both academic and non-academic
                                        audiences.</p>
                                </div>

                                <div id="service4" class="service-content">
                                    <img src="images/presentation-workshop.png" alt="Presenting Work Image"
                                        style="width:300px">
                                    <h2>Present Your Work in Seminars and Workshops</h2>
                                    <p>Presenting your research at seminars, workshops, and conferences offers valuable
                                        attention and feedback from peers and experts, which can enhance the visibility
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
                    <li class="nav-item dropdown">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Events
                        </a>
                        <ul class="dropdown-menu custom-dropdown-menu events" aria-labelledby="navbarDropdown3">
                            <li><a class="dropdown-item" href="#">Our past events</a></li>
                            <li><a class="dropdown-item" href="#">Our Upcoming events</a></li>

                        </ul>
                    </li>

                    <li class="nav-item sign">
                        <a class="nav-link" href="#" id="sign-in">Sign In</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>