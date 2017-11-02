@extends('layouts.app')

@section('content')

<title>Error 404</title>

<div class="container">
	<section class="main">
		<div class="mainContainer">

			<div class="error-panel">
				<h1>Oops..</h1>
					<br>
					<h2> Je bent precies een beetje verdwaald.</h2>
			</div>

			<h4 class="h4error">Klik op de duif, hij zal je wel terug op het goede pad zetten.</h4>

			<p class="blijftDuif">Of niet.. We beloven niets. Het blijft een duif he...</p>

			  <a href="/home"><img class="duifImg" src="/images/error404.gif" alt="error404.gif"></a>
    </div>
	</section>
</div>

@endsection
