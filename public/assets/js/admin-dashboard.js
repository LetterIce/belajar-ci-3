document.addEventListener('DOMContentLoaded', function() {
    // Fungsi untuk menganimasikan lingkaran progres saat memuat dan ketika di-refresh
    function animateCircleProgress() {
        document.querySelectorAll('.circle-progress').forEach(function(el) {
            const value = el.getAttribute('data-value');
            const valueEl = el.querySelector('.circle-progress-value');
            
            // Reset animasi
            valueEl.style.background = '#f5f5f5';
            
            // Menentukan jenis indikator kesehatan
            let color = '#4e73df'; // Warna default (biru)
            if (el.closest('.health-icon').classList.contains('database')) {
                color = '#4e73df'; // Warna database - biru
            } else if (el.closest('.health-icon').classList.contains('storage')) {
                color = '#1cc88a'; // Warna penyimpanan - hijau
            } else if (el.closest('.health-icon').classList.contains('memory')) {
                color = '#f6c23e'; // Warna memori - kuning
            } else if (el.closest('.health-icon').classList.contains('error')) {
                color = '#36b9cc'; // Warna error - biru muda
            }
            
            // Atur background dengan animasi
            setTimeout(() => {
                valueEl.style.background = `conic-gradient(${color} 0% ${value}%, #f5f5f5 ${value}% 100%)`;
                el.querySelector('.circle-progress-text').textContent = value + '%';
            }, 100);
        });
    }
    
    // Animasi awal dengan sedikit penundaan untuk memastikan DOM siap
    setTimeout(animateCircleProgress, 300);
    
    // Pengaturan tombol refresh
    if(document.getElementById('refreshSystemHealth')) {
        document.getElementById('refreshSystemHealth').addEventListener('click', function() {
            this.querySelector('i').classList.add('fa-spin');
            setTimeout(() => {
                animateCircleProgress();
                this.querySelector('i').classList.remove('fa-spin');
            }, 800);
        });
    }
});
