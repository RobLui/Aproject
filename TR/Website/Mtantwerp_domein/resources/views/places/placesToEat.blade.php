@extends('layouts.app')

@section('content')

    <head>
        <title>Antwerpen - Eet Plekses</title>
    </head>

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
                    <img src="{{ asset('images/eetPlekskes/restaurant_1.jpeg') }}" alt="Komida">
                    <h4>Komida</h4>
                    <div class="block_">
                        <p>
                            Bij komida, de studentenrestaurants van Universiteit Antwerpen, ben je op de juiste plaats voor lekkere, gezonde
                            maaltijden met een duurzaam tintje aan studentikoze prijzen.
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
                    <img src="{{ asset('images/eetPlekskes/restaurant_2.jpg') }}" alt="AP Studentenrestaurants">
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
                    <img src="{{ asset('images/eetPlekskes/restaurant_3.jpg') }}" alt="Gate15">
                    <h4>Gate15</h4>
                    <div class="block_">
                        <p class="columnText">
                            Als je gewoon ergens gezellig je boterhammen wilt gaan opeten kan dit natuurlijk ook gewoon op gate15! Door studenten,
                            voor studenten.
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
@endsection
