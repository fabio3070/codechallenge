var savedText;

function GetText() {
    //Verify Email
    var mail = document.getElementById('email-input').value;
    if(EmailIsValid(mail) == true){
        //Fetch speech data from textarea
        savedText = document.getElementById("recorded-text").value;
    }else {
        alert("Email inválido");
    }
}

function TextToSpeech () {
    //Speech variable
    var msg = new SpeechSynthesisUtterance(savedText);
    window.speechSynthesis.speak(msg);
}

function EmailIsValid (email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}