@extends('backend.layout.master')

@section('css')

@endsection

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-12 mx-auto col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header d-flex">
                        <div class="card-title">
                            <h4>Portfolio</h4>
                        </div>
                        <a href="{{ route('backend.portfolio.index')}}" class="ms-auto btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('backend.portfolio.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="mb-3">
                                <label>Project Name</label>
                                <select name="project_name" class="form-control">
                                  @foreach($main as $mainPortfolio)
                                <option value="{{$mainPortfolio->id}}">{{$mainPortfolio->project_name}}</option>
                                @endforeach
                                </select>
                              </div>

                            <div class="col-md-12 mb-3">
                                <div class="input-group demo control-group lst increment" >
                                    <input type="file" name="project_images[]" class="myfrm form-control">
                                    <div class="input-group-btn"> 
                                      <button class="btn btn-success" type="button">Add</button>
                                    </div>
                                  </div>
                                </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = `<div class="clone hide">
                                    <div class="demo control-group lst input-group" style="margin-top:10px">
                                      <input type="file" name="project_images[]" class="myfrm form-control">
                                      <div class="input-group-btn"> 
                                        <button class="btn btn-danger" type="button">Remove</button>
                                      </div>
                                    </div>
                                  </div>`;
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".demo").remove();
      });
    });
</script>

@endsection