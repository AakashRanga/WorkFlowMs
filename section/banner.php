<?php include('../section/navbar.php'); ?>

<!-- banner section -->
<section class="bg-image-section position-relative">
    <!-- Background Video -->
    <video autoplay muted loop id="bg-video">
        <source src="../images/bannervideo.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Content -->
    <div class="container text-center text-white position-relative">
        
        <!-- Enhanced Search Bar -->
        <form action="search.php" method="GET" class="mt-4 animate-slide-up search-form">
            <div class="input-group input-group-lg mx-auto" style="max-width: 600px;">
                <input type="text" class="form-control search-input" name="query" placeholder="Search..." aria-label="Search" required>
                <div class="input-group-append">
                    <button class="btn btn-primary search-button" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Custom Styles -->
<style>
    

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
        z-index: 1;
    }

    .container {
        z-index: 2;
    }

    .search-input {
        border-radius: 50px 0 0 50px;
        padding: 15px;
        font-size: 18px;
        border: none;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    }

    .search-button {
        border-radius: 0 50px 50px 0;
        padding: 15px 30px;
        background-color: #007bff;
        border: none;
        font-size: 18px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease;
    }

    .search-button:hover {
        background-color: #0056b3;
    }

    .search-form {
        width: 100%;
        max-width: 600px;
    }
</style>
