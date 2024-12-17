<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Grammar_Checker_2.js"></script>
    <title>Resume Builder</title>
    <style>
        header{
            top: 0;
            left: 0;
            position: sticky;
            z-index: 1;
        }
        nav{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: black;
            color: white;
            margin-bottom: 15px;
        }

        .brand {
            font-size: 22px;
            font-weight: bold;
            color: white;
        }

        body {
            overflow-x: hidden;
            margin: 0%;

        }

        video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            filter: brightness(60%);
            z-index: -1;
        }

        @media print {
            .button-container {
                display: none !important; /* Hide buttons during printing */
            }
            
            header,nav,video,footer{
                display: none !important;;
            }

            * {
                -webkit-print-color-adjust: exact!important; 
                print-color-adjust: exact!important;
                background-color: #dcf1e7;
            }

            #print{
                display: none !important;
            }

            .output_container {
                box-shadow: none;
                border: none;
            }
        }

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #dcf1e7;
            border-radius: 8px;
            position: relative;
        }

        h1, h2, h3 {
            color: #266044;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        button {
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #3498db;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        .add-button {
            float: right;
            margin: 10px 0;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .generate-button {
            display: block;
            margin: 20px auto 0;
        }

        .output_container {
            display: none;
            padding: 20px;
            background: #dcf1e7;
            border-radius: 8px;
        }

        hr {
            border: 0;
            border-top: 5px solid #53bb89;
            margin: 20px 0;
        }

        ul {
            list-style: disc;
            margin: 10px 0;
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 5px;
        }

        ul li::marker {
            color: #53bb89; /* Change bullet color */
        }

        .row {
            display: flex;
            gap: 10px;
        }

        .row > div {
            flex: 1;
        }

        .name_fields {
            display: flex;
            gap: 10px;
        }

        .name_fields > div {
            flex: 1;
        }

        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .skills-column {
            flex: 1;
            min-width: 45%;
        }

        .address-phone {
            text-align: center;
            font-size: 1em;
            margin-top: 10px;
        }

        .summary {
            text-align: justify;
            font-style: italic;
            margin-top: 10px;
        }

        .footer{
            position: relative; 
            width: 100%; 
            padding: 1rem 0; 
            text-align: center; 
            background-color: black; 
            color: white;
            bottom: 0;
            margin-top: 15px;
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

    <div class="container resume_container">
        <h1>Resume Builder</h1>

        <div class="name_fields">
            <div>
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" placeholder="Enter your first name">
            </div>
            <div>
                <label for="middlename">Middle Name:</label>
                <input type="text" id="middlename" placeholder="Enter your middle name">
            </div>
            <div>
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" placeholder="Enter your last name">
            </div>
        </div>

        <div class="row">
            <div>
                <label for="address">Address:</label>
                <input type="text" id="address" placeholder="Enter your address">
            </div>
            <div>
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" placeholder="Enter your phone number">
            </div>
        </div>

        <label for="Summary">Summary:</label>
        <textarea id="Summary" rows="3" placeholder="Provide a brief summary about yourself"></textarea>

        <h3>Education</h3>
        <div id="education_container">
            <div class="row">
                <div>
                    <input type="text" placeholder="Enter education title" class="education_title">
                </div>
                <div>
                    <textarea rows="2" id="textInput" placeholder="Enter education details (one item per line)" class="education_details"></textarea>
                </div>
            </div>
        </div>
        <button class="add-button" onclick="addEducation()">Add Education</button>

        <h3>Work Experience</h3>
        <div id="work_container">
            <div class="row">
                <div>
                    <input type="text" placeholder="Enter work title" class="work_title">
                </div>
                <div>
                    <textarea rows="3" id="textInput" placeholder="Enter work details (one item per line)" class="work_details"></textarea>
                </div>
            </div>
        </div>
        <button class="add-button" onclick="addWork()">Add Work Experience</button>

        <h3>Skills & Accomplishments</h3>
        <textarea id="skills_accomplishments" rows="3" placeholder="Enter up to 6 skills, separated by commas"></textarea>

        
    </div>
<div class="button-container">
    <button class="generate-button" onclick="goBack()">Go Back</button>
    <button class="generate-button" onclick="toggleView()">Generate/Edit</button>
</div>

    <div class="container output_container">
        <div class="button-container">
            <button class="generate-button" id="print" onclick="printPDF()">Print Resume</button>
        </div>
    </div>

    <script>
        const main = document.querySelector(".resume_container");
        const outputContainer = document.querySelector(".output_container");

        let isHidden = true;

        function goBack() {
         location.replace("User_Page.php")
        }

        function printPDF() {
            window.print();
        }

        function addEducation() {
            const container = document.getElementById("education_container");
            const educationDiv = document.createElement("div");
            educationDiv.className = "row";
            educationDiv.innerHTML = `
                <div>
                    <input type="text" placeholder="Enter education title" class="education_title">
                </div>
                <div>
                    <textarea rows="2" placeholder="Enter education details (one item per line)" class="education_details"></textarea>
                </div>
            `;
            container.appendChild(educationDiv);
        }

        function addWork() {
            const container = document.getElementById("work_container");
            const workDiv = document.createElement("div");
            workDiv.className = "row";
            workDiv.innerHTML = `
                <div>
                    <input type="text" placeholder="Enter work title" class="work_title">
                </div>
                <div>
                    <textarea rows="3" placeholder="Enter work details (one item per line)" class="work_details"></textarea>
                </div>
            `;
            container.appendChild(workDiv);
        }

        function toggleView() {
            if (isHidden) {
                main.style.display = "none";
                isHidden = false;

                const firstName = document.getElementById("firstname").value.trim().toUpperCase();
                const middleName = document.getElementById("middlename").value.trim().toUpperCase();
                const lastName = document.getElementById("lastname").value.trim().toUpperCase();
                const address = document.getElementById("address").value.trim();
                const phone = document.getElementById("phone").value.trim();
                const summary = document.getElementById("Summary").value.trim();

                const educationEntries = Array.from(document.querySelectorAll(".education_title"))
                    .map((titleEl, index) => {
                        const title = titleEl.value.trim();
                        if (!title) return null;
                        const details = document.querySelectorAll(".education_details")[index].value
                            .split("\n")
                            .map(item => item.trim())
                            .filter(item => item)
                            .map(item => `<li>${item}</li>`)
                            .join("");
                        return `<h3>${title}</h3><ul>${details}</ul>`;
                    })
                    .filter(item => item !== null)
                    .join("");

                const workEntries = Array.from(document.querySelectorAll(".work_title"))
                    .map((titleEl, index) => {
                        const title = titleEl.value.trim();
                        if (!title) return null;
                        const details = document.querySelectorAll(".work_details")[index].value
                            .split("\n")
                            .map(item => item.trim())
                            .filter(item => item)
                            .map(item => `<li>${item}</li>`)
                            .join("");
                        return `<h3>${title}</h3><ul>${details}</ul>`;
                    })
                    .filter(item => item !== null)
                    .join("");

                const skillsInput = document.getElementById("skills_accomplishments").value;
                const skills = skillsInput.split(",").slice(0, 6);

                const skillsColumns = `
                    <div class="skills-column">
                        <ul>
                            ${skills.slice(0, 3).map(skill => `<li>${skill.trim()}</li>`).join("")}
                        </ul>
                    </div>
                    <div class="skills-column">
                        <ul>
                            ${skills.slice(3, 6).map(skill => `<li>${skill.trim()}</li>`).join("")}
                        </ul>
                    </div>
                `;

                outputContainer.innerHTML = `
                    <h1>${firstName} ${middleName} ${lastName}</h1>
                    <div class="address-phone">${address ? address : ""}${address && phone ? " | " : ""}${phone ? phone : ""}</div>
                    ${summary ? `<p class="summary">${summary}</p>` : ""}
                    <hr>
                    <h2>Education</h2>
                    ${educationEntries}
                    <hr>
                    <h2>Work Experience</h2>
                    ${workEntries}
                    <hr>
                    <h2>Skills & Accomplishments</h2>
                    <div class="skills-container">${skillsColumns}</div>
            <button class="generate-button" id="print" onclick="printPDF()">Print Resume</button>               
            `;

                outputContainer.style.display = "block";
            } else {
                main.style.display = "block";
                outputContainer.style.display = "none";
                outputContainer.innerHTML = "";
                isHidden = true;
            }
        }
    </script>

      <footer class="footer">
        <p>Resume BUILD</p>
        <p>"Craft Your Perfect Resume – Fast, Easy, and Professional!"</p>
        <p>&copy; 2024 Resume BUILD. All rights reserved.</p>
    </footer>
</body>
</html>
