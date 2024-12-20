<?php include("digimed-navbar.php") ?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e9ecef;
    }
</style>

<section class="register-section">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Welcome to Our Contact Page</h1>
                <p>We are excited to have you here! Please fill in the details in the Contact form to create your
                    account. You will gain access to exclusive features and content tailored just for you.</p>
                <p>If you have any questions, feel free to reach out to our support team. We're here to help you!</p>
            </div>

            <div class="col-md-6">
                <h1>Contact Us Here!!!</h1>
                <form id="RealContactForm" method="POST">

                    <div class="form-floating">
                        <input type="text" class="form-control" id="full_name" name="full_name" required placeholder="">
                        <label for="full-name">* Full Name</label>
                    </div>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" required placeholder="">
                        <label for="email">* Email Address</label>
                    </div>

                    <!-- <div class="form-floating position-relative">
                        <input type="text" class="form-control" id="subjects-input" name="subject" readonly placeholder="Select Subjects"
                            onclick="toggleDropdown()" required />
                        <label>* Selected Subjects (Maximum of 3 subjects allowed)</label>

                        <div class="dropdown-content">
                            <label><input type="checkbox" name="subjects" value="global-accreditation"> Global
                                Accreditation</label><br>
                            <label><input type="checkbox" name="subjects" value="hassle-free-admission"> Hassle-Free
                                Admission</label><br>
                            <label><input type="checkbox" name="subjects" value="flawless-lectures"> Flawless
                                Lectures</label><br>
                            <label><input type="checkbox" name="subjects" value="delivery-assessment"> Delivery and
                                Assessment</label><br>
                            <label><input type="checkbox" name="subjects" value="experienced-faculty"> Experienced
                                Faculty</label><br>
                            <label><input type="checkbox" name="subjects" value="fast-career-growth"> Fast Career
                                Growth</label><br>
                            <label><input type="checkbox" name="subjects" value="easy-billing"> Easy Billing</label><br>
                            <label><input type="checkbox" name="subjects" value="easy-emi-options"> Easy EMI Options</label><br>
                            <label><input type="checkbox" name="subjects" value="educational-leadership"> Educational
                                Leadership</label><br>
                            <label><input type="checkbox" name="subjects" value="top-research-writing-courses"> Top Research
                                & Writing Courses</label><br>
                            <label><input type="checkbox" name="subjects" value="hands-on-training"> Hands-on
                                Training</label><br>
                            <label><input type="checkbox" name="subjects" value="seminars-workshops"> Seminars &
                                Workshops</label><br>
                        </div>

                        <p>Select up to 3 subjects.</p>
                        <div class="error-message"></div>
                    </div> -->

                    <!-- <div class="form-floating">
                        <input type="text" class="form-control" id="job-description" name="job_description" required
                            placeholder="">
                        <label for="job-description">* Job Description</label>
                    </div> -->

                    <div class="form-floating">
                        <input type="text" class="form-control" id="mobile_number" name="mobile_number" required placeholder="">
                        <label for="mobile_number">* Mobile Number</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="organization" name="organization" required
                            placeholder="">
                        <label for="organization">* Organization Name</label>
                    </div>


                    <!-- <div class="form-floating">
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
                    -->
                    <div class="form-floating">
                        <select class="form-control" id="state" name="state" required>
                            <option value="" disabled selected>Select your state</option>
                            <!-- States -->
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                        <label for="state">* State/Region</label>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
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
                    .map(checkbox => checkbox.value);

                // Limit to a maximum of 3 selections
                if (selectedValues.length > 3) {
                    errorMessage.textContent = "You can only select up to 3 subjects.";
                    this.checked = false; // Deselect current checkbox
                    return;
                } else {
                    errorMessage.textContent = ""; // Clear error message
                }

                // Update input field with selected subjects
                subjectsInput.value = selectedValues.join(', ').trim();
            });
        });
    });

    function toggleDropdown() {
        const dropdownContent = document.querySelector('.dropdown-content');
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $('#RealContactForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        let formData = {
            full_name: $('#full_name').val().trim(),
            mobile_number: $('#mobile_number').val().trim(),
            email: $('#email').val().trim(),
            organization: $('#organization').val().trim(),
            state: $('#state').val().trim(),
            broucher: 'Real Contact'
        };

        // Frontend validation
        if (formData.full_name === "" || formData.mobile_number === "" || formData.email === "" || formData.organization === "") {
            alert('All fields are required!');
            return;
        }


        if (!validateEmail(formData.email)) {
            alert('Please enter a valid email address!');
            return;
        }

        $.ajax({
            url: 'api/contact-form2.php',
            method: 'POST',
            data: JSON.stringify(formData), // Send data as JSON
            contentType: 'application/json',
            success: function(response) {
                if (response.status === 201) {
                    alert("Thanks for getting in touch! We'll contact you soon.");
                    window.location.href = "index.php"; // Redirect to login page on success
                } else {
                    alert('Error: ' + response.message); // Display API-specific error message
                }
            },
            error: function(xhr, status, error) {
                try {
                    let response = JSON.parse(xhr.responseText);
                    if (response.message) {
                        alert('Error: ' + response.message);
                    } else {
                        alert('An unexpected error occurred.');
                    }
                } catch (e) {
                    alert('An error occurred: ' + error);
                }
            }
        });
    });
    // Email validation function
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
</script>