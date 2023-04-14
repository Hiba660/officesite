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
                    <a href="{{ route('backend.portfolio.create')}}" class="ms-auto btn btn-primary btn-sm">Create Services</a>
                </div>
                <div class="card-body p-3">
                 <div class="table-responsive">
                     <table class="table table-striped shadow">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>ID</th>
                                <th>Project Name</th>
                                <th>Project-Images</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                          @foreach($portfolio as $portfolios)
                            <tr class="text-center">
                                <td class="p-5">{{$portfolios->id}}</td>
                                <td class="p-5">{{$portfolios->main_portfolio_id}}</td>
                                <td><img src="{{asset('files/'.$portfolios->project_images)}}"  width="100px" height="100px"></td>
                             
                                <td>
                                    <a href="{{ route('backend.portfolio.edit',$portfolios->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('backend.portfolio.delete',$portfolios->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                     </table>
                </div>
                <div class="d-flex mt-3 justify-content-center">
                    {!! $portfolio->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection