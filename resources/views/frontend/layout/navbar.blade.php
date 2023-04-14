<nav class="navbar navbar-expand-lg fixed-top shadow " style="background-color: #0100004b;">
    <div class="container">
      <a class="navbar-brand" id="navbar-brand" href="{{ route('frontend.home')}}">
        <img class="nav-img mx-2" id="nav-img" src="{{asset('front/img/logo/100 px.png')}}" /> 
        <p class="px-2 my-auto nav-text" id="nav-text">This is logo</p>
      </a>
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-white"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav nav-padding">
          <li class="nav-item">
            <a class="nav-link bi bi-gear  text-white active" aria-current="page" href="{{ route('frontend.service')}}"> Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bi bi-bag text-white" href="{{ route('frontend.portfolio')}}"> Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bi bi-quote text-white" href="#contact"> Get a Quote</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ms-auto">

          @php
             $getAquote = GetAQuote()
          @endphp

          @foreach($getAquote as $getAquotes)
          <li class="nav-item">
            <a class="nav-link bi bi-clock  text-white active" aria-current="page" href="#"> {{ $getAquotes->days}} : {{ $getAquotes->time}} |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bi bi-envelope text-white" href="#"> {{ $getAquotes->email}} |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bi bi-phone text-white" href="#"> {{ $getAquotes->phone}}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </nav>