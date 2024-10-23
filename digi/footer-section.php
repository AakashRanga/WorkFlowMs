<footer>
    <section class="contact-section">
        <div class="container py-5">
            <div class="row">
                <!-- Text Side -->
                <div class="col-md-6 text-side">
                    <h2 style="color:black">Contact Us</h2>
                    <p class="mb-3">We would love to hear from you! Whether you have a question, feedback, or need support, feel free
                        to reach out to us. Our team is here to assist you and ensure you have the best experience
                        possible.</p>
                    <p class="mb-3">Fill out the form on the right to get in touch with us, and we will get back to you as soon as
                        possible.</p>
                    <div class="contact-info">
                        <p class="mb-3"><strong>Email:</strong> <a href="mailto:info@example.com">support@vmagsglobal.com</a></p>
                        <p class="mb-3"><strong>Phone:</strong> <a href="tel:+1234567890">+91 8234 567 890</a></p>
                    </div>
                    <div class="social-media">
                        <a href="https://www.facebook.com/vmagsglobalservices" target="_blank" class="social-icon"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.linkedin.com/company/v-mags-global" target="_blank" class="social-icon"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/vmagsglobalservices" target="_blank" class="social-icon"><i
                                class="fab fa-instagram"></i></a>
                    </div>

                </div>
                <!-- Form Side -->
                <div class="col-md-6 form-side">
                    <h2 style="color:black">Get in Touch</h2>
                    <form id="contactForm" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="mobno" class="form-label">Mobile Number </label>
                            <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Your Mobile Number" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="4" placeholder="Message..."
                                required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" id="contactBtn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $('#contactForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        let formData = {
            name: $('#name').val().trim(),
            mobile: $('#mobile').val().trim(),
            email: $('#email').val().trim(),
            message: $('#message').val().trim(),
            broucher: 'Normal Footer Contact'
        };

        // Frontend validation
        if (formData.name === "" || formData.mobile === "" || formData.email === "" || formData.message === "") {
            alert('All fields are required!');
            return;
        }


        if (!validateEmail(formData.email)) {
            alert('Please enter a valid email address!');
            return;
        }

        $.ajax({
            url: 'api/contact-form.php',
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

    // Function to send notification after successful signup
    // function sendNotification(formData) {
    //     const notificationData = {
    //         title: "New User Registered",
    //         content: `New ${formData.role} user named as ${formData.name} has been logged in with UIN Number: ${formData.uin}`,
    //         userid: 11
    //         // userid: formData.uin // Assuming UIN is used as user ID
    //     };

    //     $.ajax({
    //         url: 'api/notification.php',
    //         method: 'POST',
    //         data: JSON.stringify(notificationData), // Send notification data as JSON
    //         contentType: 'application/json',
    //         success: function(response) {
    //             if (response.status === 201) {
    //                 console.log('Notification sent successfully!');
    //             } else {
    //                 console.log('Notification failed: ' + response.message);
    //             }
    //         },
    //         error: function(xhr, status, error) {
    //             try {
    //                 let response = JSON.parse(xhr.responseText);
    //                 if (response.message) {
    //                     console.log('Error: ' + response.message);
    //                 } else {
    //                     console.log('An unexpected error occurred.');
    //                 }
    //             } catch (e) {
    //                 console.log('An error occurred: ' + error);
    //             }
    //         }
    //     });
    // }
</script>