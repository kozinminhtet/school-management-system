<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PyinNyarShweSi</title>

    <!-- External Bootstrap CSS -->
    <link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">PyinNyarShweSi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>

                    <!-- Academic Service Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="academicDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Academic Service
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="academicDropdown">
                            <li><a class="dropdown-item" href="#">Library</a></li>
                            <li><a class="dropdown-item" href="#">Counseling</a></li>
                            <li><a class="dropdown-item" href="#">Tutoring</a></li>
                        </ul>
                    </li>

                    <!-- Opportunities Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="opportunitiesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Opportunities
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="opportunitiesDropdown">
                            <li><a class="dropdown-item" href="#levels">Scholarships</a></li>
                            <li><a class="dropdown-item" href="#levels">Internships</a></li>
                            <li><a class="dropdown-item" href="#levels">Events</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="school-header-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="school-header d-flex align-items-center justify-content-center text-white text-center"
                    style="background-image: url('{{ asset('images/carousel/carousel1.jpg') }}');">
                    <div class="overlay"></div>
                    <div class="z-1">
                        <h2>Welcome to PyinNyarShweSi School</h2>
                        <p>Empowering students through excellence in education</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="school-header d-flex align-items-center justify-content-center text-white text-center"
                    style="background-image: url('{{ asset('images/carousel/carousel2.jpg') }}');">
                    <div class="overlay"></div>
                    <div class="z-1">
                        <h2>Where Knowledge Meets Wisdom</h2>
                        <p>Inspiring young minds for a brighter future</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="school-header d-flex align-items-center justify-content-center text-white text-center"
                    style="background-image: url('{{ asset('images/carousel/carousel3.jpg') }}');">
                    <div class="overlay"></div>
                    <div class="z-1">
                        <h2>Excellence in Education</h2>
                        <p>Discover. Learn. Grow.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#school-header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#school-header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </section>




    <!-- About Our School -->
    <h3 class="text-center bg-light">Do You Know PyinNyarShweSi</h3>
    <section id="about" class="pb-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <h3>What is PyinNyarShweSi?</h3>
                <div class="col-md-8">
                    <p class="w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit necessitatibus
                        consectetur qui
                        velit nostrum magnam harum aspernatur esse quae maxime beatae libero, voluptas inventore,
                        tenetur culpa quia veritatis numquam officia ipsam laboriosam aperiam. Quibusdam neque aperiam
                        nihil rerum sunt repellendus asperiores, suscipit error ea quam minus a officia beatae ratione
                        est molestiae ipsum ullam quia rem alias, consequuntur expedita? Explicabo in dolorum unde.
                        Porro dolore minima quidem, temporibus velit officiis autem deserunt totam veniam dicta beatae
                        quis dignissimos fugiat accusamus error alias. Tempora quas ullam sit dignissimos veritatis
                        nostrum provident nulla, deleniti expedita ipsum. Doloremque dolor esse quia amet! Eum
                        doloremque laborum error ea aut dolore quae et sapiente nulla deserunt illum expedita doloribus
                        laudantium, culpa quidem dolor adipisci? Placeat sequi quaerat vitae provident natus non
                        blanditiis iusto suscipit necessitatibus unde voluptas, quo tempore deserunt sit asperiores
                        optio et at illo ratione. Maxime nostrum soluta laboriosam odit! Esse, velit doloremque?</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/carousel/carousel2.jpg') }}" class="img-fluid fixed-image"
                        alt="About School">
                </div>
            </div>
        </div>
    </section>

    <section id="levels" style="background-color: #f0f8ff;">
        <h3 class="text-center"> What we Offer?</h3>
        <div class="container py-5">
            <h3 class="ms-5 mb-5">Levels</h3>
            <div class="row align-items-start">
                <!-- Level Image -->
                <div class="col-md-4 text-center">
                    <img id="level-image" src="{{ asset('images/levels/kg.jpg') }}"
                        class="img-fluid rounded shadow-sm" alt="Level Image" style="max-height: 250px;">
                </div>
                <!-- Level Buttons -->
                <div class="col-md-8 d-flex justify-content-center justify-content-md-end">
                    <ul class="list-unstyled w-100 w-md-50" style="max-width: 400px;">
                        <li><a href="#" class="btn btn-outline-primary w-100 mb-2 level-link"
                                data-level="kg">Kindergarten (KG)</a></li>
                        <li><a href="#" class="btn btn-outline-primary w-100 mb-2 level-link"
                                data-level="g1">Grade 1</a></li>
                        <li><a href="#" class="btn btn-outline-primary w-100 mb-2 level-link"
                                data-level="g2">Grade 2</a></li>
                        <li><a href="#" class="btn btn-outline-primary w-100 mb-2 level-link"
                                data-level="g3">Grade 3</a></li>
                        <li><a href="#" class="btn btn-outline-primary w-100 mb-2 level-link"
                                data-level="g4">Grade 4</a></li>
                        <li><a href="#" class="btn btn-outline-primary w-100 mb-2 level-link"
                                data-level="g5">Grade 5</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="ms-3 mt-5 mb-3 text-primary">📖 Our Curriculum</h3>
            <p class="ms-3 mb-4 text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, beatae saepe similique impedit ex
                dignissimos soluta praesentium perspiciatis aspernatur! Dolores enim obcaecati, libero unde, fugit nemo
                sapiente ea laborum ex corporis quos cum pariatur provident eaque odio itaque accusantium repudiandae
                consectetur eius. Id ipsum odio quae praesentium doloremque expedita voluptatem.
            </p>

            <div class="d-flex curriculum-cards justify-content-between gap-4 px-3">
                <!-- Card 1 -->
                <div class="card shadow-sm border-0 w-50">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">National Curriculum Framework</h5>
                    </div>
                    <div class="card-body">
                        <ul class="ps-3 mb-0">
                            <li>Myanmar</li>
                            <li>English</li>
                            <li>Maths</li>
                            <li>Geology</li>
                            <li>History</li>
                            <li>General Science</li>
                            <li>Arts</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card shadow-sm border-0 w-50">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Extra Curriculum</h5>
                    </div>
                    <div class="card-body">
                        <ul class="ps-3 mb-0">
                            <li>Sports</li>
                            <li>Music</li>
                            <li>Art & Craft</li>
                            <li>Computer Skills</li>
                            <li>Social Activities</li>
                            <li>Library</li>
                            <li>Drama</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities and Facilities -->
    <section id="activities-facilities" class="py-5 bg-light">
        <div class="container">
            <h3 class="text-success mb-4">🏫 Facilities</h3>

            <!-- Facilities Section -->
            <div class="row">
                <!-- Text First on Mobile -->
                <div class="col-lg-6 order-1 order-lg-1">
                    <ul class="mt-2">
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                    </ul>
                </div>
                <!-- Photo Second on Mobile -->
                <div class="col-lg-6 order-2 order-lg-2 mb-4">
                    <div class="row g-3 justify-content-center">
                        <div class="col-sm-6">
                            <img src="{{ asset('images/facilities/facilities1.jpg') }}"
                                class="img-fluid rounded facility-img" alt="Facility 1">
                            <div class="caption">Modern Classrooms</div>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{ asset('images/facilities/computerlab.jpeg') }}"
                                class="img-fluid rounded facility-img" alt="Facility 2">
                            <div class="caption">Computer Lab</div>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{ asset('images/facilities/library.jpg') }}"
                                class="img-fluid rounded facility-img" alt="Facility 3">
                            <div class="caption">School Library</div>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{ asset('images/facilities/sciencelab.jpg') }}"
                                class="img-fluid rounded facility-img" alt="Facility 4">
                            <div class="caption">Science Lab</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activities Section -->
            <div class="row mt-3">
                <h3 class="text-primary mb-4">🎯 Activities</h3>
                <!-- Text First on Mobile -->
                <div class="col-lg-6 order-4 order-lg-4 mt-2">
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, neque!</li>
                    </ul>
                </div>
                <!-- Photo Second on Mobile -->
                <div class="col-lg-6 order-4 order-lg-3">
                    <div class="row g-3 justify-content-center">
                        <div class="col-sm-6">
                            <img src="{{ asset('images/activities/sport1.jpeg') }}"
                                class="img-fluid rounded activity-img" alt="Activity 1">
                            <div class="caption">Sports & Games</div>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{ asset('images/activities/sport1.jpeg') }}"
                                class="img-fluid rounded activity-img" alt="Activity 1">
                            <div class="caption">Sports & Games</div>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{ asset('images/activities/sport2.jpg') }}"
                                class="img-fluid rounded activity-img" alt="Activity 2">
                            <div class="caption">Music & Art</div>
                        </div>
                        <div class="col-sm-6">
                            <img src="{{ asset('images/activities/sport3.jpg') }}"
                                class="img-fluid rounded activity-img" alt="Activity 3">
                            <div class="caption">Field Trips</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer id="footer" class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>📘 PyinNyarShweSi</h5>
                    <p>Empowering students for a better tomorrow.</p>
                </div>
                <div class="col-md-4">
                    <h5>📞 Contact Us</h5>
                    <ul class="list-unstyled">
                        <li>Phone: 09-123456789</li>
                        <li>Email: info@pyinnyarshwesi.edu.mm</li>
                        <li>Address: Yangon, Myanmar</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>⚙️ General Services</h5>
                    <ul class="list-unstyled">
                        <li>Exam Info</li>
                        <li>Academic Calendar</li>
                        <li><a href="{{ route('login') }}">Student Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-3">&copy; 2025 PyinNyarShweSi. All Rights Reserved.</div>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="libs/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>

</html>
