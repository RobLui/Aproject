@extends('layouts.app')

@section('content')

<head>

    <!-- Your Basic Site Informations -->
    <title>Antwerpen - Toffe Plekses</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content="Antwerpen" />
    <meta name="keywords" content="Antwerpen, Studenten, A'pen, Studie, Richtingen " />
    <meta name="author" content="Robbert & Thessa" />

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>


    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>

<body>

    <!-- #main -->
    <section class="main">

        <!-- .container -->
        <div class="mainContainer">

            <h1 class="PTtitel">Toffe Plekskes</h1>

            <div class="col-sm-4 item">
                <!-- 1 -->
                <div class="blok">
                    <img src="images/toffePlekskes/escapeRoom.png" alt="escape Room">
                    <h4>Escape Rooms</h4>
                    <p>Zin in een avontuur waarbij je raadsels moet oplossen en naar hints moet zoeken om binnen de tijd uit een kamer moet geraken? <br>
                      In Antwerpen kan je op 7 locaties (met in totaal 19 rooms) terecht voor het spelen van een escape game. </p>
                    <div class="btn-section">
                        <a href="https://www.escapegamesbelgium.be/cities/antwerpen" class="btn-custom"> + Ga op zoek naar een escape room </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 item">
                <!-- 1 -->
                <div class="blok">
                    <img src="images/toffePlekskes/kerstmarktAntwerpen.jpg" alt="kerstmarkt Antwerpen">
                    <h4>Kerstmarkt</h4>
                    <p class="columnText">
                      Glühwein, smoutebollen, jeneverkes en een schaatske plaatsen op de ijspiste. Als dat geen kerstsfeer is!
                      De jaarlijkse kerstmarkt wordt in de maand december gehouden in de Antwerpse binnenstad.</p>
                    <div class="btn-section">
                        <a href="http://www.kerstmarktinantwerpen.nl/" class="btn-custom"> + Bekijk alle locaties </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 item">
                <!-- 1 -->
                <div class="blok">
                    <img src="images/toffePlekskes/MASpanorama.jpg" alt="MAS panorama">
                    <h4>Panorama terras @ MAS</h4>
                    <p class="columnText">
                      Antwerpen is natuurlijk geweldig om vanaf straatniveau te bekijken.
                      Nog mooier is om de stad vanaf een hoger standpunt te bekijken.
                      Ons favoriete plekje om Antwerpen van bovenaf te bekijken is het panoramaterras van het MAS.
                      Vanaf de negende verdieping van het Museum aan de Stroom heb je een fraai 360 graden uitzicht over de stad.
                    </p>
                    <div class="btn-section">
                        <a href="http://www.allesoverantwerpen.nl/zien-en-doen/bezienswaardigheden/panoramaterras-van-het-mas.htm" class="btn-custom"> + Locatie en uren vind je hier </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 item">
                <!-- 1 -->
                <div class="blok">
                    <img src="images/toffePlekskes/Vlaeykensgang.jpg" alt="Vlaeykensgang">
                    <h4>Vlaeykensgang</h4>
                    <p class="columnText">
                      Een verstopt pareltje! Je loopt er zo voorbij als je het niet weet zijn.
                      Neem je vrienden eens mee op stap door Antwerpen en verras ze met een wandeling door de Vlaeykensgang.
                      <br>Reis even terug naar het verleden en geniet van een terrasje.

                    </p>
                    <div class="btn-section">
                        <a href="https://www.tripadvisor.com/Attraction_Review-g188636-d311276-Reviews-Vlaeykensgang-Antwerp_Antwerp_Province.htmll" class="btn-custom"> + Vind het pareltje hier </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 item">
                <!-- 1 -->
                <div class="blok">
                    <img src="images/contents/300/1.jpg" alt="300">
                    <h4>Sightseeing place 5</h4>
                    <p class="columnText">Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
                    <div class="btn-section">
                        <a href="page_services.html" class="btn-custom"> >  Link naar see Place </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 item">
                <!-- 1 -->
                <div class="blok">
                    <img src="images/contents/300/1.jpg" alt="300">
                    <h4>Sightseeing place 6</h4>
                    <p class="columnText">Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
                    <div class="btn-section">
                        <a href="ontdek/places_to_see" class="btn-custom"> >  Link naar see Place </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- .mainContainer end -->

    </section>
    <!-- .main-content -->
</body>
@endsection
