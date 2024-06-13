const body =document.getElementById("body")
body.onload = () => {
    const header = document.getElementById("header")
    const theme = localStorage.getItem('theme')
    
    const introduction = document.getElementsByClassName("introduction")

    if (theme == 'light') {
        body.style.backgroundColor="white"
        header.style.backgroundColor="whitesmoke"
        introduction.style.backgroundColor="pink"
        m1.style.color="blue"
        m2.style.color="blue"
        m3.style.color="blue"
        m4.style.color="blue"
        m5.style.color="blue"
        m1.style.backgroundColor="wheat"
        m2.style.backgroundColor="wheat"
        m3.style.backgroundColor="wheat"
        m4.style.backgroundColor="wheat"
        m5.style.backgroundColor="wheat"
    }

    if (theme == "dark") {
        body.style.backgroundColor="blue"
        header.style.backgroundColor="darkblue"
    }

    const siz = localStorage.getItem('font')
    body.style.fontSize=`${siz}rem`

    const color = localStorage.getItem('color')
    body.style.color = `${color}`

    const url = window.location.href;
    localStorage.setItem('lasturl', `${url}`)
}