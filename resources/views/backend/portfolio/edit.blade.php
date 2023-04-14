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
                        <a href="{{ route('backend.portfolio.index' )}}" class="ms-auto btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('backend.portfolio.update',$portfolios->id )}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Project Name</label>
                                <select name="project_name" class="form-control">
                                  @foreach($main as $mainPortfolio)
                                <option value="{{$mainPortfolio->id}}" {{$mainPortfolio->id == $portfolios->main_portfolio_id ? 'selected' : ''}}>{{$mainPortfolio->project_name}}</option>
                                @endforeach
                                </select>
                              </div>
                             <div class="col-md-12 mb-3">
                                <div class="input-group demo control-group lst increment" >
                                    <input type="file" name="project_images[]" class="myfrm form-control" >
                                    <img src="{{asset('files/'.$portfolios->project_images)}}"  width="100px" height="100px">
                                  </div>
                                </div>
                           
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection