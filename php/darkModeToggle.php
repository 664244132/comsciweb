<style>
/* =========================================
   CSS ส่วนปุ่มสลับธีม Dark Mode (Standalone)
   ========================================= */
.dark-mode-toggle {
    position: fixed;
    bottom: 90px; /* ให้อยู่เหนือปุ่ม Back to Top (ซึ่งอยู่ 30px + 45px) */
    right: 30px;
    background-color: var(--white, #ffffff);
    color: var(--text-dark, #333333);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    z-index: 999;
    border: 1px solid var(--border-color, #e0e0e0);
    transition: all 0.3s ease;
}
.dark-mode-toggle:hover { transform: scale(1.1); }
@media (max-width: 768px) {
    .dark-mode-toggle { bottom: 70px; right: 20px; width: 40px; height: 40px; font-size: 1rem; }
}
</style>

<button class="dark-mode-toggle" id="darkModeToggleBtn" title="สลับโหมดมืด/สว่าง">
    <i class="fa-solid fa-moon" id="darkModeIcon"></i>
</button>