<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LN-SIM | UBRU Industrial Technology</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./media/logo-Rajabhat.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Theme JS (Prevent Flash) -->
    <script>
        (function () {
            const savedTheme = localStorage.getItem('theme');
            const systemTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            document.documentElement.setAttribute('data-bs-theme', savedTheme || systemTheme);
        })();
    </script>
</head>

<body>

    <!-- Sticky Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top custom-navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="./media/CNE.png" alt="CNE Logo" height="40" class="me-2">
                <span class="fw-bold">CNE</span>
            </a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#student">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#advisors">Advisors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-primary-color fw-bold" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ps-lg-3">
                        <button class="btn btn-link nav-link px-2" id="theme-toggle" title="Toggle theme">
                            <i class="bi bi-sun-fill" id="theme-icon"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-center">
        <div class="container fade-in">
            <div class="mb-4">
                <img src="./media/logo-Rajabhat.png" alt="UBRU Logo" style="height: 80px;">
                <img src="./media/CNE.png" alt="CNE Logo" style="height: 80px;">
            </div>
            <h1 class="project-title-en">SIMULATION A LIGHTNING NETWORK ENVIRONMENT TO STUDY PAYMENT ROUTING AND FRAUD
                PREVENTION MECHANISMS</h1>
            <h2 class="project-title-th">
                การจำลองสภาพแวดล้อมไลท์นิงเน็ตเวิร์คเพื่อศึกษาเส้นทางการชำระเงินและการป้องกันการทุจริต</h2>
            <p class="lead text-muted mb-4">Computer Network Engineering Program, Faculty of Industrial Technology,
                Ubon Ratchathani Rajabhat University</p>

            <div class="d-flex justify-content-center gap-3">
                <a href="https://github.com/Gmajorseven/docker-lnd-thunderhub-setup" class="btn btn-primary-custom">
                    <i class="bi bi-github me-2"></i> GitHub Repository
                </a>
                <a href="#" class="btn btn-outline-danger-custom">
                    <i class="bi bi-file-earmark-pdf me-2"></i> Download Manual
                </a>
            </div>
        </div>
    </header>

    <!-- Student Section -->
    <section id="student" class="py-5">
        <div class="container text-center">
            <h3 class="section-title fade-in">Project Student</h3>
            <div class="row justify-content-center mt-4">
                <div class="col-md-4 fade-in">
                    <div class="card card-profile p-4">
                        <span class="student-label">Student</span>
                        <img src="./media/teddypic.jpeg" alt="Student Profile" class="profile-img">
                        <h4 class="h5 mb-1">นายเทิดศักดิ์ บุญศักดิ์</h4>
                        <p class="text-muted small">Student ID: 66328220103</p>
                        <p class="text-muted small">Computer Network Engineering Student</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Teachers Section -->
    <section id="advisors" class="py-5 bg-light">
        <div class="container text-center">
            <h3 class="section-title fade-in">Project Advisors</h3>
            <div class="row teacher-grid justify-content-center">
                <!-- Teacher 1 -->
                <div class="col-md-4 mb-4 fade-in" style="animation-delay: 0.2s;">
                    <div class="card card-profile p-4">
                        <span class="teacher-label">Primary Advisor</span>
                        <img src="./media/primary-advisor.jpeg" alt="Teacher 1" class="profile-img">
                        <h4 class="h5 mb-1">ผู้ช่วยศาสตราจารย์ บริบูรณ์ ดีกา</h4>
                        <p class="text-muted small">Faculty of Industrial Technology</p>
                    </div>
                </div>
                <!-- Teacher 2 -->
                <div class="col-md-4 mb-4 fade-in" style="animation-delay: 0.4s;">
                    <div class="card card-profile p-4">
                        <span class="teacher-label">Co-Advisor</span>
                        <img src="./media/co-advisor.jpeg" alt="Teacher 2" class="profile-img">
                        <h4 class="h5 mb-1">ผู้ช่วยศาสตราจารย์ สุรเจตน์ อ่อนฤทธิ์</h4>
                        <p class="text-muted small">Faculty of Industrial Technology</p>
                    </div>
                </div>
                <!-- Teacher 3 -->
                <div class="col-md-4 mb-4 fade-in" style="animation-delay: 0.6s;">
                    <div class="card card-profile p-4">
                        <span class="teacher-label">Coordinate Advisor</span>
                        <img src="./media/coordinate-advisor.jpeg" alt="Teacher 3" class="profile-img">
                        <h4 class="h5 mb-1">ผู้ช่วยศาสตราจารย์ อรอุมา เนียมหอม</h4>
                        <p class="text-muted small">Faculty of Industrial Technology</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container text-center">
            <h3 class="section-title fade-in">Contact Us</h3>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 fade-in">
                    <div class="card card-profile p-5">
                        <h5 class="mb-4">Get in Touch</h5>
                        <div class="row g-4 text-start">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="contact-icon me-3">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 small text-muted">Location</p>
                                        <p class="mb-0">Faculty of Industrial Technology, UBRU</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="contact-icon me-3">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 small text-muted">Email</p>
                                        <p class="mb-0">office.i@ubru.ac.th</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="contact-icon me-3">
                                        <i class="bi bi-telephone"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 small text-muted">Phone</p>
                                        <p class="mb-0">+66 45 352 000</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="contact-icon me-3">
                                        <i class="bi bi-clock"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 small text-muted">Hours</p>
                                        <p class="mb-0">Mon - Fri: 8:30 - 16:30</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p class="mb-0 text-muted">&copy; 2026 Faculty of Industrial Technology, Ubon Ratchathani Rajabhat
                University</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Theme Switcher Logic -->
    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');
        const htmlElement = document.documentElement;

        function updateIcon(theme) {
            if (theme === 'dark') {
                themeIcon.classList.replace('bi-sun-fill', 'bi-moon-stars-fill');
            } else {
                themeIcon.classList.replace('bi-moon-stars-fill', 'bi-sun-fill');
            }
        }

        // Initialize icon
        updateIcon(htmlElement.getAttribute('data-bs-theme'));

        themeToggle.addEventListener('click', () => {
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

            htmlElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateIcon(newTheme);
        });

        // Sync with system changes if no manual preference is set
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (!localStorage.getItem('theme')) {
                const newTheme = e.matches ? 'dark' : 'light';
                htmlElement.setAttribute('data-bs-theme', newTheme);
                updateIcon(newTheme);
            }
        });
    </script>
</body>

</html>