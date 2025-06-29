<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PyinNyarShweSi - Excellence in Education</title>
    <meta name="description"
        content="PyinNyarShweSi School provides quality education from Kindergarten to Grade 5 in Myanmar.">

    <!-- External Bootstrap CSS -->
    <link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Noto+Sans+Myanmar:wght@400;600;700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="frontend-navbar navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span>PyinNyar</span>ShweSi
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#frontend-navbar"
                aria-controls="frontend-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="frontend-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-home me-1"></i> Home</a>
                    </li>

                    <!-- Academic Service Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="frontend-academic-dropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-graduation-cap me-1"></i> Academic Service
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="frontend-academic-dropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-book me-2"></i> Library</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-comments me-2"></i>
                                    Counselling</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-chalkboard-teacher me-2"></i>
                                    Tutoring</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-info-circle me-1"></i> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt me-1"></i>
                            Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white ms-2" href="{{ route('register') }}"><i
                                class="fas fa-user-plus me-1"></i> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Carousel -->
    <section id="frontend-hero-carousel" class="carousel slide frontend-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="frontend-carousel-item">
                    <div class="container py-3">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <div class="frontend-carousel-content bg-primary p-4 p-lg-5 rounded-4 shadow">
                                    <div class="frontend-carousel-icon mb-4 mx-auto">
                                        <i class="fas fa-school fadeInDown  fa-3x text-white"></i>
                                    </div>
                                    <h2 class="frontend-carousel-title text-white mb-3">Welcome to PyinNyarShweSi</h2>
                                    <p class="frontend-carousel-text text-light mb-4">A tradition of excellence in
                                        education since 2005</p>
                                    <a href="#about" class="btn btn-light btn-lg px-4">
                                        Learn More <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="frontend-carousel-item">
                    <div class="container py-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <div class="frontend-carousel-content bg-primary p-4 p-lg-5 rounded-4 shadow">
                                    <div class="frontend-carousel-icon mb-4 mx-auto">
                                        <i class="fas fa-graduation-cap fa-3x text-white"></i>
                                    </div>
                                    <h2 class="frontend-carousel-title text-white mb-3">Quality Education</h2>
                                    <p class="frontend-carousel-text text-light mb-4">Kindergarten to Grade 5 programs
                                    </p>
                                    <a href="#levels" class="btn btn-light btn-lg px-4">
                                        Our Programs <i class="fas fa-book-open ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="frontend-carousel-item">
                    <div class="container py-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <div class="frontend-carousel-content bg-primary p-4 p-lg-5 rounded-4 shadow">
                                    <div class="frontend-carousel-icon mb-4 mx-auto">
                                        <i class="fas fa-child fa-3x text-white"></i>
                                    </div>
                                    <h2 class="frontend-carousel-title text-white mb-3">Nurturing Environment</h2>
                                    <p class="frontend-carousel-text text-light mb-4">Safe and supportive learning
                                        atmosphere</p>
                                    <a href="#activities-facilities" class="btn btn-light btn-lg px-4">
                                        Our Facilities <i class="fas fa-school ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controlls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#frontend-hero-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#frontend-hero-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
        </button>
    </section>

    <!-- About Our School -->
    <section id="about" class="frontend-section frontend-about-section">
        <div class="container">
            <div class="text-center">
                <h3 class="frontend-section-title text-center">Do You Know PyinNyarShweSi</h3>
            </div>
            <div class="row align-items-start g-5">
                <div class="col-lg-6">
                    <h3 class="frontend-subtitle">What is PyinNyarShweSi?</h3>
                    <p class="frontend-text">PyinNyarShweSi is a premier educational institution dedicated to nurturing
                        young minds from Kindergarten through Grade 5. Our school provides a holistic learning
                        environment that combines academic excellence with character development.</p>

                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="frontend-feature-box">
                                <div class="frontend-feature-icon text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div class="frontend-feature-content">
                                    <h5 class="frontend-feature-title">Quality Education</h5>
                                    <p class="frontend-feature-text">Comprehensive curriculum for holistic development
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="frontend-feature-box">
                                <div class="frontend-feature-icon text-primary">
                                    <i class="fas fa-users fa-2x"></i>
                                </div>
                                <div class="frontend-feature-content">
                                    <h5 class="frontend-feature-title">Experienced Faculty</h5>
                                    <p class="frontend-feature-text">Dedicated and qualified teaching professionals</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="frontend-feature-box">
                                <div class="frontend-feature-icon text-primary">
                                    <i class="fas fa-heart fa-2x"></i>
                                </div>
                                <div class="frontend-feature-content">
                                    <h5 class="frontend-feature-title">Nurturing Environment</h5>
                                    <p class="frontend-feature-text">Safe and supportive atmosphere for learning</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="frontend-feature-box">
                                <div class="frontend-feature-icon text-primary">
                                    <i class="fas fa-star fa-2x"></i>
                                </div>
                                <div class="frontend-feature-content">
                                    <h5 class="frontend-feature-title">Excellence</h5>
                                    <p class="frontend-feature-text">Commitment to academic and personal excellence</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-3">
                    <div class="frontend-image-box position-relative">
                        <img src="{{ asset('images/home/school.png') }}"
                            class="img-fluid rounded shadow-lg frontend-image" alt="About School">
                        <div
                            class="frontend-image-badge position-absolute bottom-0 start-0 bg-primary text-white p-3 m-3 rounded shadow-sm">
                            <h5 class="mb-0"><i class="fas fa-award me-2"></i> Since 2005</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Levels and teaching methods -->
    <section id="levels" class="frontend-section frontend-levels-section">
        <div class="container">
            <div class="text-center">
                <h3 class="frontend-section-title text-center">What We Offer</h3>
            </div>

            <!-- Levels Section -->
            <div class="row g-4">
                <!-- Levels Column -->
                <div class="col-lg-6">
                    <h2 class="frontend-subtitle mb-4">Grade Levels</h2>
                    <div>
                        <div class="d-flex flex-column align-items-center">
                            <a href="#" class="btn btn-outline-primary mb-3 frontend-level-link text-center">
                                <i class="fas fa-child me-2 text-primary" aria-hidden="true"></i>Kindergarten (KG)
                            </a>
                            <a href="#" class="btn btn-outline-primary mb-3 frontend-level-link text-center">
                                <i class="fas fa-pencil-alt me-2 text-primary" aria-hidden="true"></i>Grade 1
                            </a>
                            <a href="#" class="btn btn-outline-primary mb-3 frontend-level-link text-center">
                                <i class="fas fa-book-open me-2 text-primary" aria-hidden="true"></i>Grade 2
                            </a>
                            <a href="#" class="btn btn-outline-primary mb-3 frontend-level-link text-center">
                                <i class="fas fa-graduation-cap me-2 text-primary" aria-hidden="true"></i>Grade 3
                            </a>
                            <a href="#" class="btn btn-outline-primary mb-3 frontend-level-link text-center">
                                <i class="fas fa-atom me-2 text-primary" aria-hidden="true"></i>Grade 4
                            </a>
                            <a href="#" class="btn btn-outline-primary frontend-level-link text-center">
                                <i class="fas fa-microscope me-2 text-primary" aria-hidden="true"></i>Grade 5
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Teaching Methodology Column -->
                <div class="col-lg-6">
                    <h2 class="frontend-subtitle mb-4">Our Teaching Approach</h2>
                    <div>

                        <div class="methodology-list">
                            <div class="methodology-item d-flex mb-4">
                                <div class="methodology-icon bg-primary text-white rounded-circle flex-shrink-0 me-3 d-flex align-items-center justify-content-center"
                                    style="width: 42px; height: 42px;">
                                    <i class="fas fa-users fa-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h3 class="methodology-title h5 text-primary">Collaborative Learning</h3>
                                    <p class="methodology-text mb-0">Interactive group activities that encourage
                                        teamwork and peer-to-peer knowledge sharing</p>
                                </div>
                            </div>

                            <div class="methodology-item d-flex mb-4">
                                <div class="methodology-icon bg-primary text-white rounded-circle flex-shrink-0 me-3 d-flex align-items-center justify-content-center"
                                    style="width: 42px; height: 42px;">
                                    <i class="fas fa-lightbulb fa-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h3 class="methodology-title h5 text-primary">Critical Thinking</h3>
                                    <p class="methodology-text mb-0">Developing problem-solving skills through
                                        inquiry-based methods and cognitive development</p>
                                </div>
                            </div>

                            <div class="methodology-item d-flex mb-4">
                                <div class="methodology-icon bg-primary text-white rounded-circle flex-shrink-0 me-3 d-flex align-items-center justify-content-center"
                                    style="width: 42px; height: 42px;">
                                    <i class="fas fa-laptop-code fa-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h3 class="methodology-title h5 text-primary">Tech Integration</h3>
                                    <p class="methodology-text mb-0">Digital tools and platforms to enhance learning
                                        experiences with global perspectives</p>
                                </div>
                            </div>

                            <div class="methodology-item d-flex">
                                <div class="methodology-icon bg-primary text-white rounded-circle flex-shrink-0 me-3 d-flex align-items-center justify-content-center"
                                    style="width: 42px; height: 42px;">
                                    <i class="fas fa-project-diagram fa-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h3 class="methodology-title h5 text-primary">Holistic Development</h3>
                                    <p class="methodology-text mb-0">Project-based activities connecting knowledge to
                                        real-world applications for complete growth</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Curriculum and Why choose us Section Below -->
    <section class="frontend-section frontend-levels-section">
        <div class="container">
            <!-- Curriculum Section Below -->
            <div class="text-center">
                <h3 class="frontend-section-title">Building Foundations for Success</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="frontend-curriculum-accordion">
                        <!-- Keep your existing accordion content here -->
                        <div>
                            <h3 class="frontend-subtitle mb-4">Our Curriculum</h3>
                            <p class="frontend-text mb-4">
                                Our comprehensive curriculum is designed to provide students with a well-rounded
                                education
                                that prepares them for future academic success while fostering creativity, critical
                                thinking, and personal growth.
                            </p>

                            <div class="accordion" id="frontend-curriculum-accordion">
                                <div>
                                    <h2 class="frontend-accordion-header" id="frontend-heading-one">
                                        <button class="frontend-accordion-button" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#frontend-collapse-one"
                                            aria-expanded="true" aria-controls="frontend-collapse-one">
                                            <i class="fas fa-book me-2 text-primary"></i> Core Subjects
                                        </button>
                                    </h2>
                                    <div id="frontend-collapse-one" class="accordion-collapse collapse show"
                                        aria-labelledby="frontend-heading-one"
                                        data-bs-parent="#frontend-curriculum-accordion">
                                        <div class="frontend-accordion-body">
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-success me-2"></i>
                                                    Myanmar Language</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-success me-2"></i>
                                                    English Language</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-success me-2"></i>
                                                    Mathematics</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-success me-2"></i>
                                                    Science</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-success me-2"></i>
                                                    Social Studies</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="frontend-accordion-item border-0 mb-3">
                                    <h2 class="frontend-accordion-header" id="frontend-heading-two">
                                        <button class="frontend-accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#frontend-collapse-two"
                                            aria-expanded="false" aria-controls="frontend-collapse-two">
                                            <i class="fas fa-paint-brush me-2 text-primary"></i> Creative Arts
                                        </button>
                                    </h2>
                                    <div id="frontend-collapse-two" class="accordion-collapse collapse"
                                        aria-labelledby="frontend-heading-two"
                                        data-bs-parent="#frontend-curriculum-accordion">
                                        <div class="frontend-accordion-body">
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-success me-2"></i>
                                                    Art & Craft</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-success me-2"></i>
                                                    Music</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-success me-2"></i>
                                                    Drama</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="frontend-accordion-item border-0">
                                    <h2 class="frontend-accordion-header" id="frontend-heading-three">
                                        <button class="frontend-accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#frontend-collapse-three"
                                            aria-expanded="false" aria-controls="frontend-collapse-three">
                                            <i class="fas fa-running me-2 text-primary"></i> Physical Education
                                        </button>
                                    </h2>
                                    <div id="frontend-collapse-three" class="accordion-collapse collapse"
                                        aria-labelledby="frontend-heading-three"
                                        data-bs-parent="#frontend-curriculum-accordion">
                                        <div class="frontend-accordion-body">
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-success me-2"></i>
                                                    Sports</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-success me-2"></i>
                                                    Health Education</li>
                                                <li class="mb-2"><i
                                                        class="fas fa-check-circle text-success me-2"></i>
                                                    Team Games</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Content - School Features -->
                <div class="col-lg-6">
                    <div>
                        <h3 class="frontend-subtitle mb-4">Why Choose Us?</h3>

                        <div class="frontend-feature-highlights">
                            <div class="d-flex align-items-start mb-4">
                                <div class="frontend-feature-icon text-primary me-3">
                                    <i class="fas fa-star fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="frontend-feature-title mb-2">Proven Excellence</h5>
                                    <p class="frontend-text">15+ years of academic excellence with award-winning
                                        programs</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mb-4">
                                <div class="frontend-feature-icon text-primary me-3">
                                    <i class="fas fa-user-graduate fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="frontend-feature-title mb-2">Student Success</h5>
                                    <p class="frontend-text">95% of our graduates transition successfully to middle
                                        school</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mb-4">
                                <div class="frontend-feature-icon text-primary me-3">
                                    <i class="fas fa-heart fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="frontend-feature-title mb-2">Nurturing Environment</h5>
                                    <p class="frontend-text">Small class sizes with personalized attention</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-start">
                                <div class="frontend-feature-icon text-primary me-3">
                                    <i class="fas fa-laptop-code fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="frontend-feature-title mb-2">Modern Facilities</h5>
                                    <p class="frontend-text">State-of-the-art classrooms and technology resources
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities and Facilities -->
    <section id="activities-facilities" class="frontend-section frontend-activities-section">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="frontend-section-title d-inline-block">Our Facilities & Activities</h3>
                <p class="frontend-section-subtitle">Creating an environment that fosters learning and growth</p>
            </div>

            <!-- Facilities Section -->
            <div class="row align-items-star mb-5">
                <div class="col-lg-6">
                    <h3 class="frontend-subtitle mb-4"><i class="fas fa-school me-2"></i> Our Facilities</h3>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="frontend-feature-box">
                                <div class="frontend-feature-icon text-primary">
                                    <i class="fas fa-laptop fa-2x"></i>
                                </div>
                                <div class="frontend-feature-content">
                                    <h5 class="frontend-feature-title">Modern Computer Lab</h5>
                                    <p class="frontend-feature-text">Equipped with latest technology for digital
                                        learning</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="frontend-feature-box">
                                <div class="frontend-feature-icon text-primary">
                                    <i class="fas fa-flask fa-2x"></i>
                                </div>
                                <div class="frontend-feature-content">
                                    <h5 class="frontend-feature-title">Science Laboratory</h5>
                                    <p class="frontend-feature-text">Hands-on experiments for practical learning</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="frontend-feature-box">
                                <div class="frontend-feature-icon text-primary">
                                    <i class="fas fa-book fa-2x"></i>
                                </div>
                                <div class="frontend-feature-content">
                                    <h5 class="frontend-feature-title">Well-Stocked Library</h5>
                                    <p class="frontend-feature-text">Extensive collection for all reading levels</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="frontend-feature-box">
                                <div class="frontend-feature-icon text-primary">
                                    <i class="fas fa-utensils fa-2x"></i>
                                </div>
                                <div class="frontend-feature-content">
                                    <h5 class="frontend-feature-title">Healthy Cafeteria</h5>
                                    <p class="frontend-feature-text">Nutritious meals for growing minds</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="frontend-image-container">
                                <img src="{{ asset('images/room/storytimetr.jpg') }}"
                                    class="img-fluid rounded shadow frontend-facility-image" alt="Modern Classroom">
                                <div class="frontend-image-caption">StoryTime</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="frontend-image-container">
                                <img src="{{ asset('images/facilities/computerlab.jpeg') }}"
                                    class="img-fluid rounded shadow frontend-facility-image" alt="Computer Lab">
                                <div class="frontend-image-caption">Computer Lab</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="frontend-image-container">
                                <img src="{{ asset('images/facilities/library.jpg') }}"
                                    class="img-fluid rounded shadow frontend-facility-image" alt="School Library">
                                <div class="frontend-image-caption">School Library</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="frontend-image-container">
                                <img src="{{ asset('images/room/Lab.jpg') }}"
                                    class="img-fluid rounded shadow frontend-facility-image" alt="Science Lab">
                                <div class="frontend-image-caption">Science Lab</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activities Section -->
            <div class="row align-items-start">
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                    <h3 class="frontend-subtitle mb-4"><i class="fas fa-running me-2"></i> Our Activities</h3>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="frontend-feature-box">
                                <div class="frontend-feature-icon text-primary">
                                    <i class="fas fa-futbol fa-2x"></i>
                                </div>
                                <div class="frontend-feature-content">
                                    <h5 class="frontend-feature-title">Sports & Games</h5>
                                    <p class="frontend-feature-text">Developing teamwork and physical fitness</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="frontend-feature-box">
                                <div class="frontend-feature-icon text-primary">
                                    <i class="fas fa-music fa-2x"></i>
                                </div>
                                <div class="frontend-feature-content">
                                    <h5 class="frontend-feature-title">Music & Arts</h5>
                                    <p class="frontend-feature-text">Encouraging creative expression</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="frontend-feature-box">
                                <div class="frontend-feature-icon text-primary">
                                    <i class="fas fa-bus fa-2x"></i>
                                </div>
                                <div class="frontend-feature-content">
                                    <h5 class="frontend-feature-title">Field Trips</h5>
                                    <p class="frontend-feature-text">Experiential learning opportunities</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="frontend-feature-box">
                                <div class="frontend-feature-icon text-primary">
                                    <i class="fas fa-hands-helping fa-2x"></i>
                                </div>
                                <div class="frontend-feature-content">
                                    <h5 class="frontend-feature-title">Community Service</h5>
                                    <p class="frontend-feature-text">Developing social responsibility</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="frontend-image-container">
                                <img src="{{ asset('images/activities/football.jpg') }}"
                                    class="img-fluid rounded shadow frontend-activity-image" alt="Sports Activities">
                                <div class="frontend-image-caption">Sports & Games</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="frontend-image-container">
                                <img src="{{ asset('images/room/music.jpg') }}"
                                    class="img-fluid rounded shadow frontend-activity-image" alt="Music Activities">
                                <div class="frontend-image-caption">Music & Art</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="frontend-image-container">
                                <img src="{{ asset('images/activities/field-trip.jpg') }}"
                                    class="img-fluid rounded shadow frontend-activity-image" alt="Field Trips">
                                <div class="frontend-image-caption">Field Trips</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="frontend-image-container">
                                <img src="{{ asset('images/room/art.jpg') }}"
                                    class="img-fluid rounded shadow frontend-activity-image" alt="Community Service">
                                <div class="frontend-image-caption">Music & Art</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="frontend-section frontend-testimonials-section">
        <div class="container">
            <h3 class="frontend-section-title text-center">What Parents Say</h3>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="frontend-testimonial-card h-100">
                        <div class="frontend-testimonial-body">
                            <div class="frontend-rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="frontend-testimonial-text">"My child has flourished at PyinNyarShweSi. The
                                teachers are dedicated and the curriculum is excellent."</p>
                        </div>
                        <div class="frontend-testimonial-footer">
                            <div class="frontend-testimonial-author">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg"
                                    class="rounded-circle me-3" width="50" alt="Parent">
                                <div>
                                    <h6 class="mb-0">Daw Khin Mar</h6>
                                    <small>Parent of Grade 3 Student</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="frontend-testimonial-card h-100">
                        <div class="frontend-testimonial-body">
                            <div class="frontend-rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="frontend-testimonial-text">"The school provides a perfect balance of academics
                                and extracurricular activities. Highly recommended!"</p>
                        </div>
                        <div class="frontend-testimonial-footer">
                            <div class="frontend-testimonial-author">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" class="rounded-circle me-3"
                                    width="50" alt="Parent">
                                <div>
                                    <h6 class="mb-0">U Aung Kyaw</h6>
                                    <small>Parent of KG Student</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="frontend-testimonial-card h-100">
                        <div class="frontend-testimonial-body">
                            <div class="frontend-rating mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="frontend-testimonial-text">"The facilities are excellent and my child loves going
                                to school every day. The teachers are very caring."</p>
                        </div>
                        <div class="frontend-testimonial-footer">
                            <div class="frontend-testimonial-author">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                    class="rounded-circle me-3" width="50" alt="Parent">
                                <div>
                                    <h6 class="mb-0">Daw Hla Hla</h6>
                                    <small>Parent of Grade 5 Student</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="frontend-cta-section bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h3 class="frontend-cta-title mb-3">Ready to Join Our Community?</h3>
                    <p class="frontend-cta-text mb-0">Enroll your child today and give them the gift of quality
                        education in a nurturing environment.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('register') }}" class="btn btn-light btn-lg px-4">Enroll Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="frontend-footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="frontend-footer-brand">
                        <span>PyinNyar</span>ShweSi
                    </h5>
                    <p class="frontend-footer-text">Empowering students for a better tomorrow through quality education
                        and holistic development.</p>
                    <div class="frontend-social-icons mt-4">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="frontend-footer-heading">Quick Links</h5>
                    <ul class="frontend-footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#levels">Programs</a></li>
                        <li><a href="#activities-facilities">Facilities</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="frontend-footer-heading">Contact Us</h5>
                    <ul class="frontend-contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt me-2"></i> 123 School Street, Yangon, Myanmar
                        </li>
                        <li>
                            <i class="fas fa-phone-alt me-2"></i> +95 9 123 456 789
                        </li>
                        <li>
                            <i class="fas fa-envelope me-2"></i> info@pyinnyarshwesi.edu.mm
                        </li>
                        <li>
                            <i class="fas fa-clock me-2"></i> Mon-Fri: 8:00 AM - 4:00 PM
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="frontend-footer-heading">Newsletter</h5>
                    <p class="frontend-footer-text">Subscribe to our newsletter for the latest updates and news.</p>
                    <form class="mt-3">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your Email"
                                aria-label="Your Email">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <hr class="frontend-footer-divider">

            <div class="text-center text-md-star">
                <p class="frontend-copyright mb-0">&copy; 2025 PyinNyarShweSi. All Rights Reserved.</p>
            </div>
            <div class="text-center text-md-en">
                <a href="#" class="frontend-footer-link me-3">Privacy Policy</a>
                <a href="#" class="frontend-footer-link">Terms of Service</a>
            </div>
            <div class="row">
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="frontend-back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- Bootstrap Bundle JS -->
    <script src="libs/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/frontend-script.js"></script>
</body>

</html>
