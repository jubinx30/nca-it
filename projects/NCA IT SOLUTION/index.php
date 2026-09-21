<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NCA IT Solution</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
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
                Enquire now →
            </a>

            <a href="#software" class="outline-btn" >
                Get Admission →
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
            <img class="course-image" src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=900&q=85" alt="AutoCAD design workspace">
            <div class="course-content">
            <h3>Full Stack Developer</h3>
                <div class="course-meta">
                    <span>Duration: 4-6 Months</span>
                    <span>Beginner</span>
                </div>
                <div class="course-badges">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                </div>
                <div class="course-actions">
                    <a href="#contact" class="course-learn-btn">Learn More</a>
                    <a href="#contact" class="course-apply-btn">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="course-box">
            <img class="course-image" src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?auto=format&fit=crop&w=900&q=85" alt="Cyber security interface">
            <div class="course-content">
            <h3>MERN Stack Developer</h3>
                <div class="course-meta">
                    <span>Duration: 4-6 Months</span>
                    <span>Beginner</span>
                </div>
                <div class="course-badges">
                    <span>MongoDB</span>
                    <span>Express</span>
                    <span>React</span>
                </div>
                <div class="course-actions">
                    <a href="#contact" class="course-learn-btn">Learn More</a>
                    <a href="#contact" class="course-apply-btn">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="course-box">
            <img class="course-image" src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=900&q=85" alt="Java programming code">
            <div class="course-content">
            <h3>Python Full Stack</h3>
                <div class="course-meta">
                    <span>Duration: 4-6 Months</span>
                    <span>Beginner</span>
                </div>
                <div class="course-badges">
                    <span>Java</span>
                    <span>Spring</span>
                    <span>SQL</span>
                </div>
                <div class="course-actions">
                    <a href="#contact" class="course-learn-btn">Learn More</a>
                    <a href="#contact" class="course-apply-btn">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="course-box">
            <img class="course-image" src="https://images.unsplash.com/photo-1557838923-2985c318be48?auto=format&fit=crop&w=900&q=85" alt="Digital marketing analytics dashboard">
            <div class="course-content">
                <h3>Advanced Digital Marketing</h3>
                <div class="course-meta">
                    <span>Duration: 6 Months</span>
                    <span>Beginner</span>
                </div>
                <div class="course-badges">
                    <span>SEO</span>
                    <span>Ads</span>
                    <span>Analytics</span>
                </div>
                <div class="course-actions">
                    <a href="#contact" class="course-learn-btn">Learn More</a>
                    <a href="#contact" class="course-apply-btn">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="course-box">
            <img class="course-image" src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=900&q=85" alt="Data analytics dashboard">
            <div class="course-content">
                <h3>Data Analytics Using Python</h3>
                <div class="course-meta">
                    <span>Duration: 6 Months</span>
                    <span>Intermediate</span>
                </div>
                <div class="course-badges">
                    <span>Python</span>
                    <span>Power BI</span>
                    <span>SQL</span>
                </div>
                <div class="course-actions">
                    <a href="#contact" class="course-learn-btn">Learn More</a>
                    <a href="#contact" class="course-apply-btn">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="course-box">
            <img class="course-image" src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=900&q=85" alt="Python programming course">
            <div class="course-content">
                <h3>Python Training Course</h3>
                <div class="course-meta">
                    <span>Duration: 2.5 Months</span>
                    <span>Beginner</span>
                </div>
                <div class="course-badges">
                    <span>Python</span>
                    <span>Projects</span>
                    <span>Automation</span>
                </div>
                <div class="course-actions">
                    <a href="#contact" class="course-learn-btn">Learn More</a>
                    <a href="#contact" class="course-apply-btn">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="course-box">
            <img class="course-image" src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=900&q=85" alt="Mobile app development on a smartphone">
            <div class="course-content">
                <h3>Mobile App Development</h3>
                <div class="course-meta">
                    <span>Duration: 4-6 Months</span>
                    <span>Beginner</span>
                </div>
                <div class="course-badges">
                    <span>React Native</span>
                    <span>Flutter</span>
                    <span>Android</span>
                </div>
                <div class="course-actions">
                    <a href="#contact" class="course-learn-btn">Learn More</a>
                    <a href="#contact" class="course-apply-btn">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="course-box">
            <img class="course-image" src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=900&q=85" alt="Cyber security server infrastructure">
            <div class="course-content">
                <h3>Cyber Security</h3>
                <div class="course-meta">
                    <span>Duration: 6 Months</span>
                    <span>Intermediate</span>
                </div>
                <div class="course-badges">
                    <span>Ethical Hacking</span>
                    <span>Networks</span>
                    <span>Cloud Security</span>
                </div>
                <div class="course-actions">
                    <a href="#contact" class="course-learn-btn">Learn More</a>
                    <a href="#contact" class="course-apply-btn">Apply Now</a>
                </div>
            </div>
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

        <div class="technology-track">
            <div class="technology-card">🟧<b>HTML</b><small>HTML5</small></div>
            <div class="technology-card">🟦<b>CSS</b><small>CSS3</small></div>
            <div class="technology-card">🟨<b>JS</b><small>JavaScript</small></div>
            <div class="technology-card">⚛<b>React</b><small>React</small></div>
            <div class="technology-card">🟩<b>Node</b><small>Node.js</small></div>
            <div class="technology-card">🐍<b>Python</b><small>Python</small></div>
            <div class="technology-card">☕<b>Java</b><small>Java</small></div>
            <div class="technology-card">🔵<b>.NET</b><small>.NET</small></div>
            <div class="technology-card">🍃<b>Mongo</b><small>MongoDB</small></div>
            <div class="technology-card">🐬<b>MySQL</b><small>MySQL</small></div>
            <div class="technology-card">🐘<b>PostgreSQL</b><small>PostgreSQL</small></div>
            <div class="technology-card">☁<b>AWS</b><small>AWS</small></div>

            <div class="technology-card" aria-hidden="true">🟧<b>HTML</b><small>HTML5</small></div>
            <div class="technology-card" aria-hidden="true">🟦<b>CSS</b><small>CSS3</small></div>
            <div class="technology-card" aria-hidden="true">🟨<b>JS</b><small>JavaScript</small></div>
            <div class="technology-card" aria-hidden="true">⚛<b>React</b><small>React</small></div>
            <div class="technology-card" aria-hidden="true">🟩<b>Node</b><small>Node.js</small></div>
            <div class="technology-card" aria-hidden="true">🐍<b>Python</b><small>Python</small></div>
            <div class="technology-card" aria-hidden="true">☕<b>Java</b><small>Java</small></div>
            <div class="technology-card" aria-hidden="true">🔵<b>.NET</b><small>.NET</small></div>
            <div class="technology-card" aria-hidden="true">🍃<b>Mongo</b><small>MongoDB</small></div>
            <div class="technology-card" aria-hidden="true">🐬<b>MySQL</b><small>MySQL</small></div>
            <div class="technology-card" aria-hidden="true">🐘<b>PostgreSQL</b><small>PostgreSQL</small></div>
            <div class="technology-card" aria-hidden="true">☁<b>AWS</b><small>AWS</small></div>
        </div>

    </div>

