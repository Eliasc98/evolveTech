<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>EvolveTech</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">

    <script src="{{asset('js/modernizr.js')}}"></script>
    <script defer src="{{asset('js/fontawesome/all.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/logo.png')}}">
    <link rel="manifest" href="site.webmanifest">

    <style>
    
    .popup-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 1000;
      overflow-y: auto;
      max-height: 100vh;  
      padding: 20px;
    }

    .popup-content {
      background: linear-gradient(135deg, #2e2e5c, #1e1e2f);
      width: 500px;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
      text-align: left;
      margin-top: 200px;
    }

    .popup-content h2 {
      text-align: center;
      color: #ff4081;
    }
    

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input, .form-group select {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: none;
      font-size: 14px;
    }

    .btn-close {
      background: none;
      border: none;
      color: white;
      font-size: 20px;
      cursor: pointer;
      position: absolute;
      top: 10px;
      right: 15px;
    }

    .btn-submit {
      background-color: #e91e63;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
    }

    .btn-submit:hover {
      background-color: #ff4081;
    }
    </style>

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="s-header__logo">
            <a href="/">
                <img src="{{asset('images/logo.png')}}" alt="Homepage">
            </a>
        </div>

        <div class="s-header__content">
    
            <nav class="s-header__nav-wrap">
                <ul class="s-header__nav">
                    <li><a class="smoothscroll" href="#hero" title="Intro">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="About">About</a></li>
                    <li><a class="smoothscroll" href="#services" title="Services">Services</a></li>
                    <li><a class="smoothscroll" href="#portfolio" title="Works">Courses</a></li>
                </ul>
            </nav> <!-- end s-header__nav-wrap -->

            <a href="#" class="btn btn--primary btn--small" onclick="openPopup()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/></svg>
                Register
            </a>

        </div> <!-- end header-content -->

        <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


    <!-- hero
    ================================================== -->
    <section id="hero" class="s-hero target-section">

        <div class="s-hero__bg">
            <div class="gradient-overlay"></div>
        </div>

        <div class="row s-hero__content">
            <div class="column">

                <h1>Hello.</h1>
                <div class="s-hero__content-about">

                    <p>
                    Level Up Your Career with <br>
                    Industry-Leading Tech Skills <br>
                    – Master Coding, Design, and Development to Land Your Dream Job!
                    </p>
    
                    <footer>
                        <div class="s-hero__content-social">
                            <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </footer>
                </div>

            </div>
        </div>

        <div class="s-hero__video">
            <a class="s-hero__video-link" href="https://player.vimeo.com/video/117310401?color=01aef0&amp;title=0&amp;byline=0&amp;portrait=0" data-lity="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 12l-18 12v-24z"/></svg>
                <span class="s-hero__video-text">Apply</span>
            </a>
        </div>

        <div class="s-hero__scroll">
            <a href="#portfolio" class="s-hero__scroll-link smoothscroll">
                Scroll Down
            </a>
        </div>

    </section> <!-- end s-hero -->

    <!-- registration pop up -->

    <div class="popup-overlay" id="popup">
        <div class="popup-content">
        <button class="btn-close" onclick="closePopup()">&times;</button>
        <h2>Register for Courses</h2>

        <form id="registrationForm" onsubmit="processPayment(event)">
            <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
            <label for="course">Select Course</label>
            <select id="course" name="course" onchange="updateAmount()" required>
                <option value="" disabled selected>Select a course</option>
                <option value="100000">Web Development - ₦100,000</option>
                <option value="120000">UI/UX Design - ₦120,000</option>
                <option value="150000">Game Development - ₦150,000</option>
                <option value="90000">Graphic Design - ₦90,000</option>
            </select>
            </div>
            <div class="form-group">
            <label for="paymentOption">Payment Option</label>
            <select id="paymentOption" name="paymentOption" onchange="splitAmount()" required>
                <option value="full">Full Payment</option>
                <option value="part">Part Payment (50%)</option>
            </select>
            </div>
            <div class="form-group">
            <label for="amount">Amount</label>
            <input type="text" id="amount" name="amount" readonly>
            </div>
            <button type="submit" class="btn-submit">Register & Pay</button>
        </form>
        </div>
    </div>

    <!-- about
    ================================================== -->
    <section id="about" class="s-about">

        <div class="horizontal-line"></div>

        <div class="row">
            <div class="column large-12">

                <div class="section-title" data-num="01" data-aos="fade-up">
                    <h3 class="h6">Who We Are</h3>
                </div>

            </div>

            <div class="column large-6 w-900-stack s-about__intro-text">
                <h1 class="display-1" data-aos="fade-up">
                    Evolve Tech equips individuals with hands-on tech skills for career growth and success.
                </h1>

                <p class="lead" data-aos="fade-up">
                    We bridge the gap between ambition and opportunity by providing cutting-edge training in tech skills. Our programs prepare you for the evolving demands of today’s tech-driven world.
                </p>
            </div>

            <div class="column large-6 w-900-stack s-about__photo-block">
                <div class="s-about__photo" data-aos="fade-up"></div>
            </div>
        </div>

        <div class="row block-large-1-2 block-tab-full s-about__process item-list">
            <div class="column item item-process" data-aos="fade-up">
                <h3 class="item-title">Define</h3>
                <p>
                    Discover your potential and set clear goals for success. We help you identify your strengths, align your skills with industry needs, and carve out a path to a rewarding tech career
                </p>
            </div>
            <div class="column item item-process" data-aos="fade-up">
                <h3 class="item-title">Design</h3>
                <p>
                    Learn to create impactful and innovative digital solutions. From web and app interfaces to immersive user experiences, master the tools and techniques that make great design stand out.
                </p>
            </div>
            <div class="column item item-process" data-aos="fade-up">
                <h3 class="item-title">Build</h3>
                <p>
                    Turn ideas into reality through hands-on, practical development. Whether it's web applications, mobile apps, or games, gain the skills to build scalable and functional projects.
                </p>
            </div>
            <div class="column item item-process" data-aos="fade-up">
                <h3 class="item-title">Launch</h3>
                <p>
                    Prepare to thrive in the tech industry with confidence. Launch your projects, grow your professional network, and kickstart your journey toward an exciting, in-demand career.
                </p>
            </div>
        </div>

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id="services" class="s-services">

        <div class="row">
            <div class="column large-12">
                <div class="section-title" data-num="02" data-aos="fade-up">
                    <h3 class="h6">Our Expertise</h3>
                </div>
            </div>
            <div class="column large-6 w-900-stack">
                <h1 class="display-1" data-aos="fade-up">
                    Master Industry-Driven Skills with Our Proven Tech Training Expertise 
                </h1>
            </div>
            <div class="column large-6 w-900-stack">
                <p class="lead" data-aos="fade-up">
                    Our expertise lies in delivering top-notch training in web development, app creation, UI/UX design, graphic design, and game development. With a focus on practical learning and real-world projects, we prepare you for high-demand careers in technology.
                </p>
            </div>
        </div>

        <div class="row block-large-1-2 block-tab-full s-services__services item-list">
            <div class="column item item-service" data-aos="fade-up">
                <span class="service-icon service-icon--product-design"></span>
                <h3 class="item-title">Web Development</h3>
                <p>
                    Build websites that perform. Master the art of coding and creating dynamic, 
                    responsive websites using HTML, CSS, JavaScript, and modern frameworks like React and 
                    Node.JS/Laravel to bring ideas to life.
                </p>
            </div>
            <div class="column item item-service" data-aos="fade-up">
                <span class="service-icon service-icon--branding"></span>
                <h3 class="item-title">Game Development</h3>
                <p>
                    Create games that captivate. Learn to design and develop immersive, engaging games with tools like Unity, Unreal Engine, and C#, combining creativity with technical skills to deliver unforgettable experiences.
                </p>
            </div>
            <div class="column item item-service" data-aos="fade-up">
                <span class="service-icon service-icon--frontend"></span>
                <h3 class="item-title">Frontend Development</h3>
                <p>
                    Create stunning, responsive interfaces. Master React, HTML, CSS, and JavaScript to develop sleek, interactive user experiences that perform seamlessly across all platforms and devices.
                </p>
            </div>
            <div class="column item item-service" data-aos="fade-up">
                <span class="service-icon service-icon--research"></span>
                <h3 class="item-title">UI/UX Design</h3>
                <p>
                    Design intuitive, user-friendly experiences. Learn to research, wireframe, and prototype stunning interfaces with tools like Figma and Adobe XD, ensuring functionality meets user needs beautifully.
                </p>
            </div>
            <div class="column item item-service" data-aos="fade-up">
                <span class="service-icon service-icon--illustration"></span>
                <h3 class="item-title">Graphic Design</h3>
                <p>
                    Bring ideas to life with visuals. Master design tools like Photoshop, Illustrator, and Canva to create stunning logos, banners, and marketing materials that captivate and communicate with clarity
                </p>
            </div>
            <div class="column item item-service" data-aos="fade-up">
                <span class="service-icon service-icon--ecommerce"></span>
                <h3 class="item-title">App Development</h3>
                <p>
                    Build innovative apps that solve real-world problems. Learn to create powerful, user-friendly mobile applications using React Native and backend technologies like Node.js or Laravel to bring your ideas to life.
                </p>
            </div>
        </div>

    </section> <!-- end s-services -->

    <section id="portfolio" class="s-portfolio">

        <div class="row s-porfolio__top">
            <div class="column large-6 w-900-stack">
                <div class="section-title" data-num="03" data-aos="fade-up">
                    <h3 class="h6">Register Courses</h3>
                </div>
            </div>
            <div class="column large-6 w-900-stack">
                <h1 class="display-1" data-aos="fade-up">
                Gain industry-relevant skills and kickstart your tech career with hands-on, expert-led courses today.
                </h1>
            </div>
        </div> <!-- end s-portfolio__top-->

        <div class="row s-portfolio__list block-large-1-2 block-tab-full collapse">

            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/1.png" title="The Red Wheel" data-size="1050x700">
                            <img src="{{asset('images/1.png')}}" 
                                 srcset="images/1.png 1x, images/1.png@2x.jpg 2x" alt="evolve_tech_images">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Full-Stack Development</div>
                        <h4 class="folio-item__title">React, Node, Laravel</h4>
                    </div>
                    <a href="#" title="Project Link" class="folio-item__project-link">Register</a>
                    <div class="folio-item__caption">
                        <p>Master frontend development learning basics and using REACT framework and backend development using Node.js or Laravel framework.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/2.png" title="Music Life" data-size="1050x700">
                            <img src="{{asset('images/2.png')}}" 
                                 srcset="images/2.png 1x, images/2.png@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Game Development</div>
                        <h4 class="folio-item__title">Unity Engine, C#</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Register</a>
                    <div class="folio-item__caption">
                        <p>Embark on an exciting 12-week journey into game development! Master the Unity Engine, C#, and .NET Framework to create immersive games from scratch.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/3.png" Title="OI Logo" data-size="1050x700">
                            <img src="{{asset('images/3.png')}}" 
                                 srcset="images/3.png 1x, images/3.png@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">App Development</div>
                        <h4 class="folio-item__title">React Native, mysql, Node.js, Laravel</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Register</a>
                    <div class="folio-item__caption">
                        <p>earn to build high-quality, cross-platform mobile apps from
                            scratch. </p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/4.png" title="Corrugated Sheets" data-size="1050x700">
                            <img src="{{asset('images/4.png')}}" 
                                 srcset="images/4.png 1x, images/4.png@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Frontend Development</div>
                        <h4 class="folio-item__title">HTML, CSS, JS, REACT.JS, NEXT.JS</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Register</a>
                    <div class="folio-item__caption">
                        <p>Learn HTML, CSS, JavaScript and React.js to build beautiful, interactive websites from scratch.</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/5.png" title="Sand Dunes" data-size="1050x700">
                            <img src="{{asset('images/5.png')}}" 
                                 srcset="images/5.png 1x, images/5.png@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Backend Development</div>
                        <h4 class="folio-item__title">PHP, Laravel, Mysql, Postgres, APIs</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">
                        Register
                    </a>
                    <div class="folio-item__caption">
                        <p>Master a powerful PHP framework to build robust, dynamic web applications. Ideal for beginners and developers looking to deepen their expertise. Enroll now and become a Laravel expert!</p>
                    </div>
                </div>
            </div> <!-- end column -->
            <div class="column" data-aos="fade-up">
                <div class="folio-item">
                    <div class="folio-item__thumb">
                        <a class="folio-item__thumb-link" href="images/6.png" title="The Lamp" data-size="1050x700">
                            <img src="{{asset('images/6.png')}}" 
                                 srcset="images/6.png 1x, images/6.png@2x.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="folio-item__info">
                        <div class="folio-item__cat">Graphic Designer</div>
                        <h4 class="folio-item__title">Adobe Photoshop, Adobe Illustrator, Canva</h4>
                    </div>
                    <a href="https://www.behance.net/" title="Project Link" class="folio-item__project-link">Register</a>
                    <div class="folio-item__caption">
                        <p>Unleash your creativity with our Graphic Design Bootcamp! Master Adobe Illustrator and Photoshop to create stunning designs and digital art. </p>
                    </div>
                </div>
            </div> 

        </div> 

    </section>


    <!-- clients
    ================================================== 
    <div id="clients" class="section s-clients">

        <div class="row narrower s-clients__top h-text-center">
            <div class="column">
                <h1 class="display-1" data-aos="fade-up">
                We've had the priveledge with working with
                some of the largest and most iconic brands
                </h1>
            </div>
        </div> 

        <div class="row clients-outer">
            <div class="column">
                <div class="clients" data-aos="fade-up">
                    
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/dropbox.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/atom.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/github.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/redhat.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/medium.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/messenger.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/steam.svg" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/icons/clients/spotify.svg" /></a>
                     
                </div>
            </div>
        </div>

        <div class="row testimonials collapse">

            <div class="column large-12">

                <div class="testimonial-slider" data-aos="fade-up">

                    <div class="testimonial-slider__slide">
                        <p>
                        Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem. 
                        Explicabo a quaerat sint autem dolore ducimus ut consequatur neque.  Nisi dolores quaerat fuga rem nihil nostrum.
                        Laudantium quia consequatur molestias delectus culpa.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Tim Cook</strong>
                                <span>CEO, Apple</span>
                            </cite>
                        </div>
                    </div> 
    
                    <div class="testimonial-slider__slide">
                        <p>
                        Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                        Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                        Quasi voluptas eius distinctio. Atque eos maxime.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Sundar Pichai</strong>
                                <span>CEO, Google</span>
                            </cite>
                        </div>
                    </div>
    
                    <div class="testimonial-slider__slide">
                        <p>
                        Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.
                        Voluptatem dignissimos ut.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="images/avatars/user-04.jpg" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Satya Nadella</strong>
                                <span>CEO, Microsoft</span>
                            </cite>
                        </div>
                    </div> 
    
                    <div class="testimonial-slider__slide">
                        <p>
                        Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel dui. In ac felis 
                        quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Qui sed at corrupti expedita voluptas odit. 
                        Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                        </p>
                        <div class="testimonial-slider__author">
                            <img src="images/avatars/user-05.jpg" alt="Author image" class="testimonial-slider__avatar">
                            <cite class="testimonial-slider__cite">
                                <strong>Jeff Bezos</strong>
                                <span>CEO, Amazon</span>
                            </cite>
                        </div>
                    </div> 

                </div> 
                
            </div> 

        </div> 


    </div>
    -->


    <!-- contact
    ================================================== -->
    <section class="s-contact">

        <div class="row narrower s-contact__top h-text-center">
            <div class="column">
                <h3 class="h6">Get In Touch</h3>
                <h1 class="display-1">
                Have an idea or want an enquiry? Talk to
                us. Let us work together and make something great.
                Shoot us a message at
                </h1>
            </div>
        </div> <!-- s-footer__top -->

        <div class="row h-text-center">
            <div class="column">
                <p class="s-contact__email">
                    <a href="mailto:#0">info@evolveTech.com</a>
                </p>
            </div>
        </div>

    </section>  <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer">
        <div class="row row-y-top">

            <div class="column large-8 medium-12">
                <div class="row">
                    <div class="column large-7 tab-12 s-footer__block">
                        <h4 class="h6">Where to Find Us</h4>
        
                        <p>
                        18, Joel Ogunnaike, GRA Ikeja Lagos State.<br>
                        <a href="tel:9138950629">+234 913 895 0629</a>
                        </p>
                    </div>
        
                    <div class="column large-5 tab-12 s-footer__block">
                        <h4 class="h6">Follow Us</h4 class="h6">
        
                        <ul class="s-footer__list">
                            <li><a href="#0">Facebook</a></li>
                            <li><a href="#0">Twitter</a></li>
                            <li><a href="#0">Instagram</a></li>
                            <li><a href="#0">Dribbble</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="column large-4 medium-12 s-footer__block--end">
                <a href="mailto:#0" class="btn h-full-width">Register Now</a>

                <div class="ss-copyright">
                    <span>Copyright EvolveTech 2024</span> 
                    <!-- <span>Design by <a href="#">StyleShout</a> Distribution By <a href="https://themewagon.com">EvolveTech</a></span> -->
                </div>
            </div>

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    top
                </a>
            </div> <!-- end ss-go-top -->

        </div>
    </footer>
    

    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
    // Handle Popup
    const popup = document.getElementById('popup');

    function openPopup() {
      popup.style.display = 'flex';
    }

    function closePopup() {
      popup.style.display = 'none';
    }

    // Update Amount Based on Course and Payment Option
    function updateAmount() {
      const course = document.getElementById('course').value;
      const paymentOption = document.getElementById('paymentOption').value;
      const amountField = document.getElementById('amount');

      if (paymentOption === 'full') {
        amountField.value = `₦${course}`;
      } else if (paymentOption === 'part') {
        amountField.value = `₦${course / 2}`;
      }
    }

    function splitAmount() {
      updateAmount();
    }

    // Process Payment with Paystack
    function processPayment(event) {
      event.preventDefault();

      const fullName = document.getElementById('fullName').value;
      const email = document.getElementById('email').value;
      const phone = document.getElementById('phone').value;
      const amount = document.getElementById('amount').value.replace('₦', '') * 100;

      const handler = PaystackPop.setup({
        key: 'your-paystack-public-key', // Replace with your Paystack Public Key
        email: email,
        amount: amount,
        currency: 'NGN',
        callback: function (response) {
          alert('Payment successful! Transaction reference: ' + response.reference);
          // Send confirmation email and WhatsApp link
          window.location.href = 'your-whatsapp-link'; // Replace with actual WhatsApp group link
        },
        onClose: function () {
          alert('Transaction was not completed.');
        },
      });
      handler.openIframe();
    }
  </script>
  <script src="https://js.paystack.co/v1/inline.js"></script>

</body>

</html>