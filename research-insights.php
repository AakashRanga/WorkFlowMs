<?php include('header.php'); ?>
<section class="research-section py-5 text-center">
    <div class="container text-white">
        <h1 class="mb-3">Register for Research Insights</h1>
        <p>Easy-to-follow guides, expert tips, and helpful advice to get you published – direct to your inbox</p>
    </div>
</section>

<section class="image-text-insights">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-6 mb-3 ">
                <img src="images/research-insights.avif" alt="Research Insights" class="image">
            </div>
            <!-- Text Section -->
            <div class="col-md-6">
                <p>Research Insights is a free weekly resource helping you navigate every step of the publishing
                    journey.</p>
                <p>Research Insights provides expert advice and support on a range of topics, including:</p>
                <ul class="list-unstyled">
                    <li><i class="fa-sharp fa-solid fa-check text-primary"></i> <span>How to get published</span></li>
                    <li><i class="fa-sharp fa-solid fa-check text-primary"></i> <span>Writing and formatting your
                            paper</span></li>
                    <li><i class="fa-sharp fa-solid fa-check text-primary"></i> <span>Open access and open
                            research</span></li>
                    <li><i class="fa-sharp fa-solid fa-check text-primary"></i> <span>Peer review and becoming a peer
                            reviewer</span></li>
                    <li><i class="fa-sharp fa-solid fa-check text-primary"></i> <span>Maximizing the impact of your
                            research</span></li>
                </ul>
                <p>Simply register by filling out the form below to receive easy-to-follow guides, top tips, the latest
                    news, and details of upcoming events, direct to your inbox.</p>
            </div>
        </div>
    </div>
</section>

<section class="register py-5">
    <div class="container">
        <h2 class="text-center mb-4">REGISTER FOR RESEARCH INSIGHTS</h2>
        <form>
            <div class="row mb-3">
                <!-- Salutation -->
                <label for="salutation" class="col-md-4 col-form-label">Salutation</label>
                <div class="col-md-8">
                    <input type="text" name="salutation" id="salutation" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <!-- First Name -->
                <label for="firstName" class="col-md-4 col-form-label">First Name<i
                        class="fa-solid fa-asterisk text-red"></i></label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
            </div>

            <div class="row mb-3">
                <!-- Last Name -->
                <label for="lastName" class="col-md-4 col-form-label">Last Name<i
                        class="fa-solid fa-asterisk text-red"></i></label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
            </div>

            <div class="row mb-3">
                <!-- Email -->
                <label for="email" class="col-md-4 col-form-label">Email<i
                        class="fa-solid fa-asterisk text-red"></i></label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="row mb-3">
                <!-- Company / Institution -->
                <label for="company" class="col-md-4 col-form-label">Company / Institution<i
                        class="fa-solid fa-asterisk text-red"></i></label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="company" name="company" required>
                </div>
            </div>

            <div class="row mb-3">
                <!-- Job Function -->
                <label for="jobFunction" class="col-md-4 col-form-label">Job Function<i
                        class="fa-solid fa-asterisk text-red"></i></label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="jobFunction" name="jobFunction">
                </div>
            </div>

            <div class="row mb-3">
                <!-- Country/Region -->
                <label for="country" class="col-md-4 col-form-label">Country/Region<i
                        class="fa-solid fa-asterisk text-red"></i></label>
                <div class="col-md-8">
                    <input type="text" name="country" id="country" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <!-- Your Subject Interest -->
                <label for="subjectInterest" class="col-md-4 col-form-label">Your Subject Interest<i
                        class="fa-solid fa-asterisk text-red"></i></label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="subjectInterest" name="subjectInterest" required>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>