</section>



<!-- ================= WHY CHOOSE US ================= -->

<section class="why-us" id="about">

    <div class="why-heading">
        <p class="why-eyebrow">WHY LEARN WITH US</p>
        <h2>Why Choose NCA IT Solution?</h2>
        <p>Your success is our priority. Learn practical skills, build real projects, and move forward with expert support.</p>
    </div>

    <div class="why-grid">

        <div class="why-card">
            <span class="why-icon" aria-hidden="true">✦</span>
            <h3>Industry-Oriented Training</h3>
            <p>Learn the tools and workflows used by modern technology teams.</p>
        </div>

        <div class="why-card">
            <span class="why-icon" aria-hidden="true">⌘</span>
            <h3>Practical Live Projects</h3>
            <p>Turn concepts into portfolio-ready projects with guided practice.</p>
        </div>

        <div class="why-card">
            <span class="why-icon" aria-hidden="true">◎</span>
            <h3>Expert Mentorship</h3>
            <p>Get guidance from experienced trainers and working developers.</p>
        </div>

        <div class="why-card">
            <span class="why-icon" aria-hidden="true">◫</span>
            <h3>Flexible Learning</h3>
            <p>Choose online, offline, or hybrid learning that fits your schedule.</p>
        </div>

        <div class="why-card">
            <span class="why-icon" aria-hidden="true">↗</span>
            <h3>Career Support</h3>
            <p>Prepare for interviews, internships, and your next career opportunity.</p>
        </div>

        <div class="why-card">
            <span class="why-icon" aria-hidden="true">+</span>
            <h3>Dedicated Support</h3>
            <p>Keep growing with responsive technical and learning support.</p>
        </div>

    </div>

    <div class="why-stats" aria-label="NCA IT Solution results">
        <div><strong>500+</strong><span>Students Trained</span></div>
        <div><strong>50+</strong><span>Live Projects</span></div>
        <div><strong>20+</strong><span>Industry Courses</span></div>
        <div><strong>95%</strong><span>Student Satisfaction</span></div>
    </div>

    <a href="#courses" class="why-cta">Start Your Learning Journey <span aria-hidden="true">→</span></a>

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
        <div class="testimonial-track">


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

        <!-- Neha -->

        <div class="testimonial-card">

            <div class="profile">
                <div class="profile-picture">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Neha Kapoor">
                </div>
                <div>
                    <h3>Neha Kapoor</h3>
                    <small>Python Full Stack Student</small>
                </div>
            </div>

            <p>
                "The practical assignments made difficult topics easy to understand.
                I now feel confident building Python applications."
            </p>

            <div class="stars">★★★★★</div>

        </div>

        <!-- Arjun -->

        <div class="testimonial-card">

            <div class="profile">
                <div class="profile-picture">
                    <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="Arjun Mehta">
                </div>
                <div>
                    <h3>Arjun Mehta</h3>
                    <small>Data Analytics Student</small>
                </div>
            </div>

            <p>
                "The trainers explain every concept clearly and the live projects
                helped me prepare for real interviews."
            </p>

            <div class="stars">★★★★★</div>

        </div>

        <!-- Simran -->

        <div class="testimonial-card">

            <div class="profile">
                <div class="profile-picture">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Simran Kaur">
                </div>
                <div>
                    <h3>Simran Kaur</h3>
                    <small>Web Designing Student</small>
                </div>
            </div>

            <p>
                "I improved my design skills through hands-on practice and received
                helpful feedback throughout the course."
            </p>

            <div class="stars">★★★★★</div>

        </div>

        </div>

