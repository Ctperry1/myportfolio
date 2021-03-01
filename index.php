<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fret Twelve Media</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.css">
    
</head>

<body>
    <header>
        <div class="container">
            <h2><a href="#"><span>Fret Twelve</span> Media</a></h2>
            <nav>
                <a href="./index.php">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="./projects.php">Projects</a>
                <a href="#contact">Contact</a>
            </nav>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
        </div>
    </header>
    <nav class="mobile-nav">
        <a href="./index.php">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="./projects.php">Projects</a>
        <a href="#contact">Contact</a>
    </nav>
    <main>
        <section class="banner">
            <div class="container">
                <div class="slide-left">
                    <h1>
                        Websites you're <br class="hide-mob" />
                        <span>not afraid</span> to share.
                    </h1>
                </div>
                <div class="slide-up">
                    <h3>Website solutions for all your needs.</h3>
                    <a href="#services" class="button">Find out more</a>
                </div>
            </div>
        </section>

        <div id="about"> </div>
        <section class="about">
            <div class="container">
                <h2>About</h2>

                <div class="about-grid">
                    <div class="about-image">
                        <img src="./assets/images/perryfamily.jpg" alt="Tyler and his wife" class="img" />
                    </div>
                    <div class="content">
                        <p>
                            Meet Tyler Perry (no, not <span>that</span> Tyler Perry). Husband.
                            Father. Web developer. Tyler has a background in computer science and web
                            design courses at Coastal Carolina University, and has done websites for
                            a few small, locally owned businesses in his area. He specializes in sites
                            aimed at these types of businesses. Tyler is also adept at WordPress
                            customization as well as overall site maintenance.
                        </p>

                        <p>
                            In his spare time, Tyler can be found spending time with his wife and
                            two daughters, creating new recipes, or composing new music with his
                            guitar. While he is based in coastal South Carolina, Tyler is always
                            searching for new clients and ways to push Fret Twelve Media past the
                            borders of his home state.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div id="services"> </div>
        <section class="services">
            <div class="container">
                <h2>Services</h2>

                <div class="services-grid">
                    <div class="service">
                        <figure class="img-box">
                            <img src="./assets/images/websites.jpg" alt="Website Services" class="img" />
                        </figure>
                        <div class="content">
                            <h3>Front-End and UI Design</h3>
                            <p>
                                From color schemes to to images, user interfaces to interactive features,
                                Fret Twelve Media offers both front-end web and user interface design
                                so you can make sure your website looks as good as your products are.
                            </p>
                        </div>
                    </div>

                    <div class="service">
                        <figure class="img-box">
                            <img src="./assets/images/apps.jpg" alt="App Services" class="img" />
                        </figure>
                        <div class="content">
                            <h3>Apps</h3>
                            <p>
                                Need a website and an app? Have a website but need an app? Fret Twelve
                                Media can help you there. Offering services for both websites and apps,
                                you can be sure that your web and mobile needs are taken care of with 
                                style.
                            </p>
                        </div>
                    </div>

                    <div class="service">
                        <figure class="img-box">
                            <img src="./assets/images/games.jpg" alt="Game Services" class="img" />
                        </figure>
                        <div class="content">
                            <h3>Site Maintenance</h3>
                            <p>
                                Have a website with Fret Twelve Media or even someone else, but need it
                                updated or maintained regularly? Fret Twelve Media offers services for 
                                site maintenance and updates as often or as little as you need it.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects" id="projects">
            <div class="container">
                <h2>Projects</h2>

                <div class="projects-grid">
                    <div class="project">
                        <div class="content">
                            <h3>Jill Lindstrand Realty</h3>
                            <a href="https://www.jilllindstrandrealty.com/" target="_blank" class="button">View Site</a>
                        </div>
                    </div>

                    <div class="project">
                        <div class="content">
                            <h3>First Portfolio Design</h3>
                            <a href="https://greymanwebdesigns.com/" target="_blank" class="button">View Site</a>
                            <a href="https://github.com/Ctperry1/Portfolio-Site" target="_blank" class="button">View Code</a>
                        </div>
                    </div>

                    <!--<div class="project">
                            <div class="content">
                                <h3>Project 3</h3>
                                <a href="#" class="button">View Site</a>
                            </div>
                        </div>

                        <div class="project">
                            <div class="content">
                                <h3>Project 4</h3>
                                <a href="#" class="button">View Site</a>
                            </div>
                        </div>

                        <div class="project">
                            <div class="content">
                                <h3>Project 5</h3>
                                <a href="#" class="button">View Site</a>
                            </div>
                        </div>

                        <div class="project">
                            <div class="content">
                                <h3>Project 6</h3>
                                <a href="#" class="button">View Site</a>
                            </div>
                        </div>-->
                </div>

                <div class="center">
                    <a href="./projects.php" class="button">View More</a>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="container">
                <h2>Contact</h2>

                <?php echo((!empty($errorMessage)) ? $errorMessage : '');?>
                <form action="./php/mail.php" method="POST">
                    <div class="form-grid">
                        <input type="text" name="name" id="name" placeholder="Name" class="form-element" />
                        <input type="email" name="email" id="email" placeholder="Email" class="form-element" />
                        <input type="subject" name="subject" id="subject" placeholder="Subject" class="form-element" />
                        <textarea name="message" id="message" placeholder="Message" class="form-area" required></textarea>
                    </div>
                    <div class="right-align">
                        <input type="submit" value="Send Message" class="button"/>
                    </div>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
                    <script>
                        const constraints = {
                            name: {
                                presence: { allowEmpty: false }
                            },
                                email: {
                                    presence: { allowEmpty: false },
                                        email: true
                            },
                                message: {
                                presence: { allowEmpty: false }
                            }
                        };

                    const form = document.getElementById('contact-form');

                    form.addEventListener('submit', function (event) {
                        const formValues = {
                            name: form.elements.name.value,
                            email: form.elements.email.value,
                            message: form.elements.message.value
                        };

                    const errors = validate(formValues, constraints);

                    if (errors) {
                        event.preventDefault();

                        const errorMessage = Object

                        .values(errors)
                        .map(function (fieldValues) {
                            return fieldValues.join(', ')
                        })

                        .join("\n");

                        alert(errorMessage);
                        }
                        }, false);
                    </script>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <ul class="social-list">
            <li class="social-list__item">
                <a class="social-list__link" target="_blank" href="https://www.facebook.com/tyler.perry.7528">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a class="social-list__link" target="_blank" href="https://www.instagram.com/t.perry27/">
                    <i class="fab fa-instagram-square"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a class="social-list__link" target="_blank" href="https://www.linkedin.com/in/ctperry1/">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a class="social-list__link" target="_blank" href="https://github.com/Ctperry1">
                    <i class="fab fa-github-square"></i>
                </a>
            </li>
        </ul>
        <p class="copy">
        <p>Copyright &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
        <p>Built by Fret Twelve Media</p>
        <p>All Rights Reserved</p>
        </p>
    </footer>

    <script src="./assets/js/main.js"></script>
</body>

</html>