@extends('layouts.app')

@section('content')
<title>Home</title>
<div class="container index">
  <div class="slider">

  </div>
  <div class="col-sm-4 item"> <!-- 1 -->
      <i class="fa fa-laptop"></i>
      <h4>Ontdek de stad</h4>
      <img src="images/contents/300/1.jpg" alt="placeholder">
      <p>Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
      <div class="btn-section">
          <a href="page_services.html" class="btn-custom"> + Lees meer </a>
      </div>
  </div>

  <div class="col-sm-4 item"> <!-- 2 -->
      <i class="fa fa-file-text-o"></i>
      <h4>Beschikbare Richtingen</h4>
      <img src="images/contents/300/1.jpg" alt="placeholder">
      <p>Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
      <div class="btn-section">
          <a href="page_services.html" class="btn-custom"> + Lees meer </a>
      </div>
  </div>

  <div class="col-sm-4 item"> <!-- 3 -->
    <i class="fa fa-calendar-o" aria-hidden="true"></i>
      <h4>Nieuws en Evenementen</h4>
      <img src="images/contents/300/1.jpg" alt="placeholder">
      <p>Vestibulum porta tristique porttitor donec at velit ac nunc blandit mollis donec ornare quis lorem eu iaculis curabitur scelerisque tincidunt lorem quis rhoncus.</p>
      <div class="btn-section">
          <a href="page_services.html" class="btn-custom"> + Lees meer </a>
      </div>
  </div>
</div>
@endsection
