<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NCA IT Solution</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- ================= NAVBAR ================= -->

<header class="navbar">

    <div class="logo">
        <strong>NCA</strong>

        <div>
            <b>IT SOLUTION</b>
            <small>IT Training & Software Development</small>
        </div>
    </div>

    <button class="menu-toggle" aria-label="Toggle navigation" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <nav class="nav-menu">
        <a href="#home" class="active">Home</a>
        <a href="#about">About Us</a>
        <a href="#training">Our Services</a>
        <a href="#courses">Courses</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#internship">Internship</a>
        <a href="#certificate">Certificate</a>
        <a href="#contact">Contact</a>
    </nav>

    <a href="tel:+918287584509" class="enquire-btn">
        Call Us 📞 →
    </a>

</header>


<!-- ================= HERO ================= -->

<section class="hero" id="home">

    <div class="hero-content">

        <p class="welcome">
            WELCOME TO NCA IT SOLUTION
        </p>

        <h1>
            Empowering Careers.<br>
            Building <span>Digital Solutions.</span>
        </h1>

        <p class="hero-description">
            NCA IT Solution is an IT Training and Software Development
            company helping students, professionals and businesses grow
            through practical technology education and innovative digital solutions.
        </p>

        <div class="hero-buttons">

            <a href="#courses" class="outline-btn">
                Explore Courses →
            </a>

            <a href="#software" class="outline-btn" >
                Start Your Project →
            </a>

        </div>


        <div class="hero-features">

            <div>
                <span>▣</span>
                <p>
                    <b>Practical Learning</b><br>
                    & Live Projects
                </p>
            </div>

            <div>
                <span>♟</span>
                <p>
                    <b>Experienced</b><br>
                    Trainers & Developers
                </p>
            </div>

            <div>
                <span>▦</span>
                <p>
                    <b>Placement &</b><br>
                    Career Support
                </p>
            </div>

            <div>
                <span>▣</span>
                <p>
                    <b>100% Job Oriented</b><br>
                    Training
                </p>
            </div>

        </div>

    </div>


    <!-- ================= DYNAMIC HERO IMAGE ================= -->

    <div class="hero-image">

        <img
            id="heroGirl"
            src="https://images.pexels.com/photos/3769021/pexels-photo-3769021.jpeg?auto=compress&cs=tinysrgb&w=700"
            alt="Professional woman working on laptop"
        >

        
    </div>

</section>



<!-- ================= TRAINING + SOFTWARE ================= -->

<section class="two-cards" id="training">

    <div class="big-card training-card">

        <div class="card-heading">

            <div class="big-icon">🎓</div>

            <div>
                <h2>IT TRAINING</h2>

                <p>
                    Build industry-relevant skills with practical,
                    project-based training.
                </p>
            </div>

        </div>

        <a href="#courses" class="small-btn">
            View All Courses →
        </a>

        <div class="course-list">

            <ul>
                <li>Full Stack Development</li>
                <li>MERN Stack Development</li>
                <li>Java Full Stack</li>
                <li>Python Full Stack</li>
                <li>.NET Full Stack</li>
                <li>Data Science & AI</li>
            </ul>

            <ul>
                <li>Cyber Security</li>
                <li>Web Designing</li>
                <li>Cloud Computing</li>
                <li>Data Analytics</li>
                <li>Digital Marketing</li>
                <li>Advanced Excel</li>
            </ul>

        </div>

    </div>


    <div class="big-card software-card" id="software">

        <div class="card-heading">

            <div class="big-icon code-icon">
                &lt;/&gt;
            </div>

            <div>
                <h2>SOFTWARE DEVELOPMENT</h2>

                <p>
                    Turn your business ideas into powerful digital products.
                </p>
            </div>

        </div>

        <a href="#contact" class="small-btn">
            Our Services →
        </a>

        <ul class="software-list">

            <li>Website Design & Development</li>
            <li>Custom Software Development</li>
            <li>Mobile App Development</li>
            <li>E-Commerce Development</li>
            <li>CRM & ERP Solutions</li>

        </ul>

    </div>

</section>



<!-- ================= POPULAR COURSES ================= -->

<section class="popular" id="courses">

    <div class="section-heading">

        <div>
            <h2>Popular Courses</h2>

            <p>
                Gain in-demand skills and take your career to the next level.
            </p>
        </div>

        <a href="#training">
            View All Courses →
        </a>

    </div>


    <div class="course-grid">

        <div class="course-box">
            <div class="course-icon">&lt;/&gt;</div>
            <h3>Full Stack<br>Developer</h3>
            <p>✓ 4 to 6 Months</p>
            <p>+ Beginner To Advance</p>
        </div>

        <div class="course-box">
            <div class="course-icon">⚛</div>
            <h3>MERN Stack<br>Developer</h3>
            <p>✓ 4 to 6 Months</p>
            <p>+ Beginner To Advance</p>
        </div>

        <div class="course-box">
            <div class="course-icon">🐍</div>
            <h3>Python<br>Full Stack</h3>
            <p>✓ 4 to 6 Months</p>
            <p>+ Beginner To Advance</p>
        </div>

        <div class="course-box different">
            <div class="course-icon">HTML</div>
            <h3>Web Designing</h3>
            <p>✓ 4 to 6 Months</p>
            <p>+ Beginner To Advance</p>
        </div>

        <div class="course-box">
            <div class="course-icon">🧠</div>
            <h3>Data Science & AI</h3>
            <p>✓ 4 to 6 Months</p>
            <p>+ Beginner To Advance</p>
        </div>

        <div class="course-box">
            <div class="course-icon">🛡</div>
            <h3>Cyber Security</h3>
            <p>✓ 4 to 6 Months</p>
            <p>+ Beginner To Advance</p>
        </div>

    </div>

</section>



<!-- ================= TECHNOLOGY STACK ================= -->

<section class="technology">

    <div class="section-heading">

        <div>
            <h2>Our Technology Stack</h2>

            <p>
                Work with the latest and most in-demand technologies.
            </p>
        </div>

    </div>


    <div class="technology-grid">

        <div>🟧<b>HTML</b><small>HTML5</small></div>
        <div>🟦<b>CSS</b><small>CSS3</small></div>
        <div>🟨<b>JS</b><small>JavaScript</small></div>
        <div>⚛<b>React</b><small>React</small></div>
        <div>🟩<b>Node</b><small>Node.js</small></div>
        <div>🐍<b>Python</b><small>Python</small></div>
        <div>☕<b>Java</b><small>Java</small></div>
        <div>🔵<b>.NET</b><small>.NET</small></div>
        <div>🍃<b>Mongo</b><small>MongoDB</small></div>
        <div>🐬<b>MySQL</b><small>MySQL</small></div>
        <div>🐘<b>PostgreSQL</b><small>PostgreSQL</small></div>
        <div>☁<b>AWS</b><small>AWS</small></div>

    </div>

</section>



<!-- ================= WHY CHOOSE US ================= -->

<section class="why-us" id="about">

    <h2>Why Choose NCA IT Solution?</h2>

    <p>Your Success is Our Priority</p>

    <div class="why-grid">

        <div>
            <span>♧</span>
            <b>Industry-Oriented<br>Training</b>
        </div>

        <div>
            <span>▣</span>
            <b>Practical Live<br>Projects</b>
        </div>

        <div>
            <span>♟</span>
            <b>Experienced Trainers<br>& Developers</b>
        </div>

        <div>
            <span>▤</span>
            <b>Online & Offline<br>Training</b>
        </div>

        <div>
            <span>♙</span>
            <b>Internship<br>Opportunities</b>
        </div>

        <div>
            <span>⚙</span>
            <b>Modern<br>Technologies</b>
        </div>

        <div>
            <span>▣</span>
            <b>Customized Software<br>Solutions</b>
        </div>

        <div>
            <span>◉</span>
            <b>Technical Support<br>& Maintenance</b>
        </div>

    </div>

</section>



<!-- ================= PORTFOLIO ================= -->

<section class="portfolio" id="portfolio">

    <div class="section-heading">

        <div>

            <h2>Our Portfolio</h2>

            <p>
                Real Projects. Real Experience. Real Results.
            </p>

            <a href="#contact" class="small-btn">
                View All Projects →
            </a>

        </div>

    </div>


    <div class="portfolio-grid">

        <div class="portfolio-card">
            <div class="portfolio-image">💻</div>
            <h3>Business Website</h3>
        </div>

        <div class="portfolio-card">
            <div class="portfolio-image">🛒</div>
            <h3>E-Commerce Website</h3>
        </div>

        <div class="portfolio-card">
            <div class="portfolio-image">🏫</div>
            <h3>School/College Management</h3>
        </div>

        <div class="portfolio-card">
            <div class="portfolio-image">📊</div>
            <h3>CRM Application</h3>
        </div>

        <div class="portfolio-card">
            <div class="portfolio-image">📱</div>
            <h3>Mobile App Development</h3>
        </div>

    </div>

</section>



<!-- ================= TESTIMONIALS ================= -->

<section class="testimonials">

    <div class="section-heading">

        <div>

            <h2>What Our Students & Clients Say</h2>

            <p>
                Trusted by learners and businesses across India.
            </p>

        </div>

    </div>


    <div class="testimonial-grid">


        <!-- Rahul -->

        <div class="testimonial-card">

            <div class="profile">

                <div class="profile-picture">

                    <img
                        src="https://randomuser.me/api/portraits/men/32.jpg"
                        alt="Rahul Sharma"
                    >

                </div>

                <div>
                    <h3>Rahul Sharma</h3>
                    <small>Full Stack Developer</small>
                </div>

            </div>

            <p>
                "NCA IT Solution gave me the right skills and guidance.
                The trainers are very supportive and the placement support
                is excellent."
            </p>

            <div class="stars">
                ★★★★★
            </div>

        </div>



        <!-- Priya -->

        <div class="testimonial-card">

            <div class="profile">

                <div class="profile-picture">

                    <img
                        src="https://randomuser.me/api/portraits/women/44.jpg"
                        alt="Priya Singh"
                    >

                </div>

                <div>
                    <h3>Priya Singh</h3>
                    <small>MERN Stack Student</small>
                </div>

            </div>

            <p>
                "I learned MERN stack here and worked on real projects.
                The experience is amazing and very helpful for my career."
            </p>

            <div class="stars">
                ★★★★★
            </div>

        </div>



        <!-- Amit -->

        <div class="testimonial-card">

            <div class="profile">

                <div class="profile-picture">

                    <img
                        src="https://randomuser.me/api/portraits/men/46.jpg"
                        alt="Amit Verma"
                    >

                </div>

                <div>
                    <h3>Amit Verma</h3>
                    <small>Business Owner</small>
                </div>

            </div>

            <p>
                "We got our website developed from NCA IT Solution.
                The team is professional, responsive and delivered on time."
            </p>

            <div class="stars">
                ★★★★★
            </div>

        </div>

    </div>

</section>



<!-- ================= INTERNSHIP ================= -->

<section class="internship" id="internship">

    <div>

        <p class="welcome">
            START YOUR CAREER
        </p>

        <h2>
            Build Skills.<br>
            Gain Experience.<br>
            <span>Grow Your Career.</span>
        </h2>

        <p>
            Get practical experience through industry-focused
            internship programs and live projects.
        </p>

        <a href="#contact" class="yellow-btn">
            Apply for Internship →
        </a>

    </div>

</section>



<!-- ================= CONTACT ================= -->

