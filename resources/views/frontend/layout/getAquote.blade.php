  <!--contact-->
  <section id="contact" class="contact">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-6 text-white p-5 get">
          <h2>Get a Quote</h2>
          <p>Please send us your request for proposal, we will getback to you soon.</p>

            
            {{-- @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
            @endif --}}

        <form action="{{route('frontend.contact.store')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6 mt-3">
              <i class="bi bi-person"></i>
              <label>Name*</label>
              <input type="text" class="form-control input" name="name" value="{{ old('name') }}">
              @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="col-md-6 mt-3">
              <i class="bi bi-envelope"></i>
              <label>Email*</label>
              <input type="email" class="form-control input" name="email" value="{{ old('email') }}">
              @if ($errors->has('email'))
                 <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="col-md-12 mt-3">
              <i class="bi bi-link"></i>
              <label>URL(if any)</label>
              <input type="url" class="form-control input" name="url" value="{{ old('url') }}">
              @if ($errors->has('url'))
                 <span class="text-danger">{{ $errors->first('url') }}</span>
              @endif
            </div>
            <div class="col-md-12 mt-3">
              <i class="bi bi-journal-text"></i>
              <label>Message</label>
              <textarea class="form-control input" name="message">{{ old('message') }}</textarea>
              @if ($errors->has('message'))
                  <span class="text-danger">{{ $errors->first('message') }}</span>
              @endif
            </div>
            <div class="col-md-12 mt-3">
              <i class="bi bi-card-text"></i>
              <label>Breif Project Info*</label>
              <textarea class="form-control input" name="project" >{{ old('project') }}</textarea>
              @if ($errors->has('project'))
                  <span class="text-danger">{{ $errors->first('project') }}</span>
              @endif
            </div>

            <div class="mt-4">
              <button type="submit" class="btn btn-light">Get a Quote</button>
            </div>
          </form>
        </div>
      </div>

        <div class="col-lg-6 background ">
          <div class="transbox p-5 justify-content-center ">
            <h2 class="text-white ">Why Zamsol</h2>
            <p>We work entirely for the satisfaction of our customers. We offer a full suite of IT consulting, Web
              Hosting, Web Design & Development, Internet & Custom Application Development, eCommerce and other allied
              services under one roof. This allows us to offer the most comprehensive and responsive approach towards
              your projects.</p>

            <h2 class="text-white ">Our Partnerships</h2>
            <p>We build long term relationships with businesses all over the world. If you are looking for a reliable
              custom software development partner on an ongoing basis, Zamsol will provide innovation, dedicated
              resources and price discounts.</p>
            <div class="row justify-content-center">
              @php
                    $getAquote = GetAQuote()
              @endphp
              
              @foreach($getAquote as $getAquotes)
              <div class="col-md-3 text-white">
                <h3>Phone</h3>
                <p>{{$getAquotes->phone}}</p>
              </div>
              <div class="col-md-4 text-white">
                <h3 class="">Email</h3>
                <p>{{$getAquotes->email}}</p>
              </div>
              <div class="col-md-4 text-white">
                <h3 class="">Address</h3>
                <p class="">{!!$getAquotes->address!!}</p>
              </div>
              @endforeach
            </div>
          </div>

        </div>

       
      </div>
    </div>
  </section>
  <!--end contact-->