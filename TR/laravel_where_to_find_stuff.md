# Overview

## CONTROLLERS

--------------------------------------------------------------------------------

- **Maplocatie:** Antwerpen/app/http/controllers

- Controllers besturen de werking van de pagina's

- Verschillende controllers:

  - ArticleController
  - CommentsController
  - ContactController
  - EventsController
  - InfoController
  - OntdekController

- Elke controller is gelinkt aan een bepaalde link/route

  - bv: de homepagina is gelinkt aan de HomeController
  - In de HomeController wordt de functie index aangeroepen
  - Deze functie roept de "view" van een pagina op
  - Deze wordt dan weergegeven op de Homepagina

--------------------------------------------------------------------------------

## HTML / VIEWS

- **Maplocatie(s):** Antwerpen/resources/views/
- **Maplocatie(s):** Antwerpen/resources/views/links/

- Views geven de data weer die gegenereerd is door de controllers/of die er zo ingezet wordt

- Verschillende views:

  - layouts/app.blade.php -> (Deze niet aankomen :D Tenzij da ge de header wilt veranderen)
  - index.blade.php
  - links/contact.blade.php
  - links/info.blade.php
  - links/nieuws.blade.php
  - links/ontdek.blade.php

- Views gaan de data die de controllers doorgeven outputten op de pagina's

  - bv: In de controller van de homepagina haal je data uit de database op
  - Deze data ga je doorgeven van de controller naar de view
  - In de view gaat dit dan weergegeven worden
  - In de view doe je ook de styling van de pagina (deze is gelinked aan de css)

--------------------------------------------------------------------------------

## CSS

- **Maplocatie:** Antwerpen/public/css/

- Deze map zit vol met standaard bootstrap :)

- Onderaan voeg ik telkens aanpassingen / nieuwe css styling toe

--------------------------------------------------------------------------------

## ROUTES

- **Maplocatie:** Antwerpen/routes/web.php

- Routes zijn de tussenverbindingen tussen controllers en views

  - bv: als je klikt op contact
  - wordt je via de route naar de controller gestuurd
  - die dan op zijn beurt weer naar de view die bij contact hoort displayed
