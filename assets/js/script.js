const nav = document.getElementById("nav")
const menu = document.getElementById("menu")

const bodys = document.getElementById("body")

menu.onclick = () => {
    nav.style.display="block"
}

const close = document.getElementById("close")
close.onclick = () => {
    nav.style.display="none"
}

window.onclick = (event) => {
    if (event.target == nav) {
        nav.style.display="none"
    }
}

const toka = document.getElementById("logout")
toka.onclick = () => {
    localStorage.clear();

    alert("You are now logout!")
}

