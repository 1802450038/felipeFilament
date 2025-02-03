let contactForm = document.getElementById("contactForm");

contactForm.addEventListener("submit", (e) => {
    e.preventDefault();

    console.log("send");

    let name = document.getElementById("name").value;
    let subject = document.getElementById("subject").value;
    let message = document.getElementById("message").value;

    let phone = document.getElementById("whats");
    //     console.log(phone.attributes.value);

    let text =
        "Olá me chamo " +
        name +
        "tenho uma duvida referente ao assunto " +
        subject +
        "." +
        message;

    sendWhats(text, phone.attributes.value);
});

function sendWhats(text, phone) {
    console.log(text);

    let url =
        "https://whatsa.me/" + phone.value + "/?t=" + encodeURIComponent(text);

    window.open(url, "_blank").focus();
}

function toggleText(elem) {
    let number = elem.classList[0][4];

    let texts = document.getElementsByClassName("text");
    let buttons = document.getElementsByClassName("actuation-option-wrap");

    // console.log(buttons);

    for (let index = 0; index < texts.length; index++) {
        const text = texts[index];
        const button = buttons[index];
        if (text.classList.contains("selected")) {
            text.classList.remove("selected");
        }
        if (button.classList.contains("active")) {
            button.classList.remove("active");
        }
    }
    buttons[number].classList.add("active");
    texts[number].classList.add("selected");
}

//Hello

let indexImg = 0;
let imgs = document.getElementById("imgs-container");

function togglePicture(index) {
    
    
    for (let pos = 0; pos < imgs.children.length ; pos++) {
        console.log("removed");
        imgs.children[pos].classList.remove("visible");
    }
    console.log(index);
    
    imgs.children[index].classList.add("visible");
}


setInterval(() => {
    if (indexImg < imgs.children.length - 1) {
        indexImg += 1;
    } else {
        indexImg = 0;
    }
    togglePicture(indexImg);
}, 5000);
