// ฟังก์ชันสำหรับเปิด/ปิด เมนูบนหน้าจอมือถือ (Hamburger Menu)
function toggleMenu() {
            const nav = document.getElementById('navLinks');
            nav.classList.toggle('active');
        }

// ==========================================
// จัดการการคลิกเปิด/ปิด Dropdown เมนู
// ==========================================
document.addEventListener('DOMContentLoaded', function() {
    const dropdownToggles = document.querySelectorAll('.dropdown > a');
    
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault(); // ป้องกันเบราว์เซอร์เลื่อนหน้าเว็บกลับไปด้านบนเมื่อคลิกลิงก์ '#'
            
            // หากคลิกเปิดเมนูใหม่ ให้ซ่อน Dropdown อื่นๆ ที่กำลังเปิดอยู่ก่อน
            document.querySelectorAll('.dropdown').forEach(dropdown => {
                if (dropdown !== this.parentElement) {
                    dropdown.classList.remove('active');
                }
            });
            
            // สลับคลาส 'active' ให้กับ <li> ที่ถูกคลิก
            this.parentElement.classList.toggle('active');
        });
    });

    // ปิด Dropdown อัตโนมัติเมื่อผู้ใช้คลิกพื้นที่ว่างอื่นๆ บนหน้าจอ (UX Best Practice)
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown.active').forEach(dropdown => {
                dropdown.classList.remove('active');
            });
        }
    });

    // ==========================================
    // แอนิเมชันย่อขนาด Navbar เมื่อเลื่อนหน้าจอลง (Scroll)
    // ==========================================
    const nav = document.querySelector('nav');
    document.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            nav.classList.add('scrolled'); // เพิ่มเงาและย่อขนาดเมื่อเลื่อนหน้าจอลงเกิน 50px
        } else {
            nav.classList.remove('scrolled'); // คืนค่าขนาดเดิมเมื่อกลับขึ้นบนสุด
        }
    });
});