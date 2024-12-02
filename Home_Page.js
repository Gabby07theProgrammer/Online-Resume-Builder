function three(){
    location.replace("Template.php")
}

function four(){
    location.replace("info.php")
}

function five(){
    location.replace("LandingPage.php")
}


// Modal functionality
const loginButton = document.getElementById('loginButton');
const loginModal = document.getElementById('loginModal');
const closeModal = document.querySelector('.close');
const loginTab = document.getElementById('loginTab');
const registerTab = document.getElementById('registerTab');
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');

// Open Modal
loginButton.addEventListener('click', () => {
    loginModal.style.display = 'flex';
});

// Close Modal
closeModal.addEventListener('click', () => {
    loginModal.style.display = 'none';
});

// Tab Switching
loginTab.addEventListener('click', () => {
    loginForm.classList.add('active');
    registerForm.classList.remove('active');
    loginTab.classList.add('active');
    registerTab.classList.remove('active');
});

registerTab.addEventListener('click', () => {
    registerForm.classList.add('active');
    loginForm.classList.remove('active');
    registerTab.classList.add('active');
    loginTab.classList.remove('active');
});

// Close modal when clicking outside
window.addEventListener('click', (event) => {
    if (event.target === loginModal) {
        loginModal.style.display = 'none';
    }
});

function showPasswordChange() {
    document.getElementById('loginForm').classList.remove('active');
    document.getElementById('registerForm').classList.remove('active');
    document.getElementById('passwordChangeForm').classList.add('active');
}

function showLogin() {
    document.getElementById('passwordChangeForm').classList.remove('active');
    document.getElementById('loginForm').classList.add('active');
}

function validatePasswordChange(event) {
    event.preventDefault();
    
    const form = event.target;
    const newPassword = form.newPassword.value;
    const confirmPassword = form.confirmPassword.value;

    if (newPassword !== confirmPassword) {
        alert('New passwords do not match!');
        return false;
    }

    // Send to backend using fetch
    fetch('update_password.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams(new FormData(form))
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Password updated successfully!');
            showLogin(); // Return to login form
            form.reset(); // Clear the form
        } else {
            alert(data.message || 'Error updating password');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while updating the password');
    });

    return false;
}

// Add this to your existing modal close functionality
function closeModal() {
    const modal = document.getElementById('loginModal');
    modal.style.display = 'none';
    // Reset all forms
    document.getElementById('loginForm').reset();
    document.getElementById('registerForm').reset();
    document.getElementById('passwordChangeForm').reset();
    // Show login form
    showLogin();
}
