<style>
    /* CSS for highlighting the middle carousel item with a fade effect */
    .carousel-item-center {
        transform: scale(1.1);
        transition: transform 0.5s ease, box-shadow 0.5s ease;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
    }

    .carousel .carousel-inner .card {
        opacity: 0;
        transition: opacity 0.5s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    .carousel .carousel-inner .card.show {
        opacity: 1;
    }
</style>

<section class="courses-section">
    <div class="container py-5">
        <h1 class="text-center mb-4 text-black">Our Knowledge Partners</h1>
        <div id="servicesCarouselLarge" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- First carousel item -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-12 col-md-4 col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Research Paper Writing</h5>
                                    <p class="card-text">Are you struggling with your research paper? Looking for
                                        professional assistance to craft a high-quality academic paper that stands out?
                                        At Vmago we offer expert research paper writing services to help you succeed in
                                        your academic journey.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Review Paper Writing</h5>
                                    <p class="card-text">Do you need help crafting a comprehensive, well-researched
                                        review paper? At Vmago we offer expert review paper writing services to help you
                                        excel in your academic or professional endeavors. Whether you're a student,
                                        researcher, or academic, our team of qualified writers is ready to assist you in
                                        creating high-quality review papers tailored to your specific needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Conference Paper Writing</h5>
                                    <p class="card-text">Are you preparing for an upcoming conference and need help
                                        crafting a compelling paper? At Vmago we specialize in writing high-quality
                                        conference papers tailored to meet the specific requirements of academic and
                                        professional conferences. Whether you're an academic, researcher, or industry
                                        professional, our team is here to help you make a lasting impression at your
                                        next conference.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second carousel item -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-12 col-md-4 col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Literature Review Writing</h5>
                                    <p class="card-text">Are you struggling with writing a comprehensive literature
                                        review for your thesis, dissertation, or research project? At Vmago we provide
                                        top-tier literature review writing services to help you build a strong
                                        foundation for your research. Our experienced writers specialize in delivering
                                        well-structured, insightful, and academically rigorous literature reviews
                                        tailored to your specific needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Thesis Writing Services</h5>
                                    <p class="card-text">Are you feeling overwhelmed by the daunting task of writing
                                        your thesis? At Vmago we provide expert thesis writing services designed to help
                                        students, researchers, and academics successfully complete their thesis
                                        projects. Whether you're pursuing a master’s or PhD degree, our team of
                                        experienced writers is here to support you through every stage of your thesis
                                        journey.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Synopsis Writing Services</h5>
                                    <p class="card-text">Are you in need of a well-crafted synopsis for your research project, thesis, or dissertation? At Vmago we provide expert synopsis writing services designed to help students, researchers, and professionals present their research in a clear and compelling manner. Whether it’s for academic approval, funding, or publication, our experienced team can create a strong, concise synopsis tailored to your specific needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Additional carousel items can go here -->
                <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarouselLarge"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#servicesCarouselLarge"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carouselElement = document.querySelector('#servicesCarouselLarge');
        const carouselItems = carouselElement.querySelectorAll('.carousel-item');

        function highlightCardsSequentially() {
            carouselItems.forEach(item => {
                const cards = item.querySelectorAll('.col-md-4 .card');
                cards.forEach((card, index) => {
                    card.classList.remove('show', 'carousel-item-center'); // Reset classes

                    // Delay each card's appearance and highlight
                    setTimeout(() => {
                        card.classList.add('show'); // Show card
                        if (index === 1) card.classList.add('carousel-item-center'); // Highlight second card
                    }, index * 300); // Adjust delay timing here as needed
                });
            });
        }

        carouselElement.addEventListener('slid.bs.carousel', highlightCardsSequentially);
        highlightCardsSequentially(); // Initial load
    });
</script>