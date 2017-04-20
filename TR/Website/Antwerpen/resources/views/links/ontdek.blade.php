@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

	<!-- Your Basic Site Informations -->
	<title>Antwerpen - Ontdek de stad</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="description" content="Antwerpen" />
	<meta name="keywords" content="Antwerpen, Studenten, A'pen, Studie, Richtingen " />
	<meta name="author" content="Robbert & Thessa" />

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

</head>

<body>

<div class="container">

	<!-- #main -->
	<section class="main">

		<!-- .container -->
		<div class="mainContainer">

			<h1 class="PTtitel">Ontdek de stad</h1>

			<div class="col-sm-4 item">
				<!-- 1 -->
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

			<div class="col-sm-4 item">
				<!-- 2 -->
				<li class="fa fa-book fa-3x"></li>
				<h1>Places to study</h1>
				<div class="blok">
					<img src="images/contents/300/1.jpg" alt="300">
					<p class="columnText">Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
					<div class="btn-section">
						<a href="page_services.html" class="btn-custom"> >  meer lezen </a>
					</div>
				</div>
			</div>

			<div class="col-sm-4 item">
				<!-- 3 -->
				<li class="fa fa-search fa-3x" aria-hidden="true"></li>
				<h1>Places to see</h1>
				<div class="blok">
					<img src="images/contents/300/1.jpg" alt="300">
					<p class="columnText">Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
					<div class="btn-section">
						<a href="page_services.html" class="btn-custom"> > meer lezen </a>
					</div>
				</div>
			</div>
    </div>



		</div>
		<!-- .mainContainer end -->

	</section>
	<!-- .main-content -->



</body>

</html>

@endsection
