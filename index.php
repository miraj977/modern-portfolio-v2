<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Miraj Aryal</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
            integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />

        <!-- Update these with your own fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap"
            rel="stylesheet">
        <link rel="icon" type="image/png" href="img/fav.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
        <script src="https://www.w3counter.com/tracker.js?id=135803"></script>

    </head>

    <body>
        <header>
            <div class="logo">
                <a href="#" onclick="topFunction()">/dev-miraj</a>
            </div>
            <a class="resume" data-toggle="modal" data-target="#ModalPDF" target="_blank"><span>Resume</span></a>

            <button class="nav-toggle" aria-label="toggle navigation">
                <span class="hamburger"></span>
            </button>
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="#services" class="nav__link">My Services</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About me</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">My Work</a></li>
                </ul>
            </nav>
        </header>

        <!-- Resume PDF ModalPDF -->

        <div class="modal fade" id="ModalPDF" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" style="z-index:100000;width:100%;padding-top: 0px;">
            <div class="modal-dialog modal-fluid modal-notify modal-info" role="document"
                style="z-index:100000;width:100%;">
                <!--Content-->
                <div class="modal-content">
                    <!--Footer-->
                    <div class="modal-footer justify-content-end">
                        <a type="button" class="btn download btn-warning">Download</a>
                        <a type="button" class="btn btn-close" data-dismiss="modal">Close <span aria-hidden="true"
                                class="white-text">&times;</span></a>
                    </div>
                    <!--Body-->
                    <div class="modal-body">

                        <object class="PDFdoc" width="100%" height="500px" type="application/pdf"
                            data="file/Resume.pdf"></object>
                    </div>


                </div>
                <!--/.Content-->
            </div>
        </div>

        <!-- Introduction -->
        <section class="intro" id="home">
            <!-- <img src="img/fav.png" class="hero-logo"> -->
            <h1 class="section__title section__title--intro">
                Hi, I am <strong>Miraj Aryal</strong>
            </h1>
            <p class="section__subtitle section__subtitle--intro">Welcome to my portfolio</p>
            <img src="img/e.jpg" alt="a picture of miraj aryal" class="intro__img">
            <p class="scroll-p">Scroll ▼</p>
            <p class="started">LET'S GET STARTED!!!</p>
        </section>


        <!-- My services -->
        <section class="my-services" id="services">
            <h2 class="section__title section__title--services">Professional Summary</h2>
            <div class="services">
                <div class="service">
                    <h3>Education</h3>
                    <p> <span class="accent">Master of Technology (Software Engineering)</span>
                        <span class="sm">Federation University, Australia (2017 - 19)</span>
                    </p>
                    <span class="accent">Achievements:</span>
                    <ul>
                        <li>✔ Member of exclusive Golden Key International Honour Society for outstanding academic
                            achievement</li>
                        <li>✔ Commendation letter from university for outstanding academic performance
                        </li>
                        <li>✔ Served as Project Manager in University Group Project Work</li>
                    </ul>


                </div> <!-- / service -->

                <div class="service work">
                    <h3>Work</h3>
                    <p class="sm"><span>Full-Stack Developer</span><a href="https://raw.studio"
                            target="_blank">Raw Studio</a>, AU (2021 - Present)</p>
                    <p class="sm"><span>Full-Stack Developer</span><a href="https://picturacreative.com.au"
                            target="_blank">Pictura Creative</a>, AU (2020 - 2021)</p>
                    <p class="sm"><span>Web Developer</span><a href="https://everestviewtravels.com.au/
