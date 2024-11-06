<?php include("digimed-navbar.php") ?>

<style>
    body {
        font-family: Roobert, serif !important;
    }

    .dropdown-content {
        display: flex;
        justify-content: space-between;
        /* Align items to the left and right */
        width: 100%;
        background-color: #f0f0f0 !important;
    }

    .left-side,
    .right-side {
        display: flex;
        align-items: center;
        gap: 10px;
        /* Center vertically */
    }

    .custom-dropdown {
        position: relative;
        display: block;
        /* Change to block for better layout control */
        width: 100%;
        /* Ensure it takes full width */
        margin-bottom: 20px;
        /* Space between dropdowns */
    }

    .dropdown-toggle {
        cursor: pointer;
        /* border: 1px solid #ccc; */
        padding: 30px;
        background-color: #f0f0f0;
        display: flex;
        align-items: center;
        border-radius: 24px
            /* Rounded corners */
    }

    .menu {
        display: none;
        background-color: #fff;
        /* border: 1px solid #ccc; */
        z-index: 1;
        width: 100%;
        max-height: 100%;
        /* overflow-y: auto; */
        margin-top: 5px;
        border-radius: 4px;
        position: relative;
        top: -17px;
    }

    .menu .item {
        padding: 20px;
        cursor: pointer;
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-items: center;
        border-bottom: 1px solid #f0f0f0;
    }



    .menu.show {
        display: block;
        /* Show when 'show' class is added */
        padding: 20px;
    }

    /* .row .fa-book{
        border-radius: 50% !important;
        width: 0 !important;
        height: 0 !important;
        display: flex;
    } */

    i.fas.fa-book {
        width: 0;
        height: 0;
        display: contents;
        color: #001eae;
    }

    .form-container {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }

    /* .form-container .form-group {
        /* display: flex; 
        border: 1px solid black;
        padding: 10px;
        border-radius: 5px;
        width: 210px;
        height: 100%;
    } */

    .form-group {
        display: flex;
        /* align-items: center; */
        margin-bottom: 15px;
        border: 1px solid #317AE7;
        padding: 20px;
        border-radius: 5px;
        width: 250px;
        height: 100%;
        flex-direction: column;
        align-items: self-start;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.125);
        background-color: #EFF5FE;

    }

    .right-side span {
        color: #001eae;
    }

    .btn-danger {
        position: absolute;
        left: 70%;
    }

    .faq {
        padding: 90px 0px;
        background-color: #fff;
    }

    .faq h2 {
        font-size: 16px;
        font-family: 'Roobert', sans-serif;
        font-weight: bold;
    }

    .faq p,
    strong {
        font-size: 14px;
        font-family: 'Roobert', sans-serif;
    }

    strong {
        color: #000000;
    }

    .faq ul li {
        padding: 10px 0px;
        font-size: 1.07rem !important;

    }

    .faq p {
        font-size: 1.07rem !important;
        color: #3f3a3a;
        line-height: 2;
    }

    h1 {
        font-size: 56px;
        margin-bottom: 20px;
        color: #000;
    }

    .faq b {
        font-size: 20px;
    }

    .faq {
        padding: 30px 0px;
    }

    .order-summary img {
        width: 100px;
    }

    .orders {
        display: flex;
    }

    .orders p {
        width: 210px;
        padding: 0px 16px;
        margin-bottom: 0px;
        color: #000000;
    }

    .order-detail p {
        display: flex;
        justify-content: space-between;
    }

    .order-summary button {
        position: absolute;
        bottom: 0;
        width: 100%;
        left: 0;
        border-radius: 0;
    }

    .user_billings {
        display: flex;
    }

    .user_billings img {
        width: 230px;
    }

    .user_billings h5 {
        font-size: 15px;
        width: 236px;
        padding: 0px 10px;
    }

    .user_billings p {
        padding: 0px 10px;
    }

    .form-label {
        color: #000000;
        font-weight: bold;
    }
</style>

<section class="courses-images">
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <img src="images/research-impact-strat.jpg" alt="Image Section" class="img-fluid">
            </div>
        </div>
        <div class="row py-3 text-center">
            <div class="col-12">
                <h1 class="display-4">Diplomat in Research Impact Strategy</h1>
                <p>Maximize your research impact with strategic planning and implementation strategies in this
                    comprehensive course!</p>
                <p class="text-dark font-weight-bold offer">Avail 50% Inaugural Discount from Sheela Foundation—offer
                    valid till 31st November!</p>

                <form action="" method="post" class="form-container">
                    <div class="form-group">
                        <span>
                            <input type="radio" id="option1" name="options" value="30000" onclick="updateButton()"
                                checked>
                        </span>
                        <span data-toggle="tooltip" title="One-time payment">One-time payment</span>
                        <span style="font-size:10px">Till 365 days</span>
                        <span>₹30,000</span>
                        <strike><span>₹60,000</span></strike>
                    </div>
                    <div class="form-group">
                        <span>
                            <input type="radio" id="option2" name="options" value="15000" onclick="updateButton()">
                        </span>
                        <span data-toggle="tooltip" title="Part-time payment">Part-time payment</span>
                        <span style="font-size:10px">Till 365 days</span>
                        <span>₹15,000 X 2 months</span>
                        <span>Total: ₹30,000</span>
                    </div>
                </form>
                <button id="buyCourseButton" type="button" class="btn btn-primary" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Buy
                    Course</button>
                <span style="display:block;color:#007bff">Language: English</span>
            </div>
        </div>
    </div>
