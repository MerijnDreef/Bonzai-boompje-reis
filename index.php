<?php
include "commands_db.php";

$list = getAllOrders();

// function orderCreate($customerName, $price) {
    // if($customerName != "") {
    // // $result = createOrder($customerName, $price, $gram);
    // echo "it has access";
    // } else {
    //     echo "<p> Now hold up there buckaroo, looks like you are missing something </p> <br>";
    // }
//         echo "boy";
// }

// if(array_key_exists('submit', $_POST)) {
//     orderCreate($_POST['customerInsert'], $_POST['priceHidden']);
//  }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="select2/css/select2.min.css" rel="stylesheet" />
    <link href="stylesheet.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Bonzai reis</title>
</head>

<body>
    <?php
    foreach($list as $lists){
        echo $lists['customer_id'];
        echo "<br>";
        echo $lists['customer_name'];
        echo "<br>";
    }
    ?>
    <div>
        <form name="bonzaiReisForm" id="bonzaiReisForm" method="POST" action="index.php">
            <input type="text" id="priceHidden" />
        <label for="customerInsert">Klant naam/Klant ID</label>
        <input type="text" id="customerInsert" name="customerInsert">
        <br>
        <label for="travelLength">het aantal kilometers</label>
        <input type="number" id="travelLength" name="travelLength">
        <br>
        <label for="sea">over een zee</label>
        <input type="checkbox" id="sea" name="sea">
        <br>
        <label for="highPressure">over hoog druk gebied</label>
        <input type="checkbox" id="highPressure" name="highPressure">
        <br>
        <label for="states[]">Tussenstops</label>
        <select class="select2Selection" id="select2Layover" name="states[]" multiple="multiple">
            <option value="Alabama">Alabama</option>
            <option value="Alaska">Alaska</option>
            <option value="Arizona">Arizona</option>
            <option value="Arkansas">Arkansas</option>
            <option value="California">California</option>
            <option value="Colorado">Colorado</option>
            <option value="Connecticut">Connecticut</option>
            <option value="Delaware">Delaware</option>
            <option value="Florida">Florida</option>
            <option value="Georgia">Georgia</option>
            <option value="Hawaii">Hawaii</option>
            <option value="Idaho">Idaho</option>
            <option value="Illinois">Illinois</option>
            <option value="Indiana">Indiana</option>
            <option value="Iowa">Iowa</option>
            <option value="Kansas">Kansas</option>
            <option value="Kentucky">Kentucky</option>
            <option value="Louisiana">Louisiana</option>
            <option value="Maine">Maine</option>
            <option value="Maryland">Maryland</option>
            <option value="Massachusetts">Massachusetts</option>
            <option value="Michigan">Michigan</option>
            <option value="Minnesota">Minnesota</option>
            <option value="Mississippi">Mississippi</option>
            <option value="Missouri">Missouri</option>
            <option value="Montana">Montana</option>
            <option value="Nebraska">Nebraska</option>
            <option value="Nevada">Nevada</option>
            <option value="New Hampshire">New Hampshire</option>
            <option value="New Jersey">New Jersey</option>
            <option value="New Mexico">New Mexico</option>
            <option value="New York">New York</option>
            <option value="North Carolina">North Carolina</option>
            <option value="North Dakota">North Dakota</option>
            <option value="Ohio">Ohio</option>
            <option value="Oklahoma">Oklahoma</option>
            <option value="Oregon">Oregon</option>
            <option value="Pennsylvania">Pennsylvania</option>
            <option value="Rhode Island">Rhode Island</option>
            <option value="South Carolina">South Carolina</option>
            <option value="South Dakota">South Dakota</option>
            <option value="Tennessee">Tennessee</option>
            <option value="Texas">Texas</option>
            <option value="Utah">Utah</option>
            <option value="Vermont">Vermont</option>
            <option value="Virginia">Virginia</option>
            <option value="Washington">Washington</option>
            <option value="West Virginia">West Virginia</option>
            <option value="Wisconsin">Wisconsin</option>
            <option value="Wyoming">Wyoming</option>
            <option value="Dubai">Dubai</option>
            <option value="Amsterdam">Amsterdam</option>
            <option value="Athens">Athens</option>
            <option value="Barcelona">Barcelona</option>
            <option value="Bari">Bari</option>
            <option value="Basel">Basel</option>
            <option value="Belfast">Belfast</option>
            <option value="Belgrade">Belgrade</option>
            <option value="Bergen">Bergen</option>
            <option value="Berlin">Berlin</option>
            <option value="Bilbao">Bilbao</option>
            <option value="Billund">Billund</option>
            <option value="Bologna">Bologna</option>
            <option value="Bordeaux">Bordeaux</option>
            <option value="Bratislava">Bratislava</option>
            <option value="Bristol">Bristol</option>
            <option value="Brussels">Brussels</option>
            <option value="Bucharest">Bucharest</option>
            <option value="Budapest">Budapest</option>
            <option value="Cagliari">Cagliari</option>
            <option value="Catania">Catania</option>
            <option value="Chania">Chania</option>
            <option value="Chişinău">Chişinău</option>
            <option value="Copenhagen">Copenhagen</option>
            <option value="Dublin">Dublin</option>
            <option value="Düsseldorf">Düsseldorf</option>
            <option value="East Midlands region">East Midlands region</option>
            <option value="Edinburgh">Edinburgh</option>
            <option value="Eindhoven">Eindhoven</option>
            <option value="Faro">Faro</option>
            <option value="Frankfurt">Frankfurt</option>
            <option value="Freiburg im Breisgau">Freiburg im Breisgau</option>
            <option value="Gdańsk">Gdańsk</option>
            <option value="Geneva">Geneva</option>
            <option value="Glasgow">Glasgow</option>
            <option value="Gothenburg">Gothenburg</option>
            <option value="Den Haag">Den Haag</option>
            <option value="Hamburg">Hamburg</option>
            <option value="Hanover">Hanover</option>
            <option value="Helsinki">Helsinki</option>
            <option value="Heraklion">Heraklion</option>
            <option value="Ibiza">Ibiza</option>
            <option value="Istanbul">Istanbul</option>
            <option value="Katowice">Katowice</option>
            <option value="Kraków">Kraków</option>
            <option value="Kyiv">Kyiv</option>
            <option value="Larnaca">Larnaca</option>
            <option value="Lisbon">Lisbon</option>
            <option value="Liverpool">Liverpool</option>
            <option value="Ljubljana">Ljubljana</option>
            <option value="London">London</option>
            <option value="Lyon">Lyon</option>
            <option value="Madrid">Madrid</option>
            <option value="Málaga">Málaga</option>
            <option value="Malmö">Malmö</option>
            <option value="Malta">Malta</option>
            <option value="Manchester">Manchester</option>
            <option value="Marseille">Marseille</option>
            <option value="Milan">Milan</option>
            <option value="Minsk">Minsk</option>
            <option value="Moscow">Moscow</option>
            <option value="Mulhouse">Mulhouse</option>
            <option value="Munich">Munich</option>
            <option value="Mykonos">Mykonos</option>
            <option value="Nantes">Nantes</option>
            <option value="Naples">Naples</option>
            <option value="Newcastle">Newcastle</option>
            <option value="Nuremberg">Nuremberg</option>
            <option value="Oslo">Oslo</option>
            <option value="Palermo">Palermo</option>
            <option value="Palma de Mallorca">Palma de Mallorca</option>
            <option value="Paris">Paris</option>
            <option value="Pisa">Pisa</option>
            <option value="Porto">Porto</option>
            <option value="Prague">Prague</option>
            <option value="Reykjavík">Reykjavík</option>
            <option value="Riga">Riga</option>
            <option value="Reykjavík">Reykjavík</option>
            <option value="Rhodes">Rhodes</option>
            <option value="Rome">Rome</option>
            <option value="Rotterdam">Rotterdam</option>
            <option value="Sarajevo">Sarajevo</option>
            <option value="Seville">Seville</option>
            <option value="Sitia">Sitia</option>
            <option value="St. Petersburg">St. Petersburg</option>
            <option value="Sofia">Sofia</option>
            <option value="Stavanger">Stavanger</option>
            <option value="Stockholm">Stockholm</option>
            <option value="Stuttgart">Stuttgart</option>
            <option value="Thessaloniki">Thessaloniki</option>
            <option value="Toulouse">Toulouse</option>
            <option value="Tokyo">Tokyo</option>
            <option value="Tuzla">Tuzla</option>
            <option value="Trondheim">Trondheim</option>
            <option value="Valencia">Valencia</option>
            <option value="Venice">Venice</option>
            <option value="Vienna">Vienna</option>
            <option value="Vilnius">Vilnius</option>
            <option value="Warsaw">Warsaw</option>
            <option value="Zagreb">Zagreb</option>
            <option value="Zurich">Zurich</option>
            <!-- <option value=""></option> -->
        </select>
        <br>
        <input type="submit" name="submit" id="calculate" value="Calculeren" />
    </form>
    </div>
    <div>
        <p id="price"></p>
        <p id="gram"></p>
    </div>
    <script src="script.js"></script>
    <script src="select2/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.select2Selection').select2();
        });
    </script>
</body>

</html>