</section>



<!-- ================= INTERNSHIP ================= -->

<section class="internship" id="internship">

    <div class="internship-content">

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

    </div>

    <form class="internship-form" id="internshipForm">
        <h3>Apply for Internship</h3>
        <p>Share your details and our team will contact you.</p>

        <label for="internshipName">Full Name</label>
        <input id="internshipName" name="name" type="text" placeholder="Enter your name" required>

        <label for="internshipEmail">Email Address</label>
        <input id="internshipEmail" name="email" type="email" placeholder="Enter your email" required>

        <label for="internshipPhone">Phone Number</label>
        <input id="internshipPhone" name="phone" type="tel" placeholder="Enter your phone number" required>

        <label for="internshipCourse">Preferred Program</label>
        <select id="internshipCourse" name="course" required>
            <option value="">Select a program</option>
            <option>Full Stack Development</option>
            <option>Python Full Stack</option>
            <option>Data Science &amp; AI</option>
            <option>Web Designing</option>
            <option>Cyber Security</option>
            <option>Mobile App Development</option>
        </select>

        <button type="submit" class="internship-submit">Submit Application <span aria-hidden="true">→</span></button>
    </form>

</section>



<!-- ================= FOOTER ================= -->

<footer id="contact">

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


        <div class="footer-contact">
            <h3>Get in touch</h3>
            <a class="contact-link" href="tel:+918287584509">☎ +91 8287584509</a>
            <a class="contact-link" href="mailto:ncaitsolution@gmail.com">✉ ncaitsolution@gmail.com</a>
            <a class="contact-link" href="https://wa.me/918287584509?text=Hello%20NCA%20IT%20Solution%2C%20I%20would%20like%20a%20free%20consultation." target="_blank" rel="noopener">◉ WhatsApp Chat</a>
            <a class="contact-link" href="https://www.google.com/maps/search/?api=1&query=Iconic%20Corinthian%20Tower%2C%20Floor%207%2C%20Office%20No.%20705%2C%20Electronic%20City%20Metro%20Station%2C%20Noida" target="_blank" rel="noopener">📍 Office No. 705, Electronic City Metro Station, Noida</a>
        </div>

        <a href="https://wa.me/918287584509?text=Hello%20NCA%20IT%20Solution%2C%20I%20would%20like%20a%20free%20consultation%20about%20your%20courses%20or%20services." class="consult-btn" target="_blank" rel="noopener">
            Get Free Consultation →
        </a>

        <div class="social" aria-label="Social media links">

            <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8h3V4h-3c-3.31 0-5 1.69-5 5v3H6v4h3v8h4v-8h3l1-4h-4V9c0-.67.33-1 1-1z"></path></svg>
            </a>
            <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Instagram">
                <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"></rect><circle cx="12" cy="12" r="4"></circle><circle cx="17.5" cy="6.5" r="1"></circle></svg>
            </a>
            <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9v12M6 5.5v.01M10 21V9m0 4a4 4 0 0 1 8 0v8M10 13V9"></path></svg>
            </a>
            <a href="https://www.youtube.com/" target="_blank" rel="noopener" aria-label="YouTube">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 12s0-4-1-5-4-1-9-1-8 0-9 1-1 5-1 5 0 4 1 5 4 1 9 1 8 0 9-1 1-5 1-5z"></path><path d="m10 9 5 3-5 3z"></path></svg>
            </a>

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
    const navbar = document.querySelector(".navbar");

    const updateNavbarState = () => {
        navbar.classList.toggle("scrolled", window.scrollY > 24);
    };

    window.addEventListener("scroll", updateNavbarState, { passive: true });
    updateNavbarState();

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

    const testimonialTrack = document.querySelector(".testimonial-track");

    if (testimonialTrack) {
        [...testimonialTrack.children].forEach(card => {
            const duplicate = card.cloneNode(true);
            duplicate.setAttribute("aria-hidden", "true");
            testimonialTrack.appendChild(duplicate);
        });
    }

    const internshipForm = document.getElementById("internshipForm");

    if (internshipForm) {
        internshipForm.addEventListener("submit", event => {
            event.preventDefault();

            const formData = new FormData(internshipForm);
            const message = [
                "Hello NCA IT Solution, I would like to apply for an internship.",
                `Name: ${formData.get("name")}`,
                `Email: ${formData.get("email")}`,
                `Phone: ${formData.get("phone")}`,
                `Preferred Program: ${formData.get("course")}`
            ].join("\n");

            window.open(`https://wa.me/918287584509?text=${encodeURIComponent(message)}`, "_blank", "noopener");
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