</section>

<!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Order Summary</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="order-summary" id="orderSummary">
            <h5 class="order-details-title">Order Details</h5> <!-- New Header for Order Details -->
            <div class="orders">
                <div><img src="images/research-impact-strat.jpg" alt=""></div>
                <div>
                    <p>Diplomat in Research And Publication Strategy</p>
                    <p id="coursePrice" style="color: #317ae7;font-size: 20px;font-weight: bold;font-family: emoji;">
                        ₹30,000</p>
                </div>
            </div>
            <br>
            <div class="order-detail">
                <p><strong>Course Price:</strong> <span id="coursePriceDetail">₹30,000</span></p>
                <p><strong>GST (18%):</strong> <span id="gstAmount">₹5,400</span></p>
                <p><strong>Internet Handling Fees:</strong> <span id="handlingFees">₹751.90</span></p>
                <hr>
                <p><strong>Total Payable Amount:</strong> <span id="totalAmount">₹36,151.90</span></p>
                <p id="monthlyPayment" style="display: none;"><strong>You pay for 2 months:</strong> <span
                        id="perMonthAmount">₹18,075.95 per month</span></p>
            </div>
            <button class="btn btn-primary" id="proceedBtn">Proceed</button>
        </div>

        <!-- Form for user details, initially hidden -->
        <div class="user-details" id="userDetailsForm" style="display: none;">
            <h5 class="billing-details-title">Billing Details</h5> <!-- New Header for Billing Details -->
            <div class="user_billings">

                <div> <img src="images/research-impact-strat.jpg" alt="Image Section" class="img-fluid">
                </div>
                <div>
                    <h5 class="offcanvas-title">Diplomat in Research Aakash And Publication Strategy</h5>
                    <p><span id="finalAmount">₹36,151.90</span></p>
                    <p id="monthlyPayment" style="display: none;">
                        <strong>You pay for 2 months:</strong> <span id="perMonthAmount">₹18,075.95 per month</span>
                    </p>
                </div>

            </div>
            <p>Please enter your basic details to proceed:</p>

            <form id="submitdetailsForm" method="POST">
                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" id="userName" placeholder="Enter name" required>
                    <label for="userName" class="form-label">Name</label>
                    <div class="form-text">Please enter your name</div>
                </div>
                <div class="mb-3 form-floating">
                    <input type="email" class="form-control" id="userEmail" placeholder="Enter email" required>
                    <label for="userEmail" class="form-label">Email</label>
                    <div class="form-text">Please enter your email address</div>
                </div>
                <div class="mb-3 form-floating">
                    <input type="tel" class="form-control" id="userPhone" placeholder="Enter phone number" required>
                    <label for="userPhone" class="form-label">Phone number</label>
                    <div class="form-text">Please enter your phone number</div>
                </div>
                <div class="mb-3 form-floating">
                    <select class="form-select" id="userState" required>
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
                    <label for="userState" class="form-label">State</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>
</div>


<section class="courses-digimed">
    <div class="container">
        <div class="row">
            <h5>About the Course</h5>
        </div>
        <div class="course-desc">
            <p class="text-center"><strong>Description:</strong><br>
                The Research Impact Strategy course equips researchers, academics, and professionals with tools to
                maximize the societal, academic, and economic impact of their research. This course explores strategic
                approaches to creating, measuring, and communicating research impact.
            </p>
            <p class="text-center"><strong>Key Highlights:</strong></p>
            <ul class="research-benefits">
                <li>Learn strategies to increase the reach and visibility of your research.</li>
                <li>Gain insights into developing impact-driven research proposals.</li>
                <li>Discover techniques for building strategic collaborations with stakeholders.</li>
                <li>Understand how to measure and evaluate research impact.</li>
                <li>Access tools and resources for communicating research outcomes effectively.</li>
            </ul>
            <p class="text-center"><strong>What you will learn:</strong></p>
            <ul class="research-benefits">
                <li>Stakeholder Engagement and Collaboration</li>
                <li>Aligning Research with Global Priorities</li>
                <li>Developing a Research Impact Plan</li>
                <li>Measuring and Evaluating Research Impact</li>
                <li>Enhancing Research Visibility</li>
            </ul>
        </div>
    </div>
</section>

