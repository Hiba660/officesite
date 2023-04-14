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
                            <h4>Slider</h4>
                        </div>
                        <a href="{{route('backend.slider.index')}}" class="ms-auto btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body ">
                        <form action="{{route('backend.slider.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Heading</label>
                                <input type="text" name="heading" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description"  cols="20" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                 <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Background Image</label>
                                 <input type="file" name="b_image" class="form-control">
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