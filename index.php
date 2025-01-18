<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>
            Portfolio Website
        </title>
        <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/> -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            <style>

   body {
            font-family: 'Roboto', sans-serif;
            background-color: rgb(238, 248, 200);
        }
        .navbar {
            margin-bottom: 50px;
            background-color: aqua;
        }
        .hero {
            background: url(istockphoto-1193278024-612x612.jpg) no-repeat center center;
            background-size: cover;
            color: rgb(166, 255, 0);
            text-shadow: 2px 2px 2px black;
            text-align: center;
            padding: 100px 0;
        }
        .hero h1 {
            font-size: 4rem;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.5rem;
        }
        .portfolio-item {
            margin-bottom: 30px;
        }
        .footer {
            background: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        #welcome{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .a{
            box-shadow: 0px 0px 3px 3px black;
            
            margin: auto;
            
            justify-content: center;
        }
        .col-sm-3 {
            box-shadow: 1px 1px 1px 2px rgb(130, 241, 3);
            margin: auto;
            height: 600px;
        }
        #resume{
            text-decoration: none;
        }
  </style>
    </head>
    <body>
        <!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
               
              </a>
            </div>
          </nav> -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="WhatsApp Image 2025-01-18 at 15.11.11_825aea29.jpg" alt="Logo" style="width:40px;" class="rounded-pill">  Mehraj Pathan Portfolio
                </a>
                <button aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation" class="navbar-toggler"
                    data-bs-target="#navbarNav" data-bs-toggle="collapse"
                    type="button">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#about">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">
                                Portfolio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="hero">
            <div class="container">
                <h1 id="welcome">
                    Welcome to My Portfolio
                </h1>
                <p id="discription">
                    Discover my work and projects
                </p>
            </div>
        </section>
        <section class="container my-5" id="about">
            <div class="row">
                <div class="col-md-5 a">
                    <img alt="A detailed description of the image"
                        class="img-fluid" height="400"
                        src="WhatsApp Image 2025-01-18 at 15.11.11_825aea29.jpg"
                        width="60%" />
                </div>
                <div class="col-md-6">
                    <h2>
                        About Me
                    </h2>
                    <p>
                        Hello! I’m Mehraj Pathan, a passionate Software Engineer and Full Stack Web Developer with a knack for creating dynamic and user-friendly web applications. With a strong foundation in both front-end and back-end technologies, I thrive on turning complex problems into elegant solutions.
                    </p>
                    <br><br>
                    <div> <a href="https://drive.google.com/file/d/1jQDHYuWpM7oP1Jv2O5VCiP53b6w1t_cY/view?usp=sharing" target="_blank"id="resume" class="btn btn-success">My Resume</a></div>
                </div>
            </div>
        </section>
        <section class="container my-5" id="portfolio">
            <div class="row">
                <h2 class="text-center mb-4">
                    My Work
                </h2>
                <div class="row">
                    <div class="col-sm-3 portfolio-item">
                        <img alt="A detailed description of the image"
                            class="img-fluid" height="300"
                            src="marksheet-8021.jpg"
                            width="400" />
                        <h3>
                            Student Marksheet Generator
                        </h3>
                        <p>
                            The Student ID Card Generator is a web-based application designed to streamline the creation of personalized student identification cards. This project allows educational institutions to easily generate ID cards for students by inputting essential information such as name, student ID number, course, and photo.
                        </p>
                        <center><div class="btn btn-info">View Project</div></center>
                    </div>
                    <div class="col-sm-3 portfolio-item">
                        <img alt="A detailed description of the image"
                            class="img-fluid" height="300"
                            src="idcard.webp"
                            width="400" />
                        <h3>
                            ID card generator
                        </h3>
                        <p>
                            The Student ID Card Generator is a comprehensive web application designed to simplify the process of creating personalized identification cards for students. This project aims to provide educational institutions with an efficient and user-friendly tool to generate high-quality ID cards that can be used for various purposes, including school identification, library access, and event participation.
                        </p>
                        <center><div class="btn btn-info">View Project</div></center>
                    </div>
                    <div class="col-sm-3 portfolio-item">
                        <img alt="A detailed description of the image"
                            class="img-fluid" height="300"
                            src="medical.jpg"
                            width="400" />
                        <h3>
                            Medical store website
                        </h3>
                        <p>
                            The Online Medical Store is a comprehensive e-commerce platform designed to provide customers with easy access to a wide range of pharmaceutical products, health supplements, and personal care items. This website aims to enhance the shopping experience for individuals seeking medical supplies, prescription medications, and wellness products from the comfort of their homes.
                        </p>
                        <center><div class="btn btn-info">View Project</div></center> 
                    </div>

                </div>
            </div>

        </section>
        <section class="container my-5" id="contact">
            <h2 class="text-center mb-4">
                Contact Me
            </h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="name">
                                Name
                            </label>
                            <input class="form-control" id="name" required
                                type="text" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">
                                Email
                            </label>
                            <input class="form-control" id="email" required
                                type="email" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="message">
                                Message
                            </label>
                            <textarea class="form-control" id="message" required
                                rows="5"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <footer class="bg-dark text-white pt-4 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <h5>About Me</h5>
                        <p>
                            Passionate web developer with a knack for creating user-friendly and visually appealing websites. Dedicated to continuous learning and leveraging the latest technologies to deliver innovative solutions. Committed to enhancing user experiences and driving results through effective design and development.
                        </p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h5>Contact Me</h5>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-map-marker-alt"></i> Katraj, PuneCity, india</li>
                            <li><i class="fas fa-phone"></i> +91 ########</li>
                            <li><i class="fas fa-envelope"></i> myemail@example.com</li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h5>Follow Us</h5>
                        
                        <a href="https://www.instagram.com/m3hr4j_kh4n/" target="_blank" class="text-white me-2">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/mehraj-pathan-a03532308/" target="_blank" class="text-white me-2">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://github.com/Mehraj7744" target="_blank" class="text-white">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
                <hr class="my-4">
                <div class="text-center">
                    <p class="mb-0">© 2025 My Website. All rights reserved.</p>
                </div>
            </div>
        </footer>
        
    </body>
</html>
