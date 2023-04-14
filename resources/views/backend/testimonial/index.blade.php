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
                        <h4>Testimonial</h4>
                    </div>
                    <a href="{{ route('backend.testimonial.create') }}" class="ms-auto btn btn-primary btn-sm">Create Testimonial</a>
                </div>
                <div class="card-body p-3">
                 <div class="table-responsive">
                     <table class="table table-striped shadow">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                          @foreach($testimonial as $testimonials)
                    
                            <tr class="text-center">
                                <td class="p-5">{{$testimonials->id}}</td>
                                <td class="p-5">{{$testimonials->name}}</td>
                                <td class="p-5">{{$testimonials->designation}}</td>
                                <td class="p-5">{!!$testimonials->description!!}</td>
                                <td class="p-5">
                                    <a href="{{ route('backend.testimonial.edit',$testimonials->id )}}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('backend.testimonial.delete',$testimonials->id )}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                     </table>
                </div>
                <div class="d-flex mt-3 justify-content-center">
                    {!! $testimonial->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection