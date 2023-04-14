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
                        <h4>MainPortfolio</h4>
                    </div>
                    <a href="{{ route('backend.mainPortfolio.create')}}" class="ms-auto btn btn-primary btn-sm">Create Main Portfolio</a>
                </div>
                <div class="card-body p-3">
                 <div class="table-responsive">
                     <table class="table table-striped shadow">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Proiject Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                          @foreach($mainPortfolio as $mainPortfolios)
                            <tr>
                                <td class="p-5">{{$mainPortfolios->id}}</td>
                                <td class="p-5">{{$mainPortfolios->project_name}}</td>
                                <td><img src="{{asset('file/'.$mainPortfolios->image)}}" width="100px" height="100px"></td>
                              <td class="p-5">
                                    <a href="{{ route('backend.mainPortfolio.edit',$mainPortfolios->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('backend.mainPortfolio.delete',$mainPortfolios->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                     </table>
                    </div>
                    <div class="d-flex mt-3 justify-content-center">
                        {!! $mainPortfolio->links() !!}
                    </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection