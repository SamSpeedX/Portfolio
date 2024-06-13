const button = document.getElementById("copyID");
const input = document.getElementById("content");

button.onclick = () => {
    // event.preventDefault();
    input.select();
    // document.execCommand("copy");

    input.document.execCommand("copy");
    alert("text copied!")
 };

window.onEnterkeypress = () => {
    alert("sam")
}

Notification.requestPermission(function() {
    if (Notification.permission === 'granted') {
    // user approved.
    // use of new Notification(...) syntax will now be successful
    } else if (Notification.permission === 'denied') {
    // user denied.
    } else { // Notification.permission === 'default'
    // user didn’t make a decision.
    // You can’t send notifications until they grant permission.
    }
   });
   

// button.onclick = (event) => {
//     event.preventDefault();
//     input.select();
//     // document.execCommand("copy");

//     input.document.execCommand("copy");
//     alert("text copied!")
//  };


   
//    Cookie.requestPermission = () => {
//     if (Cookie.permission === 'granted') {
//         alert("Cookies Enabled!")
//     } else if (Cookie.permission === 'denied') {
//         alert("Cookies Disabled!")
//     } else {
//         // Cookie.permission === 'default'
//     }
//    }