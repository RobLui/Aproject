@extends('layouts.app')

@section('content')

<title>Ontdek de stad</title>
<body>

<div class="container">

	<!-- #main -->
	<section class="main">

		<!-- .container -->
		<div class="mainContainer">

			  <div class="panel panel-default">
			    <h2>Ontdek de stad</h2>
			  </div>

			<div class="col-sm-4 item">
				<!--  PLACES TO EAT -->
				<!-- 1 -->
				<div class="rondje">
					<li class="fa fa-cutlery fa-3x "></li>
				</div>
				<h1>Eet plekskes</h1>
				<div class="block_img">
					<img src="images/threehundred.jpg" alt="300">
					<p>Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
					<div class="btn-section">
						<a href="ontdek/places-to-eat" class="btn-custom"> > meer lezen </a>
					</div>
				</div>
			</div>
			<!--  PLACES TO STUDY -->
			<!-- 2 -->
			<div class="col-sm-4  item">

				<div class="rondje">
					<li class="fa fa-book fa-3x"></li>
				</div>
				<h1>Studie plekskes</h1>
				<div class="block_img">
					<img src="images/threehundred.jpg" alt="300">
					<p class="columnText">Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
					<div class="btn-section">
						<a href="ontdek/places-to-study" class="btn-custom"> >  meer lezen </a>
					</div>
				</div>
			</div>

			<!--  PLACES TO SEE -->
			<!-- 3 -->
			<div class="col-sm-4 item">
				<div class="rondje">
				<li class="fa fa-search fa-3x" aria-hidden="true"></li>
			</div>
				<h1>Schoon plekskes</h1>
				<div class="block_img">
					<img src="images/threehundred.jpg" alt="300">
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
