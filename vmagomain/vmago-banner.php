

<!-- banner section
<section class="vmago-banner position-relative d-flex justify-content-center align-items-center">


    <div class="container text-center text-white position-relative">
        <img src="images/vmagobanner.jpg" alt="Digimed Logo" class="img-fluid animated-logo" >

        <h1 class="mb-4 animated-welcome">Welcome to Vmago– <br> Your Trusted Partner in Research Paper Writing</h1>
    </div>
</section> -->

<style>
    
/* Banner styling */
.banner {
    background-color: #f1f1f1;
    height: 630px;
}

/* Ordered list (ol) default styles */
ol {
    border: none;
}

/* List item (li) styles */
ol li {
    padding: 10px;
    color: #fff;
    text-align: right;
}

/* Left column styling */
.left-column {
    width: 25%;
    background-color: #3572EF;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: right;
    /* Aligns text to the right */
}

/* Left column ordered list styles */
.left-column ol {
    margin: 0;
    padding: 0;
    list-style: none;
    /* Remove default list styling */
}

.left-column ol li {
    /* background-color: #96c9fd; */
    margin-right: -1.2rem;
    color: white;
    position: relative;
    padding: 16px 20px;
    /* Add padding for better spacing */
    box-sizing: border-box;
    font-weight: bold;
    cursor: pointer;
}

.left-column ol li::before {
    display: none;
}

.left-column ol li:hover {
    background-color: #050c9c;
    color: #fff;
}

.left-column ol li::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 100%;
}

.left-column ol li.selected {
    background-color: #4a90e2;
    /* Change color for selected item */
}

.left-column ol li.selected::after {
    border-left: 24px solid #4a90e2;
    transform: translateY(-50%);
    border-top: 32px solid rgba(0, 0, 0, 0);
    border-bottom: 29px solid rgba(0, 0, 0, 0);
    border-left: 24px solid #4a90e2;

}

/* Hover effect for list items */
/* .left-column ol li:hover {
    background-color: burlywood;
} */

