    // กำหนดตัวแปรสำหรับควบคุมสไลด์หลัก (Hero Slider)
    let currentSlideIndex = 0;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const slidesContainer = document.querySelector('.hero-slides');
    let slideInterval;

    // ตรวจสอบว่าหน้าเว็บนี้มีคลาส .slide อยู่หรือไม่ ป้องกัน Error ในหน้าที่ไม่มีสไลด์
    if (slides.length > 0) {
        // ฟังก์ชันหลักสำหรับเปลี่ยนสไลด์ตาม Index ที่ระบุ
        function showSlide(index) {
            if (index >= slides.length) { currentSlideIndex = 0; }
            else if (index < 0) { currentSlideIndex = slides.length - 1; }
            else { currentSlideIndex = index; }

            // ลบสถานะ active ออกจากจุดนำทางทั้งหมดก่อน
            dots.forEach(dot => dot.classList.remove('active'));
            // เพิ่มสถานะ active ให้กับจุดที่กำลังแสดงอยู่
            if(dots.length > 0) dots[currentSlideIndex].classList.add('active');

            // ใช้ CSS Transform เลื่อนกล่องสไลด์ไปทางซ้ายทีละ 100% ตามหมายเลข Index
            if (slidesContainer) {
                slidesContainer.style.transform = `translateX(-${currentSlideIndex * 100}%)`;
            }
        }

        // ฟังก์ชันเมื่อผู้ใช้กดปุ่มลูกศร ซ้าย-ขวา
        window.moveSlide = function(n) {
            showSlide(currentSlideIndex + n);
            resetInterval(); // เริ่มนับเวลาใหม่กันการสลับเร็วเกินไป
        };

        // ฟังก์ชันเมื่อผู้ใช้กดที่จุดนำทาง (Dots)
        window.goToSlide = function(n) {
            showSlide(n);
            resetInterval();
        };

        // ตั้งเวลาให้สไลด์เลื่อนอัตโนมัติทุกๆ 5 วินาที (5000ms)
        function startInterval() {
            slideInterval = setInterval(() => showSlide(currentSlideIndex + 1), 5000);
        }

        // รีเซ็ตเวลาอัตโนมัติใหม่เมื่อมีการกดปุ่มด้วยมือ
        function resetInterval() {
            clearInterval(slideInterval);
            startInterval();
        }

        // เริ่มทำงานสไลด์อัตโนมัติเมื่อโหลดหน้าเว็บเสร็จ
        startInterval();
    } 