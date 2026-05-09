<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Com-Sci PBRU สาขาวิทยาการคอมพิวเตอร์</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/darkMode.css">
    <link rel="shortcut icon" href="images/itlogo.ico" type="image/x-icon">
</head>
<body>

<!-- =========================================
     เรียกใช้ Header (Top Bar & Navbar)
     ========================================= -->
<?php include 'php/header.php'; ?>

<!-- =========================================
     ส่วน Hero Section (สไลด์ภาพโปรโมทหลัก)
     ========================================= -->
    <header class="hero">
        <div class="hero-slides">
            <div class="slide active" style="background-image: url('images/mainBackground.png');">
                <div class="container hero-container">
                    <div class="hero-content">
                        <h1>สาขาวิทยาการคอมพิวเตอร์</h1>
                        <h2>Computer Science</h2>
                        <p>สร้างนักพัฒนายุกต์ใหม่ พร้อมสู่สายงานเทคโนโลยี ด้วยองค์ความรู้ที่ทันสมัย และประสบการณ์จริง</p>
                        <div class="hero-buttons">
                            <a href="#" class="btn-apply"><i class="fa-solid fa-graduation-cap"></i> สมัครเรียน</a>
                            <a href="#" class="btn-apply btn-outline"><i class="fa-solid fa-file-lines"></i> ดูหลักสูตร</a>
                        </div>
                    </div>
                    <div class="hero-image">
                        <img src="images/itlogo.png" alt="นักศึกษาวิทยาการคอมพิวเตอร์">
                    </div>
                </div>
            </div>
            
            <div class="slide" style="background-image: url('images/mainBackground.png');">
                <div class="container hero-container">
                    <div class="hero-content">
                        <!-- <h1>เรียนรู้และปฏิบัติจริง</h1>
                        <h2>Hands-on Experience</h2>
                        <p>มุ่งเน้นการลงมือปฏิบัติจริงในห้องปฏิบัติการที่ทันสมัย เพื่อเตรียมความพร้อมสู่การทำงานในอุตสาหกรรม IT</p> -->
                        <!-- <div class="hero-buttons">
                            <a href="#" class="btn-apply btn-outline"><i class="fa-solid fa-file-lines"></i> ดูผลงานนักศึกษา</a>
                        </div> -->
                    </div>
                    <div class="hero-image">
                        <img src="images/itlogoRemovebg.png" alt="นักศึกษาวิทยาการคอมพิวเตอร์">
                    </div>
                </div>
            </div>
        </div>

        <!-- ปุ่มเลื่อนซ้าย-ขวา -->
        <button class="slider-btn prev" onclick="moveSlide(-1)"><i class="fa-solid fa-chevron-left"></i></button>
        <button class="slider-btn next" onclick="moveSlide(1)"><i class="fa-solid fa-chevron-right"></i></button>
        
        <!-- จุดนำทาง (Dots) -->
        <div class="slider-dots">
            <span class="dot active" onclick="goToSlide(0)"></span>
            <span class="dot" onclick="goToSlide(1)"></span>
        </div>
    </header>

<!-- =========================================
     ส่วน Features (จุดเด่นของสาขา)
     ========================================= -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">จุดเด่นของสาขา</h2>
            
            <div class="features-grid">
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h3>Programming</h3>
                    <p>เรียนรู้การเขียนโปรแกรมพื้นฐานถึงขั้นสูง ด้วยภาษาที่หลากหลายและทันสมัย</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <h3>AI & Data Science</h3>
                    <p>เจาะลึกด้านปัญญาประดิษฐ์ และวิทยาการข้อมูล เพื่อสร้างนวัตกรรมแห่งอนาคต</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <h3>Web & Mobile</h3>
                    <p>พัฒนาเว็บไซต์และแอปพลิเคชัน ที่ตอบโจทย์ผู้ใช้ได้จริงทั้งบนเว็บและมือถือ</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3>Cybersecurity</h3>
                    <p>เรียนรู้การปกป้องระบบและข้อมูล จากภัยคุกคามทางไซเบอร์อย่างมืออาชีพ</p>
                </div>

            </div>
        </div>
    </section>

