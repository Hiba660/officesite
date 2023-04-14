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
                        <h4>Contact</h4>
                    </div>
                </div>
                <div class="card-body p-3">
                 <div class="table-responsive">
                     <table class="table table-striped shadow">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>URL</th>
                                <th>Message</th>
                                <th>Project Detail</th>
                            </tr> 
                        </thead>
                        <tbody>
                          @foreach($contact as $contacts)
                            <tr>
                                <td class="p-5">{{$contacts->id}}</td>
                                <td class="p-5">{{$contacts->name}}</td>
                                <td class="p-5">{{$contacts->email}}</td>
                                <td class="p-5">{{$contacts->url}}</td>
                                <td class="p-5">{{$contacts->message}}</td>
                                <td class="p-5">{{$contacts->project}}</td>
                            </tr>
                          @endforeach
                        </tbody>
                     </table>
                </div>
                 {{-- Pagination --}}
                 <div class="d-flex mt-3 justify-content-center">
                    {!! $contact->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection