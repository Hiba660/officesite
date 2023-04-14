@extends('frontend.layout.master')

@section('css')

@endsection

@section('content')

    <!-- Carousel wrapper -->
    <section>
     
      <div class="carousel-height">
        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
         
          <div class="carousel-inner">
            @foreach($slider as $sliders)
          <div class="carousel-item">
            <img src="{{asset('public/Images/'.$sliders->b_image)}}" class="img-height" alt="...">
             <div class="carousel-caption">
               <div class="row">
                 <div class="col-md-5 d-flex flex-column align-items-center justify-content-center" data-aos="fade-right" data-aos-delay="100">
                   <h1 data-aos="fade-right" data-aos-delay="300">{{ $sliders->heading}}</h1>
                   <p data-aos="fade-right" data-aos-delay="500">{{ $sliders->description}}</p>
                   <a href="#contact" class="btn btn-light mb-3" data-aos="" data-aos-delay="">Get a Quota</a>
                 </div>
                 <div class=" col-md-6 d-flex flex-column align-items-center ms-auto mb-3" data-aos="fade-left" data-aos-delay="1000">
                   <img src="{{ asset('public/Images/' . $sliders->image) }}" class="img-fluid">
                 </div>
               </div>
             </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
  
<!---services---->
<section id="services" class="services">
  <div class="container mt-5">
      <h1 class="text-center text-secondary mt-5" data-aos="fade-down">Our Services</h1>
      <div class="row" data-aos="fade-right" data-aos-delay="300">

        @foreach($services as $service)
          <div class="col-md-3 text-center mt-3" >
              <div class="hvr-bounce-out icon">{!!$service->icon!!} </div>
              <h5 class="mt-3">{{$service->heading}}</h5>
              <p class="text-muted">{!!$service->description!!}</p>
          </div>
        @endforeach
        
          <div class="p-5 text-center">
              <a href="{{ route('frontend.service')}}" class="bn btn text-white">VIEW ALL SERVICES</a>
          </div>
      </div>
  </div>
</section>
<!---end services-->
  
<!--recent Job-->
<section id="recentJob" class="recentJob ">
  <div class="container">
    <h2 class="text-center text-secondary mt-5 p-5" data-aos="fade-up"><strong>RECENT JOB</strong></h2>
      <div class="row portfolio-container gy-4 " data-aos="fade-left" data-aos-delay="300">
       
        @foreach($mainPortfolio as $mainPortfolios)
          <div class="col-md-4 col-sm-6 ">
            <figure class="imghvr-shutter-out-diag-1">
            <img src="{{asset('file/'.$mainPortfolios->image)}}" width="400px" height="200px" alt="example-image">
              <figcaption>
                <h4>VIEW</h4>  
              </figcaption>
              <a href="{{ route('frontend.portfolio')}}"></a>
            </figure>
            <div class="fig top-2">
              <p>{{ $mainPortfolios->project_name}}</p>
            </div>
          </div>
        @endforeach
          <div class="p-5 text-center">
            <a href="{{ route('frontend.portfolio')}}" class="btn text-white">VIEW ALL FEAURED PROJECTS</a>
          </div>
        </div>
      
      </div>
    </section>
   
    <!---Testimonial-->
    <section id="Testimonial" class="Testimonial">
      <div class="container p-3" data-aos="fade-up">
        <div class="text-center text-secondary mt-5">
          <h2>Testimonials</h2>
          
          <div class="owl-carousel owl-carousel1 owl-theme">
          @foreach ($testimonial as $testimonials)
            <div class="item">
              <div class="text-center mt-5 ">
                    <i class="icon bi bi-person-circle"></i>
                <div class="card-body mt-3">
                   <h5>{{$testimonials->name}}</h5>
                   <p class="color">{{$testimonials->designation}}</p>
                   <p class="card-text">{!!$testimonials->description!!}</p>
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </div>
    </section>
    <!---end Tesatimonial-->


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
        $(document).ready(function(){
        $('.carousel-item:first').addClass('active');
      })
        </script>
    @endsection