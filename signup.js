
document.addEventListener('DOMContentLoaded', function() {
    var page1Form = document.getElementById('page1-form');
    var page2Form = document.getElementById('page2-form');
    var page1 = document.getElementById('page1');
    var page2 = document.getElementById('page2');
    var backBtn = document.getElementById('back-btn');

    page1Form.addEventListener('submit', function(e) {
      e.preventDefault();
      var passwordInput = document.getElementById('password');
      var confirmPasswordInput = document.getElementById('confirm_password');

        if (passwordInput.value !== confirmPasswordInput.value) {
            alert("Le mot de passe et la confirmation du mot de passe ne correspondent pas.");
            return;
        }
      page1.style.display = 'none';
      page2.style.display = 'flex';
    });

    backBtn.addEventListener('click', function(e) {
      e.preventDefault();
      page2.style.display = 'none';
      page1.style.display = 'flex';
    });

  });