// รันสคริปต์นี้เมื่อหน้าเว็บโหลดเสร็จสมบูรณ์
document.addEventListener('DOMContentLoaded', function() {
    const backToTopBtn = document.getElementById('backToTopBtn');

    // ทำงานเฉพาะเมื่อมีปุ่มนี้อยู่ในหน้า
    if (backToTopBtn) {
        // ตรวจจับพฤติกรรมการเลื่อนหน้าจอ (Scroll Event)
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) { // ถ้าเลื่อนจอลงมาเกิน 300px ให้เพิ่มคลาส 'show' เพื่อเฟดปุ่มขึ้นมา
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });

        // เมื่อผู้ใช้คลิกปุ่ม ให้เลื่อนหน้าจอกลับขึ้นไปบนสุด (พิกัด Top: 0) แบบนุ่มนวล
        backToTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});