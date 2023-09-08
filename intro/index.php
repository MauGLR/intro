<?php
$host = 'localhost:3306';
$dbUsername = "88701";
$dbPassword = "Settlover11";
$dbName = "db_88701";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $company = $_POST["company"];
    $message = $_POST["message"];

    $sql = "INSERT INTO portfolio (naam, email, nummer, bedrijf, vraag) VALUES ('$name', '$email', '$phone', '$company', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Form successfully submitted
        $formSubmitted = true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- header begin -->
<div id="home" class="container">

    <div id="home" class="header">
        <div class="navbar">
            <a href="#home">Home</a>
            <a href="javascript:void(0);" onclick="scrollToSection('overmij')">Over Mij</a>
            <a href="#projecten">Projecten</a>
            <a href="#contact">Contact</a>
        </div>
    </div>

    <!-- header einde -->



    <!-- main section -->
    <br><br><br><br><br><br>
    <div>
        <header>
            <h1>Portfolio</h1>
            <p1>Mustafa Unver - 088701 - D2A</p1><br><br>
            <button onclick="location.href = './Opdrachten/opdrachten.html';" id="knopje" >Projecten</button>
        </header>
        <!-- main section einde -->


        <!-- submain section -->
        <div>
            <div id="overmij" style="
    text-align: center;
    background-color: rgb(230, 236, 250);
    width: 100%;
    margin: 0 auto; font-size: 50px;
    font-family: sans-serif;
    ">Over Mij</div>

            <div class="flex-container2">
                <div class="flex-text">
                    <p>Hallo, ik ben Mustafa en ben 17 jaar oud.
                        Ik volg momenteel de opleiding Software Developer op het Grafisch Lyceum Rotterdam.
                        Mijn hobbies zijn gamen, naar sportschool gaan, en chillen met familie en vrienden.</p>
                </div>
                <div><img class="foto" src="src/ikke.png"></div>
            </div>
        </div>

        <!-- submain section einde -->

        <!-- projecten begin -->

        <div>
            <div id="projecten" style="
    text-align: center;
    background-color: rgb(230, 236, 250);
    width: 100%;
    margin: 0 auto; font-size: 50px;
    font-family: sans-serif;
    ">Projecten</div>

            <div class="flex-container2">
                <div> <a href="https://88701.stu.sd-lab.nl/Index/Quizzie%20V2/beter.html"><img class="foto2" src="src/quizzie.png"</a></div>
                <div> <a href="https://88701.stu.sd-lab.nl/Index/Promote%20IT/index.html"><img class="foto2" src="src/promoteit.png"</a></div>
                <div> <a href="https://88701.stu.sd-lab.nl/VillaTeKoop-main/Villa/index.php"><img class="foto2" src="src/villa.png"</a></div>
                <div> <a href="https://88701.stu.sd-lab.nl/Index/Toronto%20Zoo/index.html"><img class="foto2" src="src/zoo.png"</a></div>
            </div>
        </div>

        <!-- Projecten einde -->

        <!-- contact section -->
        <div id="contact" class="main-contact">
            <form method="POST">
                <h1 class="contacteermij">Contact Opnemen</h1>
                <div class="info">
                    <input class="fname" type="text" name="name" placeholder="Volledige Naam" required>
                    <input type="text" name="email" placeholder="Email" required>
                    <input type="text" name="phone" placeholder="Telefoon Nummer" required>
                    <input type="text" name="company" placeholder="Bedrijfsnaam" required>
                </div>
                <p>Message</p>
                <div>
                    <textarea rows="4" placeholder="Bericht" name="message"></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
        <!-- contact section einde -->
        <script src="js/script.js"></script>
    </div>
</body>
</html>