<section class="broucher-register-section">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 col-md-6">
                <img src="images/broucher-contact.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 get-broucher" style="background:#f0f0f0; padding: 20px;">
                <h1 class="mb-4 text-center">Get Free Broucher</h1>
                <form action="submit_registration.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="full-name" name="full_name" required placeholder="">
                        <label for="full-name">* Full Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" required placeholder="">
                        <label for="email">* Email Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="mobile" name="mobile" required placeholder="">
                        <label for="mobile">* Mobile Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" name="message" required
                            placeholder="Your message here"></textarea>
                        <label for="message">* Message</label>
                    </div>
                    <div class="broucher-button">
                        <button type="submit" class="btn btn-danger mt-3">Download Now</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="ciriculam-section py-5">
    <div class="container">
        <h2 class="text-center mb-4" style="color: #001eae;font-weight: bold;">Curriculum</h2>
        <div class="row justify-content-center">
            <!-- Unit 1 -->
            <div class="col-lg-10 col-md-12 mb-3">
                <div class="custom-dropdown">
                    <input type="hidden" name="unit1" id="unit1-input">
                    <div class="dropdown-toggle" id="unit1-dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-content">
                            <div class="left-side">
                                <span style="color: #001eae;font-weight: bold;">01</span>
                                <span style="font-weight: bold;">UNIT 1: How to develop and report good research
                                    questions</span>
                            </div>
                            <div class="right-side">
                                <span>2 attachments</span>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="item" data-value="1"><i class="fas fa-book"></i>
                            <span>
                                Module 1:</span><span>Developing a research question for your research project</span>
                        </div>
                        <div class="item" data-value="2"><i class="fas fa-book"></i>
                            <span>
                                Module 2:</span><span> Reporting the research question in your paper</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Unit 2 -->
            <div class="col-lg-10 col-md-12 mb-3">
                <div class="custom-dropdown">
                    <input type="hidden" name="unit2" id="unit2-input">
                    <div class="dropdown-toggle" id="unit2-dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-content">
                            <div class="left-side">
                                <span style="color: #001eae;font-weight: bold;">02</span>
                                <span style="font-weight: bold;">UNIT 2: Understanding Research Impact</span>
                            </div>
                            <div class="right-side">
                                <span>5 attachments</span>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="item" data-value="1"><i class="fas fa-book"></i><span>Module 1:</span><span> Study
                                Design and
                                Methodology</span></div>
                        <div class="item" data-value="2"><i class="fas fa-book"></i><span>Module 2: </span><span>Data
                                Management and Statistical
                                Analysis Plan</span></div>
                        <div class="item" data-value="3"><i class="fas fa-book"></i><span>Module 3:</span><span> Writing
                                the Research
                                Protocol</span></div>
                        <div class="item" data-value="4"><i class="fas fa-book"></i><span>Module 4:</span><span> Ethical
                                Considerations and
                                Regulatory Approvals</span></div>
                        <div class="item" data-value="5"><i class="fas fa-book"></i><span>Module 5:
                            </span><span>Choosing and siting references
                                C</span></div>
                    </div>
                </div>
            </div>

            <!-- Unit 3 -->
            <div class="col-lg-10 col-md-12 mb-3">
                <div class="custom-dropdown">
                    <input type="hidden" name="unit3" id="unit3-input">
                    <div class="dropdown-toggle" id="unit3-dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-content">
                            <div class="left-side">
                                <span style="color: #001eae;font-weight: bold;">03</span>
                                <span style="font-weight: bold;">UNIT 3: Effective Communication of Research
                                    Findings</span>
                            </div>
                            <div class="right-side">
                                <span>8 attachment</span>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="item" data-value="1"><i class="fas fa-book"></i><span>Module 1:</span><span> Study
                                design</span></div>
                        <div class="item" data-value="2"><i class="fas fa-book"></i><span>Module 2:</span><span>Studies
                                of medical tests</span>
                        </div>
                        <div class="item" data-value="3"><i class="fas fa-book"></i><span>Module 3:</span><span>
                                Enhancing causal inference</span>
                        </div>
                        <div class="item" data-value="4"><i class="fas fa-book"></i><span>Module 4:</span><span> The
                                methods matching study designs
                                to research questions</span></div>
                        <div class="item" data-value="5"><i class="fas fa-book"></i><span>Module 5:</span><span>
                                Subjects and variables</span>
                        </div>
                        <div class="item" data-value="6"><i class="fas fa-book"></i><span>Module 6:</span><span> Sample
                                size and power</span></div>
                        <div class="item" data-value="7"><i class="fas fa-book"></i><span>Module 7:</span><span>
                                Statistics</span></div>
                        <div class="item" data-value="8"><i class="fas fa-book"></i><span>Module 8:</span><span>
                                Questionnaires and qualitative
                                research</span></div>


                    </div>
                </div>
            </div>

            <!-- Unit 4 -->
            <div class="col-lg-10 col-md-12 mb-3">
                <div class="custom-dropdown">
                    <input type="hidden" name="unit4" id="unit4-input">
                    <div class="dropdown-toggle" id="unit4-dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-content">
                            <div class="left-side">
                                <span style="color: #001eae;font-weight: bold;">04</span>
                                <span style="font-weight: bold;">UNIT 4: How to do ethical research</span>
                            </div>
                            <div class="right-side">
                                <span>8 attachments</span>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="item" data-value="1"><i class="fas fa-book"></i><span>Module 1:</span><span> Ethical
                                considerations in
                                research</span></div>
                        <div class="item" data-value="2"><i class="fas fa-book"></i><span>Module 2:</span><span> History
                                of search ethics</span>
                        </div>
                        <div class="item" data-value="3"><i class="fas fa-book"></i><span>Module 3:</span><span>
                                Institutional review board and
                                informed consent</span>
                        </div>
                        <div class="item" data-value="4"><i class="fas fa-book"></i><span>Module 4:</span><span> Data
                                and safety monitoring</span>
                        </div>
                        <div class="item" data-value="5"><i class="fas fa-book"></i><span>Module 5:</span><span> Ethics
                                aspects of study
                                methods</span></div>
                        <div class="item" data-value="6"><i class="fas fa-book"></i><span>Module 6:</span><span>
                                Principles of research
                                ethics</span></div>
                        <div class="item" data-value="7"><i class="fas fa-book"></i><span>Module 7:</span><span> Ethics
                                in "big data"
                                research</span></div>
                        <div class="item" data-value="8"><i class="fas fa-book"></i><span>Module 8:</span><span>
                                Research in resource-poor
                                environments</span></div>
                    </div>
                </div>
            </div>

            <!-- Unit 5 -->
            <div class="col-lg-10 col-md-12 mb-3">
                <div class="custom-dropdown">
                    <input type="hidden" name="unit5" id="unit5-input">
                    <div class="dropdown-toggle" id="unit5-dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-content">
                            <div class="left-side">
                                <span style="color: #001eae;font-weight: bold;">05</span>
                                <span style="font-weight: bold;">UNIT 5: How to write a research paper</span>
                            </div>
                            <div class="right-side">
                                <span>5 attachments</span>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="item" data-value="1"><i class="fas fa-book"></i><span>Module
                                1:</span><span>Reporting statistical methods and
                                analyses</span></div>
                        <div class="item" data-value="2"><i class="fas fa-book"></i><span>Module 2:</span><span> The
                                results reporting findings
                                succinctly</span>
                        </div>
                        <div class="item" data-value="3"><i class="fas fa-book"></i><span>Module
                                3:</span><span>Scientific transparency: the
                                pitfalls of selective reporting</span></div>
                        <div class="item" data-value="4"><i class="fas fa-book"></i><span>Module 4:</span><span> The
                                discussion: using structure
                                and balance</span></div>
                        <div class="item" data-value="5"><i class="fas fa-book"></i><span>Module 5:</span><span>
                                Optimizing the abstract and
                                title</span></div>

                    </div>
                </div>
            </div>
            <!-- Unit 6 -->
            <div class="col-lg-10 col-md-12 mb-3">
                <div class="custom-dropdown">
                    <input type="hidden" name="unit6" id="unit6-input">
                    <div class="dropdown-toggle" id="unit6-dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-content">
                            <div class="left-side">
                                <span style="color: #001eae;font-weight: bold;">06</span>
                                <span style="font-weight: bold;">UNIT 6: Running the essential trial</span>
                            </div>
                            <div class="right-side">
                                <span>6 attachments</span>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="item" data-value="1"><i class="fas fa-book"></i><span>Module 1:</span><span> Course
                                overview and trial
                                designs</span></div>
                        <div class="item" data-value="2"><i class="fas fa-book"></i><span>Module 2:</span><span>
                                Selection of participants</span>
                        </div>
                        <div class="item" data-value="3"><i class="fas fa-book"></i><span>Module 3:</span><span>
                                Recruitment</span></div>
                        <div class="item" data-value="4"><i class="fas fa-book"></i><span>Module 4:</span><span>
                                Choosing the interventions and
                                controls</span></div>
                        <div class="item" data-value="5"><i class="fas fa-book"></i><span>Module 5:</span><span>
                                Randomization</span></div>
                        <div class="item" data-value="6"><i class="fas fa-book"></i><span>Module 6:</span><span>
                                Blinding</span></div>
                    </div>
                </div>
            </div>
            <!-- Unit 7 -->
            <div class="col-lg-10 col-md-12 mb-3">
                <div class="custom-dropdown">
                    <input type="hidden" name="unit7" id="unit7-input">
                    <div class="dropdown-toggle" id="unit7-dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-content">
                            <div class="left-side">
                                <span style="color: #001eae;font-weight: bold;">07</span>
                                <span style="font-weight: bold;">UNIT 7: Conclusion</span>
                            </div>
                            <div class="right-side">
                                <span>6 attachments</span>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="item" data-value="1">
                            <div>
                                <i class="fas fa-book"></i>
                            </div>
                            <div><span>Module 1:</span><span> Recap
                                    Key Concepts</span></div>
                        </div>
                        <div class="item" data-value="2"><i class="fas fa-book"></i><span>Module 2:</span><span>
                                Application of Skills</span></div>
                        <div class="item" data-value="3"><i class="fas fa-book"></i><span>Module 3:</span><span>
                                Importance of Revision</span>
                        </div>
                        <div class="item" data-value="4"><i class="fas fa-book"></i><span>Module 4:</span><span>
                                Critical Thinking</span></div>
                        <div class="item" data-value="5"><i class="fas fa-book"></i><span>Module 5:</span><span> Ethical
                                Considerations</span>
                        </div>
                        <div class="item" data-value="6"><i class="fas fa-book"></i><span>Module 6:</span><span>
                                Encouragement for Ongoing
                                Practice</span></div>
                    </div>
                </div>
            </div>
            <!-- Unit 8 -->
            <div class="col-lg-10 col-md-12 mb-3">
                <div class="custom-dropdown">
                    <input type="hidden" name="unit8" id="unit8-input">
                    <div class="dropdown-toggle" id="unit8-dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-content">
                            <div class="left-side">
                                <span style="color: #001eae;font-weight: bold;">08</span>
                                <span style="font-weight: bold;">UNIT 8: Picking the right journal and getting
                                    published</span>
                            </div>
                            <div class="right-side">
                                <span>5 attachments</span>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="item" data-value="1"><i class="fas fa-book"></i><span>Module 1:</span><span>
                                Navigating journal and peer review
                                processes</span></div>
                        <div class="item" data-value="2"><i class="fas fa-book"></i><span>Module 2:</span><span>
                                Compliance Journal Impact
                                Factor</span></div>
                        <div class="item" data-value="3"><i class="fas fa-book"></i><span>Module 3:</span><span>
                                Surviving peer review</span></div>
                        <div class="item" data-value="4"><i class="fas fa-book"></i><span>Module 4:</span><span> What to
                                do with rejections and
                                apish</span></div>
                        <div class="item" data-value="5"><i class="fas fa-book"></i><span>Module 5:</span><span>
                                Pre-submission inquiries and cover
                                letters</span></div>
                    </div>
                </div>
            </div>

            <!-- Unit 9 -->
            <div class="col-lg-10 col-md-12 mb-3">
                <div class="custom-dropdown">
                    <input type="hidden" name="unit9" id="unit9-input">
                    <div class="dropdown-toggle" id="unit9-dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-content">
                            <div class="left-side">
                                <span style="color: #001eae;font-weight: bold;">09</span>
                                <span style="font-weight: bold;">UNIT 9: Avoiding scientific misconduct</span>
                            </div>
                            <div class="right-side">
                                <span>4 attachments</span>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="item" data-value="1"><i class="fas fa-book"></i><span>Module 1:</span><span>
                                Scientific misconduct, authorship,
                                and conflict of interest</span></div>
                        <div class="item" data-value="2"><i class="fas fa-book"></i><span>Module 2:</span><span>
                                Reporting conflicts of
                                interest</span></div>
                        <div class="item" data-value="3"><i class="fas fa-book"></i><span>Module 3:</span><span> Journal
                                rules on authorship</span>
                        </div>
                        <div class="item" data-value="4"><i class="fas fa-book"></i><span>Module 4:</span><span> How and
                                why to avoid
                                plagiarism</span></div>
                    </div>
                </div>
            </div>

            <!-- Unit 10 -->
            <div class="col-lg-10 col-md-12 mb-3">
                <div class="custom-dropdown">
                    <input type="hidden" name="unit10" id="unit10-input">
                    <div class="dropdown-toggle" id="unit10-dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-content">
                            <div class="left-side">
                                <span style="color: #001eae;font-weight: bold;">10</span>
                                <span style="font-weight: bold;">UNIT 10: Reviewing of good Publisher</span>
                            </div>
                            <div class="right-side">
                                <span>2 attachments</span>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="item" data-value="1"><i class="fas fa-book"></i><span>Module 1:</span><span> How
                                journals uncover scientific
                                fraud</span></div>
                        <div class="item" data-value="2"><i class="fas fa-book"></i><span>Module 2:</span><span> How
                                journals act on scientific
                                misconduct</span></div>
                    </div>
                </div>
            </div>
            <!-- Unit 11 & 12 -->
            <div class="col-lg-10 col-md-12 mb-3">
                <div class="custom-dropdown">
                    <input type="hidden" name="unit11_12" id="unit11-12-input">
                    <div class="dropdown-toggle" id="unit11-12-dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-content">
                            <div class="left-side">
                                <span style="color: #001eae;font-weight: bold;">11</span>
                                <span style="font-weight: bold;">UNIT 11 : EXAM & PUBLICATION</span>
                            </div>
                            <div class="right-side">
                                <span>1 attachment</span>
                            </div>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="item" data-value="1"><i class="fas fa-book"></i><span></span><span>EXAM &
                                PUBLICATION:</span><span> Overview of final exam
                                and publication process</span></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="meet-digimed">
    <div class="container justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <img src="images/meet-digimed.png" alt="">
                <div class="digi-meet">
                    <h3>Meet DIGIMEDGLOBAL</h3>
                    <p>Expand your knowledge with our expert-led courses. Join DIGIMEDGLOBAL and dive into diverse
                        subjects and linguistic richness. Enhance your academic foundation and immerse yourself in the
                        beauty of languages. All levels welcome.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- what do we offer -->

