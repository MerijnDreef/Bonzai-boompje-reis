var kilometersAmount = document.getElementById("travelLength");
var seaRoute = document.getElementById("sea");
var highPressureRoute = document.getElementById("highPressure");
var calculate = document.getElementById("calculate");
var price = document.getElementById("price");

document.body.style.backgroundColor = "green";
calculate.setAttribute('onclick', 'distanceCalculator()');
seaRoute.setAttribute('onclick', 'bonzaiBackgroundColor()');
highPressureRoute.setAttribute('onclick', 'bonzaiBackgroundColor()');


function bonzaiBackgroundColor() {
    if (seaRoute.checked == true && highPressureRoute.checked == true) {
        console.log("Both are checked");
        document.body.style.backgroundColor = "purple";
    } else if (seaRoute.checked == true && highPressureRoute.checked == false) {
        console.log("sea is checked");
        document.body.style.backgroundColor = "blue";
    } else if (highPressureRoute.checked == true && seaRoute.checked == false) {
        console.log("high Pressure is checked");
        document.body.style.backgroundColor = "red";
    } else {
        console.log("none are checked");
        document.body.style.backgroundColor = "green";
    }
}

function distanceCalculator() {
    var initialDistance = kilometersAmount.value * 1;
    if (initialDistance > 232) {
        console.log(initialDistance);
        var distanceCalculate = initialDistance - 232;
        console.log(distanceCalculate);
        distanceCalculate = distanceCalculate / 62;
        console.log(distanceCalculate);
        distanceCalculate = Math.floor(distanceCalculate);
        console.log(distanceCalculate);
        if (distanceCalculate > 0) {
            var distanceFinal = 0;
            // var i = 0
            console.log("I have passed the 0");
            if (seaRoute.checked == true && highPressureRoute.checked == true) {
                console.log("Both are checked calculating");
                distanceFinal = distanceCalculate * (2 + 2 * 0.9 + 2 * 0.7);
                console.log(distanceFinal);

            } else if (seaRoute.checked == true && highPressureRoute.checked == false) {
                console.log("sea is checked calculating");

            } else if (highPressureRoute.checked == true && seaRoute.checked == false) {
                console.log("high Pressure is checked calculating");

            } else {
                console.log("none are checked calculating");
                distanceFinal = distanceCalculate * 2;
                console.log(distanceFinal);

            }
        }
    }
    priceFinal = distanceFinal * 0.04;
    console.log(priceFinal);
    priceFinal = 14.95 + priceFinal;
    price.innerText = priceFinal + " euro";
}