
const inputField = document.querySelector("#inputField");
const main = document.querySelector(".resume-builder");
const outputContainer = document.querySelector(".output_container");

let isHidden = true;


function BackTemp(){
    location.replace("User_Page.php")
}

function hide() {
    if (isHidden) {
      
        main.style.display = "none";
        isHidden = false;

        outputContainer.style.display = "block";

        outputContainer.innerHTML = `
            <div class="output">
                <!-- Name -->
                <div class="header">
                    <h1 style="text-align: left; font-size: 35px; text-transform: uppercase;">${inputField["name"].value}</h1>
                </div>
                <hr />
                <!-- Contact Info -->
                <div class="header" style="text-align: right; margin-top: 10px;">
                    <p>${inputField["contact_info"].value.replace(/\n/g, "<br>")}</p>
                </div>
                <div class ="section">
                <pre class = "wrapped-text">${inputField["Summary"].value}</pre>

                <!-- Skills and Accomplishments -->
                <div class="section">
                    <h2>SKILLS AND ACCOMPLISHMENTS</h2>
                    <ul>
                        ${inputField["skills_accomplishments"].value
                            .split("\n") 
                            .filter(skill => skill.trim() !== "") 
                            .map(skill => `<li>${skill.trim()}</li>`) 
                            .join("")} <!-- Combine all <li> elements into a single string -->
                    </ul>
                </div>
            

                <!-- Work Experience -->
                <div class="section">
                    <h2>WORK  EXPERIENCE</h2>
                    <pre class = "wrapped-text">${inputField["work_experience"].value}</pre>
                </div>
                

                <!-- Education -->
                <div class="section">
                    <h2>EDUCATION</h2>
                    <pre = class = "wrapped-text">${inputField["education"].value}</pre>
                </div>
            </div>
            <button onclick="print()">Print Resume</button>
        `;
    } else {
       
        main.style.display = "block";
        isHidden = true;

        outputContainer.style.display = "none";
        outputContainer.innerHTML = "";
    }
}


document.querySelectorAll("textarea").forEach(textarea => {
    textarea.addEventListener("keydown", event => {
        if (event.key === "Tab") {
            event.preventDefault(); 

            
            const start = textarea.selectionStart;
            const end = textarea.selectionEnd;

           
            const tab = "    "; 
            textarea.value = textarea.value.substring(0, start) + tab + textarea.value.substring(end);

           
            textarea.selectionStart = textarea.selectionEnd = start + tab.length;
        }
    });
});