<section class="we-offer-section py-5">
    <h1 class="text-center mb-4">What Do We Offer</h1>
    <div class="container">
        <div class="row justify-content-center">
            <!-- Offer Item -->
            <div class="col-lg-12 d-flex justify-content-start mb-3">
                <div class="icon me-3">
                    <i class="fa-solid fa-video fa-2x text-dark" style="font-size: 25px;"></i>
                </div>
                <div>
                    <h5 class="mb-2">Live Learning</h5>
                    <p>Learn live with top educators, chat with teachers and other attendees, and get your doubts
                        cleared.</p>
                </div>
            </div>
            <!-- Repeat Offer Item as needed -->
            <div class="col-lg-12 d-flex justify-content-start mb-3">
                <div class="icon me-3">
                    <i class="fa-solid fa-book fa-2x text-dark" style="font-size: 25px;"></i>
                </div>
                <div>
                    <h5 class="mb-2">Structured learning</h5>
                    <p>Our curriculum is designed by experts to make sure you get the best learning experience.</p>
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-start mb-3">
                <div class="icon me-3">
                    <i class="fa-solid fa-user-group fa-2x text-dark" style="font-size: 25px;"></i>
                </div>
                <div>
                    <h5 class="mb-2">Community & Networking</h5>
                    <p>Interact and network with like-minded folks from various backgrounds in exclusive chat groups.
                    </p>
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-start mb-3">
                <div class="icon me-3">
                    <i class="fa-solid fa-comments fa-2x text-dark" style="font-size: 25px;"></i>
                </div>
                <div>
                    <h5 class="mb-2">Learn with the best</h5>
                    <p>Stuck on something? Discuss it with your peers and the instructors in the inbuilt chat groups.
                    </p>
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-start mb-3">
                <div class="icon me-3">
                    <i class="fa-solid fa-rectangle-list fa-2x text-dark" style="font-size: 25px;"></i>
                </div>
                <div>
                    <h5 class="mb-2">Practice tests</h5>
                    <p>With the quizzes and live tests practice what you learned, and track your class performance.</p>
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-start mb-3">
                <div class="icon me-3">
                    <i class="fa-solid fa-medal fa-2x text-dark" style="font-size: 25px;"></i>
                </div>
                <div>
                    <h5 class="mb-2">Get certified</h5>
                    <p>Flaunt your skills with course certificates. You can showcase the certificates on LinkedIn with a
                        click.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq mt-3">
    <div class="container py-5">
        <h1 class="text-center">FAQs</h1>

        <div class="row">
            <!-- Question 1 -->
            <div class="col-12 col-md-12">
                <b>What is the structure of the course?</b>
                <p>The course is self-paced, consisting of recorded video lectures. After each unit, participants will
                    complete multiple-choice question (MCQ) assignments. At the end, participants need to submit a
                    <strong>published research paper</strong> to obtain their certificate.
                </p>
            </div>

            <!-- Question 2 -->
            <div class="col-12 col-md-12">
                <b>What is the duration of the course?</b>
                <p>The course duration is <strong>one year</strong>, allowing participants to progress at their own
                    pace.

                </p>
            </div>

            <!-- Question 3 -->
            <div class="col-12 col-md-12">
                <b>What are the course modules?</b>
                <ul>
                    <li>
                        Research Methodology and Ethics
                    </li>
                    <li>Research Design and Data Management
                    </li>
                    <li>Statistical Analysis
                    </li>
                    <li>Scientific Writing and Publication
                    </li>
                    <li>
                        Research Integrity and Misconduct
                    </li>
                    <li>Advances in Research Methodologies
                    </li>
                </ul>
            </div>

            <!-- Question 4 -->
            <div class="col-12 col-md-12">
                <b>How is the course assessed?</b>
                <p>Each unit concludes with a multiple-choice question (MCQ) assignment. To earn the certificate,
                    participants must also submit a <strong>published research paper</strong> at the end of the course.
                </p>
            </div>

            <!-- Question 5 -->
            <div class="col-12 col-md-12">
                <b>What are the technical requirements to access the course?</b>
                <p>Participants need a reliable internet connection and a device capable of streaming video content.
                    Standard software for word processing and basic data analysis is recommended.
                </p>
            </div>



            <div class="col-12 col-md-12">
                <b>Is there any certification provided upon completion?</b>
                <p>Yes, participants who complete the course and submit a published research paper will receive a
                    globally recognized certification.
                </p>
            </div>

            <div class="col-12 col-md-12">
                <b>How do I submit my published paper at the end of the course?</b>
                <p>Upon completing your research and getting your paper published, you will upload it via the course
                    portal. Detailed instructions for submission will be provided towards the end of the course.
                </p>
            </div>


            <div class="col-12 col-md-12">
                <b>What support is available during the course?</b>
                <p>Participants can interact with faculty and peers through online discussion boards, webinars, and
                    virtual networking events. Faculty members are available for consultations on assignments and course
                    content.
                </p>
            </div>

            <div class="col-12 col-md-12">
                <b>What support is available during the course?</b>
                <p>Participants can interact with faculty and peers through online discussion boards, webinars, and
                    virtual networking events. Faculty members are available for consultations on assignments and course
                    content.
                </p>
            </div>

            <div class="col-12 col-md-12">
                <b>What happens if I am unable to complete the course within a year?</b>
                <p>If you are unable to complete the course within the year, you should contact the program
                    administrators to explore potential options for extension or re-enrollment.
                </p>
            </div>

            <div class="col-12 col-md-12">
                <b>Are there any prerequisites for the course?</b>
                <p>While prior research experience or an academic background in a related field is beneficial, it is not
                    a strict prerequisite for enrollment.
                </p>
            </div>

            <div class="col-12 col-md-12">
                <b>How do I enroll in the course?</b>
                <p>Enrollment is done by filling out the application form, submitting the necessary documents, and
                    paying the course fee. After these steps, you will receive login credentials to access the course
                    material.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="review-section py-5">
    <h3 class="text-center">Add Review</h3>

    <div class="container py-5">

        <div class="row ">

            <div class="feedback">
                <label class="angry">
                    <input type="radio" value="1" name="feedback" />
                    <div>
                        <svg class="eye left">
                            <use xlink:href="#eye">
                        </svg>
                        <svg class="eye right">
                            <use xlink:href="#eye">
                        </svg>
                        <svg class="mouth">
                            <use xlink:href="#mouth">
                        </svg>
                    </div>
                </label>
                <label class="sad">
                    <input type="radio" value="2" name="feedback" />
                    <div>
                        <svg class="eye left">
                            <use xlink:href="#eye">
                        </svg>
                        <svg class="eye right">
                            <use xlink:href="#eye">
                        </svg>
                        <svg class="mouth">
                            <use xlink:href="#mouth">
                        </svg>
                    </div>
                </label>
                <label class="ok">
                    <input type="radio" value="3" name="feedback" />
                    <div></div>
                </label>
                <label class="good">
                    <input type="radio" value="4" name="feedback" checked />
                    <div>
                        <svg class="eye left">
                            <use xlink:href="#eye">
                        </svg>
                        <svg class="eye right">
                            <use xlink:href="#eye">
                        </svg>
                        <svg class="mouth">
                            <use xlink:href="#mouth">
                        </svg>
                    </div>
                </label>
                <label class="happy">
                    <input type="radio" value="5" name="feedback" />
                    <div>
                        <svg class="eye left">
                            <use xlink:href="#eye">
                        </svg>
                        <svg class="eye right">
                            <use xlink:href="#eye">
                        </svg>
                    </div>
                </label>
            </div>
        </div>
        <div class="review-message">
            <h3>Your Review:</h3>
            <textarea id="reviewText" rows="4" cols="60" placeholder="Write your review here..."></textarea>
        </div>
        <button id="submitFeedback" class="btn btn-primary">Submit</button>

        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 4" id="eye">
                <path
                    d="M1,1 C1.83333333,2.16666667 2.66666667,2.75 3.5,2.75 C4.33333333,2.75 5.16666667,2.16666667 6,1">
                </path>
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 7" id="mouth">
                <path d="M1,5.5 C3.66666667,2.5 6.33333333,1 9,1 C11.6666667,1 14.3333333,2.5 17,5.5"></path>
            </symbol>
        </svg>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Load jQuery first -->