<!-- =========================================
     ส่วน Portfolio (ผลงานของนักศึกษา เลื่อนซ้าย-ขวาได้)
     ========================================= -->
    <section class="portfolio-section">
        <div class="container">
            <h2 class="section-title">ผลงานของนักศึกษา</h2>
            
            <div class="portfolio-slider-wrapper">
                <button class="portfolio-btn prev" onclick="scrollPortfolio(-1)"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="portfolio-btn next" onclick="scrollPortfolio(1)"><i class="fa-solid fa-chevron-right"></i></button>
                
                <div class="portfolio-grid" id="portfolioTrack">
                <a href="#" class="portfolio-card">
                    <div class="portfolio-icon">
                        <i class="fa-solid fa-mobile-screen"></i>
                    </div>
                    <h3>แอปพลิเคชัน PBRU Guide</h3>
                    <p>แอปพลิเคชันแนะนำสถานที่และนำทางภายในมหาวิทยาลัยสำหรับนักศึกษาใหม่</p>
                    <span class="view-more">ดูรายละเอียด <i class="fa-solid fa-arrow-right"></i></span>
                </a>

                <a href="#" class="portfolio-card">
                    <div class="portfolio-icon">
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <h3>ระบบ AI ตรวจจับใบหน้า</h3>
                    <p>ระบบเช็คชื่อเข้าเรียนอัตโนมัติด้วยเทคโนโลยี AI จดจำใบหน้า</p>
                    <span class="view-more">ดูรายละเอียด <i class="fa-solid fa-arrow-right"></i></span>
                </a>

                <a href="#" class="portfolio-card">
                    <div class="portfolio-icon">
                        <i class="fa-solid fa-gamepad"></i>
                    </div>
                    <h3>เกม 2D RPG Adventure</h3>
                    <p>เกมผจญภัย 2 มิติ พัฒนาด้วย Unity เสนอเรื่องราวเชิงอนุรักษ์ธรรมชาติ</p>
                    <span class="view-more">ดูรายละเอียด <i class="fa-solid fa-arrow-right"></i></span>
                </a>

                <a href="#" class="portfolio-card">
                    <div class="portfolio-icon">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <h3>Data Dashboard</h3>
                    <p>ระบบวิเคราะห์ข้อมูลและแสดงผลเชิงสถิติสำหรับธุรกิจ SME</p>
                    <span class="view-more">ดูรายละเอียด <i class="fa-solid fa-arrow-right"></i></span>
                </a>

                    <!-- เพิ่มข้อมูลจำลองเพื่อทดสอบการเลื่อน Slider -->
                    <a href="#" class="portfolio-card">
                        <div class="portfolio-icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <h3>E-Commerce Platform</h3>
                        <p>ระบบร้านค้าออนไลน์พร้อมตะกร้าสินค้าและระบบชำระเงินที่ปลอดภัย</p>
                        <span class="view-more">ดูรายละเอียด <i class="fa-solid fa-arrow-right"></i></span>
                    </a>

                    <a href="#" class="portfolio-card">
                        <div class="portfolio-icon">
                            <i class="fa-solid fa-shield-cat"></i>
                        </div>
                        <h3>Security Scanner</h3>
                        <p>โปรแกรมสแกนหาช่องโหว่ของเว็บไซต์และระบบเครือข่ายเบื้องต้น</p>
                        <span class="view-more">ดูรายละเอียด <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

