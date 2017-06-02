@extends('layouts.app')

@section('content')

<head>

    <!-- Basic Site Information -->
    <title>Antwerpen - Eet Plekses</title>
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
    <!-- <link rel="stylesheet" href="css/style2.css"> -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->

</head>

<body>

    <!-- #main -->
    <section class="main">

        <!-- .container -->
        <div class="mainContainer">

          <div class="panel panel-default">
            <h1 class="PTtitel">Eet Plekskes</h1>
          </div>

            <div class="col-sm-4 item">
                <!-- 1 -->
                <div class="block_img">
                  <img src="/public/images/eetPlekskes/restaurant_1.jpeg" alt="1">
                    <h4>Komida</h4>
                    <div class="block_">
                      <p>
                        Bij komida, de studentenrestaurants van Universiteit Antwerpen, ben je op de juiste plaats voor lekkere, gezonde maaltijden met een duurzaam tintje aan studentikoze prijzen.
                      </p>
                      <div class="btn-section_">
                            <a href="https://www.uantwerpen.be/nl/campusleven/eten/" target="_blank" class="btn-custom"> + Lees meer over Komida </a>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 item">
                <!-- 2 -->
                <div class="block_img">
                  <img src="/public/images/eetPlekskes/restaurant_2.jpg" alt="AP Studentenrestaurants">
                    <h4>AP Studentenrestaurants</h4>
                    <div class="block_">
                      <p class="columnText">
                        In de studentenrestaurants van AP kan je dagelijks terecht voor een hap aan studentvriendelijke prijzen.
                        Een greep uit het aanbod: pasta, frieten , slaatjes, vegetarische schotels, overheerlijke desserts en nog veel meer.
                        Het aanbod verschilt per campus. Op sommige campussen staan er ook automaten met drank en snacks.</p>
                      <div class="btn-section_">
                          <a href="https://www.ap.be/studentenrestaurants/465" class="btn-custom"> + Bekijk alle AP studentenrestaurants </a>
                      </div>
                  </div>
                </div>
            </div>

            <div class="col-sm-4 item">
                <!-- 3 -->
                <div class="block_img">
                  <img src="/public/images/eetPlekskes/restaurant_3.jpg" alt="Gate15">
                    <h4>Gate15</h4>
                    <div class="block_">
                      <p class="columnText">
                        Als je gewoon ergens gezellig je boterhammen wilt gaan opeten kan dit natuurlijk ook gewoon op gate15! Door studenten, voor studenten.
                      </p>
                      <div class="btn-section_">
                          <a href="http://www.gate15.be" class="btn-custom"> + Meer info over Gate15 </a>
                      </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- .mainContainer end -->

    </section>
    <!-- .main-content -->
</body>
@endsection