<script>
    // Handle dropdown toggle
    document.querySelectorAll('.dropdown-toggle').forEach(function(toggle) {
        toggle.addEventListener('click', function() {
            const menu = this.nextElementSibling;

            // Close all other menus before opening the current one
            document.querySelectorAll('.menu').forEach(function(otherMenu) {
                if (otherMenu !== menu) {
                    otherMenu.classList.remove('show');
                }
            });

            // Toggle the current menu
            menu.classList.toggle('show');
        });
    });

    // Handle menu item selection
    document.querySelectorAll('.menu .item').forEach(function(item) {
        item.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            const input = this.closest('.custom-dropdown').querySelector('input[type="hidden"]');
            input.value = value;

            const toggle = this.closest('.custom-dropdown').querySelector('.dropdown-toggle');
            const text = this.textContent;

            // Update the toggle text


            // Close menu
            this.closest('.menu').classList.remove('show');
        });
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.custom-dropdown')) {
            document.querySelectorAll('.menu').forEach(function(menu) {
                menu.classList.remove('show');
            });
        }
    });
    //   update let totalAmount = 0; // Declare a global variable to store total amount

    function updateButton() {
        const option1 = document.getElementById('option1');
        const option2 = document.getElementById('option2');
        const button = document.getElementById('buyCourseButton');
        let coursePrice = 0;
        let gstAmount = 0;
        let handlingFees = 751.90; // Total handling fees

        if (option1.checked) {
            // One-time payment
            button.innerText = "Buy Course for ₹30,000";
            coursePrice = 30000; // Price for one-time payment
            gstAmount = coursePrice * 0.18; // GST for the full course
            totalAmount = coursePrice + gstAmount + handlingFees;

            // Update the prices in the offcanvas sidebar
            document.getElementById('coursePrice').textContent = `₹${coursePrice.toLocaleString()}`;
            document.getElementById('coursePriceDetail').textContent = `₹${coursePrice.toLocaleString()}`;
            document.getElementById('gstAmount').textContent = `₹${gstAmount.toFixed(2)}`;
            document.getElementById('handlingFees').textContent = `₹${handlingFees.toFixed(2)}`;
            document.getElementById('totalAmount').textContent = `₹${totalAmount.toFixed(2)}`;
            document.getElementById('monthlyPayment').style.display = 'none'; // Hide monthly payment info for one-time payment
            document.getElementById('finalAmount').textContent = `₹${totalAmount.toFixed(2)}`; // Set final amount for one-time payment

        } else if (option2.checked) {
            // Part-time payment
            button.innerText = "Buy Course for ₹15,000 ";
            coursePrice = 15000; // Price per month
            gstAmount = (30000 * 0.18) / 2; // Half the total GST (split into 2 payments)
            handlingFees = handlingFees / 2; // Half of the handling fees per month
            totalAmount = coursePrice + gstAmount + handlingFees;

            // Update the prices in the offcanvas sidebar
            document.getElementById('coursePrice').textContent = `₹15,000 x 2 months`;
            document.getElementById('coursePriceDetail').textContent = `₹30,000`; // Total course price
            document.getElementById('gstAmount').textContent = `₹${(gstAmount * 2).toFixed(2)}`;
            document.getElementById('handlingFees').textContent = `₹${(handlingFees * 2).toFixed(2)}`;
            document.getElementById('totalAmount').textContent = `₹36,151.90`; // Clear total amount
            document.getElementById('monthlyPayment').style.display = 'flex';
            document.getElementById('perMonthAmount').textContent = `₹${totalAmount.toFixed(2)} per month`; // Per month amount
            document.getElementById('finalAmount').textContent = ""; // Clear final amount for part-time payment
        }
    }

    // Set default selection and button text on page load
    window.onload = function() {
        document.getElementById('option1').checked = true; // Set default to option 1
        updateButton(); // Update button text accordingly
    };

    document.getElementById('proceedBtn').addEventListener('click', function() {
        // Determine the payment amount based on selected option
        let finalPaymentAmount;

        if (document.getElementById('option2').checked) {
            // If option 2 is selected, show the monthly payment amount
            finalPaymentAmount = totalAmount; // This should be the per month amount
            document.getElementById('finalAmount').textContent = `₹${finalPaymentAmount.toFixed(2)}`; // Display per month amount
        } else {
            // If option 1 is selected, show the total amount for one-time payment
            finalPaymentAmount = totalAmount * 1; // Total amount for one-time payment
            document.getElementById('finalAmount').textContent = `₹${finalPaymentAmount.toFixed(2)}`; // Display total amount
        }

        // Hide order summary and show user details form
        document.getElementById('orderSummary').style.display = 'none';
        document.getElementById('userDetailsForm').style.display = 'block';
    });

    // Initialize Bootstrap tooltips
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<!-- Reset Off Canvas when it close -->
<script>
    // Reset offcanvas content when it's closed
    document.getElementById('offcanvasRight').addEventListener('hidden.bs.offcanvas', function() {
        // Reset input fields in the user details form
        document.getElementById('userName').value = '';
        document.getElementById('userEmail').value = '';
        document.getElementById('userPhone').value = '';
        document.getElementById('userState').selectedIndex = 0;

        // Reset course details and selection
        document.getElementById('coursePrice').textContent = '₹30,000';
        document.getElementById('coursePriceDetail').textContent = '₹30,000';
        document.getElementById('gstAmount').textContent = '₹5,400';
        document.getElementById('handlingFees').textContent = '₹751.90';
        document.getElementById('totalAmount').textContent = '₹36,151.90';
        document.getElementById('monthlyPayment').style.display = 'none';

        // Reset option selection to default (e.g., option 1)
        document.getElementById('option1').checked = true;
        updateButton(); // Call the update function to refresh displayed prices

        // Hide the user details form and show the order summary
        document.getElementById('userDetailsForm').style.display = 'none';
        document.getElementById('orderSummary').style.display = 'block';
    });
