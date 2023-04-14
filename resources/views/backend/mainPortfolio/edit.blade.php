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
                            <h4>Main Portfolio</h4>
                        </div>
                        <a href="{{ route('backend.mainPortfolio.index')}}" class="ms-auto btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('backend.mainPortfolio.update',$mainPortfolios->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Project Name</label>
                                <input type="text" name="project_name" class="form-control" value={{$mainPortfolios->project_name}}>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                 <input type="file" name="image" class="form-control">
                                 <img src="{{ asset('file/'.$mainPortfolios->image) }}" width="100px" height="100px">
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