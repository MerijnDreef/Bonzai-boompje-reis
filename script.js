const bonzaiForm = document.getElementById("bonzaiReisForm");
var customerName = document.getElementById("customerInsert");
var kilometersAmount = document.getElementById("travelLength");
var seaRoute = document.getElementById("sea");
var highPressureRoute = document.getElementById("highPressure");
var calculate = document.getElementById("calculate");
var price = document.getElementById("price");
var gram = document.getElementById("gram");
var hiddenPrice = document.getElementById("priceHidden");

var layoversAmerica = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];

var nameCustomer = "";
const pokonGram = 2;

document.body.style.backgroundColor = "green";

calculate.setAttribute('onclick', 'distanceCalculator()');
seaRoute.setAttribute('onclick', 'bonzaiBackgroundColor()');
highPressureRoute.setAttribute('onclick', 'bonzaiBackgroundColor()');
kilometersAmount.setAttribute('onchange', 'goldenBorder()');
customerName.setAttribute('onchange', 'nameCheckCustomer()');


function bonzaiBackgroundColor() {
    if (seaRoute.checked == true && highPressureRoute.checked == true) {
        document.body.style.backgroundColor = "purple";
    } else if (seaRoute.checked == true && highPressureRoute.checked == false) {
        document.body.style.backgroundColor = "blue";
    } else if (highPressureRoute.checked == true && seaRoute.checked == false) {
        document.body.style.backgroundColor = "red";
    } else {
        document.body.style.backgroundColor = "green";
    }
}

function goldenBorder() {
    console.log("I have been activated")
    if (kilometersAmount.value > 2000) {
        console.log("It is above 2000");
        kilometersAmount.style.border = "gold solid 4px";
    } else {
        kilometersAmount.style.border = "none";
    }
}

function nameCheckCustomer() {
    nameCustomer = customerName.value;
}

function distanceCalculator() {
    // var layoverTotal = document.getElementById("select2Layover");
    var layoverTotal = $('#select2Layover').find(':selected');
    var layoverAmount = 0;
    var priceFinal = 14.95;
    var distanceFinal = 0;

    if (layoverTotal.length > 0) {
        for (var o = 0; o < layoverTotal.length; o++) {
            console.log(layoverTotal[o]);
            if (layoversAmerica.includes(layoverTotal[o].value)) {

                console.log("American stop and plus 3.36");
                layoverAmount = layoverAmount + 3.36;
            } else {
                console.log("Not American stop and plus 2.19");
                layoverAmount = layoverAmount + 2.19;
            }
            console.log(layoverAmount);
        }
        console.log(layoverAmount + " total price");
    }

    var initialDistance = kilometersAmount.value * 1;
    if (initialDistance > 232) {
        var distanceCalculate = initialDistance - 232;
        distanceCalculate = distanceCalculate / 62;
        distanceCalculate = Math.floor(distanceCalculate);
        if (distanceCalculate > 0) {

            console.log("I have passed the 0");
            if (seaRoute.checked == true && highPressureRoute.checked == true) {
                console.log("Both are checked calculating");
                distanceFinal = distanceCalculate * (pokonGram + pokonGram * 0.9 + pokonGram * 0.7);

            } else if (seaRoute.checked == true && highPressureRoute.checked == false) {
                console.log("sea is checked calculating");
                distanceFinal = distanceCalculate * (pokonGram + pokonGram * 0.7);

            } else if (highPressureRoute.checked == true && seaRoute.checked == false) {
                console.log("high Pressure is checked calculating");
                distanceFinal = distanceCalculate * (pokonGram + pokonGram * 0.9);

            } else {
                console.log("none are checked calculating");
                distanceFinal = distanceCalculate * pokonGram;

            }

        }
    }
    console.log("Calculate check " + distanceCalculate);
    if (distanceCalculate > 0) {
        priceFinal = priceFinal + (distanceFinal * 0.04);
    }
    // var value = layoverTotal.value;
    // console.log(layoverTotal.options[layoverTotal.selectedIndex].value);
    // console.log(layoverTotal.data);

    if (layoverAmount != 0) {
        console.log(priceFinal);
        priceFinal = priceFinal + layoverAmount;
        console.log(priceFinal);
    }

    priceFinal = priceFinal.toFixed(2);
    distanceFinal = Math.ceil(distanceFinal);
    gram.innerText = distanceFinal + " gram"
    price.innerText = priceFinal + " euro";


    console.log(nameCustomer);
    // orderCreate(nameCustomer, priceFinal, distanceFinal);
    // hiddenPrice.value = priceFinal;
    // const response = await fetch(
    //     'commands_db.php?gram=' + distanceFinal + '&price=' + priceFinal,
    //     {
    //         method: 'POST',
    //         body: formattedFormData
    //     }
    // );

    // const data = await response.text();
    // console.log(data);

}

bonzaiForm.addEventListener('submit', (event) => {
    console.log("boy");
    // event.preventDefault();
    // const formattedFormData = new FormData(bonzaiForm);
    // distanceCalculator(formattedFormData);
});