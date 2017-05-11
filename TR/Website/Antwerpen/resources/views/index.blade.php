@extends('layouts.app')

@section('content')
<title>Home</title>
<div class="container index">
  <div class="slider">
    <img src="images/sliderMockUp.jpg" alt="sliderMockUp">
  </div>

<div class="homeContainer">
    <div class="col-sm-4 item"> <!-- 1 -->
      <i class="fa fa-binoculars fa-3x"></i>
      <h1>Ontdek de stad</h1>
      <div class="block_img">
        <img src="images/ontdekDeStadIndex.jpg" alt="img">
        <p>Nieuw in Antwerpen?
          Wat valt er zoal te doen in ‘t Stad?
          Wij geven je alvast 10 dingen die je zeker niet mag missen!
        </p>
        <div class="btn-section">
          <a href="page_services.html" class="btn-custom"> > meer </a>
        </div>
      </div>
    </div>

    <div class="col-sm-4 item"> <!-- 2 -->
      <i class="fa fa-info fa-3x"></i>
        <h1>Beschikbare Richtingen</h1>
        <div class="block_img">
          <img src="images/beschikbareRichtingenIndex.jpg" alt="img">
          <p>Ben je er nog niet helemaal uit wat je wil gaan studeren?
            Vragen over je richting?
            Geen nood! Hier is een overzicht te vinden van alle scholen en hun aanbod.</p>
          <div class="btn-section">
              <a href="/studieaanbod" class="btn-custom"> > meer </a>
          </div>
        </div>
    </div>

    <div class="col-sm-4 item"> <!-- 3 -->
      <i class="fa fa-paper-plane fa-3x" aria-hidden="true"></i>
      <h1>Nieuws en Evenementen</h1>
      <div class="block_img">
        <img src="images/NieuwsEnEvenementenIndex.jpg" alt="img">
        <p>Pauzeren hoort nu eenmaal bij studeren.
          Waar gaan feestjes door? Al naar de Stu Day geweest?
          Geïntereseerd in een nieuwe studierichtig?
          Neem zeker en vast een kijkje!
        </p>
        <div class="btn-section">
            <a href="page_services.html" class="btn-custom"> > meer </a>
        </div>
    </div>
  </div>
</div>
@endsection
