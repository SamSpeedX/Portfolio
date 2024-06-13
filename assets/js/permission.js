Notification.requestPermission(function permission() {
    if (Notification.permission === 'granted') {
    new Notification('Free Audio Downloader', 
    {
        body: 'Get free Audio from \n https://localhost:3000/audiodownload/index.html', 
        icon: '../assets/img/audio.png', 
        image: '../assets/img/audio.png'
    }
    )

    // new Notification('Cheap Domain', {body: 'Get cheap domain from SAM TECHNOLOGY now', icon: '../assets/img/Polish_20240316_195622709.png', image: '../assets/img/Polish_20240316_195622709.png'});

    } else if (Notification.permission === 'denied') {
    // user denied.
    permission()
    } else { Notification.permission === 'default'
    // user didn’t make a decision.
    permission()
    }
   });



   function getBrowserInfo() {
    var
    json = "[{",
   
    /* The array containing the browser info */
    info = [
    navigator.userAgent, // Get the User-agent
    navigator.cookieEnabled, // Checks whether cookies are enabled in browser
    navigator.appName, // Get the Name of Browser
    navigator.language, // Get the Language of Browser
    navigator.appVersion, // Get the Version of Browser
    navigator.platform // Get the platform for which browser is compiled
    ],
    /* The array containing the browser info names */
    infoNames = [
    "userAgent",
    "cookiesEnabled",
    "browserName",
    "browserLang",
    "browserVersion",
    "browserPlatform"
    ];
    /* Creating the JSON object */
    for (var i = 0; i < info.length; i++) {
    if (i === info.length - 1) {
    json += '"' + infoNames[i] + '": "' + info[i] + '"';
    }
    else {
    json += '"' + infoNames[i] + '": "' + info[i] + '",';
    }
    };
    return json + "}]";
   };

   alert(`${json}`)