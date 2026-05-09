<style>
/* =========================================
   CSS ส่วนปุ่มกลับขึ้นด้านบน (Standalone Component)
   ========================================= */
.back-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    background-color: var(--primary-blue, #0056b3); /* ใช้สี Fallback เผื่อนำไปใช้หน้าอื่นที่ไม่มี main.css */
    color: var(--white, #ffffff);
    width: 45px; /* ปรับขนาดให้เป็นสี่เหลี่ยมจัตุรัสเพื่อทำวงกลม */
    height: 45px;
    border-radius: 50%; /* ทำปุ่มให้เป็นวงกลมสมมาตร */
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    z-index: 999;
    opacity: 0; 
    visibility: hidden;
    transition: all 0.3s ease;
    transform: translateY(20px); 
}
.back-to-top.show { opacity: 1; visibility: visible; transform: translateY(0); }
.back-to-top:hover { background-color: #004494; color: var(--white, #ffffff); transform: translateY(-5px); }

@media (max-width: 768px) {
    .back-to-top { bottom: 20px; right: 20px; width: 40px; height: 40px; font-size: 1rem; }
}
</style>

<a href="#" class="back-to-top" id="backToTopBtn" title="กลับขึ้นด้านบน">
    <i class="fa-solid fa-chevron-up"></i>
</a>