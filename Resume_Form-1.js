const inputField = document.querySelector(".inputField");
const main = document.querySelector(".resume_container");
const outputContainer = document.querySelector(".output_container");

let isHidden = true;

function hide() {
    if (isHidden) {
        
        main.style.display = "none";
        isHidden = false;

        const name = document.getElementById("name").value;
        const contactInfo = document.getElementById("contact_info").value.replace(/\n/g, "<br>");
        const summary = document.getElementById("Summary").value;
        
        const education = document.getElementById("education").value
        .split(",")
        .map(item => item.trim())
        .filter(item => item !== ""); 
    
    const educationlist = document.getElementById("educationlist").value
        .split("\n")
        .map(item => item.trim())
        .filter(item => item !== ""); 
    
    const combinedEducation = education
        .map((edu, index) => {
            const listItems = educationlist
                .slice(index * 2, index * 2 + 2)
                .map(item => `<li>${item}</li>`); 
            return `<h1 style="margin: 0; line-height: normal; white-space: pre-wrap; word-wrap: break-word; font-family: calibri; font-size: 15px;">${edu}</h1>
                    <ul style="font-family: calibri; font-size: 15px; margin: 0 0 0px;">
                        ${listItems.join("")}
                    </ul>
                    <div style="height: 0px;"></div>`; 
        })
        .join(""); 
    
        const workExperience = document.getElementById("work_experience").value
        .split(",")
        .map(item => item.trim())
        .filter(item => item !== "");

    const workExperienceList = document.getElementById("work_experiencelist").value
        .split("\n")
        .map(item => item.trim())
        .filter(item => item !== "");

    const combinedWorkExperience = workExperience
        .map((work, index) => {
            const listItems = workExperienceList
                .slice(index * 3, index * 3 + 3)
                .map(item => `<li>${item}</li>`);
            return `<h1 style="margin: 0; line-height: normal; white-space: pre-wrap; word-wrap: break-word; font-family: calibri; font-size: 15px;">${work}</h1><ul>${listItems.join("")}</ul>`;
        })
        .join("");
    
        
        
        
    


        const skills_accomplishments = document.getElementById("skills_accomplishments").value;

        
        outputContainer.style.display = "block";
        outputContainer.innerHTML = `
    <div class="output" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #cccccc; border-radius: 10px; background-color: #dcf1e7; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <h1 style="color:#266044; text-align: left; font-size: 35px; text-transform: uppercase;">${name}</h1>
        <p style="color:#487b62; text-align: left; margin-top: 10px; font-size: 20px;">${contactInfo}</p>
       <hr> 
        <h2 style="text-align: left; color: #333;">EDUCATION</h2>
        ${combinedEducation}

        <hr>
        <h2 style="text-align: left; color: #333;">EXPERIENCE</h2>
        ${combinedWorkExperience}
       <hr>
        <h2 style="text-align: left; color: #333;">SKILLS</h2>
       
        <ul>
            ${skills_accomplishments
                .split("\n")
                .filter(skill => skill.trim() !== "")
                .map(skill => `<li>${skill.trim()}</li>`)
                .join("")}
        </ul>
        
        <div style="text-align: center; margin-top: 20px;">
            <button class="button" onclick="window.print()">Print Resume</button>
        </div>
    </div>
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
function BackTemp(){
    location.replace("User_Page.php")
}
    
