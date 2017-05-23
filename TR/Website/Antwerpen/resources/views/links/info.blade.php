@extends('layouts.app')

@section('content')
<title>Info</title>
<div class="container">

  <img src="images/infoHead.jpg" alt="infoHead" class="infoHead">

    <!--  STUDEREN IN ANTWERPEN -->
    <div class="mid_container">
      <div class="block">
        <img src="/images/waaromStuderenInAntwerpen.jpg" alt="waaromStuderenInAntwerpen" class="infoLeft">
        <div class="infoRight">
            <h1 class="mid_headers">Waarom studeren in Antwerpen?</h1>
            <p>
              Antwerpen is niet de eerste studentenstad die bij je opkomt. Toch is ze niet te onderschatten.
              Antwerpen is namelijk een Atypische studentenstad. Het is een stad die bruist van leven, ook buiten de schoolperiode.
              Buiten een leuk studentenleven en interessante opleidingen kan je ook nog eens rekenen op ruime werkgelegenheid na het afstuderen.
            </p>
        </div>
      </div>
    </div>

    <div class="rwpa">
      <a href="/info/studieaanbod" target="blank">
        <h3>Richting aanbod</h3>
          Er nog niet helemaal uit wat je wil studeren?
          Klik hier voor een volledig overzicht van scholen en hun richting aanbod!
      </a>
      <a href="http://www.belgianrail.be/" target="blank">
        <h3>Pendelaars</h3>
          Niet van Antwerpen? Welkom Avonturier!
          Op de website van De Lijn en NMBS
          kan je kijken hoe je hier snelst geraakt.
      </a>
      <a href="https://www.facebook.com/Antwerpen-leeft-1524612521197719/" target="blank">
          <h3>Antwerpen LEEFT</h3>
          Ken je alle hotspots? Blijf op de hoogte van nieuws en evenementen door de facebook pagina te volgen!
      </a>
      <a href="https://www.antwerpen.be/nl/vacatures/overzicht" target="blank">
          <h3>Werkgelegenheid</h3>
          Na je studie is er een grotere kans dat je in Antwerpen kan werken aangezien het een atypische studentenstad is.
      </a>
      <a href="https://www.studentkotweb.be/" target="blank">
          <h3>Op Kot</h3>
          Kotweb kent een label toe aan de koten die voldoen aan de kwaliteitseisen die werden
          opgelegd door de stad Antwerpen.
          Neem zeker een kijkje!
      </a>
      <a href="/ontdek" target="blank">
          <h3>Ontdek 't Stad!</h3>
          Antwerpen is een atypische studentenstad met ook een bruisend leven buiten het schooljaar en in weekends.
          Bekijk zeker wat je niet mag missen!
      </a>
    </div>
  </div>

@endsection
