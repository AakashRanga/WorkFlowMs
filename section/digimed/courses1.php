<?php include("digimed-navbar.php") ?>

<style>
    body {
        font-family: Roobert, serif !important;

    }

    .register-section {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    p {
        font-size: 16px;
        line-height: 1.5;
        color: #666;
    }

    .form-floating {
        margin-bottom: 20px;
    }

    .form-control {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        outline: none;
    }

    .dropdown-content {
        display: none;
        position: relative;
        background-color: #ffffff;
        min-width: 540px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        z-index: 1;
        /* max-height: 200px; */
        overflow-y: auto;
        border-radius: 5px;
    }

    .dropdown-content label {
        display: block;
        padding: 10px;
        cursor: pointer;
        color: #333;
    }

    .dropdown-content label:hover {
        background-color: #f8f9fa;
    }

    .error-message {
        color: red;
        font-size: 0.9em;
        margin-top: 5px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        color: white;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .courses-register-section img {
        width: 620px;
        height: 468px;

    }


    .courses-register-section .row {
        padding-right: 0 !important;

    }

    .courses-register-section .container {
        align-items: normal;
        max-width: 1260px;
    }

    .courses-register-section {
        padding: 20px 0px;
    }

    .courses-register-section h1 {
        position: relative;
        margin-top: 20px;
        z-index: 2;
        top: 0px;
    }
</style>

<section class="courses-images">
    <div class="container mt-5">
        <div class="row py-5">
            <div class="col-12">
                <img src="../../images/research-impact-strat.jpg" alt="Image Section" class="img-fluid">
                <!-- Responsive image -->
            </div>
        </div>
        <div class="row py-3">
            <div class="col-12 text-center"> <!-- Center the header text -->
                <h1 class="display-4">Diplomat in Research Impact Strategy</h1>
                <!-- Use Bootstrap's display class for large headings -->
            </div>
        </div>
        <div class="row py-2">
            <div class="col-12 text-center">
                <p>Maximize your research impact with strategic planning and implementation strategies in this
                    comprehensive course!</p>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-12 text-center">
                <p class="text-dark font-weight-bold offer">Avail 50% Inaugural Discount from Sheela Foundation—offer
                    valid till 31st November!</p>
            </div>
        </div>
    </div>

</section>


<section class="courses-digimed">
    <div class="container">
        <div class="row">
            <h5>About the Courses</h5>
        </div>
        <div class="course-desc">
            <p class="text-center"><strong>Description:</strong>
                <br>
                The Research Impact Strategy course is designed to equip researchers, academics, and professionals with
                the tools and insights needed to maximize the societal, academic, and economic impact of their research.
                This course explores the strategic approaches to creating, measuring, and communicating research impact.
                Participants will learn how to align their research goals with stakeholder needs, enhance visibility,
                and build pathways for sustainable impact. Whether you are aiming to influence policy, foster
                innovation, or contribute to academic discourse, this course will provide the frameworks and practical
                skills required to effectively communicate and expand your research's influence.
            </p>
            <p class="text-center"><strong>Key Highlights:</strong></p>
            <ul class="research-benefits">
                <li>Learn strategies to increase the reach and visibility of your research.</li>
                <li>Gain insights into developing impact-driven research proposals.</li>
                <li>Discover techniques for building strategic collaborations with stakeholders.</li>
                <li>Understand how to measure and evaluate research impact.</li>
                <li>Access tools and resources for communicating research outcomes effectively.</li>
            </ul>
            <span></span>
            <p class="text-center"><strong>What you will learn:</strong></p>
            <ul class="research-benefits">
                <li>Stakeholder Engagement and Collaboration
                    <!-- <p>Learn how to identify and engage with relevant stakeholders in your research projects.
                    </p> -->
                </li>
                <li>Aligning Research with Global Priorities
                    <!-- <p>Discover methods for aligning your research with
                        societal, economic, and academic priorities.
                    </p> -->
                </li>
                <li>Developing a Research Impact Plan
                    <!-- <p>Master the steps to create and implement a comprehensive impact strategy for your research
                    </p> -->
                </li>
                <li>Measuring and Evaluating Research Impact
                    <!-- <p>Explore techniques to track, evaluate, and report the outcomes and impact of your research.
                    </p> -->
                </li>
                <li>Enhancing Research Visibility
                    <!-- <p>Gain skills in leveraging communication channels and platforms to increase the visibility and
                        influence of your research.

                    </p> -->
                </li>

            </ul>

        </div>
    </div>
</section>


<section class="courses-register-section">
    <div class="container">
        <div class="row py-5">
            <div class="col-lg-6 col-md-6">
                <!-- <h1>Welcome to Our Contact Us Page</h1>
            <p>We are excited to have you here! Please fill in the details in the registration form to create your
                account. You will gain access to exclusive features and content tailored just for you.</p> -->
                <img src="../../images/courses.jpg" alt="">

            </div>

            <div class="col-lg-6 col-md-6 py-3 px-5" style="background:#f0f0f0">
                <h1>Contact Us</h1>
                <form action="submit_registration.php" method="POST">

                    <!-- Full Name -->
                    <div class="form-floating">
                        <input type="text" class="form-control" id="full-name" name="full_name" required placeholder="">
                        <label for="full-name">* Full Name</label>
                    </div>

                    <!-- Email -->
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" required placeholder="">
                        <label for="email">* Email Address</label>
                    </div>

                    <!-- Mobile -->
                    <div class="form-floating">
                        <input type="tel" class="form-control" id="mobile" name="mobile" required placeholder="">
                        <label for="mobile">* Mobile Number</label>
                    </div>

                    <!-- Message -->
                    <div class="form-floating">
                        <textarea class="form-control" id="message" name="message" required placeholder=""></textarea>
                        <label for="message">* Message</label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-danger mt-3">Download Now</button>
                </form>
            </div>

        </div>

    </div>
</section>


<section>

</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const subjectCheckboxes = document.querySelectorAll('input[name="subjects"]');
        const subjectsInput = document.getElementById('subjects-input');
        const errorMessage = document.createElement('div');
        errorMessage.classList.add('error-message');
        subjectsInput.parentNode.insertBefore(errorMessage, subjectsInput.nextSibling);

        subjectCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const selectedValues = Array.from(subjectCheckboxes)
                    .filter(checkbox => checkbox.checked)
                    .map(checkbox => checkbox.nextSibling.textContent);

                // Limit to a maximum of 3 selections
                if (selectedValues.length > 3) {
                    errorMessage.textContent = "You can only select up to 3 subjects.";
                    this.checked = false; // Deselect current checkbox
                    return;
                } else {
                    errorMessage.textContent = ""; // Clear error message
                }

                // Update input field with selected subjects
                subjectsInput.value = selectedValues.join(', ');
            });
        });
    });

    function toggleDropdown() {
        const dropdownContent = document.querySelector('.dropdown-content');
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    }
</script>