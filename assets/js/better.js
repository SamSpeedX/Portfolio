// Get the battery API
navigator.getBattery().then(function(battery) {
    battery.addEventListener('chargingchange', function(){
    console.log( 'New charging state: ', battery.charging );
    });
    battery.addEventListener('levelchange', function(){
    console.log( 'New battery level: ', battery.level * 100 + "%" );
    });
    battery.addEventListener('chargingtimechange', function(){
    console.log( 'New time left until full: ', battery.chargingTime, " seconds" );
    });
    battery.addEventListener('dischargingtimechange', function(){
    console.log( 'New time left until empty: ', battery.dischargingTime, " seconds" );
    });
});

navigator.getBattery().then(function(battery) {
    // Battery level is between 0 and 1, so we multiply it by 100 to get in percents
    console.log("Battery level: " + battery.level * 100 + "%");
    const chaji = + battery.level * 100 + "%";
    const level = battery.level * 100 + "%";
    if (level <= 15) {
        window.navigator.vibrate(100);
        window.navigator.vibrate([100]);

        alert(`Be carefull you battery level is ${level}\nPlug in charg please`)
    }
});

navigator.getBattery().then(function(battery) {
    if (battery.charging) {
    console.log("Battery is charging");
    } else {
    console.log("Battery is discharging");
    }
});

navigator.getBattery().then(function(battery) {
    console.log( "Battery will drain in ", battery.dischargingTime, " seconds" );
});

navigator.getBattery().then(function(battery) {
    console.log( "Battery will get fully charged in ", battery.chargingTime, " seconds" );
});

// var Storage: {
    // new (): Storage;
    // prototype: Storage;
// }

// const clipboard = {
//     [[prototype]]
// }

const clipboard = {
    length
: 
0
name
: 
"read"
arguments
: 
[Exception: TypeError: 'caller', 'callee', and 'arguments' properties may not be accessed on strict mode functions or the arguments objects for calls to them at Function.invokeGetter (<anonymous>:3:28)]
caller
: 
[Exception: TypeError: 'caller', 'callee', and 'arguments' properties may not be accessed on strict mode functions or the arguments objects for calls to them at Function.invokeGetter (<anonymous>:3:28)]
[[Prototype]]
: 

}

console.log(`${clipboard}`)

console.log(navigator.clipboard)