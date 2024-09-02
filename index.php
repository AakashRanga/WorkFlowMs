<?php include('header.php'); ?>
<main>
    <!-- Banner Section -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <!-- Left Column: Navigation (Desktop) -->
                <div class="col-md-4 col-12 left-column d-none d-md-block">
                    <nav>
                        <ol class="list-unstyled">
                            <li data-content="content1" data-image="images/p1.jpeg" class="selected">1. Research your
                                options</li>
                            <li data-content="content2" data-image="images/p2.jpeg">2. Draft your article</li>
                            <li data-content="content3" data-image="images/p3.jpeg">3. Instructions for authors</li>
                            <li data-content="content4" data-image="images/p4.jpeg">4. Make your submission</li>
                            <li data-content="content5" data-image="images/p5.jpeg">5. Peer review</li>
                            <li data-content="content6" data-image="images/p6.jpeg">6. Making revisions</li>
                            <li data-content="content7" data-image="images/p7.jpeg">7. Your article is accepted</li>
                            <li data-content="content8" data-image="images/p8.jpeg">8. Promoting your work</li>
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
                                <img src="images/researchoption.jpeg" alt="Research your options" class="img-fluid">
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
                                <img src="images/draft-article.avif" alt="Draft your article" class="img-fluid">
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
                                <img src="images/instructions.avif" alt="Instructions for authors" class="img-fluid">
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
                                <img src="images/submission.avif" alt="Make your submission" class="img-fluid">
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
                                <img src="images/review.avif" alt="Peer review" class="img-fluid">
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
                                <img src="images/revision.avif" alt="Making revisions" class="img-fluid">
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
                                <img src="images/article-accept.avif" alt="Your article is accepted" class="img-fluid">
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
                                <img src="images/wordk-promoting.avif" alt="Promoting your work" class="img-fluid">
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
                    <div class="image-container mt-3">
                        <img src="images/p1.jpeg" alt="Dynamic content image" class="content-image img-fluid"
                            id="dynamicImage">
                    </div>
                </div>
                <!-- Carousel for Mobile -->
                <div class="col-12 d-md-none">
                    <div id="mobileCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="60000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/researchoption.jpeg" class="d-block w-100" alt="Research your options">
                                <div class="carousel-caption  d-md-block">
                                    <h5>Research your options</h5>
                                    <p>Take the time to explore the journals in your field to choose the best fit for
                                        your
                                        research. Find a journal that serves the audience you’re trying to reach and
                                        whose
                                        aims and scope match your approach. </p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img src="images/draft-article.avif" class="d-block w-100" alt="Research your options">
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
                                <img src="images/instructions.avif" class="d-block w-100" alt="Research your options">
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
                                <img src="images/submission.avif" class="d-block w-100" alt="Research your options">
                                <div class="carousel-caption  d-md-block">
                                    <h2>Make your submission</h2>
                                    <p>So, you’ve done your research, chosen your target journal, written your paper,
                                        and
                                        are about to submit. Time for one final check to make sure you’ve got everything
                                        ready before heading to the journal’s submission system.</p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img src="images/review.avif" class="d-block w-100" alt="Research your options">
                                <div class="carousel-caption  d-md-block">
                                    <h2>Peer review</h2>
                                    <p>The peer review process ensures that your research is validated by experts in
                                        your
                                        field. Be prepared for feedback and potentially additional revisions to improve
                                        your
                                        article.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="images/revision.avif" class="d-block w-100" alt="Research your options">
                            <div class="carousel-caption  d-md-block">
                                <h2>Making revisions</h2>
                                <p>Following peer review, you may be asked to make revisions to your article and
                                    resubmit. Take time to read through the editor and reviewers’ advice, and decide
                                    what changes you’ll make to your article. </p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="images/article-accept.avif" class="d-block w-100" alt="Research your options">
                            <div class="carousel-caption  d-md-block">
                                <h2>Your article is accepted</h2>
                                <p>The next step is production. Copy editing begins, and we’ll contact you with your
                                    proofs. You’ll also sign a publishing agreement. If you submitted to an Open Select
                                    journal, now is the time to choose whether to publish your article open access.</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="images/wordk-promoting.avif" class="d-block w-100" alt="Research your options">
                            <div class="carousel-caption  d-md-block">
                                <h2>Promoting your work</h2>
                                <p>Promoting your published article is a team effort. Taylor & Francis works hard to
                                    maximize the discoverability of your work, and we’ve got lots of advice to help you
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


    <!-- Trending Topics -->
    <section class="trending-topic-outer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-dark">
                    <h2 class="main-title">TRENDING TOPICS</h2>
                </div>
            </div>
            <div class="row">
                <!-- First div with image and content -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="trending-image">
                        <img src="images/publishing.jpg" alt="Trending Topic 1" class="img-fluid">
                    </div>
                    <div class="trending-content mt-3">
                        <p>Boost your research career by signing up to Research Insights and receive free expert
                            guidance on the publishing process.</p>
                        <a href="research-insights.php">Need help getting published? <i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>

                <!-- Second div with image and content -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="trending-image">
                        <img src="images/journal.jpg" alt="Trending Topic 2" class="img-fluid">
                    </div>
                    <div class="trending-content mt-3">
                        <p>Thinking about where to submit your paper? Our comprehensive guide to choosing a journal is
                            here to help.</p>
                        <a href="journal.php">Free guide to choosing a journal <i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call for Papers -->
    <section class="call-paper-outer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-dark mb-4">
                    <h2 class="call-title">CALL FOR PAPERS IN YOUR SUBJECT AREA</h2>
                </div>
            </div>
            <div class="row">
                <!-- Image Section -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <img src="images/call-paper.png" alt="Descriptive Alt Text" class="img-fluid">
                </div>
                <!-- Text and Button Section -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <p>Journals regularly ‘call for papers’, asking for submissions within a particular field or topic.
                        Answering these is a great way to get published, making sure your research fits the journal’s
                        aims and scope.</p>
                    <a href="callforpapers.php" class="btn btn-primary mt-3">Search Current Call for Papers</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileCarousel = new bootstrap.Carousel(document.getElementById('mobileCarousel'), {
            interval: 5000, // Adjust interval as needed
            ride: 'carousel'
        });

        const listItems = document.querySelectorAll('.left-column ol li');
        const containers = document.querySelectorAll('.right-column .content-container');
        const dynamicImage = document.getElementById('dynamicImage');

        function showContent(contentId, imageUrl) {
            listItems.forEach(li => li.classList.remove('selected'));
            containers.forEach(container => container.style.display = 'none');

            const selectedListItem = document.querySelector(`.left-column ol li[data-content="${contentId}"]`);
            if (selectedListItem) {
                selectedListItem.classList.add('selected');
            }

            const contentToShow = document.getElementById(contentId);
            if (contentToShow) {
                contentToShow.style.display = 'block';
            }

            if (dynamicImage) {
                dynamicImage.src = imageUrl;
            }
        }

        showContent('content1', 'images/p1.jpeg');

        listItems.forEach(item => {
            item.addEventListener('click', function () {
                const contentId = this.getAttribute('data-content');
                const imageUrl = this.getAttribute('data-image');
                showContent(contentId, imageUrl);
            });
        });
    });
</script>