/* Nav ordered list styles */
nav ol {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

/* Banner section styling */
.banner-section {
    display: flex;
    justify-content: center;
    /* padding: 30px; */
    padding: 2rem 0;
    height: 580px;
    width: 1520px;
}

/* Right column styling */
.right-column {
    background-color: #fff;
    width: 75%;
    padding: 21px 13px;
    display: flex;
}


.content {
    display: none;
    /* Hide by default, shown by JavaScript */
    padding: 20px;
    /* Adjust padding as needed */
    /* Optional border for better visibility */
    border-radius: 8px;
    /* Optional rounded corners */
}

.content-image {
    /* max-width: 300px; */
    height: 170px;
    /* display: block; */
    margin-bottom: 15px;
    width: 300px;
    position: relative;
    left: 30%;
}


figure img {
    width: 300px;
    height: 400px;
}

h2 {
    margin-top: 0;
    /* Remove top margin from h2 */
    margin-bottom: 10px;
    /* Space between heading and paragraph */
}

p {
    margin: 0;
    /* Remove margin from paragraphs for consistent spacing */
}

.dropdown-menu {
    border-radius: 0px;
}

/* Hide all content sections by default */
.right-column .content {
    display: none;
}

/* Show the selected content */
.right-column .content.active {
    display: block;
}

/* Style for selected list item */
.left-column ol li.selected {
    font-weight: bold;
    color: rgb(0, 0, 0);
    /* Customize as needed */
}

/* Image container styling */


.image-container img {
    /* max-width: 100%; */
    height: calc(100vh - 340px);
    position: absolute;
    left: 70%;
    width: 329px ;
    top: 15%;
}

article {
    display: flex;
}

.content-text p {
    width: 100%;
}

.text-content p {
    width: 500px;
}


figure img {
    width: 200px;
    height: 150px;
}


.sidebar {
    width: 25%;
    background-color: #0044cc;
    padding: 20px;
    color: white;
}

.main-content {
    width: 75%;
    /* display: flex; */
    flex-wrap: wrap;
    padding: 20px;
}

.text-content {
    flex: 1;
    min-width: 200px;
    margin-right: 20px;
    text-align: center;
}

.image-content img {
    width: 344px;
    height: 220px;
    /* position: absolute; */
    left: 19%;
    position: relative;
}



.banner .row {
    padding: 100px 0px;
}

/* trending topic css */

h2.main-title {
    margin-bottom: 40px;
}

section.trending-topic-outer {
    padding: 30px 0px;
}

.trending-topic-outer p {
    font-size: 20px;
}


.trending-topic-outer a {
    font-size: 25px;
}

.image-container.mt-3 {
    margin: 0 auto;
    position: relative;
    top: -90%;
    right: 4%;
}

button.btn.btn-primary {
    width: 208px;
    border-radius: 0px;
}

.row.align-items-center {
    padding: 15px 10px;
}

</style>
    <section class="banner">
        <div class="container">
            <div class="row">
                <!-- Left Column: Navigation (Desktop) -->
                <div class="col-md-4 col-12 left-column d-none d-md-block">
                    <nav>
                        <ol class="list-unstyled">
                            <li data-content="content1" data-image="../images/p1.jpeg" class="selected">1. Research your
                                options</li>
                            <li data-content="content2" data-image="../images/p2.jpeg">2. Draft your article</li>
                            <li data-content="content3" data-image="../images/p3.jpeg">3. Instructions for authors</li>
                            <li data-content="content4" data-image="../images/p4.jpeg">4. Make your submission</li>
                            <li data-content="content5" data-image="../images/p5.jpeg">5. Peer review</li>
                            <li data-content="content6" data-image="../images/p6.jpeg">6. Making revisions</li>
                            <li data-content="content7" data-image="../images/p7.jpeg">7. Your article is accepted</li>
                            <li data-content="content8" data-image="../images/p8.jpeg">8. Promoting your work</li>
                        </ol>
                    </nav>
                </div>

                <!-- Right Column: Content (Desktop) -->
                <div class="col-md-8 col-12 right-column d-none d-md-block">
                    <!-- Content Sections -->
                    <!-- Content for Step 1 -->
                    <div class="content-container" id="content1">
                        <div class="main-content">
                            <div class="image-content">
                                <img src="../images/researchoption.jpeg" alt="Research your options" class="img-fluid">
                            </div>
                            <div class="text-content">
                                <h2>Research your options</h2>
                                <p>Take the time to explore the journals in your field to choose the best fit for your
                                    research. Find a journal that serves the audience you’re trying to reach and whose
                                    aims and scope match your approach. You might also have choices to make about
                                    different publishing options, including open access.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Content for Step 2 -->
                    <div class="content-container" id="content2" style="display: none;">
                        <div class="main-content">
                            <div class="image-content">
                                <img src="../images/draft-article.avif" alt="Draft your article" class="img-fluid">
                            </div>
                            <div class="text-content">
                                <h2>Draft your article</h2>
                                <p>When you’ve chosen the journal you want to submit to, you’re ready to start drafting
                                    your paper. What should you be thinking about before you start writing and how can
                                    you maximize your chances of getting published?</p>
                            </div>
                        </div>
                    </div>

                    <!-- Content for Step 3 -->
                    <div class="content-container" id="content3" style="display: none;">
                        <div class="main-content">
                            <div class="image-content">
                                <img src="../images/instructions.avif" alt="Instructions for authors" class="img-fluid">
                            </div>
                            <div class="text-content">
                                <h2>Instructions for authors</h2>
                                <p>The instructions for authors include essential information on what you need to do to
                                    submit to your chosen journal. Follow these guidelines and you’ll know that the
                                    journal’s editorial team has everything they need to consider your article for
                                    publication.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Content for Step 4 -->
                    <div class="content-container" id="content4" style="display: none;">
                        <div class="main-content">
                            <div class="image-content">
                                <img src="../images/submission.avif" alt="Make your submission" class="img-fluid">
                            </div>
                            <div class="text-content">
                                <h2>Make your submission</h2>
                                <p>So, you’ve done your research, chosen your target journal, written your paper, and
                                    are about to submit. Time for one final check to make sure you’ve got everything
                                    ready before heading to the journal’s submission system.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Content for Step 5 -->
                    <div class="content-container" id="content5" style="display: none;">
                        <div class="main-content">
                            <div class="image-content">
                                <img src="../images/review.avif" alt="Peer review" class="img-fluid">
                            </div>
                            <div class="text-content">
                                <h2>Peer review</h2>
                                <p>The peer review process is essential for maintaining the quality and credibility of
                                    academic research. Experts in the field evaluate submitted work for its originality,
                                    accuracy, and relevance, providing constructive feedback to improve the manuscript.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Content for Step 6 -->
                    <div class="content-container" id="content6" style="display: none;">
                        <div class="main-content">
                            <div class="image-content">
                                <img src="../images/revision.avif" alt="Making revisions" class="img-fluid">
                            </div>
                            <div class="text-content">
                                <h2>Making revisions</h2>
                                <p>Following peer review, you may be asked to make revisions to your article and
                                    resubmit. Take time to read through the editor and reviewers’ advice, and decide
                                    what changes you’ll make to your article. Taking their points on board will help to
                                    ensure your final article is as robust and impactful as possible.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Content for Step 7 -->
                    <div class="content-container" id="content7" style="display: none;">
                        <div class="main-content">
                            <div class="image-content">
                                <img src="../images/article-accept.avif" alt="Your article is accepted" class="img-fluid">
                            </div>
                            <div class="text-content">
                                <h2>Your article is accepted</h2>
                                <p>The next step is production. Copy editing begins, and we’ll contact you with your
                                    proofs. You’ll also sign a publishing agreement. If you submitted to an Open Select
                                    journal, now is the time to choose whether to publish your article open access.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Content for Step 8 -->
                    <div class="content-container" id="content8" style="display: none;">
                        <div class="main-content">
                            <div class="image-content">
                                <img src="../images/wordk-promoting.avif" alt="Promoting your work" class="img-fluid">
                            </div>
                            <div class="text-content">
                                <h2>Promoting your work</h2>
                                <p>Promoting your published article is a team effort. Taylor & Francis works hard to
                                    maximize the discoverability of your work, and we’ve got lots of advice to help you
                                    share your work and amplify its impact.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Dynamic Image -->
                    <div class="image-container mt-5">
                        <img src="../images/p1.jpeg" alt="Dynamic content image" class="content-image img-fluid"
                            id="dynamicImage">
                    </div>
                </div>
                <!-- Carousel for Mobile -->
                <div class="col-12 d-md-none">
                    <div id="mobileCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="60000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/researchoption.jpeg" class="d-block w-100" alt="Research your options">
                                <div class="carousel-caption  d-md-block">
                                    <h2>Research your options</h2>
                                    <p>Take the time to explore the journals in your field to choose the best fit for
                                        your
                                        research. Find a journal that serves the audience you’re trying to reach and
                                        whose
                                        aims and scope match your approach.</p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img src="../images/draft-article.avif" class="d-block w-100" alt="Research your options">
                                <div class="carousel-caption  d-md-block">
                                    <h2>Draft your article</h2>
                                    <p>When you’ve chosen the journal you want to submit to, you’re ready to start
                                        drafting
                                        your paper. What should you be thinking about before you start writing and how
                                        can
                                        you maximize your chances of getting published?</p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img src="../images/instructions.avif" class="d-block w-100" alt="Research your options">
                                <div class="carousel-caption  d-md-block">
                                    <h2>Instructions for authors</h2>
                                    <p>The instructions for authors include essential information on what you need to do
                                        to
                                        submit to your chosen journal. Follow these guidelines and you’ll know that the
                                        journal’s editorial team has everything they need to consider your article for
                                        publication.</p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img src="../images/submission.avif" class="d-block w-100" alt="Research your options">
                                <div class="carousel-caption  d-md-block">
                                    <h2>Make your submission</h2>
                                    <p>So, you’ve done your research, chosen your target journal, written your paper,
                                        and
                                        are about to submit. Time for one final check to make sure you’ve got everything
                                        ready before heading to the journal’s submission system.</p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img src="../images/review.avif" class="d-block w-100" alt="Research your options">
                                <div class="carousel-caption  d-md-block">
                                    <h2>Peer review</h2>
                                    <p>The peer review process ensures that your research is validated by experts in
                                        your
                                        field. Be prepared for feedback and potentially additional revisions to improve
                                        your
                                        article.</p>
                                </div>
                            </div>

                            <div class="carousel-item ">
                                <img src="../images/revision.avif" class="d-block w-100" alt="Research your options">
                                <div class="carousel-caption  d-md-block">
                                    <h2>Making revisions</h2>
                                    <p>Following peer review, you may be asked to make revisions to your article and
                                        resubmit. Take time to read through the editor and reviewers’ advice, and decide
                                        what changes you’ll make to your article. </p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img src="../images/article-accept.avif" class="d-block w-100" alt="Research your options">
                                <div class="carousel-caption  d-md-block">
                                    <h2>Your article is accepted</h2>
                                    <p>The next step is production. Copy editing begins, and we’ll contact you with your
                                        proofs. You’ll also sign a publishing agreement. If you submitted to an Open
                                        Select
                                        journal, now is the time to choose whether to publish your article open access.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img src="../images/wordk-promoting.avif" class="d-block w-100"
                                    alt="Research your options">
                                <div class="carousel-caption  d-md-block">
                                    <h2>Promoting your work</h2>
                                    <p>Promoting your published article is a team effort. Taylor & Francis works hard to
                                        maximize the discoverability of your work, and we’ve got lots of advice to help
                                        you
                                        share your work and amplify its impact.</p>
                                </div>
                            </div>

                            <!-- Add more carousel items as needed -->
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const listItems = document.querySelectorAll('.left-column nav li');
        const contentContainers = document.querySelectorAll('.content-container');
        const dynamicImage = document.getElementById('dynamicImage');

        listItems.forEach(item => {
            item.addEventListener('click', function () {
                // Remove 'selected' class from all items
                listItems.forEach(li => li.classList.remove('selected'));

                // Hide all content containers
                contentContainers.forEach(container => container.style.display = 'none');

                // Show the clicked content and update the image
                const contentId = this.getAttribute('data-content');
                const imageSrc = this.getAttribute('data-image');

                document.getElementById(contentId).style.display = 'block';
                dynamicImage.src = imageSrc;

                // Add 'selected' class to the clicked item
                this.classList.add('selected');
            });
        });
    });
</script>

