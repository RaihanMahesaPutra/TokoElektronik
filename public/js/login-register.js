function showLogin() {
    document.getElementById('register-modal').classList.add('hidden');
    document.getElementById('login-modal').classList.remove('hidden');
  }

  function showRegister() {
    document.getElementById('login-modal').classList.add('hidden');
    document.getElementById('register-modal').classList.remove('hidden');
  }

  function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
  }

  // Trigger login modal dari navbar
  document.querySelectorAll('a[href="#"]').forEach(el => {
    el.addEventListener('click', function (e) {
      if (this.textContent.includes("Login")) {
        e.preventDefault();
        showLogin();
      } else if (this.textContent.includes("Sign Up")) {
        e.preventDefault();
        showRegister();
      }
    });
  });