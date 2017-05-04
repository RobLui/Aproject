@extends('layouts.app')

@section('content')

<title>Ontdek de stad</title>
<body>

<div class="container">

	<!-- #main -->
	<section class="main">

		<!-- .container -->
		<div class="mainContainer">

			<h1 class="PTtitel">Ontdek de stad</h1>

			<div class="col-sm-4 item">
				<!--  PLACES TO EAT -->
				<li class="fa fa-cutlery fa-3x "></li>
				<h1>Places to eat</h1>
				<div class="blok">
					<img src="images/contents/300/1.jpg" alt="300">
					<p>Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
					<div class="btn-section">
						<a href="page_services.html" class="btn-custom"> > meer lezen </a>
					</div>
				</div>
			</div>
			<!--  PLACES TO STUDY -->
			<div class="col-sm-4 item">
				<!-- 2 -->
				<li class="fa fa-book fa-3x"></li>
				<h1>Places to study</h1>
				<div class="blok">
					<img src="images/contents/300/1.jpg" alt="300">
					<p class="columnText">Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
					<div class="btn-section">
						<a href="ontdek/places-to-study" class="btn-custom"> >  meer lezen </a>
					</div>
				</div>
			</div>

			<!--  PLACES TO SEE -->
			<div class="col-sm-4 item">
				<!-- 3 -->
				<li class="fa fa-search fa-3x" aria-hidden="true"></li>
				<h1>Places to see</h1>
				<div class="blok">
					<img src="images/contents/300/1.jpg" alt="300">
					<p class="columnText">Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
					<div class="btn-section">
						<a href="ontdek/places-to-see" class="btn-custom"> > meer lezen </a>
					</div>
				</div>
			</div>
    </div>
		</div>
	</section>
</body>

</html>

@endsection
