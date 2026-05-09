// ฟังก์ชันสำหรับเลื่อนดูผลงานนักศึกษา ซ้าย-ขวา
window.scrollPortfolio = function(direction) {
        const track = document.getElementById('portfolioTrack');
        
        // หาความกว้างของการ์ด 1 ใบ เพื่อนำไปคำนวณระยะการเลื่อน
        const cardWidth = track.querySelector('.portfolio-card').offsetWidth;
        const scrollAmount = cardWidth + 30; // ระยะการเลื่อน = ความกว้างการ์ด + ช่องไฟ (gap 30px)
        
        // คำนวณระยะเลื่อนขวาสุดที่เป็นไปได้ (ความกว้างรวมทั้งหมด - ความกว้างที่มองเห็นในจอ)
        const maxScrollLeft = track.scrollWidth - track.clientWidth;

        if (direction === 1) {
            // ทิศทาง 1 (เลื่อนขวา): ถ้าเลื่อนจนสุดขอบแล้ว ให้เด้งกลับไปภาพแรก (ตำแหน่ง 0)
            if (track.scrollLeft >= maxScrollLeft - 5) {
                track.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        } else if (direction === -1) {
            // ทิศทาง -1 (เลื่อนซ้าย): ถ้ากำลังอยู่ภาพแรกสุด ให้เด้งไปที่ภาพสุดท้าย (ตำแหน่ง maxScrollLeft)
            if (track.scrollLeft <= 5) {
                track.scrollTo({ left: maxScrollLeft, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            }
        }
    };