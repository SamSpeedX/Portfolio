button.onclick = (event) => {
    event.preventDefault();
    input.select();
    document.execCommand("copy");
};
