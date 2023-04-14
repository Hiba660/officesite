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
                    <a href="{{route('backend.slider.create')}}" class="ms-auto btn btn-primary btn-sm">Create Slider</a>
                </div>
                <div class="card-body p-3">
                 <div class="table-responsive">
                     <table class="table table-striped shadow">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Background Image</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                          @foreach($slider as $sliders)
                            <tr>
                                <td class="p-5">{{$sliders->id}}</td>
                                <td class="p-5">{{$sliders->heading}}</td>
                                <td class="p-5">{{$sliders->description}}</td>
                                <td><img src="{{asset('public/Images/'.$sliders->image)}}" width="100px" height="100px"></td>
                                <td><img src="{{asset('public/Images/'.$sliders->b_image)}}" width="100px" height="100px"></td>
                                
                                <td class="p-5">
                                    <a href="{{ route('backend.slider.edit',$sliders->id )}}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('backend.slider.delete',$sliders->id )}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                     </table>
                    </div>
                    <div class="d-flex mt-3 justify-content-center">
                        {!! $slider->links() !!}
                    </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection