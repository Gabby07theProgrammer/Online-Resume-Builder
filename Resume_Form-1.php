<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
    <link rel="stylesheet" href="WebsiteStyle.css">
    <script src="Grammar_Checker_2.js"></script>

<style>
    .head_section{
       text-align: center; 
       color: white; 
       margin-bottom: 28px; 
       letter-spacing: 2px;
    }
/* Container for the Resume */
.resume_container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: #dcf1e7; /* Clean white for the main content */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    border: 1px solid #cccccc; /* Light gray border */
}

/* Header Section */
.header h1 {
    font-size: 28px;
    text-transform: uppercase;
    font-weight: bold;
    color: #266044; /* Dark green for primary headings */
    margin-bottom: 10px;
}

.header p {
    font-size: 14px;
    color: #333333; /* Neutral gray for contact info */
    margin-bottom: 5px;
    text-align: right;
}

/* Section Headings */
.section h2 {
    font-size: 18px;
    color: #57ff1900; /* Dark green for section headers */
    margin-top: 20px;
    text-transform: uppercase;
    border-bottom: 2px solid #d4d4d4; /* Matching green line for emphasis */
    padding-bottom: 5px;
}

/* List Styles */
.section ul {
    list-style-type: disc;
    margin: 10px 20px;
    padding: 0;
}

.section ul li {
    font-size: 14px;
    margin-bottom: 5px;
}

/* Paragraph and Preformatted Text Styles */
.section p,
.section pre {
    font-size: 14px;
    margin: 10px 0;
    color: #333333; /* Neutral gray for text */
}

.button_container{
    display: flex;
    justify-content: center;
    padding: 15px;
    gap: 33%;
}

/* Output Styles */
.output_container {
    display: none;
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
}

.output_container .wrapped-text {
    white-space: pre-wrap;
    word-wrap: break-word;
    word-break: break-word;
}

/* Contact Info Styles */
.header .contact-info {
    font-size: 12px;
    color: #555555; /* Lighter gray for contact info */
    text-align: right;
    line-height: 1.4;
    resize: none;
}

/* Subtle Section Separators */
hr {
    border: 0;
    border-top: 3px solid #6cc59a;
    margin: 10px 0;
}

textarea{
    resize: none;

}

ul {
    display: grid;
      grid-template-rows: repeat(3, auto); /* 3 items per column */
      grid-auto-flow: column; /* Flow horizontally to create rows */
      gap: 10px; /* Spacing between items */
      list-style-type: disc; /* Retain bullets */
      padding-left: 20px; /* Indent for bullets */
      color:#396f55;
}

ul li::marker {
    color: #53bb89; /* Bullet color */
}

@media (max-width: 768px) {
            .logout{
                font-size: 14px;
            }

            .container {
                max-width: 600px;
            }

            .button_container{
                flex-direction: column;
                margin: auto;
                width: 50%;
                box-sizing: border-box;
                gap: 10px;
            }

            .output_container {
                max-width: 600px;
            }
            }

            @media (max-width: 430px) {
            .logout{
                font-size: 12px;
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

    * {
        -webkit-print-color-adjust: exact!important; 
         print-color-adjust: exact!important;
         background-color: #dcf1e7;
         ;
      }

    header,nav,video,footer,.head_section,.button_container,.button {
            display: none  !important; 
        }

    .output_container {
        border: none !important;
        box-shadow: none !important;
        }

    .output{
        border:none !important; 
        box-shadow: none !important;
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
    <h2 class="head_section">Personal Details</h2>
    
    <div class="resume_container" 
    style=
    "max-width: 600px; 
    margin: 0 auto; 
    padding: 40px; 
    border: 1px solid #cccccc; 
    border-radius: 10px; background-color: #ffffff; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">

    <form class="inputField">
        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; font-weight: bold; margin-bottom: 5px;">Name:</label>
            <input type="text" 
                type="text" 
                id="name" 
                name="name" 
                placeholder="Your Name" 
                value="" 
                required 
                style="width: calc(100% - 10px); padding: 10px; margin: 5px auto; border: 1px solid #cccccc; border-radius: 5px;" />
    
        </div>

     
        <div style="margin-bottom: 15px;">
            <label for="contact_info" style="display: block; font-weight: bold; margin-bottom: 5px;">Address & Contact Info:</label>
            <textarea 
                class="textInput"
                id="contact_info" 
                name="contact_info" 
                placeholder="Enter Address, Contact Info, and Email" 
                cols="40" 
                rows="3" 
                required 
                style="width: calc(100% - 10px); padding: 10px; margin: 5px auto; border: 1px solid #cccccc; border-radius: 5px;" ></textarea>
        </div>

        
        <div style="margin-bottom: 15px;">
            <label for="Summary" style="display: block; font-weight: bold; margin-bottom: 5px;">Resume Summary:</label>
            <textarea 
                class="textInput"
                id="Summary" 
                name="Summary" 
                placeholder="Add a strong resume summary" 
                required 
                style="width: calc(100% - 10px); padding: 10px; margin: 5px auto; border: 1px solid #cccccc; border-radius: 5px;"></textarea>
        </div>

       
        <h2 style="text-align: left; color: #333; margin-bottom: 20px;">Education</h2>
        <textarea 
            class="textInput"
            id="education" 
            name="education" 
            placeholder="Enter each of your educational institution seperated by a {,} " 
            cols="40" 
            rows="5" 
            required 
            style="width: calc(100% - 10px); padding: 10px; margin: 5px auto; border: 1px solid #cccccc; border-radius: 5px;"></textarea>
            <textarea 
            id="educationlist" 
            name="educationlist" 
            placeholder="Enter your educational Achivements press the enter key to add another" 
            cols="40" 
            rows="5" 
            required 
            style="width: calc(100% - 10px); padding: 10px; margin: 5px auto; border: 1px solid #cccccc; border-radius: 5px;"></textarea>


        
        <h2 style="text-align: left; color: #333; margin-bottom: 20px;">Work Experience</h2>
        <textarea 
            class="textInput"
            id="work_experience" 
            name="work_experience" 
            placeholder="Enter your work experience, if you have multiple seperate them using comma{,}"
            cols="40" 
            rows="3" 
            required 
            style="width: calc(100% - 10px); padding: 10px; margin: 5px auto; border: 1px solid #cccccc; border-radius: 5px;"></textarea>
            <textarea 
            id="work_experiencelist"
            name="work_experiencelist"
            placeholder="Enter your 3 achievements per work experience, press the enter key to add another" 
            cols="40" 
            rows="5" 
            required 
            style="width: calc(100% - 10px); padding: 10px; margin: 5px auto; border: 1px solid #cccccc; border-radius: 5px;"></textarea>

       
        <h2 style="text-align: left; color: #333; margin-bottom: 20px;">Skills</h2>
        <textarea 
            class="textInput"
            id="skills_accomplishments" 
            name="skills_accomplishments" 
            placeholder="List 6 of your skills" 
            cols="40" 
            rows="3" 
            required 
            style="width: calc(100% - 5px); padding: 10px; margin: 5px auto; border: 1px solid #cccccc; border-radius: 5px;"></textarea>
    </form>
</div>
<div class="output_container" style="display: none;"></div>
<div class="output_container"></div>

<div class="button_container">
    <button onclick ="BackTemp()">Go Back</button>
    <button type="button" onclick="hide()"> Generate / Edit</button>
</div>
    <script src="Resume_Form-1.js"></script>
    <footer class="footer">
        <h3>Resume BUILD</h3>
        <p>"Craft Your Perfect Resume – Fast, Easy, and Professional!"</p>
        <p>&copy; 2024 Resume BUILD. All rights reserved.</p>
    </footer>
</body>
</html>
