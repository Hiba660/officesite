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
                        <h4>Services</h4>
                    </div>
                    <a href="{{ route('backend.services.create')}}" class="ms-auto btn btn-primary btn-sm">Create Services</a>
                </div>
                <div class="card-body p-3">
                 <div class="table-responsive">
                     <table class="table table-striped shadow">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>ID</th>
                                <th>Icon</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                        
                          @foreach($service as $services)
                            <tr class="text-center">
                                <td class="p-5">{{$services->id}}</td>
                                <td class="p-5">{{$services->icon}}</td>
                                <td class="p-5">{{$services->heading}}</td>
                                <td class="p-5">{!!$services->description!!}</td>
                                <td class="p-5">
                                    <a href="{{ route('backend.services.edit',$services->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('backend.services.delete',$services->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                     </table>
                    </div>
                    {{-- Pagination --}}
                    <div class="d-flex mt-3 justify-content-center">
                        {!! $service->links() !!}
                    </div>
                </div>
    </div>
</div>
@endsection

@section('js')

@endsection