<!-- =========================================
     ส่วนอาจารย์ประจำสาขา และ ข่าวสาร (2 คอลัมน์)
     ========================================= -->
    <section class="faculty-news section-padding">
        <div class="container split-layout">
            <div class="faculty-section">
                <div class="section-header">
                    <h2 class="section-title-left">อาจารย์ประจำสาขา</h2>
                    <a href="#" class="view-all">ดูทั้งหมด &gt;</a>
                </div>
                <div class="faculty-grid">
                    <div class="faculty-card">
                        <div class="profile-pic placeholder-img"></div>
                        <h5>ผศ.ดร.นิพนธ์ พวงพิกุล</h5>
                        <p class="role">หัวหน้าสาขา</p>
                        <ul class="expertise">
                            <li>Artificial Intelligence</li>
                            <li>Machine Learning</li>
                        </ul>
                    </div>
                    <div class="faculty-card">
                        <div class="profile-pic placeholder-img"></div>
                        <h5>อ.ณัชพล มาละมณี</h5>
                        <p class="role">อาจารย์ประจำสาขา</p>
                        <ul class="expertise">
                            <li>Software Engineering</li>
                            <li>Web Development</li>
                        </ul>
                    </div>
                    <div class="faculty-card">
                        <div class="profile-pic placeholder-img"></div>
                        <h5>อ.พิมพา อินทร์จันทร์</h5>
                        <p class="role">อาจารย์ประจำสาขา</p>
                        <ul class="expertise">
                            <li>Database Systems</li>
                            <li>Data Science</li>
                        </ul>
                    </div>
                    <div class="faculty-card">
                        <div class="profile-pic placeholder-img"></div>
                        <h5>อ.กฤติพงศ์ พลเยี่ยม</h5>
                        <p class="role">อาจารย์ประจำสาขา</p>
                        <ul class="expertise">
                            <li>Cybersecurity</li>
                            <li>Network Systems</li>
                        </ul>
                    </div>
                    <!-- ข้อมูลจำลองเพิ่มเติมเพื่อให้ล้นและเกิด Scroll -->
                    <div class="faculty-card">
                        <div class="profile-pic placeholder-img"></div>
                        <h5>อ.สมหญิง สุขใจ</h5>
                        <p class="role">อาจารย์ประจำสาขา</p>
                        <ul class="expertise">
                            <li>Information Systems</li>
                            <li>Cloud Computing</li>
                        </ul>
                    </div>
                    <div class="faculty-card">
                        <div class="profile-pic placeholder-img"></div>
                        <h5>อ.สมชาย ใจดี</h5>
                        <p class="role">อาจารย์พิเศษ</p>
                        <ul class="expertise">
                            <li>UX/UI Design</li>
                            <li>Human-Computer Interaction</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="news-section">
                <div class="section-header">
                    <h2 class="section-title-left">ข่าวและกิจกรรมสาขา</h2>
                    <a href="#" class="view-all">ดูทั้งหมด &gt;</a>
                </div>
                <div class="news-list">
                    <div class="news-item">
                        <div class="news-img placeholder-img"></div>
                        <div class="news-content">
                            <h4>โครงการอบรมเชิงปฏิบัติการ "พัฒนาเว็บด้วย React.js"</h4>
                            <p class="date"><i class="fa-regular fa-calendar"></i> 12 พ.ค. 2567</p>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="news-img placeholder-img"></div>
                        <div class="news-content">
                            <h4>นักศึกษาสาขาวิทยาการคอมพิวเตอร์คว้ารางวัลจากการประกวดผลงาน</h4>
                            <p class="date"><i class="fa-regular fa-calendar"></i> 28 เม.ย. 2567</p>
                        </div>
                    </div>
                    <!-- ข้อมูลข่าวจำลองเพิ่มเติมเพื่อให้ล้นและเกิด Scroll -->
                    <div class="news-item">
                        <div class="news-img placeholder-img"></div>
                        <div class="news-content">
                            <h4>เปิดรับสมัครนักศึกษาใหม่ โควตาเรียนดี รอบที่ 1</h4>
                            <p class="date"><i class="fa-regular fa-calendar"></i> 10 มี.ค. 2567</p>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="news-img placeholder-img"></div>
                        <div class="news-content">
                            <h4>งานปัจฉิมนิเทศนักศึกษาชั้นปีที่ 4 "ก้าวสู่โลกแห่งเทคโนโลยี"</h4>
                            <p class="date"><i class="fa-regular fa-calendar"></i> 5 มี.ค. 2567</p>
                        </div>
                    </div>
                    <div class="news-item">
                        <div class="news-img placeholder-img"></div>
                        <div class="news-content">
                            <h4>กิจกรรมจิตอาสา "คอมพิวเตอร์เพื่อน้อง" โรงเรียนวัดบางจาน</h4>
                            <p class="date"><i class="fa-regular fa-calendar"></i> 15 ก.พ. 2567</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- =========================================
     ส่วน Call to Action (แถบเชิญชวนสมัครเรียน)
     ========================================= -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-banner">
                <div class="cta-inner">
                    <div class="cta-text">
                        <h2>เริ่มต้นเส้นทาง Programmer ของคุณวันนี้</h2>
                        <p>สมัครเรียนสาขาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏเพชรบุรี</p>
                    </div>
                    <a href="#" class="btn btn-light"><i class="fa-solid fa-graduation-cap"></i> สมัครเรียนออนไลน์</a>
                </div>
            </div>
        </div>
    </section>

<!-- =========================================
     เรียกใช้ Component และ Script ต่างๆ
     ========================================= -->
    <?php include 'php/backToTop.php'; ?>
    <?php include 'php/darkModeToggle.php'; ?>
    <?php include 'php/footer.php'; ?>
    
    <!-- ไฟล์ JavaScript ควบคุมการทำงานของเว็บ -->
    <script src="js/mainSlider.js"></script>
    <script src="js/portfolioSlider.js"></script>
    <script src="js/navbarMenu.js"></script>
    <script src="js/backToTop.js"></script>
    <script src="js/darkMode.js"></script>
</body>
</html>