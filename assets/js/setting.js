const dark = document.getElementById("dark")
const light = document.getElementById("light")
const body = document.getElementById("body")

light.onclick = () => {
    localStorage.setItem('theme', 'light')
    // alert("light mode")
    light.style.border="2px solid pink"
    window.location.href=`${url}`;
    localStorage.setItem('color', 'black')
}

dark.onclick = () => {
    localStorage.setItem('theme', 'dark')
    // alert("dark mode")
    dark.style.border="2px solid pink"
    window.location.href=`${url}`;
    localStorage.setItem('color', 'white')
}

const theme = localStorage.getItem('theme')
const url = window.location.href;
const cont = document.getElementById("theme")
body.onload = () => {
    if (theme == 'light') {
        body.style.backgroundColor="white"
        body.style.color="white"
        light.style.border="2px solid pink"
    }

    if (theme == "dark") {
        body.style.backgroundColor="blue"
        body.style.color="grey"
        dark.style.border="2px solid white"
        cont.style.backgroundColor="#119"
        back.style.backgroundColor="#119"
        reset.style.backgroundColor="#119"
    }

    if (theme == "light") {
        dark.style.border="2px solid pink"
    }

    if (theme == "dark") {
        dark.style.border="2px solid pink"
    }
    body.style.fontSize=`${siz}rem`
}
    if (theme == "light") {
        dark.style.border="2px solid white"
    }

    if (theme == "dark") {
        dark.style.border="2px solid white"
    }

const lasturl = localStorage.getItem('lasturl')
const font = document.getElementById("font")
const save = document.getElementById("save")
const size = font.value;
save.onclick = () => {
    const size = font.value;
    localStorage.setItem('font', `${size}`)

    const siz = localStorage.getItem('font')
    body.style.fontSize=`${siz}rem`
    window.location.href = `${lasturl}`
    
}

font.onchange = () => {
    const size = font.value;
    localStorage.setItem('font', `${size}`)

    const siz = localStorage.getItem('font')
    body.style.fontSize=`${siz}rem`
    
}

const siz = localStorage.getItem('font')
const reset = document.getElementById("reset")
reset.onclick = () => {
    localStorage.removeItem('color')
    localStorage.removeItem('font')
    localStorage.removeItem('theme')
    window.location.href = `${lasturl}`
}

const back =document.getElementById("back")
back.onclick = () => {
    window.location.href = `${lasturl}`;
}