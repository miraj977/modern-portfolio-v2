<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content="Welcome to my portfolio. I am Miraj, a Full-Stack Developer and I turn your ideas into reality.">
        <meta name="robots" content="index, follow" />
        <meta name="google-site-verification" content="MtUR7vw36AYXYqQNFOXfge5_e5ugu2o5kC83nkoHErY" />
        <meta name="keywords" content="Miraj Aryal, Miraj, mirajaryal">
        <title>Miraj Aryal</title>
        <link rel="canonical" href="https://mirajaryal.me/" />
        <link rel="icon" type="image/png" href="img/fav.png">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css"
            integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" async />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css"
            integrity="sha512-apX8rFN/KxJW8rniQbkvzrshQ3KvyEH+4szT3Sno5svdr6E/CP0QE862yEeLBMUnCqLko8QaugGkzvWS7uNfFQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" async />

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap"
            rel="stylesheet" async>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"
            async>
        <link rel="stylesheet" href="css/style.css?version=<?php echo date("YmdHis");?>">
        <!-- Required for ZIP video lightbox -->
        <link rel="stylesheet" href="css/lity.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/splide.min.css"
            media="screen and (min-width: 768px)">
    </head>

    <body class="light">
        <header>
            <div class="logo">
                <a href="#" onclick="topFunction()">/dev-miraj</a>
            </div>

            <div class="toggle-switch">
                <span>
                    <label class="switch">
                        <input id="theme-switch" type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </span>
                <span class="theme-tooltip">Switch theme here</span>

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
                        <a type="button" class="btn download btn-warning" href="file/Miraj Aryal Resume 2021.pdf"
                            target="_blank">Download</a>
                        <a type="button" class="btn btn-close" data-dismiss="modal">Close <span aria-hidden="true"
                                class="white-text">&times;</span></a>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        <object class="PDFdoc" width="100%" height="500px" type="application/pdf"
                            data="file/Miraj Aryal Resume 2021.pdf"></object>
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
            <h1 class="section__subtitle section__subtitle--intro">Welcome to my portfolio</h1>
            <p class="started-top">LET'S GET STARTED!!!</p>
            <img src="img/profile.webp" alt="a picture of miraj aryal" class="intro__img">
            <p class="scroll-p">Scroll ▼</p>
            <!-- <p class="started">LET'S GET STARTED!!!</p> -->
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
                    <p class="sm"><span>Full-Stack Developer</span><a href="https://raw.studio" target="_blank">Raw
                            Studio</a>, AU (2021 - Present)</p>
                    <p class="sm"><span>Full-Stack Developer</span><a href="https://picturacreative.com.au"
                            target="_blank">Pictura Creative</a>, AU (2020 - 2021)</p>
                    <p class="sm"><span>Web Developer</span><a href="https://everestviewtravels.com.au/"
                            target="_blank"> Everest View Travel &
                            Tours</a>, AU (2017 - 19)</p>
                    <p class="sm"><span>PHP Developer</span> <a href="https://imaginewebsolution.com" target="_blank">
                            Imagine Web Solution</a>, Nepal (2014 - 15)</p>
                    <br>
                    <p class="sm"> <span>Key Clients:</span> Zip Co, Coinspot, New South Homes, UNSW</p>
                </div>

                <div class="service">
                    <h3>Skills</h3>
                    <ul>
                        <li>✔ Next.js, React, TypeScript, VanillaJS, jQuery, AJAX</li>
                        <li>✔ GraphQL, RestAPI</li>
                        <li>✔ HTML5/CSS3</li>
                        <li>✔ PHP/MySQL</li>
                        <li>✔ Advanced WordPress, Headless CMS (WP, Contentful, Strapi.js), Webflow, Firebase</li>
                        <li>✔ Tailwind CSS, Styled Components, Material UI, SCSS, Bootstrap 5</li>
                        <li>✔ Framework: CodeIgniter, Laravel, Yii2, Express</li>
                        <li>✔ VSCode, Custom EDMs, Sketch, Figma, Atlassian Tools, Git, WAMP, MAMP, Transmit, Slack</li>
                    </ul>
                </div>
            </div> <!-- / services -->
        </section>

        <!-- About me -->

        <section class="about-me" id="about">
            <h2 class="section__title section__title--about">Who I am</h2>
            <p class="section__subtitle section__subtitle--about">full-stack dev, chef, artist</p>

            <div class="about-me__body">

                <div class="box">
                    <ul id="first-list">
                        <li>
                            <span class="code"></span>
                            <div class="info">Started as an entry-level programmer, learned
                                HTML, CSS, PHP/MySQL, frameworks CodeIgniter, Yii2 and Laravel.</div>
                            <div class="time">
                                <span>2014</span>
                                <span></span>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <div class="info">Took a break from Web development to work for a humanitarian organization
                                United Nations after mega earthquake hit Nepal in 2015.</div>
                            <div class="time">
                                <span>2015</span>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <div class="info">Flew to Down Under to pursue my Master's degree. Meanwhile worked
                                part-time as a Web Developer for a Travel agency and casual Chef for Bondi Icebergs
                                Group.</div>
                            <div class="time">
                                <span>2017</span>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <div class="info">Graduated and started working as a Full-Stack Developer, challenging my
                                limits with my passion.</div>
                            <div class="time">
                                <span>2019..</span>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

            <img src="img/miraj.webp" alt="Miraj leaning against the wall" class="about-me__img">
        </section>

        <!-- My Work -->

        <section class="my-work" id="work">
            <h2 class="section__title section__title--work">My work</h2>
            <p class="section__subtitle section__subtitle--work">A selection of my range of work</p>

            <div class="portfolio">

                <!-- Portfolio item Zip Blog -->

                <a href="https://zip.co/blog/business" target="_blank" class="portfolio__item">
                    <span class="tag">TypeScript, Contentful, GraphQL, Material UI</span>
                    <img src="img/portfolio/thumbnails/zipblog.webp" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                ZIP CO Blog</div>
                            <div class="project-name">
                                <ul>
                                    <li>
                                        React with TypeScript, Headless CMS: Contentful, GraphQL, Material UI, Styled
                                        Components
                                    </li>
                                    <li>
                                        Full Frontend development and backend modules develpoment
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item Zip Homepage -->

                <a href="https://vimeo.com/562046560" data-lity class="portfolio__item zip_item">
                    <span class="tag">TypeScript, Contentful, GraphQL, Material UI</span>
                    <img src="img/portfolio/thumbnails/zip.webp" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                ZIP CO Homepage</div>
                            <div class="project-name">
                                <ul>
                                    <li>
                                        React with TypeScript, Headless CMS: Contentful, GraphQL, Material UI, Styled
                                        Components
                                    </li>
                                    <li class="zip-info">
                                        Homepage for logged in users. You can access it by going to https://zip.co
                                        and
                                        from console add cookie key:zip_id, val:any in <br><b> Application-> Cookies->
                                            zip.co</b><br>
                                        then refresh the page.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item RAW -->

                <a href="https://raw.studio/why-choose-us" target="_blank" class="portfolio__item">
                    <span class="tag">Advanced WordPress, ACF, Tailwind CSS</span>
                    <img src="img/portfolio/thumbnails/raw.webp" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                RAW STUDIO</div>
                            <div class="project-name">
                                <ul>
                                    <li>
                                        Advanced WordPress, Advanced Custom Field, jQuery, GSAP, Tailwind CSS
                                    </li>
                                    <li>
                                        Developed multiple pages and serveral functionalities for user engagement and
                                        marketing.
                                    </li>
                                    <li><b>Contribution: Multiple pages and functionalities</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item Coinspot -->

                <!-- <a href="https://coinspot-edms.netlify.app/" target="_blank" class="portfolio__item">
                    <span class="tag">Custom Coded EDMs</span>
                    <img src="img/portfolio/thumbnails/edm.webp" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Coinspot EDMs</div>
                            <div class="project-name">
                                <ul>
                                    <li>
                                        HTML, CSS
                                    </li>
                                    <li>
                                        Custom coded Email Templates for Coinspot
                                    </li>
                                    <li><b>Contribution: Full Development</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a> -->

                <!-- Portfolio item Coinspot -->

                <!-- <a href="https://coinspot-homepage-1.netlify.app/" target="_blank" class="portfolio__item">
                    <span class="tag">Bootstrap 5, SCSS</span>
                    <img src="img/portfolio/thumbnails/coinspot.webp" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Coinspot</div>
                            <div class="project-name">
                                <ul>
                                    <li>
                                        HTML, Bootstrap 5, SCSS
                                    </li>
                                    <li>
                                        Homepage for Coinspot
                                    </li>
                                    <li><b>Contribution: Full Development</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a> -->

                <!-- Portfolio item Coinspot -->

                <!-- <a href="https://coinspot-otc.netlify.app/" target="_blank" class="portfolio__item">
                    <span class="tag">Bootstrap 5, SCSS</span>
                    <img src="img/portfolio/thumbnails/otc.webp" alt="" class="portfolio__img">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Coinspot</div>
                            <div class="project-name">
                                <ul>
                                    <li>
                                        HTML, Bootstrap 5, SCSS
                                    </li>
                                    <li>
                                        OTC Page for Coinspot
                                    </li>
                                    <li><b>Contribution: Full Development</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a> -->

                <!-- Portfolio item Chat app -->

                <a href="https://chatapp-five.vercel.app/" target="_blank" class="portfolio__item">
                    <span class="tag">Next.js, Firebase, Styled Components, MUI</span>
                    <img src="img/portfolio/thumbnails/whatsapp.webp" alt="" class="portfolio__img">
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
                                        Powered by Firebase and deployed in Vercel, you can login with your google
                                        account and chat with anyone with a valid email address in realtime.
                                    </li>
                                    <li><b>Contribution: In Progress</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Portfolio item Trvl -->

                <a href="https://react-web1.netlify.app/" target="_blank" class="portfolio__item">
                    <span class="tag">ReactJS (In Progress)</span>
                    <img src="img/portfolio/thumbnails/10.webp" alt="" class="portfolio__img">
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

                <!-- Portfolio item NSH -->

                <a href="https://newsouthhomes.com.au" target="_blank" class="portfolio__item">
                    <span class="tag">Advanced WordPress</span>
                    <img src="img/portfolio/thumbnails/12.webp" alt="" class="portfolio__img">
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

                <!-- Portfolio item STOPC -->

                <a href="https://staging.pictura.com.au/stopc" target="_blank" class="portfolio__item">
                    <span class="tag">Advanced WordPress</span>
                    <img src="img/portfolio/thumbnails/9.webp" alt="" class="portfolio__img">
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

                <!-- Portfolio item SGB -->

                <a href="https://sgbmaintenance.com.au" target="_blank" class="portfolio__item">
                    <span class="tag">Advanced WordPress</span>
                    <img src="img/portfolio/thumbnails/sgb.webp" alt="" class="portfolio__img">
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

                <!-- Portfolio item Lantern -->

                <a href="https://lanternelectrical.com.au/" target="_blank" class="portfolio__item">
                    <span class="tag">Advanced WordPress</span>
                    <img src="img/portfolio/thumbnails/11.webp" alt="" class="portfolio__img">
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

                <!-- Portfolio item Rugged Nepal -->

                <a href="https://www.ruggedtrailsnepal.com/" target="_blank" class="portfolio__item">
                    <span class="tag">CodeIgniter PHP</span>
                    <img src="img/portfolio/thumbnails/4.webp" alt="" class="portfolio__img">
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

                <!-- Portfolio item BABU -->

                <a href="https://www.babuadventure.com/" target="_blank" class="portfolio__item">
                    <span class="tag">CodeIgniter PHP</span>
                    <img src="img/portfolio/thumbnails/6.webp" alt="" class="portfolio__img">
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


                <!-- Portfolio item Antenna Central -->

                <a href="https://antennacentral.com.au" target="_blank" class="portfolio__item">
                    <span class="tag">Advanced WordPress</span>
                    <img src="img/portfolio/thumbnails/1-2.webp" alt="" class="portfolio__img">
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

                <!-- Portfolio item Job Base -->

                <a href="http://jobbase.epizy.com/web/" target="_blank" class="portfolio__item">
                    <span class="tag">Yii2 PHP</span>
                    <img src="img//portfolio/thumbnails/7.webp" alt="" class="portfolio__img">
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

                <!-- Portfolio item Booking Manage -->

                <a href="http://bookingmanage.epizy.com/" target="_blank" class="portfolio__item">
                    <span class="tag">Core PHP</span>
                    <img src="img//portfolio/thumbnails/1.webp" alt="" class="portfolio__img">
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

                <!-- Portfolio item Event Manage -->

                <a href="http://eventmanage.epizy.com" target="_blank" class="portfolio__item">
                    <span class="tag">Core PHP</span>

                    <img src="img/portfolio/thumbnails/2.webp" alt="" class="portfolio__img">
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

                <!-- Portfolio item Loyal Partners -->

                <a href="http://www.loyalpartners.epizy.com/" target="_blank" class="portfolio__item">
                    <span class="tag">Core PHP</span>
                    <img src="img/portfolio/thumbnails/3.webp" alt="" class="portfolio__img">
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

                <!-- Portfolio item Forum-->

                <a href="http://eventforum.epizy.com/" target="_blank" class="portfolio__item">
                    <span class="tag">Core PHP</span>
                    <img src="img/portfolio/thumbnails/5.webp" alt="" class="portfolio__img">
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

            </div>

            <a class="toggleBtn" id="toggleBtn" href="!#">View more</a>
            <div class="arrow"></div>
        </section>

        <section id="hobbies" class="my-work hobbies">
            <h2 class="section__title section__title--work">My Hobbies</h2>
            <p class="section__subtitle section__subtitle--work">A selection of my range of hobbies</p>
            <!---Slide show--->
            <div class="columns art">
                <p class="placeholder-text">
                    ART (4/28)</p>


                <div class="splide desktop-only">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php for ($s = 1; $s <=28; $s++){?>

                            <li class="splide__slide">
                                <div class="column">
                                    <img src="art/<?php echo $s;?>-min.webp" style="width:100%"
                                        onclick="openModal();currentSlide(<?php echo $s;?>)"
                                        class="hover-shadow cursor">
                                    <p class="hover-text">View image in fullscreen</p>
                                </div>
                            </li>

                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <div class="column mobile-only">
                    <img src="art/1-min.webp" style="width:100%" onclick="openModal();currentSlide(1)"
                        class="hover-shadow cursor" alt="Art of Miraj">
                    <p class="hover-text">View image in fullscreen</p>
                </div>
                <div class="column mobile-only">
                    <img src="art/2-min.webp" style="width:100%" onclick="openModal();currentSlide(2)"
                        class="hover-shadow cursor" alt="Art of Miraj">
                    <p class="hover-text">View image in fullscreen</p>

                </div>
                <div class="column mobile-only">
                    <img src="art/3-min.webp" style="width:100%" onclick="openModal();currentSlide(3)"
                        class="hover-shadow cursor" alt="Art of Miraj">
                    <p class="hover-text">View image in fullscreen</p>

                </div>
                <div class="column mobile-only">
                    <img src="art/4-min.webp" style="width:100%" onclick="openModal();currentSlide(4)"
                        class="hover-shadow cursor" alt="Art of Miraj">
                    <p class="hover-text">View image in fullscreen</p>

                </div>
            </div>

            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close cursor" onclick="closeModal()">&times;</span>

                    <?php for ($i = 1; $i <= 28; $i++) {?>

                    <div class="mySlides">
                        <div class="numbertext"><?php echo $i;?> / 28</div>
                        <img src="art/<?php echo $i;?>-min.webp" class="artimg" alt="Art of Miraj">
                    </div>
                    <?php }?>

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
                <div class="splide splide2 desktop-only">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="column">
                                    <img src="food/1.webp" style="width:100%" onclick="openModals();currentSlides(1)"
                                        class="hover-shadow cursor" alt="Food">
                                    <p class="hover-text">View image in fullscreen</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="column">
                                    <img src="food/2.webp" style="width:100%" onclick="openModals();currentSlides(2)"
                                        class="hover-shadow cursor">
                                    <p class="hover-text">View image in fullscreen</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="column">
                                    <img src="food/3.webp" style="width:100%" onclick="openModals();currentSlides(3)"
                                        class="hover-shadow cursor" alt="Food by Miraj">
                                    <p class="hover-text">View image in fullscreen</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="column">
                                    <img src="food/4.webp" style="width:100%" onclick="openModals();currentSlides(4)"
                                        class="hover-shadow cursor" alt="Food by Miraj">
                                    <p class="hover-text">View image in fullscreen</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="column">
                                    <img src="food/5.webp" style="width:100%" onclick="openModals();currentSlides(5)"
                                        class="hover-shadow cursor" alt="Food by Miraj">
                                    <p class="hover-text">View image in fullscreen</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="column">
                                    <img src="food/6.webp" style="width:100%" onclick="openModals();currentSlides(6)"
                                        class="hover-shadow cursor" alt="Food by Miraj">
                                    <p class="hover-text">View image in fullscreen</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="column mobile-only">
                    <img src="food/1.webp" style="width:100%" onclick="openModals();currentSlides(1)"
                        class="hover-shadow cursor" alt="Food">
                    <p class="hover-text">View image in fullscreen</p>
                </div>
                <div class="column mobile-only">
                    <img src="food/2.webp" style="width:100%" onclick="openModals();currentSlides(2)"
                        class="hover-shadow cursor" alt="Food by Miraj">
                    <p class="hover-text">View image in fullscreen</p>
                </div>
                <div class="column mobile-only">
                    <img src="food/3.webp" style="width:100%" onclick="openModals();currentSlides(3)"
                        class="hover-shadow cursor" alt="Food by Miraj">
                    <p class="hover-text">View image in fullscreen</p>
                </div>
                <div class="column mobile-only">
                    <img src="food/4.webp" style="width:100%" onclick="openModals();currentSlides(4)"
                        class="hover-shadow cursor" alt="Food by Miraj">
                    <p class="hover-text">View image in fullscreen</p>
                </div>
            </div>

            <div id="myModals" class="modal">
                <div class="modal-content">
                    <span class="close cursor" onclick="closeModals()">&times;</span>
                    <?php for($i = 1; $i <= 6; $i++) {?>

                    <div class="mySlide" style="background-color:#2b2828 !important;">
                        <div class="numbertext"><?php echo $i ?> / 6</div>
                        <img src="food/<?php echo $i;?>.webp" class="artimg" alt="Food by Miraj">
                    </div>
                    <?php } ?>

                    <a class="prev" onclick="plusSlide(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlide(1)">&#10095;</a>

                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>
                </div>
            </div>
        </section>

        <button onclick="topFunction()" id="myBtn" title="Go to top">▲</button>

        <!-- Footer -->

        <footer class="footer">
            <a href="mailto:mirajaryal@gmail.com" class="footer__link">
                mirajaryal@gmail.com
            </a>
            <ul class="social-list">
                <li class="social-list__item">
                    <a class="social-list__link" href="https://linkedin.com/in/mirajaryal" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://github.com/miraj977" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://www.instagram.com/miraj977/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="social-list__item">
                    <a class="social-list__link" href="https://www.youtube.com/c/MrDevil977/videos" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </footer>
        <div class="loader">
            <img alt="Loading Animation" width="350" height="auto"
                srcset="img/loader.gif 300w, img/loader.gif 400w, img/loader.gif 600w, img/loader.gif 800w"
                src="img/loader.gif"
                sizes="(max-width: 919px) 100vw, (min-width: 920px) and (max-width: 1200px) 74vw, 1172px" rel="preload"
                as="image">
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js">
        </script>

        <script src="js/index.js?version=1.0"></script>
        <!-- Required for ZIP video lightbox -->
        <script src="js/lity.min.js"></script>

    </body>

</html>
