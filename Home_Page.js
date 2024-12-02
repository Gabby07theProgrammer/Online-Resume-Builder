function three(){
    document.getElementById('loginButton').addEventListener('click', function() {
        window.location.href = 'login.html';
    });
    
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