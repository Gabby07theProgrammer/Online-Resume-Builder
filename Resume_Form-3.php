!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="WebsiteStyle.css">
    <script src="Grammar_Checker.js"></script>
    <title>Resume Builder</title>
    <style>
       
        body {
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .logout{
            font-size: 16px;
        }

        a{
            text-decoration: none;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .head_section{
            width: 100%;
            font-size: 28px;
            letter-spacing: 2px;
            text-align: center;
        }
        .resume_container input,
        .resume_container textarea {
            width: 100%;
            max-width: 600px;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .button_container{
            display: flex;
            justify-content: center;
        }

       .output_container {
        font-family: 'Times New Roman', sans-serif;
        display: none;
        max-width: 800px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        display: none; 
        overflow-wrap: break-word; 
        word-wrap: break-word; 
        word-break: break-word; 
        }

      .wrapped-text {
        white-space: pre-wrap; 
        word-wrap: break-word;
        overflow-wrap: break-word;
        word-break: break-word;
        }

        @media (max-width: 768px) {
            .logout{
                font-size: 14px;
            }

            .container {
                max-width: 600px;
            }

            .output_container {
                max-width: 600px;
            }
            }

            @media (max-width: 430px) {
            .logout{
                font-size: 12px;
            }

            .button_container{
                flex-direction: column;
                margin: auto;
                width: 50%;
                box-sizing: border-box;
                gap: 10px;
            }

            .container {
                max-width: 300px;
            }

            .output_container {
                max-width: 300px;
            }
        }

        
        @media (max-width: 320px) {
            .container {
                max-width: 200px;
            }

            .output_container {
                max-width: 200px;

                h2{
                    font-size: 1.198rem;
                }
            }
        }


    @media print {
            header,nav,video,.head_section,footer,button,.button_container {
                display: none; 
            }
            .output{
            display: block; /* Ensure the resume is visible */
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <h2 class="brand">Resume <span style="color: #007bff;">BUILD</span></h2>
            <a href="logout.php">
            <button type="button" class="logout">Log or Sign-Out</button>
            </a>
        </nav>
    </header>

    <video autoplay loop muted>
        <source src="Website Videos/bgvid.mp4" type="video/mp4" />
    </video>
    <section class="resume-builder">
        <div class="head_section">
            <h1 style="color: white;">Fill your Personal Information</h1>
        </div>
        <div class="container">
            <div class="resume_container">
                <form class="inputField">
                    <h2>Personal Details</h2>
                    <input type="text" name="name" placeholder="Your Name" title="Enter Your Name" required />
                    <textarea name="contact_info" placeholder="Enter Address, Contact Info, and Email" cols="40" rows="3" required></textarea>
                
                   
                    <input type ="text" name="Summary" placeholder ="Add a strong resume summary" title="Enter your brief summary" cols="40" rows="3" required>
                
                    <h2>Skills and Accomplishments</h2>
                    <textarea name="skills_accomplishments" id="textInput" placeholder="Enter each skill or accomplishment on a new line" cols="40" rows="5" required></textarea>
                    <h2>Work Experience</h2>
                    <textarea name="work_experience" id="textInput" placeholder="Describe your work experience" cols="40" rows="3" required></textarea>
                    <h2>Education</h2>
                    <textarea name="education" id="textInput" placeholder="List your educational qualifications" cols="40" rows="3" required></textarea>
                </form>
            </div>
        </div>
    </section>
    <div class="output_container"></div>
    <script src="Resume_Form-3.js"></script>

    <div class="button_container">
        <button onclick ="BackTemp()">Go Back </button>
        <button onclick="hide()">Generate / Edit</button>
    </div>

    <footer class="footer">
        <h3>Resume BUILD</h3>
        <p>"Craft Your Perfect Resume – Fast, Easy, and Professional!"</p>
        <p>&copy; 2024 Resume BUILD. All rights reserved.</p>
    </footer>

</body>
</html>