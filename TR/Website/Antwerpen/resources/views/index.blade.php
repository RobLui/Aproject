@extends('layouts.app')

@section('content')
<title>Home</title>
<div class="container index">
  <div class="slider">

  </div>

<div class="homeContainer">

      <div class="col-sm-4 item"> <!-- 1 -->
          <i class="fa fa-laptop fa-3x"></i>
          <h4>Ontdek de stad</h4>
          <img src="../assets/images/1.jpg" alt="img">
          <p>Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
          <div class="btn-section">
              <a href="page_services.html" class="btn-custom"> > meer </a>
          </div>
      </div>

      <div class="col-sm-4 item"> <!-- 2 -->
        <i class="fa fa-file-text-o fa-3x"></i>
          <h4>Beschikbare Richtingen</h4>
          <img src="../assets/images/1.jpg" alt="img">
          <p>Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
          <div class="btn-section">
              <a href="page_services.html" class="btn-custom"> > meer </a>
          </div>
      </div>

      <div class="col-sm-4 item"> <!-- 3 -->
        <i class="fa fa-calendar-o fa-3x" aria-hidden="true"></i>
        <h4>Nieuws en Evenementen</h4>
          <img src="images/contents/300/1.jpg" alt="img">
          <p>Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
          <div class="btn-section">
              <a href="page_services.html" class="btn-custom"> > meer </a>
          </div>
      </div>

</div>
@endsection
