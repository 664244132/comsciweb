// ==========================================
// ระบบจัดการ Dark Mode พร้อมบันทึกค่า
// ==========================================
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('darkModeToggleBtn');
    const icon = document.getElementById('darkModeIcon');
    const body = document.body;

    // ตรวจสอบค่า 'theme' ที่เคยบันทึกไว้ใน Local Storage ของเบราว์เซอร์
    const savedTheme = localStorage.getItem('theme');
    
    // ถ้าเคยตั้งเป็น dark ไว้ ให้ใส่คลาส dark-mode ที่ body ทันที
    if (savedTheme === 'dark') {
        body.classList.add('dark-mode');
        if (icon) icon.classList.replace('fa-moon', 'fa-sun'); // เปลี่ยนไอคอนเป็นพระอาทิตย์
    }

    // เมื่อปุ่มสลับธีมถูกคลิก
    if (toggleBtn) {
        toggleBtn.addEventListener('click', function() {
            body.classList.toggle('dark-mode'); // สลับการเปิด/ปิด ธีม
            
            if (body.classList.contains('dark-mode')) {
                icon.classList.replace('fa-moon', 'fa-sun'); // ถ้ามืด ให้โชว์พระอาทิตย์
                localStorage.setItem('theme', 'dark'); // บันทึกว่าเลือกโหมดมืด
            } else {
                icon.classList.replace('fa-sun', 'fa-moon'); // ถ้าสว่าง ให้โชว์พระจันทร์
                localStorage.setItem('theme', 'light'); // บันทึกว่าเลือกโหมดสว่าง
            }
        });
    }
});