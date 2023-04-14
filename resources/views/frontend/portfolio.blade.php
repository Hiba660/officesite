@extends('frontend.layout.master')

@section('css')

@endsection

@section('content')

@include('frontend.layout.hero',[ "title" => "PORTFOLIO"])

<!--portfolio-->
<section id="portfolio" class="portfolio" data-aos="fade-right" data-aos-delay="800">
    <div class="container" data-aos="fade-up">
  
      <div class="row mt-5 mb-5" data-aos="fade-up" data-aos-delay="200">
      
        @foreach($mainPortfolio as $mainPortfolios)
        @if(@!$counter)
        @php $counter = "" @endphp 
        @endif
        <div class="col-lg-4 col-md-6 mt-3 p-3">
          
          
          
            <figure class="imghvr-shutter-out-diag-1 click">
              <img src="{{asset('file/'.$mainPortfolios->image)}}" width="400px" height="200px" alt="example-image">
                <figcaption>
                  <h4>VIEW</h4>
                </figcaption><a href="{{url('/')}}/portfolio#nanogallery/my_nanogallery{{$counter}}/0/{{ count($mainPortfolios->MainPortfolio())}}"></a>
              </figure>
              <div class="fig "> 
                <p>{{ $mainPortfolios->project_name}}</p>
              </div>
              <div class="nanogallery2 d-none" data-nanogallery2>
                @foreach($mainPortfolios->MainPortfolio() as $portfolios)
                  <a class="gallery-image" href="{{asset('files/'.$portfolios->project_images)}}"></a>
                  @endforeach
              </div>
        </div>
        @if($counter)
        @php $counter++ @endphp 
        @endif
        @if(empty($counter))
        @php $counter = 1 @endphp
        @endif
        @endforeach
        
     
       
     
       
      </div>
    </div>
    </section>
  <!--end portfolio-->

@endsection

@section('js')


<script>

    
   
    
      $(".nanogallery2").nanogallery2({
           slideshowAutoStart:true, 
    });
    

  

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