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

--------------------------------------------------------------------------------

## DATABASE KOPPELING WERKING

- Article model vind je terug op **Maplocatie** : Antwerpen/app/Article.php

- voorbeeld:

  - public function index(request $req)
  - {

    - $article = Article::all();
    - $user->name = $req->name;
    - return view('index')->withArticles($article)

  - }

**_Step 1_**: Haal data op uit database

```
- Article:all() haalt alle articles op uit de DATABASE (is gekoppeld met het Article model)

  In dit model zeg je welke data er in de tabel mag worden geschreven etc, in "fillable"

- Hierin kan je zeggen welke tabel er opgehaald moet worden, in dit geval : alle tabellen

  Met de data die je hier hebt opgehaald kan je in de view gaan werken
```

**_Step 2_**: Laat de opgehaalde data zien op de view page

```

<ul>
// check dat we artikels hebben in de db, anders krijgen we een error
@if(count($articles) > 0)

  // Overloop elk artikel in de database
  @foreach($articles as $article)

    //Laat bv. elke url zien dat er in een artikel in de database zit en stop deze in een li
    <li> $article->url </li>

  @endforeach

@endif
</ul>
```

## ROUTE POST HANDLING

**_POST_**: Gebruiker klikt op een submit button in een formulier

```
- post wordt getriggerd
  <form action="{{ url('article/add') }}" method="POST">

- web.config: gaat de post actie sturen naar de controllerfunctie die erbij hoort
  Route::post('/article/add', 'ArticleController@create');

- ArticleController@create gaat de create functie uitvoeren die in ArticleController staat
  $articles = new Article; // Maak een nieuw article model aan
  $articles->title = $request->title; // zet de title gelijk aan de meegekregen title
  $articles->url = $request->url; // zet de title gelijk aan de meegekregen title
  $articles->posted_by = Auth::user()->name; // zet de posted_by gelijk aan de ingelogde gebruiker
  $articles->save(); // Save deze data in de kolom/rij in de database
```
