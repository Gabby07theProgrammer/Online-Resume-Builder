<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
    <link rel="stylesheet" href="WebsiteStyle.css">
    <script defer src="Home_Page.js"></script>
</head>

<body>
    <!-- Header Section -->
    <header>
        <nav>
            <h2 class="brand">Resume <span style="color: #007bff;">BUILD</span></h2>
            <button id="loginButton" class="button">Log-In or Register</button>
        </nav>
     </header>

     <video autoplay loop muted>
        <source src="Website Videos/bgvid.mp4" type="video/mp4" />
    </video>

    <!-- Main Content -->
    <div class="main_content">
        <h1 class="Quote1">Create a Professional Resume in Minutes!</h1>
        <p class="subline">Quickly craft a polished, job-winning resume with pre-made <br> templates. 
            Save time while ensuring your resume stands out with <br> a professional, tailored design.</p>
    </div>

    <section class="feature-section">
        <h3>Why Choose Us?</h3>
        <p>Our platform provides you with the most efficient and user-friendly experience, helping you manage your tasks. Discover how we can make your life easier.</p>
        <h2>Our Key Features</h2>
        <!-- Feature List (Example with 3 items) -->
        <div class="feature-list">
            <div class="feature-item feature-item-1">
                <h4>Easy-to-Use Resume Builder</h4>
                <p>Create professional resumes quickly with our intuitive drag-and-drop interface. Choose from customizable templates and effortlessly add your experience, skills, and achievements.</p>
            </div>
            <div class="feature-item feature-item-2">
                <h4>Professional Templates</h4>
                <p>Choose from a wide variety of modern, professional templates to make your resume visually appealing and stand out to potential employers. All templates are fully customizable to reflect your unique skills and experience.</p>
            </div>
            <div class="feature-item feature-item-3">
                <h4>Instant Download</h4>
                <p>Once your resume is ready, download it instantly in PDF or Word format, optimized for any job application platform. No more worrying about formatting when submitting your resume.</p>
            </div>
        </div>
    </section>
    <!-- Modal for Login / Registration -->
    <!-- Modal for Login / Registration -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Login / Registration</h2>
        <div class="tab-buttons">
            <button id="loginTab" class="tab active">Log In</button>
            <button id="registerTab" class="tab">Register</button>
        </div>

        <!-- Login Form -->
        <div id="loginForm" class="form active">
            <form action="register.php" method="POST">
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="btn submit" name="signIn">Log In</button>
                <a href="javascript:void(0);" class="btn-change-password" 
                onclick="showPasswordChange()">Change Password</a>
            </form>
        </div>

         <!-- Change Password Form -->
        <div id="passwordChangeForm" class="form">
            <form action="update_password.php" method="POST" onsubmit="return validatePasswordChange(event)">
                <input type="password" name="currentPassword" placeholder="Current Password" required>
                <input type="password" name="newPassword" placeholder="New Password" required>
                <input type="password" name="confirmPassword" placeholder="Confirm New Password" required>
                <button type="submit" class="btn submit">Update Password</button>
                <a href="javascript:void(0);" class="btn-back" onclick="showLogin()">Back to Login</a>
            </form>
        </div>

        <!-- Register Form -->
        <div id="registerForm" class="form">
            <form action="register.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <label>
                    <input type="checkbox" required> I agree to the Terms and Conditions
                </label>
                <button type="submit" class="btn submit" name="signUp">Register</button>
            </form>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
            <p>&copy; 2024 Resume BUILD. All rights reserved.</p>
        </div>
    </div>
</div>
    <!-- Footer Section -->
    <footer class="footer">
        <h3>Resume BUILD</h3>
        <p>"Craft Your Perfect Resume – Fast, Easy, and Professional!"</p>
        <p>&copy; 2024 Resume BUILD. All rights reserved.</p>
    </footer>
</body>
</html>
