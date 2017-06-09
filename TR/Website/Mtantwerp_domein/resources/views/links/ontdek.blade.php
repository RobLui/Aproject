@extends('layouts.app')

@section('content')

<title>Ontdek de stad</title>

<section class="main">
	<div class="mainContainer">

		<!-- TITEL -->
	  <div class="panel panel-default">
	    <h2>Ontdek de stad</h2>
	  </div>

		<!--  PLACES TO EAT -->
		<div class="col-sm-4 item">
			<div class="rondje">
				<i class="fa fa-cutlery fa-3x "></i>
				<img src="/public/images/L-icon.png" alt="icon" class="iconL">
			</div>
			<h1>Eet plekskes</h1>
			<div class="block_img">
			<img src="images/ontdek/eet_plekskes.jpg" alt="eet plekskes">
			<div class="block_">
				<p>
					Eten is belangrijk. Dat is een feit. <br>
					Als Student zit je vaak met een budget, dus daarom zijn budget-vriendelijke eetplekjes altijd welkom.
					Wil je graag zien waar je lekker kan gaan eten? <br> Ontdek nu onze tips.
				</p>
			</div>
				<div class="btn-section_">
					<a href="ontdek/eet-plekskes" class="btn-custom"> + meer lezen </a>
				</div>
			</div>
		</div>

		<!--  PLACES TO STUDY -->
		<div class="col-sm-4  item">
			<div class="rondje">
				<i class="fa fa-book fa-3x"></i>
				<img src="/public/images/M-icon.png" alt="icon" class="iconL">
			</div>
			<h1>Studie plekskes</h1>
			<div class="block_img">
			<img src="images/ontdek/studie_plekskes.jpg" alt="studie plekskes">
				<p class="columnText">
					Zit je op kot of wil je thuis niet gestoord worden tijdens het studeren? <br>
					Ben je het beu om op een witte muur te kijken?
					Dit zijn de leukste plaatsen om te studeren.
				</p>
				<div class="btn-section_">
					<a href="ontdek/studie-plekskes" class="btn-custom"> + meer lezen </a>
				</div>
			</div>
		</div>

		<!--  PLACES TO SEE -->
		<div class="col-sm-4 item">
			<div class="rondje">
			<i class="fa fa-search fa-3x" aria-hidden="true"></i>
			<img src="/public/images/R-icon.png" alt="icon" class="iconL">
		</div>
			<h1>Toffe plekskes</h1>
			<div class="block_img">
				<img src="images/ontdek/schoon_plekskes.jpg" alt="schoon plekskes">
				<p class="columnText">
					Student zijn is niet enkel studeren. "Het zijn de mooiste jaren van je leven". <br>
					Kom daarom zeker eens van achter je bureau en neem een kijkje in het mooie antwerpen!
					Wij hebben alvast een paar top plekjes uitgelicht voor jou!
				</p>
				<div class="btn-section_">
					<a href="ontdek/toffe-plekskes" class="btn-custom"> + meer lezen </a>
				</div>
			</div>
		</div>
  </div>
	</div>
</section>
@endsection
