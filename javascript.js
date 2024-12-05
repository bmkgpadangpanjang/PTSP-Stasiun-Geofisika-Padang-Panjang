/* Replace with your JS Code 
(Leave empty if not needed) */
            
const sidebar = document.querySelector('.sidebar');
const toggleButton = document.getElementById('toggleSidebar');

toggleButton.addEventListener('click', function() {
    if (sidebar.style.left === '0px') {
        sidebar.style.left = '-100%'; // Sembunyikan sidebar
    } else {
        sidebar.style.left = '0'; // Tampilkan sidebar
    }
});