<section class="contact-strip" id="contact">

    <div class="contact-title">

        <span>☎</span>

        <div>
            <h2>Have Any Questions?</h2>
            <p>Get free consultation for your course or project.</p>
        </div>

    </div>


    <div class="contact-info">

        <div>

            <b>☎ +91 8287584509</b>

            <br>

            <span>
                ✉ ncaitsolution@gmail.com
            </span>

        </div>


        <div>

            <b>
                📍 Iconic Corinthian Tower, Floor 7
            </b>

            <br>

            <span>
                Office No. 705, Electronic City Metro Station, Noida
            </span>

        </div>

    </div>


    <a href="#" class="consult-btn">
        Get Free Consultation →
    </a>

</section>



<!-- ================= FOOTER ================= -->

<footer>

    <div class="footer-top">

        <div class="footer-logo">

            <strong>NCA</strong>

            <div>
                <b>IT SOLUTION</b>

                <small>
                    IT Training & Software Development
                </small>
            </div>

        </div>


        <div class="footer-links">

            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#training">IT Training</a>
            <a href="#software">Software Development</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#internship">Internship</a>
            <a href="#contact">Contact</a>

        </div>


        <div class="social">

            <span>f</span>
            <span>◎</span>
            <span>in</span>
            <span>▶</span>

        </div>

    </div>


    <div class="footer-bottom">

        <p>
            © 2026 NCA IT Solution. All Rights Reserved.
        </p>

        <div>

            <a href="#">Terms & Conditions</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Grow Your Future</a>

        </div>

    </div>

</footer>



<!-- ================= DYNAMIC HERO IMAGE ================= -->

<!-- ================= DYNAMIC HERO IMAGE (VIA PEXELS API) ================= -->
<script>
    const PEXELS_API_KEY = "uGu4BIbr92afmDfEYEJJdGGYsRdd7LgXyywrBUeSey9bAXrEOhdcFL9C";
    const API_URL = "https://api.pexels.com/v1/search?query=coding&per_page=15";

    const heroGirl = document.getElementById("heroGirl");
    let heroImages = [];
    let currentImage = 0;

    async function loadPexelsImages() {
        try {
            const response = await fetch(API_URL, {
                headers: {
                    Authorization: PEXELS_API_KEY
                }
            });

            if (!response.ok) {
                throw new Error(`API Error: ${response.status}`);
            }

            const data = await response.json();

            heroImages = data.photos.map(photo => photo.src.large);

            if (heroImages.length > 0) {
                heroGirl.src = heroImages[0];
                startImageRotation();
            }
        } catch (error) {
            console.error("Failed to load images from Pexels:", error);
        }
    }

    function startImageRotation() {
        setInterval(() => {
            heroGirl.style.opacity = "0";

            setTimeout(() => {
                currentImage = (currentImage + 1) % heroImages.length;
                heroGirl.src = heroImages[currentImage];
                heroGirl.style.opacity = "1";
            }, 800);
        }, 5000);
    }

    const menuToggle = document.querySelector(".menu-toggle");
    const navMenu = document.querySelector(".nav-menu");

    if (menuToggle && navMenu) {
        menuToggle.addEventListener("click", () => {
            navMenu.classList.toggle("open");
            const isOpen = navMenu.classList.contains("open");
            menuToggle.setAttribute("aria-expanded", isOpen);
        });

        navMenu.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", () => {
                navMenu.classList.remove("open");
                menuToggle.setAttribute("aria-expanded", "false");
            });
        });
    }

    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll('.nav-menu a[href^="#"]');

    const setActiveNavLink = (sectionId) => {
        navLinks.forEach(link => {
            link.classList.toggle("active", link.getAttribute("href") === `#${sectionId}`);
        });
    };

    const sectionObserver = new IntersectionObserver((entries) => {
        const visibleSection = entries
            .filter(entry => entry.isIntersecting)
            .sort((first, second) => first.boundingClientRect.top - second.boundingClientRect.top)[0];

        if (visibleSection) {
            setActiveNavLink(visibleSection.target.id);
        }
    }, {
        rootMargin: "-20% 0px -65% 0px",
        threshold: 0
    });

    sections.forEach(section => sectionObserver.observe(section));

    loadPexelsImages();
</script>


</body>

</html>