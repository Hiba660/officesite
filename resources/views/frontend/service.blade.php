@extends('frontend.layout.master')

@section('css')

@endsection

@section('content')

@include('frontend.layout.hero', [ "title" => "SERVICES"])

 <!---description-->
 <section id="description" class="description bg-light text-muted ">
    <div class="container">
      <div class="row">
        @foreach($services as $service)
        <div class="col-md-12 animate__animated animate__backInLeft">
          <p>{!!$service->detail!!}</p>
        </div>
        @endforeach
      </div>
    </div>
 </section>
<!--end description-->

<!--services-->
<section id="services_all" class="services_all">
  <div class="container" data-aos="fade-right">
    <div class="row p-5">
      @foreach($services as $service)
      
            <div class="col-md-4 text-center mt-3 ">
                <i class="hvr-pulse-shrink icon">{!!$service->icon!!}</i>
                <h5>{{$service->heading}}</h5>
                <p class="text-muted">{!!$service->description!!}</p>
            </div>
        
      @endforeach
 
    </div>
  </div>
</section>
<!--end services-->



@endsection

@section('js')

  <script>
    AOS.init();
  </script>

  <script>
    (function () {
      "use strict";

      var carousels = function () {
        $(".owl-carousel1").owlCarousel({
          items:3,
              loop:true,
              margin:10,
              autoplay:true,
              autoplayTimeout:2000,
              autoplayHoverPause:true
         
        });
      };

      (function ($) {
        carousels();
      })(jQuery);
    })();
    if(screen.width > 1000){
        window.onscroll = function() {scrollFunction()};
        }
        
        function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar-brand").style.flexDirection = "row";
            document.getElementById("navbar-brand").style.left = "25px";
            document.getElementById("navbar-brand").style.position = "absolute";
            document.getElementById("navbar-brand").style.justifyContent = "center";
            document.getElementById("navbar-brand").style.alignItems = "center";
            document.getElementById("navbar-brand").style.top = "0";
            
        } else {
            document.getElementById("navbar-brand").style.flexDirection = "column";
            document.getElementById("navbar-brand").style.left = "120px";
            document.getElementById("navbar-brand").style.position = "absolute";

        }
        }
  </script>

@endsection