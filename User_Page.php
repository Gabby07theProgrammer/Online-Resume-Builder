<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="WebsiteStyle.css">
    <script src="User_Page.js"></script>
    <title>Resume Builder</title>
</head>
<body>
    <header>
        <nav>
            <h2 class="Brand">Resume <span style="color: #007bff;">BUILD</span></h2>
            <a href="logout.php">
            <button type="button" class="logout">Log or Sign-Out</button>
            </a>
        </nav>
    </header>

    <video autoplay loop muted>
        <source src="Website Videos/bgvid.mp4" type="video/mp4" />
    </video>

    <div class="main_content" id="main">
        <h1 class="Quote1">Welcome to the Resume <span style="color:#007bff">BUILD</span>!</h1>
        <p class="subline">Create a standout resume in minutes! Our easy-to-use builder offers<br>customizable 
            templates to help you land your dream job.<br> Get started today—it's fast, free, and stress-free!</p>
            <div class="container">
                <a href="#template">
                    <button class="button"> Get Started </button>
                </a>
                <a href="#aboutus">
                    <button class="button"> Learn More </button>
                </a>
            </div>
    </div>

    <section class="second-section">
        <div id="template">
         <div class="main-text">
            <h1>Choose a Template</h1>
            <p>Select a template that best aligns with your career goals, industry, <br>
            and the specific job requirements to effectively showcase your <br> skills and experiences.</p>
         </div>
    
         <div class="descript">
            <div class="column">
                <h2>ATS Styling Accounting Resume</h2>
                <p> A detail-oriented and professional template tailored for accounting roles, 
                    focusing on financial expertise, tax preparation, and bookkeeping. It is ideal for candidates 
                    seeking positions that require accuracy, analytical skills, and a strong understanding of GAAP 
                    and financial reporting.</p>
                    <button type="button" onclick="FirstTemp()">Use this Template</button>
            </div>
    
            <div class="column">
                    <img src="Website Images/ATS Accounting Resume.png" alt="Error 404, Not Available">
            </div>
         </div>
    
         <div class="descript">
            <div class="column">
                <h2>ATS Simple Food Service Resume</h2>
                <p>A straightforward and adaptable template for food service or hospitality positions, 
                    emphasizing communication, leadership, and customer service. It is perfect for 
                    showcasing teamwork and multitasking abilities in fast-paced environments. </p>
                <button type="button" onclick="SecondTemp()">Use this Template</button>
            </div>
    
            <div class="column">
                    <img src="Website Images/ATS Simple Food Service Resume.png" alt="Error 404, Not Available">
            </div>
         </div>
       
         <div class="descript">
            <div class="column">
                <h2>New Hybrid Resume</h2>
                <p>A versatile and ATS-optimized design combining skills, achievements, and 
                    tailored job keywords, suitable for a wide range of professions. It highlights the job seeker’s 
                    skills and achievements section first (like a functional resume) followed by work experience 
                    (the focus of a chronological resume format). </p>
                <button type="button" onclick="ThirdTemp()">Use this Template</button>
            </div>
    
            <div class="column">
            <img src="Website Images/New Hybrid Resume.png" alt="Error 404, Not Available">
            </div>
         </div>
        </div>
        <div id="aboutus" class="about">
            <br>
            <br>
            <h1> <span style="color: black;">Resume </span>BUILD</h1>
           <h2>About Us</h2>
           <p>
               Our Resume Builder system is an intuitive, user-friendly platform designed to 
               assist users in creating professional resumes. Whether you're applying for a new job,
               advancing your career, or entering the workforce for the first time, our system provides a 
               streamlined approach to crafting a standout resume.
           </p>
           </div>
    </section>
</body>

<footer class="footer">
    <h3>Resume BUILD</h3>
    <p>"Craft Your Perfect Resume – Fast, Easy, and Professional!"</p>
    <p>&copy; 2024 Resume BUILD. All rights reserved.</p>
    <a href="#main">
        <button>^Back to Top^</button>
    </a>
</footer>

</html>