</script>

<!-- Submit Payment form -->
<script>
    $(document).ready(function() {
        $('#submitdetailsForm').on('submit', function(e) {
            e.preventDefault(); // Prevent form from submitting normally

            // Get data from the form
            const userName = $('#userName').val().trim();
            const userEmail = $('#userEmail').val().trim();
            const userPhone = $('#userPhone').val().trim();
            const userState = $('#userState').val();
            const finalAmount = $('#finalAmount').text().replace('₹', '').trim(); // Remove currency symbol if present

            // Validate that the final amount is a number
            if (isNaN(finalAmount)) {
                $('#responseMessage').text('Invalid amount format').addClass('text-danger');
                return;
            }

            // Prepare data to be sent
            const data = {
                userName: userName,
                userEmail: userEmail,
                userPhone: userPhone,
                userState: userState,
                finalAmount: finalAmount
            };

            // Send AJAX request
            $.ajax({
                url: 'api/payment_form.php',
                method: 'POST',
                data: JSON.stringify(data),
                contentType: 'application/json',
                success: function(response) {
                    if (response.status === 201) {
                        alert('Form Submitted successful!');

                    } else {
                        alert('Something Went Wrong!');

                    }
                    $.ajax({
                        url: 'sendEmail.php',
                        type: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify(userData),
                        success: function(emailResponse) {
                            console.log('Email sent successfully');
                        },
                        error: function() {
                            console.log('Email failed to send');
                        }
                    });
                },
                error: function(xhr) {
                    // Error handling based on HTTP status code
                    const errorMessage = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'An unexpected error occurred';
                    $('#responseMessage').text(errorMessage).addClass('text-danger');
                }
            });
        });
    });
</script>