" target="_blank"> Everest View Travel &
                            Tours</a>, AU (2017 - 19)</p>
                    <p class="sm"><span>PHP Developer</span> <a href="https://imaginewebsolution.com" target="_blank">
                            Imagine Web Solution</a>, Nepal (2014 - 15)</p>
                </div> <!-- / service -->

                <div class="service">
                    <h3>Skills</h3>
                    <ul>
                        <li>✔ Next.js, React JS, Vanilla JS, jQuery, AJAX</li>
                        <li>✔ HTML5/CSS3</li>
                        <li>✔ PHP/MySQL</li>
                        <li>✔ Advanced WordPress, Headless CMS (WP, Contentful, Strapi.js), Firebase</li>
                        <li>✔ Tailwind, Styled Components, Material UI, SCSS, Bootstrap</li>
                        <li>✔ GraphQL, RestAPI</li>
                        <li>✔ Framework: CodeIgniter, Laravel, Yii2, Express</li>
                        <li>✔ VSCode, Sketch, Figma, Toggl, Atlassian (Confluence, Jira, BitBucket), Git, WAMP, MAMP, Transmit, Filezilla, Slack</li>
                    </ul>
                </div> <!-- / service -->
            </div> <!-- / services -->

            <a href="#work" class="btn">My Work ↓</a>
        </section>


        <!-- About me -->
        <section class="about-me" id="about">
            <h2 class="section__title section__title--about">Who I am</h2>
            <p class="section__subtitle section__subtitle--about">full-stack dev, chef, artist</p>

            <div class="about-me__body">
                <p><span>2014:</span> started as an entry-level programmer, learned <span class="code">
                        HTML, CSS, PHP/MySQL, PHP framework CodeIgniter, Yii2 and Laravel.
                    </span></p>
                <p><span>2015:</span> sadly Nepal was hit by a massive
                    earthquake, so I took a break from Web to work for a humanitarian organization for a year and a
                    half.</p>
                <p><span>2017:</span> came to Australia to pursue my Master's degree, during which worked as a
                    part-time Web Developer at a Travel agency and as a part-time Chef for Bondi Icebergs group.
                </p>
                <p><span>2019:</span> completed my studies and am currently working full-time as a <span
                        class="code">Full-Stack Developer</span>
                    in Raw Studio.</p>
                <code>I love what I do.</code>
                <small>PS. Apart from coding, I love to draw, listen to 90's hiphop and cook various food.</small>
            </div>

            <img src="img/a.jpg" alt="Miraj leaning against the wall" class="about-me__img">
        </section>

        <!-- My Work -->
        <section class="my-work" id="work">
            <h2 class="section__title section__title--work">My work</h2>
            <p class="section__subtitle section__subtitle--work">A selection of my range of work</p>

            <div class="portfolio">

             <!-- Portfolio item Whatsapp -->
                <a href="https://chatapp-five.vercel.app/" target="_blank" class="portfolio__item">
                    <span class="tag">Whatsapp Inspired Chat app</span>
                    <img src="img/portfolio/thumbnails/whatsapp.png" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Chat App</div>
                            <div class="project-name">
                                <ul>
                                    <li>
                                        NEXT.JS, Firebase, Styled Components, Material UI
                                    </li>
                                    <li>
                                        Powered by Firebase and deployed in Vercel, you can login with your google account and chat with anyone with a valid email address in realtime.
                                    </li>
                                    <li><b>Contribution: In Progress</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item 03 -->
                <a href="https://react-web1.netlify.app/" target="_blank" class="portfolio__item">
                    <span class="tag">ReactJS (In Progress)</span>
                    <img src="img/portfolio/thumbnails/10.png" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                TRVL</div>
                            <div class="project-name">
                                <ul>
                                    <li>
                                        React JS
                                    </li>
                                    <li>
                                        IN PROGRESS
                                    </li>
                                    <li><b>Contribution: Currently Working</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item 03 -->
                <a href="https://newsouthhomes.com.au" target="_blank" class="portfolio__item">
                    <span class="tag">Advanced WordPress</span>
                    <img src="img/portfolio/thumbnails/3.jpg" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                New South Homes
                            </div>
                            <div class="project-name">
                                <ul>
                                    <li>
                                        Advanced WordPress (Advanced Custom Field), HTML/CSS, jQuery
                                    </li>
                                    <li>
                                        No page builder used. Custom theme and custom backend developed using Advanced
                                        Custom Field. (ACF)
                                    </li>
                                    <li><b>Contribution: Full Development</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>


                <!-- Portfolio item 03 -->
                <a href="https://staging.pictura.com.au/stopc" target="_blank" class="portfolio__item">
                    <span class="tag">Advanced WordPress</span>
                    <img src="img/portfolio/thumbnails/9.png" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                UNSW Kirby StopC
                            </div>
                            <div class="project-name">
                                <ul>
                                    <li>
                                        Advanced WordPress (Advanced Custom Field), HTML/CSS, jQuery
                                    </li>
                                    <li>
                                        No page builder used. Custom theme and custom backend developed using Advanced
                                        Custom Field. (ACF)
                                    </li>
                                    <li><b>Contribution: Full Development</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>



                <!-- Portfolio item 01 -->
                <a href="https://antennacentral.com.au" target="_blank" class="portfolio__item">
                    <span class="tag">Advanced WordPress</span>
                    <img src="img/portfolio/thumbnails/1-2.png" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Antenna Central Pty Ltd
                            </div>
                            <div class="project-name">
                                <ul>
                                    <li>
                                        Advanced WordPress (Advanced Custom Field), HTML/CSS, jQuery
                                    </li>
                                    <li>
                                        No page builder used. Custom theme and custom backend developed using Advanced
                                        Custom Field. (ACF)
                                    </li>
                                    <li><b>Contribution: Full Development</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>


                <!-- Portfolio item 03 -->
                <a href="https://sgbmaintenance.com.au" target="_blank" class="portfolio__item">
                    <span class="tag">Advanced WordPress</span>
                    <img src="img/portfolio/thumbnails/sgb.png" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                SGB Group
                            </div>
                            <div class="project-name">
                                <ul>
                                    <li>
                                        Advanced WordPress (Advanced Custom Field), HTML/CSS, jQuery
                                    </li>
                                    <li>
                                        No page builder used. Custom theme and custom backend developed using Advanced
                                        Custom Field. (ACF)
                                    </li>
                                    <li><b>Contribution: Full Development</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item 02 -->
                <a href="https://lanternelectrical.com.au/" target="_blank" class="portfolio__item">
                    <span class="tag">Advanced WordPress</span>
                    <img src="img/portfolio/thumbnails/2.jpg" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Lantern Electrical
                            </div>
                            <div class="project-name">
                                <ul>
                                    <li>
                                        Advanced WordPress (Advanced Custom Field), HTML/CSS, jQuery
                                    </li>
                                    <li>
                                        No page builder used. Custom theme and custom backend developed using Advanced
                                        Custom Field. (ACF)
                                    </li>
                                    <li><b>Contribution: Full Development</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>


                <!-- Portfolio item 04 -->
                <a href="https://www.ruggedtrailsnepal.com/" target="_blank" class="portfolio__item">
                    <span class="tag">CodeIgniter PHP</span>
                    <img src="img/portfolio/thumbnails/4.png" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Rugged Trails Nepal
                            </div>
                            <div class="project-name">
                                HTML/CSS, PHP/MySQL, CodeIgniter, jQuery
                                <br>
                                <b>Contribution: Backend Development</b>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item 05 -->
                <a href="https://www.babuadventure.com/" target="_blank" class="portfolio__item">
                    <span class="tag">CodeIgniter PHP</span>
                    <img src="img/portfolio/thumbnails/6.png" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                The Babu Adventures
                            </div>
                            <div class="project-name">
                                HTML/CSS, PHP/MySQL, CodeIgniter, jQuery
                                <br>
                                <b>Contribution: Backend Development</b>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item 06 -->
                <a href="http://jobbase.epizy.com/web/" target="_blank" class="portfolio__item">
                    <span class="tag">Yii2 PHP</span>
                    <img src="img//portfolio/thumbnails/7.png" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Job Search Portal
                            </div>
                            <div class="project-name">
                                (Yii2 Experiment Project) HTML, CSS, PHP Yii2, Javascript
                                <br><b>Contribution: Full Development</b>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item 07 -->
                <a href="http://bookingmanage.epizy.com/" target="_blank" class="portfolio__item">
                    <span class="tag">Core PHP</span>
                    <img src="img//portfolio/thumbnails/1.png" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Booking Management System
                            </div>
                            <div class="project-name">
                                HTML, CSS, PHP/MySQL, jQuery
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item 08 -->
                <a href="http://eventmanage.epizy.com" target="_blank" class="portfolio__item">
                    <span class="tag">Core PHP</span>

                    <img src="img/portfolio/thumbnails/2.png" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Event Management System
                            </div>
                            <div class="project-name">
                                HTML, CSS, PHP/MySQL, jQuery
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item 09 -->
                <a href="http://www.loyalpartners.epizy.com/" target="_blank" class="portfolio__item">
                    <span class="tag">Core PHP</span>
                    <img src="img/portfolio/thumbnails/3.png" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Asset Management System
                            </div>
                            <div class="project-name">
                                (Uni Project) HTML, CSS, PHP/MySQL, jQuery
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item 10-->
                <a href="http://eventforum.epizy.com/" target="_blank" class="portfolio__item">
                    <span class="tag">Core PHP</span>
                    <img src="img/portfolio/thumbnails/5.png" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Discussion Forum
                            </div>
                            <div class="project-name">
                                HTML, CSS, PHP/MySQL, jQuery
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item 10-->
                <a href="https://miraj977.github.io/scss-portfolio/index.html" target="_blank" class="portfolio__item">
                    <span class="tag">HTML/ SCSS</span>
                    <img src="img/portfolio/thumbnails/8.png" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                My Portfolio Demo (SCSS)
                            </div>
                            <div class="project-name">
                                HTML, CSS compiled by SCSS
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <section id="hobbies" class="my-work hobbies">
            <h2 class="section__title section__title--work">My Hobbies</h2>
            <p class="section__subtitle section__subtitle--work">A selection of my range of hobbies</p>
            <!---Slide show--->
            <div class="columns art">
                <p class="placeholder-text">
                    ART (4/28)</p>
                <div class="column">
                    <img src="art/1.jpg" style="width:100%" onclick="openModal();currentSlide(1)"
                        class="hover-shadow cursor">
                    <p class="hover-text">Click to open</p>
                </div>
                <div class="column">
                    <img src="art/2.jpg" style="width:100%" onclick="openModal();currentSlide(2)"
                        class="hover-shadow cursor">
                    <p class="hover-text">Click to open</p>

                </div>
                <div class="column">
                    <img src="art/3.jpg" style="width:100%" onclick="openModal();currentSlide(3)"
                        class="hover-shadow cursor">
                    <p class="hover-text">Click to open</p>

                </div>
                <div class="column">
                    <img src="art/4.jpg" style="width:100%" onclick="openModal();currentSlide(4)"
                        class="hover-shadow cursor">
                    <p class="hover-text">Click to open</p>

                </div>
            </div>

            <div id="myModal" class="modal">

                <div class="modal-content">
                    <span class="close cursor" onclick="closeModal()">&times;</span>

                    <?php
