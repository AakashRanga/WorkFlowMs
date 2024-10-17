<?php include("navbar.php") ?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e9ecef;
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
</style>

<section class="register-section container my-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Welcome to Our Registration Page</h1>
            <p>We are excited to have you here! Please fill in the details in the registration form to create your
                account. You will gain access to exclusive features and content tailored just for you.</p>
            <p>If you have any questions, feel free to reach out to our support team. We're here to help you!</p>
        </div>

        <div class="col-md-6">
            <h1>Register Now</h1>
            <form action="submit_registration.php" method="POST">
                <div class="form-floating">
                    <input type="text" class="form-control" id="collection" name="collection" required placeholder="">
                    <label for="collection">* Selected Collection</label>

                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" id="subjects-input" readonly placeholder="Select Subjects"
                        onclick="toggleDropdown()" required />
                    <label>* Selected Subjects (Maximum of 3 subjects allowed)</label>

                    <div class="dropdown-content">
                        <label><input type="checkbox" name="subjects" value="global-accreditation"> Global
                            Accreditation</label>
                        <label><input type="checkbox" name="subjects" value="hassle-free-admission"> Hassle-Free
                            Admission</label>
                        <label><input type="checkbox" name="subjects" value="flawless-lectures"> Flawless
                            Lectures</label>
                        <label><input type="checkbox" name="subjects" value="delivery-assessment"> Delivery and
                            Assessment</label>
                        <label><input type="checkbox" name="subjects" value="experienced-faculty"> Experienced
                            Faculty</label>
                        <label><input type="checkbox" name="subjects" value="fast-career-growth"> Fast Career
                            Growth</label>
                        <label><input type="checkbox" name="subjects" value="easy-billing"> Easy Billing</label>
                        <label><input type="checkbox" name="subjects" value="easy-emi-options"> Easy EMI Options</label>
                        <label><input type="checkbox" name="subjects" value="educational-leadership"> Educational
                            Leadership</label>
                        <label><input type="checkbox" name="subjects" value="top-research-writing-courses"> Top Research
                            & Writing Courses</label>
                        <label><input type="checkbox" name="subjects" value="hands-on-training"> Hands-on
                            Training</label>
                        <label><input type="checkbox" name="subjects" value="seminars-workshops"> Seminars &
                            Workshops</label>
                    </div>

                    <p>Select up to 3 subjects.</p>
                    <div class="error-message"></div>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" id="job-description" name="job_description" required
                        placeholder="">
                    <label for="job-description">* Job Description</label>

                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" id="full-name" name="full_name" required placeholder="">
                    <label for="full-name">* Full Name</label>

                </div>

                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" required placeholder="">
                    <label for="email">* Email Address</label>

                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" id="organization" name="organization" required
                        placeholder="">
                    <label for="organization">* Organization Name</label>

                </div>

                <div class="form-floating">
                    <select class="form-control" id="country" name="country" required placeholder="">
                        <option value="" disabled selected>Select a country</option>
                        <option value="USA">United States</option>
                        <option value="CAN">Canada</option>
                        <option value="UK">United Kingdom</option>
                        <option value="AUS">Australia</option>
                        <option value="IND">India</option>
                    </select>
                    <label for="country">* Country/Region</label>

                </div>

                <div class="form-floating">
                    <select class="form-control" id="state" name="state" required>
                        <option value="" disabled selected>Select a state/region</option>
                        <option value="CA">California</option>
                        <option value="NY">New York</option>
                        <option value="TX">Texas</option>
                        <option value="ON">Ontario</option>
                        <option value="QC">Quebec</option>
                    </select>
                    <label for="state">* State/Region</label>

                </div>

                <button type="submit" class="btn btn-primary mt-3">Request a Trial</button>
            </form>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const subjectCheckboxes = document.querySelectorAll('input[name="subjects"]');
        const subjectsInput = document.getElementById('subjects-input');
        const errorMessage = document.createElement('div');
        errorMessage.classList.add('error-message');
        subjectsInput.parentNode.insertBefore(errorMessage, subjectsInput.nextSibling);

        subjectCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
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