const Question1 = document.getElementById("Question1");
const Question2 = document.getElementById("Question2");
const currenturl = window.location.href;
const money = document.getElementById("y1");
money.onclick = () => {
    Question1.style.display="none";
    Question2.style.display="block";
}

const skills = document.getElementById("n1");
skills.onclick = () => {
    Question1.style.display="block";
    Question2.style.display="none";
}


const support = document.getElementById("support");
support.onclick = () => {
    const urli = localStorage.getItem('lasturl')
    if (urli == currenturl) {
        alert("you are current on this page!")
    } else {
        window.location.href='support.html'    }
    // alert("You are current on this page!")
}