for ($i = 1; $i <= 28; $i++) {

    echo '<div class="mySlides"><div class="numbertext">' . $i . ' / 28</div>';
    echo "<img src='art/" . $i . ".jpg' class='artimg'></div> ";
}
?>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>
                </div>
            </div>
            <br>
            <!---End of Slide show--->
            <div class="columns food">
                <p class="placeholder-text">
                    FOOD (4/6)</p>

                <div class="column">

                    <img src="food/1.jpg" style="width:100%" onclick="openModals();currentSlides(1)"
                        class="hover-shadow cursor" alt="Food">
                    <p class="hover-text">Click to open</p>
                </div>
                <div class="column">
                    <img src="food/2.jpg" style="width:100%" onclick="openModals();currentSlides(2)"
                        class="hover-shadow cursor">
                    <p class="hover-text">Click to open</p>
                </div>
                <div class="column">
                    <img src="food/3.jpg" style="width:100%" onclick="openModals();currentSlides(3)"
                        class="hover-shadow cursor">
                    <p class="hover-text">Click to open</p>
                </div>
                <div class="column">
                    <img src="food/4.jpg" style="width:100%" onclick="openModals();currentSlides(4)"
                        class="hover-shadow cursor">
                    <p class="hover-text">Click to open</p>
                </div>
            </div>

            <div id="myModals" class="modal">

                <div class="modal-content">
                    <span class="close cursor" onclick="closeModals()">&times;</span>

                    <?php
for ($i = 1; $i <= 6; $i++) {

    echo '<div class="mySlide" style="background-color:#2b2828 !important;"><div class="numbertext">' . $i . ' / 6</div>';
    echo "<img src='food/" . $i . ".jpg' class='artimg'></div> ";
}
?>

                    <a class="prev" onclick="plusSlide(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlide(1)">&#10095;</a>

                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>
                </div>
            </div>
            <div class="row" style="text-align: center;">

        </section>
        <button onclick="topFunction()" id="myBtn" title="Go to top">▲</button>
        <!-- Footer -->
        <footer class="footer">
            <!-- replace with your own email address -->
            <a href="mailto:mirajaryal@gmail.com" class="footer__link">mirajaryal@gmail.com</a>
            <ul class="social-list">
                <li class="social-list__item">
                    <a class="social-list__link" href="https://github.com/miraj977" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://linkedin.com/in/mirajaryal" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://www.instagram.com/miraj977/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https: //www.youtube.com/c/MrDevil977/videos
" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </footer>


        <script src="js/index.js"></script>

    </body>

</html>
