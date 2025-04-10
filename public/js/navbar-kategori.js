
function toggleKategori() {
  const dropdown = document.getElementById('dropdownKategori');
  dropdown.classList.toggle('hidden');
}

// Tutup dropdown saat klik di luar
window.addEventListener('click', function(e) {
  const button = document.querySelector('button[onclick="toggleKategori()"]');
  const dropdown = document.getElementById('dropdownKategori');
  if (!button.contains(e.target) && !dropdown.contains(e.target)) {
    dropdown.classList.add('hidden');
  }
});