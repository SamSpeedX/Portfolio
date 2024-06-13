const username = document.getElementById("username")
username.onblur = () => {
    const name = username.value;
    localStorage.setItem('name', `${name}`)
}


const save = document.getElementById("save")
save.onclick = () => {
    const name = username.value;
    localStorage.setItem('name', `${name}`)
    window.location.href= 'profile.php';
}