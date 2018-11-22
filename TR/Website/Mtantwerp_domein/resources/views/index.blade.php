@extends('layouts.app')

@section('content')
    <title>Home</title>

    <div class="slider">
        <a href="https://play.google.com/store?hl=nl" target="blank">
            <img class="slide_img" src="{{ asset('images/sliderMockUp.jpg') }}" alt="gameApp">
        </a>
        <a href="https://www.gate15.be/nl/trots" target="blank">
            <img class="slide_img" src="{{ asset('images/infoHead.jpg') }}" alt="infoHead">
        </a>
        <a href="http://www.studay.be/" target="blank">
            <img class="slide_img" src="{{ asset('images/slide_studay.jpg') }}" alt="studay">
        </a>
    </div>

    <div class="homeContainer">
        <div class="col-sm-4 item itemHome"> <!-- 1 -->
            <div class="rondje">
                <i class="fa fa-binoculars fa-3x"></i>
                <img src="{{ asset('images/L-icon.png') }}" alt="icon" class="iconL">
            </div>
            <h1>Ontdek de stad</h1>
            <div class="block_img">
                <img src="{{ asset('images/ontdekDeStadIndex.jpg') }}" alt="ontdek de stad">
                <p>Nieuw in Antwerpen?
                    Wat valt er zoal te doen in ‘t Stad?
                    Wij geven je alvast 10 dingen die je zeker niet mag missen!
                </p>
                <div class="btn-section_">
                    <a href="{{ route('discover') }}" class="btn-custom"> + meer lezen </a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 item itemHome"> <!-- 2 -->
            <div class="rondje">
                <i class="fa fa-info fa-3x"></i>
                <img src="{{ asset('images/M-icon.png') }}" alt="icon" class="iconM">
            </div>
            <h1>Studieaanbod</h1>
            <div class="block_img">
                <img src="{{ asset('images/beschikbareRichtingenIndex.jpg') }}" alt="img">
                <p>Ben je er nog niet helemaal uit wat je wil gaan studeren?
                    Vragen over je richting?
                    Geen nood! <br>Hier is een overzicht te vinden van alle scholen en hun aanbod.</p>
                <div class="btn-section_">
                    <a href="{{ route('study_offer') }}" class="btn-custom"> + meer lezen </a>
                </div>
            </div>
        </div>

        <div class="col-sm-4 item itemHome"> <!-- 3 -->
            <div class="rondje">
                <i class="fa fa-paper-plane fa-3x" aria-hidden="true"></i>
                <img src="{{ asset('images/R-icon.png') }}" alt="icon" class="iconR">
            </div>
            <h1>Nieuws & Evenementen</h1>
            <div class="block_img">
                <img src="{{ asset('images/NieuwsEnEvenementenIndex.jpg') }}" alt="nieuws en evenementen">
                <p>Pauzeren hoort nu eenmaal bij studeren.
                    Waar gaan feestjes door? Al naar de Stu Day geweest?
                    Geïntereseerd in een nieuwe studierichtig?
                    Neem zeker en vast een kijkje!
                </p>
                <div class="btn-section_">
                    <a href="{{ route('news') }}" class="btn-custom"> + meer lezen </a>
                </div>
            </div>
        </div>
    </div>
@endsection
