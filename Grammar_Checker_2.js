document.addEventListener('DOMContentLoaded', function() {
    const textareas = document.querySelectorAll('.textInput');
    
    textareas.forEach(textarea => {
        // Create container for showing corrections
        const correctionDiv = document.createElement('div');
        correctionDiv.className = 'correction-feedback';
        textarea.parentNode.insertBefore(correctionDiv, textarea.nextSibling);

        let timeout = null;

        textarea.addEventListener('input', function() {
            // Clear previous timeout
            clearTimeout(timeout);

            // Set new timeout for 1 second after user stops typing
            timeout = setTimeout(async () => {
                await checkGrammarAndSpelling(this.value, correctionDiv);
            }, 1000);
        });
    });
});

async function checkGrammarAndSpelling(text, correctionDiv) {
    if (!text.trim()) {
        correctionDiv.innerHTML = '';
        return;
    }

    try {
        const response = await fetch('https://api.languagetool.org/v2/check', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                'text': text,
                'language': 'en-US',
                'disabledRules': 'WHITESPACE_RULE'
            })
        });

        const data = await response.json();
        
        if (data.matches && data.matches.length > 0) {
            const corrections = data.matches.map(match => {
                return `
                    <div class="correction-item">
                        <span class="error-text">"${match.context.text.substring(match.context.offset, match.context.offset + match.context.length)}"</span>
                        <span class="error-message">${match.message}</span>
                        ${match.replacements.length > 0 ? 
                            `<span class="suggestions">Suggestion: ${match.replacements[0].value}</span>` 
                            : ''}
                    </div>
                `;
            }).join('');

            correctionDiv.innerHTML = `
                <div class="correction-alert">
                    ${corrections}
                </div>
            `;
        } else {
            correctionDiv.innerHTML = `
                <div class="correction-success">
                    No errors found
                </div>
            `;
        }
    } catch (error) {
        console.error('Error checking text:', error);
        correctionDiv.innerHTML = `
            <div class="correction-error">
                Unable to check text at this time
            </div>
        `;
    }
}