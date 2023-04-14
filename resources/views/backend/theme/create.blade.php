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
                            <h4>Theme</h4>
                        </div>
                        <a href="{{ route('backend.theme.index')}}" class="ms-auto btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('backend.theme.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="mb-3">
                                <select class="form-select"  name="file_name" aria-label="Default select example" value="{{$theme->file_name}}">
                                   
                                    <option value="styleGradient.css" {{$theme->file_name =="styleGradient.css" ? 'selected' : '' }}>StyleGradient.css</option>
                                    <option value="styleGreen.css" {{$theme->file_name =="styleGreen.css" ? 'selected' : '' }}>StyleGreen.css</option>
                                    <option value="styleBlue.css" {{$theme->file_name =="styleBlue.css" ? 'selected' : '' }}>StyleBlue.css</option>
                                  </select>
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


@endsection