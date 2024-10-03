<?php include ("navbar.php")?>
<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    .steps-container img {
        width: 200px;
        height: 200px;
    }

    .row .col-lg-3 {
        border: 1px solid black;
        border-radius: 50%;
        width: 260px;
        height: 253px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .steps-container h1 {
        font-size: 1.5em;
        margin: 10px 0;
    }

    .steps-container p {
        font-size: 1em;
        color: gray;
    }

    .steps-container .row {
        display: grid; /* Fixed typo from 'gird' to 'grid' */
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
    }

    .icon {
        font-size: 40px; /* Adjust size as needed */
        color: #007bff; /* Change color if desired */
        margin-bottom: 10px; /* Spacing between icon and text */
    }
</style>

<section class="steps-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <i class="fas fa-user icon"></i>
                <h1>Registration</h1>
                <p>Hii hello</p>
            </div>
            <div class="col-lg-3">
                <i class="fas fa-check icon"></i>
                <h1>Confirmation</h1>
                <p>Hii hello</p>
            </div>
            <div class="col-lg-3">
                <i class="fas fa-envelope icon"></i>
                <h1>Verification</h1>
                <p>Hii hello</p>
            </div>
            <div class="col-lg-3">
                <i class="fas fa-thumbs-up icon"></i>
                <h1>Success</h1>
                <p>Hii hello</p>
            </div>
        </div>
    </div>
</section>
